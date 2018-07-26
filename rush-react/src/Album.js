import React, { Component } from "react";
import { BrowserRouter as Router, Link, Route } from "react-router-dom";
import "./App.css";

export default class Album extends Component {
    constructor() {
        super();
        this.state = {
            tracks: []
        };
    }

    componentWillMount() {
        const albumId = this.props.match.params.id;
        console.log(albumId);
        fetch(
            `http://localhost/Projet-Web_Rush_2/API/controllers/GetTracks.php?id=${albumId}`
        )
            .then(response => {
                return response.json();
            })
            .then(responseJson => {
                console.log(responseJson);
                this.setState({ tracks: responseJson });
            });
    }

    render() {
        return (
            <div className="container">
                {this.state.tracks.map(track => (
                    <div
                        key={track.id}
                        className="row mt-4 p-2 border border-primary rounded d-flex align-items-center"
                    >
                        <div className="col-6">
                            <h4>
                                {track.track_no} -- {track.name}
                            </h4>
                        </div>
                        <div className="col-6">
                            <audio src={track.mp3} controls />
                        </div>
                    </div>
                ))}
            </div>
        );
    }
}
