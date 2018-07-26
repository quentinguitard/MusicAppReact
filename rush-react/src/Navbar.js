import React, { Component } from "react";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";

export default class Navbar extends Component {
    render() {
        return (
            <div className="container-fluid">
                <nav className="navbar navbar-expand-lg navbar-light bg-light">
                    <div className="container">
                        <a className="navbar-brand" href="#">
                            Musique App
                        </a>
                        <button
                            className="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span className="navbar-toggler-icon" />
                        </button>
                        <div
                            className="collapse navbar-collapse"
                            id="navbarNav"
                        >
                            <ul className="navbar-nav">
                                <li className="nav-item">
                                    <a className="nav-link" href="../albums">
                                        Albums
                                    </a>
                                </li>
                                <li className="nav-item">
                                    <a className="nav-link" href="../artists">
                                        Artists
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        );
    }
}
