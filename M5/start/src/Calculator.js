import React, { Component } from 'react';

class Calculator extends Component {
    constructor(props){
        super(props)

        // khai bao state: soA, soB, result
    }

    // Khai bao 4 PT cong,tru,nhan, chia

    render() {
        return (
            <div>
                <form>
                    So thu nhat: <input type={'text'} /> <br/>
                    So thu hai: <input type={'text'} /> <br/>
                    {/* Hien thi ket qua */}
                    <p>Ket qua: 0</p>
                    {/* Bat su kien 4 pt tuong ung */}
                    <button> + </button>
                    <button> - </button>
                    <button> * </button>
                    <button> / </button>
                </form>
            </div>
        );
    }
}

export default Calculator;