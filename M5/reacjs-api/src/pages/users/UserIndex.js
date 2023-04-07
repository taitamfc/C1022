import React, { Component } from 'react';
import axios from "axios";
import { Link } from 'react-router-dom';
import UserModel from '../../models/UserModel';
class UserIndex extends Component {
    constructor( props ){
        super(props);
        // Khai báo state users
        this.state = {
            users: []
        }
    }

    componentDidMount() {
        var mua_sach = new Promise( function(resolve, reject){
            // thành công
            //resolve('cuốn sách');
            // thất bại
            reject('không có sách')
        });
        mua_sach.then(res => {
            console.log('then',res);
        })
        .catch(err => {
            console.log('catch',err);
        });

        // Method get
        /*
        $.ajax({
            url: 'https://6083df209b2bed00170404a0.mockapi.io/angular/users/',
            method: 'GET',
            dataType: 'json',
            success: function(res){
                this.setState({ users: res.data });
            },
            error: function(err){
                throw err;
            }
        });
        */
        
        UserModel.getAll().then(res => {
            this.setState({ users: res.data });
        })
        .catch(err => {
            throw err;
        });
    }

    render() {
        return (
            <div>
                <h1>UserIndex</h1>
                <table border={1} width={'100%'}>
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        {
                            this.state.users.map((user, key) => (
                                <tr key={key}>
                                    <td>
                                        {user.id}
                                    </td>
                                    <td>
                                        {user.name}
                                    </td>
                                    <td>
                                        <Link to={'/users/' + user.id }>Xem</Link>
                                        |
                                        <Link to={'/users/' + user.id + '/edit' }>Sua</Link>
                                        |
                                        <Link to={'/users/' + user.id + '/delete' }>Delete</Link>
                                    </td>
                                </tr>
                            ))
                        }
                    </tbody>
                </table>
            </div>
        );
    }
}

export default UserIndex;