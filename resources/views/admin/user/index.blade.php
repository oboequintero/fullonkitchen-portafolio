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
                        <a href="{{route('admin.users.create')}}" class="btn-block-option">
                            <i class="fas fa-plus"></i>
                        </a>
                    @endcan
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
                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        @canany(['admin.user.show', 'admin.user.destroy'])
                            <th>Action</th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @if($users)
                        @foreach ($users as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                @canany(['admin.user.edit', 'admin.user.destroy'])
                                    <td>
                                        <div class="btn-group">
                                            @can('admin.user.edit')
                                                <a href="{{route('admin.users.show', $item->id)}}" class="btn btn-info btn-flat">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            @endcan
                                            @can('admin.user.destroy')
                                                <form action="{{route('admin.users.destroy', $item->id)}}" method="POST">
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
