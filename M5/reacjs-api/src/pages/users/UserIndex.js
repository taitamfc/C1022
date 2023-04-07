import React, { Component } from 'react';
import axios from "axios";
class UserIndex extends Component {
    constructor( props ){
        super(props);
        // Khai báo state users
        this.state = {
            users: []
        }
    }
    componentDidMount() {
        axios
          .get("http://localhost:3001/api/users")
          .then(res => {
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
                                        <button onClick={() => this.editUser(key)}> Edit </button>
                                        |
                                        <button onClick={() => this.deleteUser(key)}> Delete </button>
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