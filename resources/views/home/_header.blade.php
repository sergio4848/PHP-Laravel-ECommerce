<body class="header_sticky header-style-2 header-absolute has-menu-extra">
<!-- Preloader -->
<div id="loading-overlay">
    <div class="loader"></div>
</div>

<!-- Boxed -->
<div class="boxed">
    <div id="site-header-wrap">
        <!-- Header -->
        <header id="header" class="header clearfix">
            <div class="container-fluid clearfix container-width-93" id="site-header-inner">
                <div id="logo" class="logo float-left">
                    <a href="index.html" title="logo">
                        <img src="{{asset('assets')}}/images/logo.png" alt="image" width="107" height="24" data-retina="{{asset('assets')}}/images/logo@2x.png" data-width="107" data-height="24">
                    </a>
                </div><!-- /.logo -->
                <div class="mobile-button"><span></span></div>
                <ul class="menu-extra">
                    <li class="box-search">
                        <a class="icon_search header-search-icon" href="#"></a>
                        <form role="search" method="get" class="header-search-form" action="#">
                            <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                            <button type="submit" class="header-search-submit" title="Search">Search</button>
                        </form>
                    </li>
                    <li class="box-login">
                        <a class="icon_login" href="#"></a>
                    </li>
                    @auth
                    <li class="box-cart nav-top-cart-wrapper">
                        <a class="icon_cart nav-cart-trigger active" href="{{route('user_shopcart')}}"><span>{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span></a>
                        <div class="nav-shop-cart">
                            <div class="widget_shopping_cart_content">
                                <div class="woocommerce-min-cart-wrap">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                        @foreach($shopcart as $rs)
                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <span>{{$rs->product->title}}<img src="{{ Storage::url($rs->product->image) }}" alt="image" style="height: 50px;"></span>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <div class="add-to-cart text-center">
                                        <a href="{{route('user_shopcart')}}">SEPETE GİT</a>
                                    </div>
                                </div><!-- /.widget_shopping_cart_content -->
                            </div>
                        </div><!-- /.nav-shop-cart -->
                    </li>
                    @else
                    <li class="box-cart nav-top-cart-wrapper">
                        <a class="icon_cart nav-cart-trigger active" href="/login"><span></span></a>
                    </li>
                    @endauth
                </ul><!-- /.menu-extra -->
                <div class="nav-wrap">
                    <nav id="mainnav" class="mainnav">
                        <ul class="menu">
                            <li class="active">
                                <a href="/">HOME</a>

                            </li>
                            @php
                                $parentCategories=\App\Http\Controllers\HomeController::categoryList();
                            @endphp
                            <li>
                                <a href="#">SHOP</a>
                                <ul class="submenu">
                                    @foreach($parentCategories as $rs)
                                    <li>
                                        <a href="{{route('categoryproducts',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>

                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="coming-soon.html">PAGE</a>
                                <ul class="submenu">
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="404.html"> Error 404</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                </ul>
                            </li>
                            <li >
                                <a href="blog-list.html">BLOG</a>
                                <ul class="submenu">
                                    <li ><a href="blog-list.html">Blog List Full</a></li>
                                    <li><a href="blog-list-1.html">Blog list Slide 1</a></li>
                                    <li><a href="blog-list-2.html">Blog list Slide 2</a></li>
                                    <li><a href="blog-grid.html">Blog Gird Full</a></li>
                                    <li><a href="blog-grid-1.html">Blog Gird Slide</a></li>
                                    <li><a href="blog-detail.html">Blog Details</a></li>
                                </ul><!-- /.submenu -->
                            </li>
                            <li>
                                <a href="contact.html">CONTACT</a>
                                <ul class="submenu right-submenu">
                                    <li><a href="contact.html">Contact Style 1</a></li>
                                    <li><a href="contact-v2.html">Contact Style 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- /.mainnav -->
                </div><!-- /.nav-wrap -->
            </div><!-- /.container-fluid -->
        </header><!-- /header -->
    </div><!-- /.flat-header-wrap -->
