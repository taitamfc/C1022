import React, { useEffect, useState } from "react";
import ProductModel from "../models/ProductModel";
import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";

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
        <div className="row">
            {products.map((product, key) => (
                <div key={key} className="col-4">
                    <div className="card">
                        <img src="..." className="card-img-top" alt="..." />
                        <div className="card-body">
                            <h5 className="card-title">Card title</h5>
                            <p className="card-text">
                            Some quick example text to build on the card title and make up the bulk of
                            the card's content.
                            </p>
                            <a href="#" className="btn btn-primary">
                            Go somewhere
                            </a>
                        </div>
                    </div>
                </div>
            ))}
        </div>
    );
}

export default Home;