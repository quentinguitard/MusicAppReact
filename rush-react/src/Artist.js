import React, { Component } from "react";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import "./App.css";

export default class Artist extends Component {
    constructor() {
        super();
        this.state = {
            artists: []
        };
    }

    componentWillMount() {
        const artistId = this.props.match.params.id;
        console.log(artistId);
        fetch(
            `http://localhost/Projet-Web_Rush_2/API/controllers/GetArtistId.php?id=${artistId}`
        )
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                console.log(responseJson);
                this.setState({ artists: responseJson });
            });
    }

    render() {
        return (
            <div className="container">
                {this.state.artists.map(artist => (
                    <div
                        key={artist.id}
                        className="row mt-4 p-2 border border-primary rounded"
                    >
                        <div className="col-2 d-flex align-items-center">
                            <img src={artist.cover_small} className="rounded" />
                        </div>
                        <div className="col-3 d-flex align-items-center">
                            <h3>
                                <Link to={`../albums/${artist.id}`}>
                                    {artist.albumName}
                                </Link>
                            </h3>
                        </div>
                        <div className="col-7">
                            <p>{artist.albumDesc}</p>
                        </div>
                    </div>
                ))}
            </div>
        );
    }
}
