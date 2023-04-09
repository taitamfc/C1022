import axios from "axios";

export const LOGIN = "LOGIN";
export const LOGIN_SUCCESS = "LOGIN_SUCCESS";
export const FETCH_USER = "FETCH_USER";
export const FETCH_USER_SUCCESS = "FETCH_USER_SUCCESS";

export const fakeLogin = payload => {
    console.log('XL: fakeLogin -> dispatch LOGIN_SUCCESS');
    console.log('XL: fakeLogin -> dispatch getUser()');
    return async dispatch => {
        const { username, password } = payload;
        if (username === "admin" && password === "123") {
            dispatch({
                type: LOGIN_SUCCESS,
                payload
            });
            dispatch(getUser());
        } else {
            alert("login failure!");
        }
    };
};

export const getUser = () => {
    console.log('XL: getUser -> dispatch FETCH_USER_SUCCESS');
    return async dispatch => {
        const response = await axios.get(
            "https://jsonplaceholder.typicode.com/users"
        );
        dispatch({
            type: FETCH_USER_SUCCESS,
            payload: response.data
        });
    };
};