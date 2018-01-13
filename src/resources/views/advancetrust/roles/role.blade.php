@extends('layouts/default') 
{{-- Page title --}} 
@section('title') 
{{ $title }} 
@stop {{-- local styles --}} 
@section('header_styles') 
@stop 
{{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>{{ $title }}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li class="active">
            Role
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content') 

<div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul style="padding:0;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('message'))
    <div class="alert alert-success">
        <ul style="padding:0;">
            <li>{{ session()->get('message') }}</li>
        </ul>
    </div>
@endif
</div>   

<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('role_create') }}" class="btn btn-sm btn-primary">
            <i class="fa fa-fw fa-plus"></i>
            Add new Role
        </a>
    </div>
</div>
<br><br>
<div class="row">    
    <div class="col-lg-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-list"></i> Role List
                </h3>
                <span class="pull-right">
                    <i class="fa fa-fw ti-angle-up clickable"></i>
                </span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Display name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->description }}</td>
                                <td width="200px">
                                  <a class="btn btn-xs btn-primary" href="{{ route('role_show',$role->id) }}"><i class="fa fa-eye"></i></a>
                                  <a class="btn btn-xs btn-success" href="{{ route('role_edit',$role->id) }}"><i class="fa fa-pencil"></i></a> 
                                  <a class="btn btn-xs btn-warning" href="{{ route('role_add_permission',$role->id) }}"><i class="fa fa-plus"></i> permission</a>
                                  <a class="btn btn-xs btn-danger" href="{{ route('role_destroy',$role->id) }}"><i class="fa fa-times"></i></a>
                                </td>           
                            </tr>
                            @empty
                                <tr>
                                    <td colspan='5' align="center"><b>belum ada data</b></td>
                                </tr>
                            @endforelse                           
                        </tbody>
                    </table>
                </div>
                {{ $roles->links() }}
            </div>
        </div>
    </div>
</div>

@stop {{-- local scripts --}} 


@section('footer_scripts') @stop


