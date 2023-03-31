import React, { Component } from 'react';

class Count extends Component {
    constructor(props){
        super(props);
        // Khai bao state count
        this.state = {
            count:0  
        }
    }

    // Phuong thuc xu ly click
    setCount = () => {
        // alert(123);
        // this.setState( {
        //     count: this.state.count + 1
        // });

        this.setState( prevState => ({
            count: prevState.count + 1
        }) );
    }
    render() {
        return (
            <div>
                <h1> Chuong trinh dem </h1>
                {/* Hien thi so lan click */}
                <h1>Hien thi so lan Click: {this.state.count}</h1>
                {/* Tao button goi click va tang click len 1 dv */}
                <button onClick={this.setCount}> tang len </button>


                <hr></hr>
            </div>
        );
    }
}

export default Count;