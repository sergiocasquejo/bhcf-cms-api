import React, { Component } from 'react';
import {api, appState, processStorage} from '../Common';
// import DatePicker  from 'react-bootstrap-date-picker';
import { ValidationForm, TextInput, Checkbox, Radio, SelectGroup } from 'react-bootstrap4-form-validation';
import Alert from 'react-s-alert';
import PhotoBooth from './partials/PhotoBooth';
import {Loader} from '../partials/Loader';
export default class PeopleCreateEdit extends Component {
    _isMounted = false;
    constructor(props){
        super(props);
    
        this.state = {

            id: "",
            email: "",
            first_name: "",
            last_name: "",
            middle_name: "",
            nick_name: "",
            birthdate: "",
            address: "",
            city: "",
            contact_no: "",
            secondary_contact_no: "",
            facebook_name: "",
            school_status_id: 0,
            leadership_level_id: 0,
            auxiliary_group_id: 0,
            status_id: 0,
            category_id: 0,
            remarks: "",
            school_statuses: [],
            leadership_levels: [],
            auxiliary_groups: [],
            statuses: [],
            categories: [],
            ministries_list: [],
            ministries: null,
            avatar: null,
            errorMessage: null,
            isFormSubmit: false,
            isEdit: false,
            loading: true,
        };
        this.handleChangeCheckbox = this.handleChangeCheckbox.bind(this);
        this.handleChange = this.handleChange.bind(this);
        this.handleChangeDate = this.handleChangeDate.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.onPhotoChange = this.onPhotoChange.bind(this);
    } 
    componentWillUnmount() {
        this._isMounted = false;
    }

    componentDidMount() {
        this._isMounted = true;
        if (this.props.match.params.id) {
            const memberID = this.props.match.params.id;
            api.get(`members/${memberID}`).then(res => {
                if (this._isMounted) {
                    const newState = Object.assign(this.state, res.data.data);
                    newState.loading = false;
                    this.setState(newState);
                }
            });
        }

        api.get(`auxiliary-groups`).then(res => {
            if (this._isMounted) {
                if (res.data.success) {
                this.setState({auxiliary_groups: res.data.data});
                }
            }
        });

        api.get(`members/category`).then(res => {
            if (this._isMounted) {
                if (res.data.success) {
                this.setState({categories: res.data.data});
                }
            }
        });

        api.get(`ministries`).then(res => {
            if (this._isMounted) {
                if (res.data.success) {
                this.setState({ministries_list: res.data.data});
                }
            }
        });

        api.get(`school/statuses`).then(res => {
            if (this._isMounted) {
                if (res.data.success) {
                this.setState({school_statuses: res.data.data});
                }
            }
        });

        api.get(`statuses`).then(res => {
            if (this._isMounted) {
                if (res.data.success) {
                this.setState({statuses: res.data.data});
                }
            }
        });

        api.get(`leadership-levels`).then(res => {
            if (this._isMounted) {
                if (res.data.success) {
                   this.setState({leadership_levels: res.data.data});
                }
            }
        });
    }
    
    handleChange (e) {
        
        this.setState({
            [e.target.name]: e.target.value
        });

        
    }

    handleChangeCheckbox(e) {
        this.setState({
            [e.target.name]: e.target.value
        });

        console.log(e.target.value);
    }

    onPhotoChange(image) {
        this.setState({'avatar': image});
    }

    handleSubmit(e, formData, inputs) {
        e.preventDefault();
        console.log('hello');
        console.log(formData);
        this.setState({ isFormSubmit: true });
        formData['avatar'] = this.state.avatar;
        let url = `members`;
        if (this.props.match.params.id) {
            const memberID = this.props.match.params.id;
            url = `${url}/${memberID}`;
            formData['_method'] = "PUT";
        }
        api.post(url, formData).then(res => {
            if (this._isMounted) {
                let response = res.data;
                
                if (response.success) {
                    Alert.success('Successfully Saved!');    
                    // this.props.history.push(`/people/${response.data.id}/edit`);
                } else {
                    Alert.error(response.data);
                }
            }
        });
    }

