import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router';
import { useNavigate } from 'react-router-dom';
import ProductModel from '../models/ProductModel';
import LayoutMaster from '../layouts/LayoutMaster';
import { useDispatch, useSelector } from "react-redux";
import { SET_CART } from '../redux/action';

function SanPhamShow(props) {
    const dispatch = useDispatch();
    const navigate = useNavigate();
    const {id} = useParams();
    const [product,setProduct] = useState({});
    const [qty,setQty] = useState(1);
    const carts = useSelector( state => state.cart )

    // gọi API
    useEffect( () => {
        ProductModel.find(id).then(res => {
            setProduct(res.data);
        })
        .catch(err => {
            throw err;
        });
    },[] );

    const handleAddToCart = () => {
        const cart = {
            id: id,
            name: product.name,
            price: product.price,
            qty: qty

        }
        carts.push(cart);
        dispatch({ type: SET_CART, payload: carts });
        navigate('/cart')
    }
    const handleQty = (event) => {
        setQty(event.target.value);
    }

    return (
        <LayoutMaster>
            <div className="row gx-4 gx-lg-5 align-items-center">
                <div className="col-md-6"><img className="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div className="col-md-6">
                    <div className="small mb-1">{ product.category }</div>
                    <h1 className="display-5 fw-bolder">{ product.name }</h1>
                    <div className="fs-5 mb-5">
                        <span>{ product.price }</span>
                    </div>
                    <p className="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div className="d-flex">
                        <input className="form-control text-center me-3" type="number" value={qty} onChange={ handleQty } />
                        <button onClick={ handleAddToCart } className="btn btn-outline-dark flex-shrink-0" type="button">
                            <i className="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </LayoutMaster>
    );
}

export default SanPhamShow;