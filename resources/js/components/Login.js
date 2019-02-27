import React, { Component } from 'react';
import {api, appState, processStorage} from './Common';
import { ValidationForm, TextInput } from 'react-bootstrap4-form-validation';
import { Alert } from 'react-bootstrap';

export default class Login extends Component {
    _isMounted = false;
    _isFormSubmit = false;
    constructor(props){
        super(props);
    
        this.state = {
            username: "",
            password: "",
            errorMessage: null
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
        this._isFormSubmit = true;
        api.post('login', formData).then(res => {
            if (this._isMounted) {
                let response = res.data;
                this._isFormSubmit = false;

                if (response.success) {
                    processStorage(response.data, true);
                    this.props.history.push('/dashboard');
                }else {
                    this.setState({ errorMessage: response.data });
                }
                
            }
        });
    }

    handleErrorSubmit(e, formData, errorInputs){
        console.error(errorInputs)
    }
    componentDidMount() {
        this._isMounted = true;
    }
    componentWillUnmount() {
        this._isMounted = false;
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-6">
                        { this.state.errorMessage && 
                        <Alert variant={'danger'}>
                            { this.state.errorMessage }
                        </Alert>
                        }
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
                            <button className="btn btn-primary" type="submit">{this._isFormSubmit ? 'Logging in...' : 'Login'}</button>
                        </ValidationForm>
                    </div>
                </div>
            </div>
        )
    }
}