    handleErrorSubmit(e, formData, errorInputs){
        console.error(errorInputs)
    }

    handleChangeDate(value, formattedValue) {
        this.setState({
          value: value, // ISO String, ex: "2016-11-19T12:00:00.000Z"
          formattedValue: formattedValue // Formatted String, ex: "11/19/2016"
        });
    }

    render() {
        return (
            <div className="container">
                {!this.state.loading ?(
                <div className="row justify-content-center">
                    <div className="col-md-6">
                        <PhotoBooth src={this.state.avatar ? this.state.avatar.original : false} photoChange={this.onPhotoChange}/>
                        <ValidationForm onSubmit={this.handleSubmit} onErrorSubmit={this.handleErrorSubmit}>
                            <div id="accordion">
                                <div className="card">
                                    <div className="card-header" id="personalInformationHeding">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link" data-toggle="collapse" data-target="#collapsePeronalInformation" aria-expanded="true" aria-controls="collapsePeronalInformation">
                                            Personal Information
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapsePeronalInformation" className="collapse show" aria-labelledby="personalInformationHeding" data-parent="#accordion">
                                        <div className="card-body">
                                            
                                            <div className="form-group">
                                                <label>First Name</label>
                                                <TextInput name="first_name" id="firstName" type="text" 
                                                required
                                                errorMessage={{required:"First Name is required"}} 
                                                value={this.state.first_name} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Last Name</label>
                                                <TextInput name="last_name" id="lastName" type="text" 
                                                required
                                                errorMessage={{required:"Last Name is required"}} 
                                                value={this.state.last_name} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Middle Name</label>
                                                <TextInput name="middle_name" id="middleName" type="text" 
                                                required
                                                errorMessage={{required:"Middle Name is required"}} 
                                                value={this.state.middle_name} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Nick Name</label>
                                                <TextInput name="nick_name" id="nickName" type="text" 
                                                required
                                                errorMessage={{required:"Nick Name is required"}} 
                                                value={this.state.nick_name} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Birth Date</label>
                                                <TextInput name="birthdate" id="birthDate" type="date" 
                                                required
                                                errorMessage={{required:"Birth Date is required"}} 
                                                value={this.state.birthdate} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Address</label>
                                                <TextInput name="address" id="address" type="text" 
                                                required
                                                errorMessage={{required:"Address is required"}} 
                                                value={this.state.address} 
                                                onChange={this.handleChange} 
                                                multiline
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>City</label>
                                                <TextInput name="city" id="city" type="text" 
                                                required
                                                errorMessage={{required:"City is required"}} 
                                                value={this.state.city} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Remarks</label>
                                                <TextInput name="remarks" id="remarks" type="text" 
                                                value={this.state.remarks} 
                                                onChange={this.handleChange} 
                                                multiline
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="contactDetailsHeading">
                                    <h5 className="mb-0">
                                        <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseContactDetails" aria-expanded="false" aria-controls="collapseContactDetails">
                                        Contact Details
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapseContactDetails" className="collapse" aria-labelledby="contactDetailsHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            <div className="form-group">
                                                <label>Email Address</label>
                                                <TextInput name="email" id="email" type="email" 
                                                value={this.state.email || ""} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Contact #</label>
                                                <TextInput name="contact_no" id="contactNo" type="text" 
                                                value={this.state.contact_no} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Contact #</label>
                                                <TextInput name="secondary_contact_no" id="secondaryContactNo" type="text" 
                                                value={this.state.secondary_contact_no} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                            <div className="form-group">
                                                <label>Facebook Name</label>
                                                <TextInput name="facebook_name" id="facebookName" type="text" 
                                                value={this.state.facebook_name} 
                                                onChange={this.handleChange}
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="ministriesHeading">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseMinistries" aria-expanded="false" aria-controls="collapseMinistries">
                                            Ministries
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseMinistries" className="collapse" aria-labelledby="ministriesHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            {
                                                this.state.ministries_list.map((item, i) => {
                                                    return (
                                                        <Checkbox key={i} name="ministries" label={item.name} id={`ministry${i}`} 
                                                            value={item.id.toString()}
                                                            onChange={this.handleChangeCheckbox}
                                                            checked="false"
                                                        />
                                                    )
                                                })
                                            }
                                        </div>`
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="statusHeading">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseStatus" aria-expanded="false" aria-controls="collapseStatus">
                                            Status
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseStatus" className="collapse" aria-labelledby="statusHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <SelectGroup name="status" id="status"
                                                value={this.state.status_id} 
                                                onChange={this.handleChange}>
                                                <option value="">--- Please select ---</option>
                                                {
                                                    this.state.statuses.map((item, i) => {
                                                        return <option id={'status' + i} key={i} value={item.id}>{item.name}</option>
                                                    })
                                                }
                                            </SelectGroup>
                                        </div>
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="schoolStatusHeading">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSchoolStatus" aria-expanded="false" aria-controls="collapseSchoolStatus">
                                            School Status
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSchoolStatus" className="collapse" aria-labelledby="schoolStatusHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            <SelectGroup name="school_status_id" id="school_status_id"
                                                value={this.state.school_status_id} 
                                                onChange={this.handleChange}>
                                                <option value="">--- Please select ---</option>
                                                {
                                                    this.state.school_statuses.map((item, i) => {
                                                        return <option id={'status' + i} key={i} value={item.id}>{item.name}</option>
                                                    })
                                                }
                                            </SelectGroup>
                                        </div>
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="leadershipLevelHeading">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseLeadershipLevel" aria-expanded="false" aria-controls="collapseLeadershipLevel">
                                                Leadership Level
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseLeadershipLevel" className="collapse" aria-labelledby="leadershipLevelHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            <SelectGroup name="leadership_level_id" id="leadership_level_id"
                                                value={this.state.leadership_level_id} 
                                                onChange={this.handleChange}>
                                                <option value="">--- Please select ---</option>

                                                {
                                                    this.state.leadership_levels.map((item, i) => {
                                                        return <option id={'status' + i} key={i} value={item.id}>{item.name}</option>
                                                    })
                                                }
                                            </SelectGroup>
                                        </div>
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="auxiliaryGroupHeading">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseAuxiliaryGroup" aria-expanded="false" aria-controls="collapseAuxiliaryGroup">
                                                Auxiliary Group
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseAuxiliaryGroup" className="collapse" aria-labelledby="auxiliaryGroupHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            <SelectGroup name="auxiliary_group_id" id="auxiliary_group_id"
                                                value={this.state.auxiliary_group_id} 
                                                onChange={this.handleChange}>
                                                <option value="">--- Please select ---</option>
                                                {
                                                    this.state.auxiliary_groups.map((item, i) => {
                                                        return <option id={'status' + i} key={i} value={item.id}>{item.name}</option>
                                                    })
                                                }
                                            </SelectGroup>
                                        </div>
                                    </div>
                                </div>
                                <div className="card">
                                    <div className="card-header" id="categoryHeading">
                                        <h5 className="mb-0">
                                            <a className="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                                                Category
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseCategory" className="collapse" aria-labelledby="categoryHeading" data-parent="#accordion">
                                        <div className="card-body">
                                            <SelectGroup name="category_id" id="category_id"
                                                value={this.state.category_id} 
                                                onChange={this.handleChange}>
                                                <option value="">--- Please select ---</option>
                                                {
                                                    this.state.categories.map((item, i) => {
                                                        return <option id={'status' + i} key={i} value={item.id}>{item.name}</option>
                                                    })
                                                }
                                            </SelectGroup>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button className="btn btn-primary" type="submit">Save</button>
                        </ValidationForm>
                    </div>
                </div>)
                : (
                    <Loader />
                )}
            </div>
        )
    }
}