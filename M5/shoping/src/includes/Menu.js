import React from 'react';
import { Link } from 'react-router-dom';

function Menu(props) {
    return (
        <ul className="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li className="nav-item">
                <Link className="nav-link active" to={'/'}>Home</Link>
            </li>
        </ul>
    );
}

export default Menu;