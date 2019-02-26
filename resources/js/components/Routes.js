import React, {Component} from 'react';
import { Router, Route, Redirect, Switch } from 'react-router-dom';
import {history} from './Common';
import Header from './partials/Header';
import Footer from './partials/Footer';
import SideBar from './partials/SideBar';
import Login from './Login';
import Dashboard from './Dashboard';
import People from './people/People';
import PeopleDetails from './people/PeopleDetails';


function fakeAuth() {
	let storage = null;
	try {
		storage = JSON.parse(localStorage.getItem('appState'));
	} catch(error) {
		storage = null;
	}
	return storage ? storage : false;
}

function isLoggedIn() {
	return fakeAuth() && fakeAuth().isLoggedIn;
}

const DefaultLayout = ({component: Component, ...rest}) => {
    return (
        <Route {...rest} render={props => (
        <div className="DefaultLayout">
            <div className="container-fluid">
                <div className="row">
                    <div className="col-md-3">
                        <SideBar />
                    </div>
                    <div className="col-md-9">
                        <Header {...props}/>
                        <Component {...props} />
                    </div>
                </div>
            </div>
            <Footer />
        </div>
        )} />
    )
};


const PrivateRoute = ({ component: Component, ...rest }) => (
    <DefaultLayout {...rest} component={(props) => (
        isLoggedIn()
        ? <Component {...props} />
        : <Redirect to={{
            pathname: '/',
            state: { from: props.location }
            }} />
    )} />
);


const GuestRoute = ({ component: Component, ...rest }) => (
    <Route {...rest} render={(props) => (
        !isLoggedIn()
        ? <Component {...props} />
        : <Redirect to={{
            pathname: '/dashboard',
            state: { from: props.location }
            }} />
    )} />
);

class Routes extends Component {
    render() {
        return (
            <Router history={history}>
                <Switch>
                    <GuestRoute exact path="/" component={Login}/>
                    <PrivateRoute exact path="/dashboard" component={Dashboard}/>
                    <PrivateRoute exact path="/people/:id" component={PeopleDetails}/>
                    <PrivateRoute exact path="/people" component={People}/>
                    
                </Switch>
            </Router>
        );
    }
}

export default Routes;