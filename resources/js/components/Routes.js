import React, {Component} from 'react';
import { Router, Route, Redirect, Switch } from 'react-router-dom';
import {history} from './Common';
import Header from './partials/Header';
import Footer from './partials/Footer';
import SideBar from './partials/SideBar';
import Login from './Login';
import Dashboard from './Dashboard';


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
            <Header {...props}/>
            <SideBar />
            <Component {...props} />
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
                </Switch>
            </Router>
        );
    }
}

export default Routes;