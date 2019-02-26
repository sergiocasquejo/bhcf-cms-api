import React, { Component } from 'react';
import { Tabs, Tab } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import { appState, api } from '../Common';
import PeopleTableList from './PeopleTableList';



export default class People extends Component {
    constructor(props) {
        super(props);
    }

    componentDidMount() {
    
    }

    render() {
        const id = appState().user.id;
        return (
            <div className="container-fluid">
                <div className="row justify-content-center">
                    <div className="col-md-12">
                        <h1>People</h1>
                        <Link to="/people/new" className="btn btn-success">Add New</Link>
                        <PeopleTableList id={id}/>
                        
                    </div>
                </div>
            </div>
        )
    }
}