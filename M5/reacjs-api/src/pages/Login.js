import React from 'react';
import { useNavigate } from 'react-router-dom';
import { useDispatch } from "react-redux";


function Login(props) {
    const dispatch = useDispatch();
    const navigate = useNavigate();

    const handleSubmit = () => {
        //Gọi action

        //SET_USER
        const user = {
            name: 'NVA',
            age: 18
        }
        dispatch({ type: "SET_USER", payload: user });

        // SET_IS_LOGGED_IN
        dispatch({ type: "SET_IS_LOGGED_IN", payload: 1 });

        // SET_CART
        dispatch({ type: "SET_CART", payload: {} });

        navigate('/')
    }

    return (
        <div>
            <h1>Login</h1>
            <button onClick={ handleSubmit } >Login</button>
        </div>
    );
}

export default Login;