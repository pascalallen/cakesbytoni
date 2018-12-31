
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');
import React from 'react';
import { render } from 'react-dom';
import { Router, Route, browserHistory } from 'react-router';

import HomePage from './components/HomePage';

render(
  <Router history={browserHistory}>
    <Route path="/" component={HomePage}></Route>
  </Router>, 
  document.getElementById('react')
);
