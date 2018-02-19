import React, { Component } from 'react';
import { BrowserRouter as Router, Link, Route} from 'react-router-dom'


export default class Navbar extends Component {

  render() {

    return (

	<div>
		<ul>
			<li>
				<a href='../albums'>Albums</a>
			</li>
			<li>
				<a href='../artists'>Artists</a>
			</li>
		</ul>
	</div>

      )
    }
}