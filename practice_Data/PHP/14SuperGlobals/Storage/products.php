<?php 
require_once("header.php"); 

if (isset($_POST["prod1"])) {
    $_SESSION['Cart']["prod1"] =array("title","price","data","qauntity");
}

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
<style>
    .card-title {
        font-weight: 300;
        font-size: 2rem;
    }

    .product-card .card {
        margin: 20px;
        overflow: hidden;
    }

    .product-card .card .card-content {
        padding: 5px;
    }

    .product-card .card .price {
        width: 70px;
        height: 70px;
        font-weight: 600;
        font-size: 1.45rem;
        line-height: 70px;
        margin: 10px;
        position: absolute;
        top: 0;
        letter-spacing: 0;
    }

    .product-card ul.card-action-buttons {
        margin: -18px 7px 0 0;
        text-align: right;
    }

    .product-card ul.card-action-buttons li {
        display: inline-block;
        padding-left: 7px;
    }

    .product {
        width: 20%;
        padding: 10px;
    }

    .product .card {
        margin: 0;
    }

    .product .card .card-content {
        padding: 5px 10px;
    }
</style>
<div class="container1">
    <div class="row">
        <div class="col l3 m8 s12">
            <div class="product-card">
                <div class="card  z-depth-4">
                    <div class="card-image">
                        <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3">5 €</a>
                        <img src="https://res.cloudinary.com/landry-bete/image/upload/v1488769144/dessert14_trnhnj.jpg" alt="product-img">
                        <span class="card-title"><span>Macaron</span></span>
                    </div>
                    <ul class="card-action-buttons">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/" target="_blank" class="btn-floating waves-effect waves-light white"><i class="material-icons grey-text text-darken-3">share</i></a>
                        </li>
                        <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="material-icons like">favorite_border</i></a>
                        </li>
                        <li><a id="buy" class="btn-floating waves-effect waves-light blue"><i class="material-icons buy">add_shopping_cart</i></a>
                        </li>
                    </ul>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <strong>Description:</strong> <br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare auctor metus vel mollis.
                                </p>
                            </div>
    
                        </div>
                        <div class="row">
                            <div style="width: 95%; margin: auto;">
                                <div class="chip">Dessert</div>
                                <div class="chip">French</div>
                                <div class="chip">Sweet</div>
                                <div class="chip">Chocolate</div>
                                <div class="chip"><a href="#">More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m8 s12">
            <div class="product-card">
                <div class="card  z-depth-4">
                    <div class="card-image">
                        <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3">5 €</a>
                        <img src="https://res.cloudinary.com/landry-bete/image/upload/v1488769144/dessert14_trnhnj.jpg" alt="product-img">
                        <span class="card-title"><span>Macaron</span></span>
                    </div>
                    <ul class="card-action-buttons">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/" target="_blank" class="btn-floating waves-effect waves-light white"><i class="material-icons grey-text text-darken-3">share</i></a>
                        </li>
                        <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="material-icons like">favorite_border</i></a>
                        </li>
                        <li><a id="buy" class="btn-floating waves-effect waves-light blue"><i class="material-icons buy">add_shopping_cart</i></a>
                        </li>
                    </ul>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <strong>Description:</strong> <br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare auctor metus vel mollis.
                                </p>
                            </div>
    
                        </div>
                        <div class="row">
                            <div style="width: 95%; margin: auto;">
                                <div class="chip">Dessert</div>
                                <div class="chip">French</div>
                                <div class="chip">Sweet</div>
                                <div class="chip">Chocolate</div>
                                <div class="chip"><a href="#">More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m8 s12">
            <div class="product-card">
                <div class="card  z-depth-4">
                    <div class="card-image">
                        <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3">5 €</a>
                        <img src="https://res.cloudinary.com/landry-bete/image/upload/v1488769144/dessert14_trnhnj.jpg" alt="product-img">
                        <span class="card-title"><span>Macaron</span></span>
                    </div>
                    <ul class="card-action-buttons">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/" target="_blank" class="btn-floating waves-effect waves-light white"><i class="material-icons grey-text text-darken-3">share</i></a>
                        </li>
                        <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="material-icons like">favorite_border</i></a>
                        </li>
                        <li><a id="buy" class="btn-floating waves-effect waves-light blue"><i class="material-icons buy">add_shopping_cart</i></a>
                        </li>
                    </ul>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <strong>Description:</strong> <br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare auctor metus vel mollis.
                                </p>
                            </div>
    
                        </div>
                        <div class="row">
                            <div style="width: 95%; margin: auto;">
                                <div class="chip">Dessert</div>
                                <div class="chip">French</div>
                                <div class="chip">Sweet</div>
                                <div class="chip">Chocolate</div>
                                <div class="chip"><a href="#">More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l3 m8 s12">
            <div class="product-card">
                <div class="card  z-depth-4">
                    <div class="card-image">
                        <a href="#" class="btn-floating btn-large price waves-effect waves-light brown darken-3">5 €</a>
                        <img src="https://res.cloudinary.com/landry-bete/image/upload/v1488769144/dessert14_trnhnj.jpg" alt="product-img">
                        <span class="card-title"><span>Macaron</span></span>
                    </div>
                    <ul class="card-action-buttons">
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://codepen.io/lybete/full/jBMNzM/" target="_blank" class="btn-floating waves-effect waves-light white"><i class="material-icons grey-text text-darken-3">share</i></a>
                        </li>
                        <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="material-icons like">favorite_border</i></a>
                        </li>
                        <li><a id="buy" class="btn-floating waves-effect waves-light blue"><i class="material-icons buy">add_shopping_cart</i></a>
                        </li>
                    </ul>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <strong>Description:</strong> <br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ornare auctor metus vel mollis.
                                </p>
                            </div>
    
                        </div>
                        <div class="row">
                            <div style="width: 95%; margin: auto;">
                                <div class="chip">Dessert</div>
                                <div class="chip">French</div>
                                <div class="chip">Sweet</div>
                                <div class="chip">Chocolate</div>
                                <div class="chip"><a href="#">More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>