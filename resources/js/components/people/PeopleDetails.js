import React, { Component } from 'react';
import { Tabs, Tab, Badge } from 'react-bootstrap';
import { Link } from 'react-router-dom';
import { appState, api } from '../Common';
import PeopleTableList from './PeopleTableList';
import {Loader} from '../partials/Loader';
import Avatar from 'react-avatar';


class PersonalInformation extends Component {
   
    render() {
        const info = this.props.info;
        return(
            <div>
                <p>Email: { info.email }</p>
                <p>City: { info.city }</p>
                <p>Address: { info.address }</p>
                <p>Birthdate: { info.birthdate }</p>
                <p>Gender: { info.gender }</p>
                <p>Contact #: { info.secondary_contact_no }</p>
                <p>Contact #: { info.secondary_contact_no }</p>
                <p>Facebook: <a href={`https://www.facebook.com/${info.facebook_name}`} target="_blank">{ info.facebook_name }</a></p>
                {info.invited_by &&
                <p>Invited By: <Link to={ `people/${info.invited_by.id}` }>{ info.invited_by.first_name }</Link></p>
                }
                <p>Remarks: { info.remarks}</p>
            </div>
        )
    }
}

class Network extends Component {
    render() {
        const id = this.props.id ? this.props.id : appState().user.id;
        return(
            <div>
                <PeopleTableList id={id}/>
            </div>
        )
    }
}

class Notes extends Component {
    render() {
        return(
            <div>
                <h1>Notes</h1>
            </div>
        )
    }
}

class CellReports extends Component {
    render() {
        return(
            <div>
                <h1>Cell Reports</h1>
            </div>
        )
    }
}

export default class PeopleDetails extends Component {
    constructor(props) {
        super(props);
        this.state = {
            member_id: this.props.match.params.id ? this.props.match.params.id : appState().user.id,
            loading: true,
            information: null
        }
    }

    componentDidMount() {
        const id = this.state.member_id;
        api.get(`members/${id}`).then(res => {
            this.setState({information: res.data.data, loading: false});
        });
    }

    render() {
        const id = this.state.member_id;
        let info = this.state.information;
        if (!this.state.loading ) {
            console.log(info.ministries);
        }

        return (
            <div className="col-md-12">
            {!this.state.loading ? ( 
                <div>
                    {info.avatar && info.avatar.thumbnail ?
                        <Avatar src={info.avatar.thumbnail} size="200" round="10px" /> 
                        : 
                        <Avatar name={info.full_name} round="10px" /> 
                    }
                    <h1>
                        {info.full_name} 
                        { info.leadership_level && <Badge pill variant="success" className="badge-sm">{ info.leadership_level.name }</Badge> }
                        <Link to={ `/people/${ info.id }/edit` }>Edit</Link>
                    </h1>
                    { info.leader &&
                        <p>Leader: <Link to={ `/people/${ info.leader.id }` }>{ info.leader.nick_name}</Link></p>
                    }
                    { info.ministries &&
                        <p>Ministries: {
                            info.ministries.map((item, i ) => {
                                return <span key={i}>{ item.name }</span>
                            })
                        }
                        </p>
                    }
                    
                    { info.school_status &&
                        <p>School Status: { info.school_status.name }</p>
                    }
                    { info.status &&
                    <p>Status: { info.status.name }</p>
                    }
                    { info.auxiliary_group &&
                    <p>Group: { info.auxiliary_group.name}</p>
                    }
                    { info.category &&
                    <p>Category: { info.category.name}</p>
                    }
                    <Tabs defaultActiveKey="network" id="uncontrolled-tab-example">
                        <Tab eventKey="peronal-information" title="Personal Information">
                            <PersonalInformation info={info}/>
                        </Tab>
                        <Tab eventKey="network" title="Network">
                            <Network id={id}/>
                        </Tab>
                        <Tab eventKey="notes" title="Notes">
                            <Notes id={id}/>
                        </Tab>
                        <Tab eventKey="cell-reports" title="Cell Reports">
                            <CellReports id={id}/>
                        </Tab>
                    </Tabs>
                </div>
                ): (<Loader />)
            }
            </div>
        )
    }
}