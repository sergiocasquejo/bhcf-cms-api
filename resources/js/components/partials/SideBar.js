import React, { Component } from 'react'
import { ListGroup, Navbar, Dropdown } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import { appState } from '../Common';
class SideBar extends Component {
    render() {
        return (
            <div>
            <Navbar.Brand href="#home">Blessed Hope Christian Fellowships</Navbar.Brand>
            <ListGroup>
                <ListGroup.Item><Link to={"/dashboard"}>Dashboard</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/people"}>People</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/cell-groups"}>Cell Groups</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/registrations"}>Registrations</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/ministries"}>Ministries</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/events"}>Events</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/services"}>Services</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/finance"}>Finance</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/booking"}>Booking</Link></ListGroup.Item>
                <ListGroup.Item><Link to={"/reports"}>Reports</Link></ListGroup.Item>
                {appState().user.can_manage_options &&
                <ListGroup.Item>Settings
                    <ListGroup>
                        <ListGroup.Item><Link to={"/settings"}>General</Link></ListGroup.Item>
                        <ListGroup.Item><Link to={"/auxiliary-groups"}>Auxiliary Groups</Link></ListGroup.Item>
                        <ListGroup.Item><Link to={"/leadership-levels"}>Leadership Levels</Link></ListGroup.Item>
                        <ListGroup.Item><Link to={"/school-statuses"}>School Statuses</Link></ListGroup.Item>
                        <ListGroup.Item><Link to={"/statuses"}>Statuses</Link></ListGroup.Item>
                        <ListGroup.Item><Link to={"/categories"}>Categories</Link></ListGroup.Item>
                        <ListGroup.Item><Link to={"/ministries"}>Ministries</Link></ListGroup.Item>
                    </ListGroup>
                </ListGroup.Item>
                }
            </ListGroup>
            </div>
        )
    }
}

export default SideBar;