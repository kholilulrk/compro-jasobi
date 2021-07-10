<section class="menu-list-items">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- menu logo -->
                <ul class="menu-logo">
                    <li>
                        <a href="index-01.html"><img id="logo_img" src="images/logo.png" alt="logo">
                        </a>
                    </li>
                </ul>
                <!-- menu links -->
                <div class="menu-bar">
                    <ul class="menu-links">

                        <li><a href="javascript:void(0)">Home </a></li>

                        <li><a href="javascript:void(0)"> Features <i class="fa fa-angle-down fa-indicator"></i></a>
                            <ul class="drop-down-multilevel">
                                <li><a href="javascript:void(0)">Advertising</a>
                                </li>
                                <li><a href="javascript:void(0)">Service</a>
                                </li>
                                <li><a href="javascript:void(0)">Bizz Opp</a>

                                </li>
                                <li><a href="javascript:void(0)">Investor</a>
                                </li>

                                <li><a href="javascript:void(0)">Auction </a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="javascript:void(0)">Contact Us </a></li>
                        
                        <li><a href="javascript:void(0)">Settings </a></li>
                        <li>
                            <a href=" {{ route('logout') }} ">
                                <button type="button" class="button black">
                                    <i class="fa fa-sign-out"></i>
                                    <span>logout</span>
                                </button>
                            </a>
                        </li>
                    </ul>
                    <div class="search-cart">
                        <div class="search">
                            <a class="search-btn not_click" href="javascript:void(0);"></a>
                            <div class="search-box not-click">
                                <form action="search.html" method="get">
                                    <input type="text" class="not-click form-control" name="search"
                                        placeholder="Search.." value="">
                                    <button class="search-button" type="submit"> <i
                                            class="fa fa-search not-click"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="shpping-cart">
                            <a class="cart-btn" href="#"> <i class="fa fa-shopping-cart icon"></i>
                                <strong class="item">2</strong></a>
                            <div class="cart">
                                <div class="cart-title">
                                    <h6 class="uppercase mb-0">Shopping cart</h6>
                                </div>
                                <div class="cart-item">
                                    <div class="cart-image">
                                        <img class="img-fluid" src="images/shop/01.jpg" alt="">
                                    </div>
                                    <div class="cart-name clearfix">
                                        <a href="#">Product name <strong>x2</strong> </a>
                                        <div class="cart-price">
                                            <del>$24.99</del> <ins>$12.49</ins>
                                        </div>
                                    </div>
                                    <div class="cart-close">
                                        <a href="#"> <i class="fa fa-times-circle"></i> </a>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <div class="cart-image">
                                        <img class="img-fluid" src="images/shop/01.jpg" alt="">
                                    </div>
                                    <div class="cart-name clearfix">
                                        <a href="#">Product name <strong>x2</strong></a>
                                        <div class="cart-price">
                                            <del>$24.99</del> <ins>$12.49</ins>
                                        </div>
                                    </div>
                                    <div class="cart-close">
                                        <a href="#"> <i class="fa fa-times-circle"></i> </a>
                                    </div>
                                </div>
                                <div class="cart-total">
                                    <h6 class="mb-15"> Total: $104.00</h6>
                                    <a class="button" href="shop-shopping-cart.html">View Cart</a>
                                    <a class="button black" href="shop-checkout.html">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
