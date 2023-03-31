import React, { Component } from 'react';

class Count extends Component {
    constructor(props){
        super(props);
        // Khai bao state count
    }

    // Phuong thuc xu ly click

    render() {
        return (
            <div>
                <h1> Chuong trinh dem </h1>
                {/* Hien thi so lan click */}
                <h1></h1>
                {/* Tao button goi click va tang click len 1 dv */}

                <hr></hr>
            </div>
        );
    }
}

export default Count;