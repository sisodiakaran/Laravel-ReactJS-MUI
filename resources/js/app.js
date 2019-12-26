require('./bootstrap');

import React, { Component } from "react";
import ReactDOM from 'react-dom';
import { Appbar, Button, Container } from 'muicss/react';


class App extends Component {
    render() {
        return (<div>
            <Appbar></Appbar>
            <Container>
                <Button color="primary">button</Button>
            </Container>
        </div>)
    }
}
ReactDOM.render(<App />, document.getElementById(namespace));