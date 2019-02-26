import React, { Component } from 'react';
import {api, appState, processStorage} from './Common';
import { ValidationForm, TextInput, SelectGroup, Checkbox, Radio } from 'react-bootstrap4-form-validation';
import validator from 'validator';

export default class Login extends Component {
    constructor(props){
        super(props);
    
        this.state = {
            username: "",
            password: "",
        };
        
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    
    handleChange (e) {
        this.setState({
            [e.target.name]: e.target.value
        })
    }

    handleSubmit(e, formData, inputs) {
        e.preventDefault();
        let _this = this;
        api.post('login', formData).then(res => {
            let response = res.data;
            if (response.success) {
                processStorage(response.data, true);
                _this.props.history.push('/dashboard');
            }
        });
    }

    handleErrorSubmit(e, formData, errorInputs){
        console.error(errorInputs)
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-6">
                        <ValidationForm onSubmit={this.handleSubmit} onErrorSubmit={this.handleErrorSubmit}>
                            <div className="form-group">
                                <label>Username</label>
                                <TextInput name="username" id="username" type="text" 
                                required
                                errorMessage={{required:"Username is required"}} 
                                value={this.state.username} 
                                onChange={this.handleChange}
                                />
                            </div>
                            <div className="form-group">
                                <label>Password</label>
                                <TextInput 
                                name="password" 
                                id="password" 
                                type="password" 
                                required 
                                errorMessage={{required:"Password is required"}} 
                                value={this.state.password} 
                                onChange={this.handleChange} 
                                />
                            </div>
                            <button className="btn btn-primary" type="submit">Login</button>
                        </ValidationForm>
                    </div>
                </div>
            </div>
        )
    }
}