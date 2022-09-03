@extends('layouts.home')

@section('title', 'Ürün Kategorileri '.$data->title)
@include('home._header')



@section('content')
    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">{{$data->title}}</h1>
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

    <section class="flat-row main-shop shop-4col">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="shop-search clearfix">
                        <form role="search" method="get" class="search-form" action="#">
                            <label>
                                <input type="search" class="search-field" placeholder="Searching …" value="" name="s">
                            </label>
                        </form>
                    </div><!-- /.top-serach -->
                    <div class="product-content product-fourcolumn clearfix">
                        <ul class="product style2">
                            @foreach($datalist as $rs)
                            <li class="product-item">
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

                            </li>
                            @endforeach
                        </ul><!-- /.product -->
                    </div><!-- /.product-content -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
@endsection



