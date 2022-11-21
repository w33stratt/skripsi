import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import GlobalStyle from './GlobalStyle';
import { BrowserRouter as Router } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';

ReactDOM.render(
  
  <React.StrictMode>
    <GlobalStyle />
  <Router>
    <App />
  </Router>
  </React.StrictMode>,
  document.getElementById('root')
);