//rcc
import React, { Component } from 'react';

class StateClass extends Component {
    constructor(props){
        super(props);
        // khai bao state
        this.state = {
            brand: 'VinFast',
            model: 'VF9',
            color: 'white',
            year: 2023,
            age: 17
        }
    }

    setAge = () => {
        this.setState( {age:18} );
    }

    setColor = () => {
        // this.setState( {color:'Red'} );
        // Lay lai gia tri cu?
        this.setState( prevState => ({
            color: (prevState.color == 'white') ? 'red' : 'yellow'
        }) );
    }
    hello = (name) =>{
        alert('xin chao ' + name);
    }

    render() {

        if( this.state.age >= 18 ){
            return (
                <h1>Ban duoc uong ruou</h1>
            )
        }else{
            return (
                <div>
                    <h1>Ban duoc uong bia</h1>
                    <h1> Thuong hieu: { this.state.brand } </h1>
                    <h1> Kieu: { this.state.model } </h1>
                    <h1> Mau: { this.state.color } </h1>
                    <h1> Nam SX: { this.state.year } </h1>
                    <button onClick={this.setAge}> Doi age </button>
                    <button onClick={this.setColor}> Doi mau </button>
                    <button onClick={ () => this.hello('nho') }>hello </button>
                </div>
            );
        }
    }
}

export default StateClass;