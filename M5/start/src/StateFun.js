//rsf
import React, { useState } from 'react';

function StateFun(props) {
    const [color,setColor] = useState('white');
    const [brand,setBrand] = useState('VinFast');
    const [model,setModel] = useState('VF9');
    const [year,setYear] = useState(2023);
    const doiMau = () => {
        setColor('red');
    }
    const hello = (name) => {
        alert( 'xin chao ' + name )
    }
    
    return (
        <div>
            <h1>FUNCTION COMPONENT</h1>
            <h1> Thuong hieu: { brand } </h1>
            <h1> Kieu: { model } </h1>
            <h1> Mau: { color } </h1>
            <h1> Nam SX: { year } </h1>
            <button onClick={ () => doiMau() } > Doi mau </button>
            <button onClick={ () => hello('nho') } > hello </button>
            <hr/>
        </div>
    );
}

export default StateFun;