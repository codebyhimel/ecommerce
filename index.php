<?php
require_once("./layout/meta.php");
require_once("./layout/header.php");
include_once('./config/db.php');
$db = new Db();
// slider start
$sql = "SELECT * FROM `slider` WHERE isActive = 1 ";
$slider = $db->dbHandler->prepare($sql);
// $stmt->bindParam('sliderId', $_REQUEST['slider_id']);
$slider->execute();
$sliderdata = $slider->fetchAll(PDO::FETCH_ASSOC);
// slider end

// featur start
$fsql = "SELECT * FROM `feture` WHERE isActive = 1";
$fdata = $db->dbHandler->prepare($fsql);
$fdata->execute();
$feturedata = $fdata->fetchAll(PDO::FETCH_ASSOC);
// featur end


// offer start
$osql = "SELECT * FROM `offer` WHERE isActive = 1";
$odata = $db->dbHandler->prepare($osql);
$odata->execute();
$offerdata = $odata->fetchAll(PDO::FETCH_ASSOC);
// offer end

?>

<!-- Start Main Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    <?php
    foreach ($sliderdata as $item) {

    ?>
        <div class="main-banner" style="background-image: url(admin/<?= $item['image'] ?>);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="main-banner-content text-<?= $item['align'] ?>">
                            <span class="sub-title"><?= $item['subTitle'] ?></span>
                            <h1><?= $item['title'] ?></h1>
                            <p><?= $item['detailes'] ?></p>
                            <div class="btn-box">
                                <a href="<?= $item['btnOneUrl'] ?>" class="default-btn"><?= $item['btnOneText'] ?></a>
                                <a href="<?= $item['btnTwoUrl'] ?>" class="optional-btn"><?= $item['btnTwoText'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<!-- End Main Banner Area -->

<!-- Start Categories Banner Area -->
<section class="categories-banner-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php foreach ($feturedata as $item) { ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-categories-box">
                        <img src="admin/<?= $item['image'] ?>" alt="image">
                        <div class="content text-white">
                            <span><?= $item['subtitle'] ?></span>
                            <h3><?= $item['title'] ?></h3>
                            <a href="<?= $item['btnUrl'] ?>" class="default-btn"><?= $item['btnText'] ?></a>
                        </div>
                        <!-- <a href="products-right-sidebar.html" class="link-btn"></a> -->
                    </div>
                </div>
            <?php } ?>
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>

<!-- End Categories Banner Area -->

<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Recent Products</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img1.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover1.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Long Sleeve Leopard T-Shirt</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img2.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover2.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sale-tag">Sale!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Causal V-Neck Soft Raglan</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img3.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover3.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Hanes Men's Pullover</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img4.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover4.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Gildan Men's Crew T-Shirt</a></h3>
                        <div class="price">
                            <span class="new-price">$150</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img5.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover5.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Yidarton Women's Comfy</a></h3>
                        <div class="price">
                            <span class="new-price">$240</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img6.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover6.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Womens Tops Color</a></h3>
                        <div class="price">
                            <span class="old-price">$150</span>
                            <span class="new-price">$100</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Offer Area -->
<section class="offer-area ptb-100 jarallax" style="background-image: url('admin/<?= $item['image'] ?>');" data-jarallax='{"speed": 0.3}'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <?php foreach ($offerdata as $item) { ?>
                <div class="col-lg-5 col-md-6">
                    <div class="offer-content">
                        <span class="sub-title"><?= $item['subtitle'] ?></span>
                        <h2><?= $item['title'] ?></h2>
                        <p><?= $item['details'] ?></p>
                        <a href="<?= $item['btnurl'] ?>" class="default-btn"><?= $item['btntext'] ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Offer Area -->

<!-- Start Products Area -->
<section class="products-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Popular Products</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img7.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover7.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Tbmpoy Men's Tapered</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img8.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover8.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sale-tag">Sale!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Sunnyme Women's Ponchos</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img9.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover9.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Open Front Knit Sweaters</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img10.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover10.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Block Striped Draped</a></h3>
                        <div class="price">
                            <span class="new-price">$150</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img11.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover11.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Fleece Hooded Sweatshirt</a></h3>
                        <div class="price">
                            <span class="new-price">$240</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img12.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover12.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Women's Modern-Skinny</a></h3>
                        <div class="price">
                            <span class="old-price">$150</span>
                            <span class="new-price">$100</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Facility Area -->
<section class="facility-area pb-70">
    <div class="container">
        <div class="facility-slides owl-carousel owl-theme">
            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-tracking'></i>
                </div>
                <h3>Free Shipping Worldwide</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-return'></i>
                </div>
                <h3>Easy Return Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-shuffle'></i>
                </div>
                <h3>7 Day Exchange Policy</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-sale'></i>
                </div>
                <h3>Weekend Discount Coupon</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-credit-card'></i>
                </div>
                <h3>Secure Payment Methods</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-location'></i>
                </div>
                <h3>Track Your Package</h3>
            </div>

            <div class="single-facility-box">
                <div class="icon">
                    <i class='flaticon-customer-service'></i>
                </div>
                <h3>24/7 Customer Support</h3>
            </div>
        </div>
    </div>
</section>
<!-- End Facility Area -->

<!-- Start Products Area -->
<section class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">See Our Collection</span>
            <h2>Best Selling Products</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img13.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover13.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Sleeve Faux Suede Loose</a></h3>
                        <div class="price">
                            <span class="old-price">$321</span>
                            <span class="new-price">$250</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img14.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover14.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="sale-tag">Sale!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">T-Shirt Casual Stripe Tunic</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img15.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover15.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Chest Cutout Tunics Long</a></h3>
                        <div class="price">
                            <span class="old-price">$210</span>
                            <span class="new-price">$200</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img16.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover16.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Twist Knotted Tops</a></h3>
                        <div class="price">
                            <span class="new-price">$150</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img17.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover17.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">Premium Lightweight Fleece</a></h3>
                        <div class="price">
                            <span class="new-price">$240</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="products-image">
                        <a href="products-type-1.html">
                            <img src="assets/img/products/img18.jpg" class="main-image" alt="image">
                            <img src="assets/img/products/img-hover18.jpg" class="hover-image" alt="image">
                        </a>

                        <div class="products-button">
                            <ul>
                                <li>
                                    <div class="wishlist-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                            <i class='bx bx-heart'></i>
                                            <span class="tooltip-label">Add to Wishlist</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-btn">
                                        <a href="compare.html">
                                            <i class='bx bx-refresh'></i>
                                            <span class="tooltip-label">Compare</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="quick-view-btn">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                            <i class='bx bx-search-alt'></i>
                                            <span class="tooltip-label">Quick View</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="new-tag">New!</div>
                    </div>

                    <div class="products-content">
                        <h3><a href="products-type-1.html">EcoSmart Fleece Hoodie</a></h3>
                        <div class="price">
                            <span class="old-price">$150</span>
                            <span class="new-price">$100</span>
                        </div>
                        <div class="star-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products Area -->

<!-- Start Partner Area -->
<div class="partner-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Our Partners</h2>
        </div>

        <div class="partner-slides owl-carousel owl-theme">
            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner1.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner2.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner3.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner4.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner5.png" alt="image"></a>
            </div>

            <div class="partner-item">
                <a href="index.html"><img src="assets/img/partner/partner6.png" alt="image"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Recent Story</span>
            <h2>From The Xton Blog</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="assets/img/blog/img1.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Ideas</span>
                        <h3><a href="single-blog-1.html">The #1 eCommerce blog to grow your business</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="assets/img/blog/img2.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Advice</span>
                        <h3><a href="single-blog-1.html">Latest ecommerce trend: The rise of shoppable posts</a>
                        </h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="single-blog-1.html">
                            <img src="assets/img/blog/img3.jpg" alt="image">
                        </a>
                        <div class="date">
                            <span>January 29, 2024</span>
                        </div>
                    </div>

                    <div class="post-content">
                        <span class="category">Social</span>
                        <h3><a href="single-blog-1.html">Building eCommerce wave: Social media shopping</a></h3>
                        <a href="single-blog-1.html" class="details-btn">Read Story</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Instagram Area -->
<div class="instagram-area">
    <div class="container-fluid">
        <div class="instagram-title">
            <a href="#" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @xton</a>
        </div>

        <div class="instagram-slides owl-carousel owl-theme">
            <div class="single-instagram-post">
                <img src="assets/img/instagram/img1.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img2.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img3.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img4.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img10.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img6.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img7.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img8.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img9.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>

            <div class="single-instagram-post">
                <img src="assets/img/instagram/img5.jpg" alt="image">
                <i class='bx bxl-instagram'></i>
                <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Area -->

<!-- Start Sidebar Modal -->
<?php
require_once("./layout/sidebar.php");
?>
<!-- End Sidebar Modal -->

<!-- Start QuickView Modal Area -->
<?php
require_once("./layout/QuickView.php");
?>
<!-- End QuickView Modal Area -->

<!-- Start Shopping Cart Modal -->
<?php
require_once("./layout/Cart.php");
?>
<!-- End Shopping Cart Modal -->

<!-- Start Wishlist Modal -->
<?php
require_once("./layout/wishlist.php");
?>
<!-- End Wishlist Modal -->

<!-- Start Size Guide Modal Area -->
<?php
require_once("./layout/size-guide.php");
?>
<!-- End Size Guide Modal Area -->

<!-- Start Shipping Modal Area -->
<?php
require_once("./layout/shipping.php");
?>
<!-- End Shipping Modal Area -->

<!-- Start Products Filter Modal Area -->
<?php
require_once("./layout/filter.php");
?>
<!-- End Products Filter Modal Area -->
<?php
require_once("./layout/footer.php");
?>