@extends('layouts.home')



@section('title', 'Ana Sayfa | ')
@section('description')

@endsection


@include('home._header')

@include('home._slider')
@section ('content')
    <!-- PRODUCT -->
    <section class="flat-row main-shop style1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-top-menu margin-bottom-58">
                        <ul class="flat-filter style-2">
                            <li class="active"><a href="#" data-filter="*">All Products</a></li>
                            <li><a href="#" data-filter=".kid">Best Sellers </a></li>
                            <li><a href="#" data-filter=".man">New Products</a></li>
                            <li><a href="#" data-filter=".woman">Sales Products</a></li>
                        </ul>
                        <div class="filter-shop icon-right">
                            <ul class="flat-filter-search">
                                <li class="filter-list">
                                    <a class="show-filter">Filters</a>
                                </li>
                            </ul>
                        </div><!-- /.filte-shop -->
                    </div>
                    <div class="box-filter slidebar-shop clearfix">
                        <div class="btn-close"><a><i class="fa fa-times"></i></a></div>
                        <div class="widget widget-sort-by">
                            <h5 class="widget-title">
                                Sort By
                            </h5>
                            <ul>
                                <li><a href="#" class="active">Default</a></li>
                                <li><a href="#">Popularity</a></li>
                                <li><a href="#">Average rating</a></li>
                                <li><a href="#">Newness</a></li>
                                <li><a href="#">Price: low to high</a></li>
                                <li><a href="#">Price: high to low</a></li>
                            </ul>
                        </div><!-- /.widget-sort-by -->
                        <div class="widget widget-price">
                            <h5 class="widget-title">Price</h5>
                            <ul>
                                <li><a href="#" class="active">$0.00 - $50.00</a></li>
                                <li><a href="#">$50.00 - $100.00</a></li>
                                <li><a href="#">$100.00 - $150.00</a></li>
                                <li><a href="#">$150.00 - $200.00</a></li>
                                <li><a href="#">$200.00 - 250.00</a></li>
                                <li><a href="#">250.00+</a></li>
                            </ul>
                        </div><!-- /.widget -->
                        <div class="widget widget-color">
                            <h5 class="widget-title">
                                Colors
                            </h5>
                            <ul class="flat-color-list icon-left">
                                <li><a href="#" class="yellow"></a><span>Yellow</span></li>
                                <li><a href="#" class="pink"> </a><span>White</span></li>
                                <li><a href="#" class="red active"></a><span>Red</span> </li>
                                <li><a href="#" class="black"></a><span>Black</span></li>
                                <li><a href="#" class="blue"></a><span>Green</span></li>
                                <li><a href="#" class="khaki"></a><span>Orange</span></li>
                            </ul>
                        </div><!-- /.widget-color -->
                        <div class="widget widget-size">
                            <h5 class="widget-title">Size</h5>
                            <ul>
                                <li><a href="#">L</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">XL</a></li>
                                <li><a href="#">XXL</a></li>
                                <li><a href="#">Over Size</a></li>
                            </ul>
                        </div><!-- /.widget -->
                        <div class="widget widget_tag">
                            <h5 class="widget-title">
                                Tags
                            </h5>
                            <div class="tag-list">
                                <a href="#">All products</a>
                                <a href="#" class="active">Bags</a>
                                <a href="#">Chair</a>
                                <a href="#">Decoration</a>
                                <a href="#">Fashion</a>
                                <a href="#">Tie</a>
                                <a href="#">Furniture</a>
                                <a href="#">Accesories</a>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.box-filter -->
                    <div class="product-content product-fourcolumn clearfix">
                        <ul class="product style2 isotope-product clearfix">
                            @foreach($erdem as $rs)
                            <li class="product-item kid woman">
                                <div class="product-thumb clearfix">
                                    <a href="#">
                                        <img src="{{ Storage::url($rs->image) }}" alt="image">
                                    </a>
                                </div>
                                <div class="product-info clearfix">
                                    <span class="product-title">{{$rs->title}}</span>
                                    <div class="price">
                                        <ins>
                                            <span class="amount">{{$rs->price}}₺</span>
                                        </ins>
                                    </div>

                                </div>
                                <div class="add-to-cart text-center">
                                    <a href="{{route('product',['id' => $rs->id,'slug' => $rs->slug])}}">ÜRÜNÜ İNCELE</a>
                                </div>
                                <a href="#" class="like"><i class="fa fa-heart-o"></i></a>
                            </li>
                            @endforeach
                        </ul>
                        <div class="elm-btn text-center">
                            <a href="#" class="themesflat-button outline ol-accent margin-top-40">LOAD MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->

    <section class="flat-row mail-chimp">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text">
                        <h3>Sign up for Send Newsletter</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="subscribe clearfix">
                        <form action="#" method="post" accept-charset="utf-8" id="subscribe-form">
                            <div class="subscribe-content">
                                <div class="input">
                                    <input type="email" name="subscribe-email" placeholder="Your Email">
                                </div>
                                <div class="button">
                                    <button type="button">SUBCRIBE</button>
                                </div>
                            </div>
                        </form>
                        <ul class="flat-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul><!-- /.flat-social -->
                    </div><!-- /.subscribe -->
                </div>
            </div>
        </div>
    </section><!-- /.mail-chimp -->

@endsection

