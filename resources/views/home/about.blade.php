@extends('layouts.home')


@section('title', 'Hakkımızda')
@include('home._header')


@section ('content')
    <div class="content" style="padding-top: 200px; padding-left: 100px;">
        <div class="section group">
            <div class="col-md-12">
                <h1>HAKKIMIZDA</h1>
                {!! $setting->aboutus !!}

            </div>
        </div>
    </div>

@endsection
