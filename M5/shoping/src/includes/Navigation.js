import React from 'react';
import Menu from './Menu';
import { useDispatch, useSelector } from 'react-redux';
import { Link } from 'react-router-dom';

function Navigation(props) {
    const cart = useSelector(state => state.cart);
    return (
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
            <div className="container px-4 px-lg-5">
                <a className="navbar-brand" href="#!">Start Bootstrap</a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span className="navbar-toggler-icon"></span></button>
                <div className="collapse navbar-collapse" id="navbarSupportedContent">
                    <Menu/>
                    <form className="d-flex">
                        <Link className="btn btn-outline-dark" to={'/cart'}>
                            <i className="bi-cart-fill me-1"></i>
                            Cart
                            <span className="badge bg-dark text-white ms-1 rounded-pill">
                                { cart.length }
                            </span>
                        </Link>
                    </form>
                </div>
            </div>
        </nav>
    );
}

export default Navigation;