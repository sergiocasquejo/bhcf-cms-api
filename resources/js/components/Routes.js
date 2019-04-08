import React, {Component} from 'react';
import { Router, Route, Redirect, Switch, Link } from 'react-router-dom';
import {history} from './Common';
import Header from './partials/Header';
import Footer from './partials/Footer';
import SideBar from './partials/SideBar';
import Login from './Login';
import Dashboard from './Dashboard';
import People from './people/People';
import PeopleDetails from './people/PeopleDetails';
import PeopleCreateEdit from './people/PeopleCreateEdit';
import AuxiliaryGroup from './AuxiliaryGroup';
import LeadershipLevel from './LeadershipLevel';
import Category from './Category';
import ClassCategory from './ClassCategory';
import Status from './Status';
import Ministry from './Miinistry';

import Alert from 'react-s-alert';
import 'react-s-alert/dist/s-alert-default.css';
import 'react-s-alert/dist/s-alert-css-effects/slide.css';
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faIgloo, faEllipsisV, faCamera, faImage, faSearch} from '@fortawesome/free-solid-svg-icons'

library.add(faIgloo, faEllipsisV, faCamera, faImage, faSearch)


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

function canManageOptions() {
    return isLoggedIn() && fakeAuth().user.can_manage_options;
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

const AdministratorRoute = ({ component: Component, ...rest }) => (
    <DefaultLayout {...rest} component={(props) => (
        canManageOptions()
        ? <Component {...props} />
        : <Redirect to={{
            pathname: '/unauthorized',
            state: { from: props.location }
            }} />
    )} />
);


const Page404 = ({ location }) => (
    <div>
      <h2>No match found for <code>{location.pathname}</code><Link to={ isLoggedIn() ? '/dashboard' : '/' }>Go back</Link></h2>
   </div>
);


const Page401 = ({ location }) => (
    <div>
      <h2>401 Unauthorized <code>{location.pathname}</code><Link to={ isLoggedIn() ? '/dashboard' : '/' }>Go back</Link></h2>
   </div>
);

class Routes extends Component {
    render() {
        return (
            <Router history={history}>
                <React.Fragment>
                <Switch>
                    <GuestRoute exact path="/" component={Login}/>
                    <PrivateRoute exact path="/dashboard" component={Dashboard}/>
                    <PrivateRoute exact path="/people/create" component={PeopleCreateEdit}/>
                    <PrivateRoute exact path="/people/:id/edit" component={PeopleCreateEdit}/>
                    <PrivateRoute exact path="/people/:id" component={PeopleDetails}/>
                    <PrivateRoute exact path="/people" component={People}/>
                    <AdministratorRoute exact path="/auxiliary-groups" component={AuxiliaryGroup} />
                    <AdministratorRoute exact path="/categories" component={Category} />
                    <AdministratorRoute exact path="/leadership-levels" component={LeadershipLevel} />
                    <AdministratorRoute exact path="/school-statuses" component={ClassCategory} />
                    <AdministratorRoute exact path="/statuses" component={Status} />
                    <AdministratorRoute exact path="/ministries" component={Ministry} />
                    <Route exact path="/unauthorized" component={Page401} />
                    <Route component={Page404} />
                </Switch>
                <Alert stack={{limit: 3, spacing: 50}} html={true} />
                </React.Fragment>
            </Router>
        );
    }
}

export default Routes;