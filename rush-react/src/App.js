import React, { Component } from "react";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import "./App.css";
import Albums from "./Albums";
import Album from "./Album";
import Navbar from "./Navbar";
import Artists from "./Artists";
import Artist from "./Artist";

export default class App extends Component {
    render() {
        return (
            <Router>
                <div>
                    <Navbar />

                    <Route exact={true} path="/albums" component={Albums} />
                    <Route exact={true} path="/artists" component={Artists} />
                    <Route path="/albums/:id" component={Album} />
                    <Route path="/artists/:id" component={Artist} />
                </div>
            </Router>
        );
    }
}
