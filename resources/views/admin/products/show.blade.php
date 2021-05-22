@extends('layouts.backend')

@section('title')
    {{$title}}
@stop
@section('css')
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h3 class="card-title">Listado de {{$title}}</h3>
                            <div class="btn-group ml-auto">
                                @can('admin.rol.edit')
                                    <a href="{{route('admin.rol.edit', $row->id)}}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                @endcan
                                @can('admin.rol.destroy')
                                <form action="{{route('admin.rol.destroy', $row->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" class="btn btn-danger btn-flat">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                @endcan
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h2 class="display-2">{{$product->title}} ({{$product->stock}})</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-success btn-lg">Purchase</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="card">
                                        <img src="{{$product->picture}}" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$product->title}}</h5>
                                            <p class="card-text">{{$product->details}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')

@stop

