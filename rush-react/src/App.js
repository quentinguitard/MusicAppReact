import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route} from 'react-router-dom'
import './App.css';

export default class App extends Component {

  constructor(){
    super();
    this.state = {
      data: ""
    };
  }

  componentWillMount(){
    fetch("http://localhost/Projet-Web_Rush_2/React/controllers/GetAlbum.php")
      .then(response=>{ return response.json()})
      .then(responseJson=>{
        console.log(responseJson);
        var list = responseJson.map(album => {
          return (
            <div class="row mt-4 p-2 border border-primary rounded">
              <div class="col-2 d-flex align-items-center">
                <img src={album.cover_small} class="rounded"/>
              </div>
              <div class="col-3 d-flex align-items-center">
                <Router>
                  <h3>
                   <Link to={`g/${album.id}`}>{album.name}</Link>
                  </h3>
                </Router>
              </div>
              <div class="col-7"><p>{album.description}</p></div>
            </div>
            )
        });
        this.setState({data: list})   
      })    
  }

  render() {
    if (!this.state.data) {
      return <div>Loading</div>;
    }

    return (
      <div class="container">
      {this.state.data}
      </div>
      )
    }
}

