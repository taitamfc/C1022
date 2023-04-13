import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router';
import ProductModel from '../models/ProductModel';
import LayoutMaster from '../layouts/LayoutMaster';

function SanPhamShow(props) {
    const {id} = useParams();
    const [product,setProduct] = useState({});
    // gọi API
    useEffect( () => {
        ProductModel.find(id).then(res => {
            setProduct(res.data);
        })
        .catch(err => {
            throw err;
        });
    },[] );
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
                        <input className="form-control text-center me-3" id="inputQuantity" type="num" value="1" />
                        <button className="btn btn-outline-dark flex-shrink-0" type="button">
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