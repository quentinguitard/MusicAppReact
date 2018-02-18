import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route} from 'react-router-dom'
import './App.css';

export default class artists extends Component {
  constructor(){
    super();
    this.state = {
      artists: []
    };
  }

  componentWillMount(){
    fetch("http://localhost/Projet-Web_Rush_2/React/controllers/GetArtists.php")
      .then(response=>{ return response.json()})
      .then(responseJson=>{
        console.log(responseJson);
        this.setState({artists: responseJson})   
        });
          
  }

  render() {



    return (



      <div className="container">


      {this.state.artists.map(artist => 
 


        <div key={artist.id} className="row mt-4 p-2 border border-primary rounded">
          <div className="col-2 d-flex align-items-center">
            <img src={artist.photo} className="rounded"/>
          </div>
          <div className="col-3 d-flex align-items-center">
              <h5>
               <Link to={`/artists/${artist.id}`}>{artist.name}</Link>
              </h5>
          </div>
          <div className="col-7"><p>{artist.description}</p></div>
        </div>
      
      )}
      </div>

      )
    }
}
