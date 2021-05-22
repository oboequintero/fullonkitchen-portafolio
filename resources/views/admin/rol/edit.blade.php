@extends('layouts.backend')

@section('title')
    {{$title}}
@stop
@section('css')
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{$title}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{route('admin.rol.update', $row->id)}}">
                            @method('PATCH')
                            @include('admin.rol.form', ['btnText'=>'Actualizar'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
@stop
