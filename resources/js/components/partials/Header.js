import React, { Component } from 'react';
import {Navbar, Nav, NavDropdown, Form, FormControl, Button} from 'react-bootstrap';
import { appState, api } from '../Common';
import Avatar from 'react-avatar';
class Header extends Component {
    logout(e) {
        api.post('logout').then( res => {
            if (res.data.success) {
                localStorage.clear();
                this.props.history.push('/');
            }
        });
    }

    render() {
        return (
            <Navbar bg="light" expand="lg">
                <Navbar.Toggle aria-controls="basic-navbar-nav" />
                <Navbar.Collapse id="basic-navbar-nav">
                    <Nav className="mr-auto">
                        <Nav.Link href="#home">Home</Nav.Link>
                        <Nav.Link href="#link">Link</Nav.Link>
                        <NavDropdown title={<span><Avatar size="35" name={appState().user.name} round={true} /> {appState().user.name}</span>} id="basic-nav-dropdown">
                            <NavDropdown.Item href={`/people/${appState().user.id}`}>Profile</NavDropdown.Item>
                            <NavDropdown.Divider />
                            <NavDropdown.Item onClick={this.logout.bind(this)}>Logout</NavDropdown.Item>
                        </NavDropdown>
                    </Nav>
                </Navbar.Collapse>
            </Navbar>
        );
    }
}

export default Header;