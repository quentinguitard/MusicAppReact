import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route} from 'react-router-dom'
import './App.css';
import Albums from './Albums';
import Album from './Album';


export default class App extends Component {

  render() {

    return (

      <Router>
        <div>
          <Route exact={true} path="/albums" component={Albums} />
          <Route path="/albums/:id" component={Album} />
        </div>
      </Router>


      )
    }
}