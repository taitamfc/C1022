import React from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { Link } from 'react-router-dom';

function Dashboard(props) {
    const dispatch = useDispatch();
    const SET_IS_LOGGED_IN = "SET_IS_LOGGED_IN";

    // Lấy giá trị của user, isLoggedIn, cart
    const user = useSelector(state => state.user);
    const isLoggedIn = useSelector(state => state.isLoggedIn);
    const cart = useSelector(state => state.cart);

    // const {user,isLoggedIn,cart} = useSelector(state);
    // console.log(user, isLoggedIn, cart);

    const handleLogout = () => {
        dispatch({ type: SET_IS_LOGGED_IN, payload: 0 });
    }

    const users = useSelector(state => state.users);

    return (
        <div>
            {
                isLoggedIn ? (
                    <>
                        <h3>Chào mừng bạn</h3>
                        <div>Ten: {user.name} </div>
                        <div>Tuoi:  {user.age} </div>

                        <button onClick={handleLogout}> Đăng xuất </button>
                    </>
                ) : (
                    <h3>Bạn chưa đăng nhập nhấn vào <Link to={'/login'}> đây </Link> để đăng nhập </h3>
                )
            }
            <h1>Dashboard</h1>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                    </tr>
                </thead>
                <tbody>
                    {users.map(user => (
                        <tr key={user.id}>
                            <td>{user.id}</td>
                            <td>{user.username}</td>
                            <td>{user.email}</td>
                            <td>{user.website}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
}

export default Dashboard;