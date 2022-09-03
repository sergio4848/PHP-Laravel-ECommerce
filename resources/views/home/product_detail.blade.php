@extends('layouts.home')

@section('title', 'Ürün Detayları '.$data->title)

@section('description'){{$data->description}}@endsection

@section('keywords',$data->description)
@include('home._header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@livewireStyles
<style>
    .checked {
        color: orange;
    }
</style>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>

@section('content')

    @php
        $avgrev=\App\Http\Controllers\HomeController::avrgreview($data->id);
        $countreview=\App\Http\Controllers\HomeController::countreview($data->id);
    @endphp


    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Woolen T-Shirt</h1>
                    </div><!-- /.page-title-heading -->
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="/">Home</a></li>

                        </ul>
                    </div><!-- /.breadcrumbs -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.page-title -->

    <section class="flat-row main-shop shop-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrap-flexslider">
                        <div class="inner">
                            <div class="flexslider style-1 has-relative">
                                <ul class="slides">
                                    <li data-thumb="{{ Storage::url($data->image) }}">
                                        <img src="{{ Storage::url($data->image) }}" alt="Image">
                                        <div class="flat-icon style-1">
                                            <a href="{{ Storage::url($data->image) }}" class="zoom-popup"><span class="fa fa-search-plus"></span></a>
                                        </div>
                                    </li>
                                    @foreach($images as $rs)
                                    <li data-thumb="{{ Storage::url($rs->image) }}">
                                        <img src="{{ Storage::url($rs->image) }}" alt="Image">
                                        <div class="flat-icon style-1">
                                            <a href="{{ Storage::url($rs->image) }}" class="zoom-popup"><span class="fa fa-search-plus"></span></a>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div><!-- /.flexslider -->
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="product-detail">
                        <div class="inner">
                            <div class="content-detail">
                                <h2 class="product-title">{{$data->title}}</h2>
                                <div class="flat-star style-1">
                                    <i class="fa fa-star @if ($avgrev>0) checked @endif"></i>
                                    <i class="fa fa-star @if ($avgrev>1) checked @endif"></i>
                                    <i class="fa fa-star @if ($avgrev>2) checked @endif"></i>
                                    <i class="fa fa-star @if ($avgrev>3) checked @endif"></i>
                                    <i class="fa fa-star @if ($avgrev>4) checked @endif"></i>
                                    <span>({{$countreview}})</span>
                                </div>

                                <div class="price">

                                    <ins><span class="amount">₺{{$data->price}}</span></ins>
                                </div>

                                @include('home.message')

                                <form class="product-quantity" action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="quantity">
                                        <input type="number" name="quantity" value="1" max="{{$data->quantity}}" class="quantity-number">
                                        <span class="inc quantity-button">+</span>
                                        <span class="dec quantity-button">-</span>
                                    </div>
                                    <div class="add-to-cart">
                                        <button type="submit">SEPETE EKLE</button>
                                    </div>

                                </form>
                                <div class="product-categories">
                                    <span>Categories: </span><a href="#">Men,</a> <a href="#">Shoes</a>
                                </div>
                                <div class="product-tags">
                                    <span>Tags: </span><a href="#">Dress,</a> <a href="#">Fashion,</a> <a href="#">Furniture,</a> <a href="#">Lookbok</a>
                                </div>
                                <ul class="flat-socials">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.product-detail -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <section class="flat-row shop-detail-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-tabs style-1 has-border">
                        <div class="inner">
                            <ul class="menu-tab">
                                <li class="active">Description</li>
                                <li>Additional information</li>
                                <li>Reviews</li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner">
                                    <div class="flat-grid-box col2 border-width border-width-1 has-padding clearfix">
                                        {!! $data->detail !!}
                                    </div><!-- /.flat-grid-box -->
                                </div><!-- /.content-inner -->
                                <div class="content-inner">
                                    <div class="inner max-width-40">
                                        <table>
                                            <tr>
                                                <td>Weight</td>
                                                <td>1.73 kg</td>
                                            </tr>
                                            <tr>
                                                <td>Dimensions</td>
                                                <td>100 x 37 x 100 cm</td>
                                            </tr>
                                            <tr>
                                                <td>Materials</td>
                                                <td>80% cotton, 20% linen</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>One Size, XL, L, M, S</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div><!-- /.content-inner -->
                                <div class="content-inner">
                                    <div class="inner max-width-83 padding-top-33">
                                        <ol class="review-list">
                                            @foreach($reviews as $rs)
                                            <li class="review">
                                                <div class="text-wrap">
                                                    <div class="review-meta">
                                                        <h5 class="name">{{$rs->user->name}}</h5>
                                                        <div class="flat-star style-1">
                                                            <i class="fa fa-star @if ($rs->rate>0) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>1) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>2) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>3) checked @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate>4) checked @endif"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-text">
                                                        <p>{{$rs->review}}</p>
                                                    </div>
                                                </div>
                                            </li><!--  /.review    -->
                                            @endforeach
                                        </ol><!-- /.review-list -->
                                        <div class="comment-respond review-respond" id="respond">
                                            <div class="comment-reply-title margin-bottom-14">
                                                <h5>Write a review</h5>
                                                <p>Your email address will not be published. Required fields are marked *</p>
                                            </div>
                                            <form novalidate="" class="comment-form review-form" id="commentform" method="post" action="{{route('sendreview',['id'=>$data->id,'slug'=>$data->slug])}}">
                                                @csrf
                                                <div class="rate">
                                                    <input type="radio" name="rate" id="star5"  value="5" />
                                                    <label for="star5" title="text">5 stars</label>
                                                    <input type="radio" name="rate" id="star4"  value="4" />
                                                    <label for="star4" title="text">4 stars</label>
                                                    <input type="radio" name="rate" id="star3"  value="3" />
                                                    <label for="star3" title="text">3 stars</label>
                                                    <input type="radio" name="rate" id="star2"  value="2" />
                                                    <label for="star2" title="text">2 stars</label>
                                                    <input type="radio" name="rate" id="star1"  value="1" />
                                                    <label for="star1" title="text">1 star</label>
                                                </div>
                                                <p class="comment-form-comment">
                                                    <label>Review*</label>
                                                    <textarea class="" tabindex="4"  name="review" id="review" required> </textarea>
                                                </p>

                                                <p class="form-submit">
                                                    <button class="comment-submit">Submit</button>
                                                </p>
                                            </form>

                                            <style>*{
                                                    margin: 0;
                                                    padding: 0;
                                                }
                                                .rate {
                                                    float: left;
                                                    height: 46px;
                                                    padding: 0 10px;
                                                }
                                                .rate:not(:checked) > input {
                                                    position:absolute;
                                                    top:-9999px;
                                                }
                                                .rate:not(:checked) > label {
                                                    float:right;
                                                    width:1em;
                                                    overflow:hidden;
                                                    white-space:nowrap;
                                                    cursor:pointer;
                                                    font-size:30px;
                                                    color:#ccc;
                                                }
                                                .rate:not(:checked) > label:before {
                                                    content: '★ ';
                                                }
                                                .rate > input:checked ~ label {
                                                    color: #ffc700;
                                                }
                                                .rate:not(:checked) > label:hover,
                                                .rate:not(:checked) > label:hover ~ label {
                                                    color: #deb217;
                                                }
                                                .rate > input:checked + label:hover,
                                                .rate > input:checked + label:hover ~ label,
                                                .rate > input:checked ~ label:hover,
                                                .rate > input:checked ~ label:hover ~ label,
                                                .rate > label:hover ~ input:checked ~ label {
                                                    color: #c59b08;
                                                }
                                            </style>
                                        </div><!-- /.comment-respond -->
                                    </div>
                                </div><!-- /.content-inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.shop-detail-content -->

@endsection
