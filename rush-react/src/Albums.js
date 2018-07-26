import React, { Component } from "react";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import "./App.css";

export default class Albums extends Component {
    constructor() {
        super();
        this.state = {
            albums: []
        };
    }

    componentWillMount() {
        fetch("http://localhost/Projet-Web_Rush_2/API/controllers/GetAlbum.php")
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                console.log(responseJson);
                this.setState({ albums: responseJson });
            });
    }

    render() {
        return (
            <div className="container">
                {this.state.albums.map(album => (
                    <div
                        key={album.id}
                        className="row mt-4 p-2 border border-primary rounded"
                    >
                        <div className="col-2 d-flex align-items-center">
                            <img src={album.cover_small} className="rounded" />
                        </div>
                        <div className="col-3 d-flex align-items-center">
                            <h3>
                                <Link to={`/albums/${album.id}`}>
                                    {album.name}
                                </Link>
                            </h3>
                        </div>
                        <div className="col-7">
                            <p>{album.description}</p>
                        </div>
                    </div>
                ))}
            </div>
        );
    }
}
