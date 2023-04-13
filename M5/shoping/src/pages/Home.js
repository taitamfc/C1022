import React, { useEffect, useState } from "react";
import ProductModel from "../models/ProductModel";
import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";
import Header from "../includes/Header";
import LayoutHome from "../layouts/LayoutHome";

function Home(props) {
    const navigate = useNavigate();
    const [products, setProducts] = useState([]);
    useEffect(() => {
        ProductModel.getAll()
            .then((res) => {
                setProducts(res.data);
            })
            .catch((err) => {
                throw err;
            });
    }, []);

    return (
        <LayoutHome>
            <div className="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                {products.map((product, key) => (
                    <div className="col mb-5">
                        <div className="card h-100">
                            <img className="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <div className="card-body p-4">
                                <div className="text-center">
                                    <h5 className="fw-bolder">{product.name}</h5>
                                    {product.price}
                                </div>
                            </div>
                            <div className="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div className="text-center">
                                    <Link to={'/sanpham/'+product.id} className="btn btn-outline-dark mt-auto">Xem chi tiết</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </LayoutHome>
        
    );
}

export default Home;