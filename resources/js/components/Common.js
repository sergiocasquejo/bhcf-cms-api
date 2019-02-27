/**
 * @global localStorage
 * @global JSON
 * */
import React from "react";
import Axios from 'axios';
import createHistory from 'history/createBrowserHistory';
import { fromJS } from "immutable";
import Alert from 'react-s-alert';
const history = createHistory();


const appState = () => {
  let cacheState = null
  let initialAppState = {
    isLoggedIn: false,
    user: {
      auth_token: null,
      email: null,
      id: null,
      name: null,
      timestamp: null
    }
  }

  try {
    cacheState = JSON.parse(localStorage.getItem('appState'));
  } catch(err) {}

  return cacheState ? cacheState : initialAppState;
}

/**
 * @param data
 * @param isLoggedIn
 */
const processStorage = (data, isLoggedIn = true) => {
  let initialAppState = fromJS(appState());
  let userData = fromJS(data);

  userData = userData.set('timestamp', new Date().toString())

  initialAppState = initialAppState.set('user', userData)
  initialAppState = initialAppState.set('isLoggedIn', isLoggedIn)
  localStorage.setItem("appState", JSON.stringify(initialAppState));
}

/**
 * Instantiate Axios with the API base URL and auth token
 * as a parameter
 *
 * ```
 * @Usage:
 *  import { api } from 'common/Common';
 *  api.get('/uri', {...})
 *  api.post('/uri', {...})
 * ```
 *
 * @returns {AxiosInstance}
 */

const baseURL = process.env.MIX_REACT_APP_API_URL ?  process.env.MIX_REACT_APP_API_URL : 'http://blessedhopecebu.org/api/v1/';

const api = Axios.create({
  baseURL: 'https:' === document.location.protocol ? baseURL.replace(/http:/, 'https:') : baseURL
});

api.interceptors.request.use(function(config) {
  const appData = appState();
  if ( appData && appData.user.api_token ) {
    const accessToken = appData.user.api_token;
    config.headers = { 
        Authorization: `Bearer ${accessToken}`,  
        'Content-Type': 'application/json', 
        'Accept': 'application/json',
        'Access-Control-Allow-Origin' : '*',
        'Access-Control-Allow-Methods': 'POST,GET,PUT,DELETE',
        'Access-Control-Allow-Headers': 'Authorization, Lang'
      };
  }

  

  return config;
}, function(err) {
  return Promise.reject(err);
});

api.interceptors.response.use(response => response,function (error) {

  if (error.response.data.message == 'Unauthenticated.') {
    localStorage.clear();
    history.push('/');
  } else if (error.response.status == 500) {
    Alert.error('Oops! something went wrong.');
  } else if (error.response.status == 422) {
    let message = '';
    const errors = error.response.data.data;
    for(var key in errors) {
      Alert.warning(errors[key]);
    }

    
  }

  return Promise.reject(error);
});


export {
  api,
  appState,
  processStorage,
  history
}
