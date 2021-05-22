@extends('layouts.backend')

@section('title')
    {{$title}}
@stop
@section('css')
@stop
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    {{$title}}
                </h3>
                <div class="block-options">
                    @can('admin.user.create')
                        <a href="{{route('admin.rol.create')}}" class="btn-block-option">
                            <i class="fas fa-plus"></i>
                        </a>
                    @endcan
                </div>
            </div>
            <div class="block-content">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Guardia</th>
                        @canany(['admin.rol.show','admin.rol.edit','admin.user.destroy'])
                            <th>Action</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @if($roles)
                        @foreach ($roles as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>{{$item->guard_name}}</td>
                                @canany(['admin.rol.show','admin.rol.edit','admin.user.destroy'])
                                    <td>
                                        <div class="btn-group">
                                            @can('admin.rol.show')
                                                <a href="{{route('admin.rol.show', $item->id)}}" class="btn btn-info btn-flat">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            @endcan
                                            @can('admin.rol.edit')
                                                <a href="{{route('admin.rol.edit', $item->id)}}" class="btn btn-primary btn-flat">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            @endcan
                                            @can('admin.rol.destroy')
                                                <form action="{{route('admin.rol.destroy', $item->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" title="delete" class="btn btn-danger btn-flat">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
@section('js')

@stop
