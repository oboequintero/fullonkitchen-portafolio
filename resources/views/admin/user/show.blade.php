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
                    {{$title}}<small>Get Started</small>
                </h3>
                <div class="block-options">
                    @can('admin.user.create')
                        <a href="{{route('admin.users.create')}}" class="btn-block-option">
                            <i class="fas fa-plus"></i>
                        </a>
                    @endcan
                </div>
            </div>
            <div class="block-content">
                <div class="row my-3">
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile.user.img img-fluid img-circle" src="{{ auth()->user()->profile_photo_url}}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{$user->name}}</h3>
                                <p class="text-muted text-center">{{$user->email}}</p>
                            </div>
                        </div>
                    </div>
                    @if (auth()->user()->can('admin.user.edit') ||
                        auth()->user()->can('admin.assign.roles') ||
                        auth()->user()->can('admin.assign.permissions'))
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        @can(['admin.user.edit'])
                                            <li class="nav-item"><a class="nav-link active" href="#actualizar" data-toggle="tab">Actualizar</a></li>
                                        @endcan
                                        @can(['admin.assign.roles'])
                                            <li class="nav-item"><a class="nav-link" href="#roles" data-toggle="tab">Roles</a></li>
                                        @endcan
                                        @can('admin.assign.permissions')
                                            <li class="nav-item"><a class="nav-link" href="#permisos" data-toggle="tab">Permisos</a></li>
                                        @endcan
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        @can(['admin.user.edit'])
                                            <div class="active tab-pane" id="actualizar">
                                                <form action="{{route('admin.users.update', $user->id )}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="row">
                                                        <div class="form-group col-6 col-md-6 col-sm-12">
                                                            <label for="name">Nombre</label>
                                                            <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}" id="name">
                                                        </div>
                                                        <div class="form-group col-6 col-md-6 col-sm-12">
                                                            <label for="email">Email</label>
                                                            <input type="text" class="form-control" name="email" value="{{old('email',$user->email)}}" id="email">
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                                                </form>
                                            </div>
                                        @endcan
                                        @can(['admin.assign.roles'])
                                            <div class="tab-pane" id="roles">
                                                <form action="{{route('users.role', $user->id )}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        @foreach($roles as $role)
                                                            <div class="form-check">
                                                                <input class="form-check-input"
                                                                       name="roles[]"
                                                                       @if($user->hasRole($role->id)) checked  @endif
                                                                       value="{{old('roles',$role->id)}}"
                                                                       type="checkbox">

                                                                <label class="form-check-label">{{$role->name}}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                                </form>
                                            </div>
                                        @endcan
                                        @can('admin.assign.permissions')
                                            <div class="tab-pane" id="permisos">
                                                <form class="form-horizontal" action="{{route('users.permission', $user->id )}}" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <div class="form-group">
                                                        @foreach($permissions as $p)
                                                            <div class="form-check">
                                                                <input class="form-check-input" name="permissions[]"
                                                                       @if($user->hasPermissionTo($p->id)) checked @endif
                                                                       value="{{old('permission',$p->id)}}" type="checkbox">
                                                                <label class="form-check-label">{{$p->description}}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                                                </form>
                                            </div>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                @endif

                </div>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
@section('js')

@stop
