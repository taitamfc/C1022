import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from "axios";

function UserShow(props) {
    const {id} = useParams();
    const [user,setUser] = useState({});

    useEffect( function(){
        axios
            .get("https://6083df209b2bed00170404a0.mockapi.io/angular/users/"+id)
            .then(res => {
                setUser(res.data);
            })
            .catch(err => {
                throw err;
            });
    },[] );
    return (
        <div>
            UserShow
            <table border={1} width={'100%'}>
                <tr>
                    <td>Id</td>
                    <td>{ user.id }</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{ user.name }</td>
                </tr>
            </table>
        </div>
    );
}

export default UserShow;