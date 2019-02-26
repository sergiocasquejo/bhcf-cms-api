/**
 * @global localStorage
 * @global JSON
 * */
import React from "react";
import Axios from 'axios';
import createHistory from 'history/createBrowserHistory';
import { fromJS } from "immutable";
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
const baseURL = process.env.MIX_REACT_APP_API_URL || 'http://127.0.0.1:8000/api/v1/';

const api = Axios.create({
  baseURL: 'https:' === document.location.protocol ? baseURL.replace(/http:/, 'https:') : baseURL
});

api.interceptors.request.use(function(config) {
  const appData = appState();
  if ( appData && appData.user.auth_token ) {
    config.params = {
      token: appData.user.auth_token
    }
  }

  return config;
}, function(err) {
  return Promise.reject(err);
});

api.interceptors.response.use(response => response,function (error) {
  if (error.response.status === 401) {
    localStorage.clear();
    history.push('/')
  }

  return Promise.reject(error);
});


export {
  api,
  appState,
  processStorage,
  history
}
