import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route} from 'react-router-dom'
import './App.css';

export default class Album extends Component {

    constructor(){
    super();
    this.state = {
      tracks: []
    };
  }

  componentWillMount(){
    const albumId = this.props.match.params.id
    fetch(`http://localhost/Projet-Web_Rush_2/React/controllers/GetTracks.php?id=${albumId}`)
      .then(response=>{ return response.json()})
      .then(responseJson=>{
        console.log(responseJson);
        this.setState({tracks:responseJson})

      });
  }

  render() {

    return (
      <div>
      {this.state.tracks.map(track => 
        <div>{track.name}</div>
        )}
      </div>
      )
    }
}
