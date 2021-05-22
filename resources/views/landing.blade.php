@extends('layouts.app')

@section('content')
 <!-- Page Content -->
 <div class="content">
    <!-- Your Block -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Title <small>Get Started</small>
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                    <i class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <p>
                Create your own awesome project!
                <div class="row">
            <div class="col">
                <ul class="list-group">
                    @foreach($pruebarray as $pruebarrayr)

                            {{$pruebarrayr['name']}}
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
            </p>
            <div class="container-fluid">
<div class="row">
    <div class="col-2">
        <div class="row">
            <div class="col">
                <h2>Categories</h2>
            </div>
        </div>

          <div class="row">
            <div class="col">
                <ul class="list-group">

                </ul>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <ul class="list-group">
                    @foreach($categories as $category)

                            {{$category->title}}
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="row">
            <div class="col">
                <h2 class="display-2">Products</h2>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-4">

                        <div class="card">
                            <img src="{{$product->picture}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}} ({{$product->stock}})</h5>
                                <p class="card-text">{{$product->details}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</div>
</div>
@endsection
