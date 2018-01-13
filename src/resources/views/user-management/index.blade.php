@extends('layouts/default') 
{{-- Page title --}} 
@section('title') 
{{ $title }} 
@stop {{-- local styles --}} 
@section('header_styles') 

<style>
    /*
    .under{
        position:fixed;
        color:red;
        text-shadow:2px 2px 2px #212121;
        z-index:9999;
        left:40%;
        bottom:50%;
        padding:10px;
        box-shadow:3px 3px 3px #212121;
        //background-color:#FFEE58;
        border:1px solid red;
        font-size:40px;
        transform:rotate(-30deg);
        cursor:default;
    }
    */
</style>

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
            User management
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


{{--  Under construction  --}}
{{--  <div class="under">
    <i class="ti-alert"></i> under construction
</div>     --}}
{{--  Under construction  --}}



<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('userManagementCreate') }}" class="btn btn-sm btn-primary">
            <i class="fa fa-fw fa-plus"></i>
            Add new user
        </a>
    </div>
</div>
<br><br>
<div class="row">    
    <div class="col-lg-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-list"></i> User List
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
                                <th>#</th>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $key => $user)
                            <tr>
                                @if($users->currentPage() == 1)
                                    <td>{{ $key+1*$users->currentPage() }}</td>
                                @else
                                    <td>{{ $key+$users->currentPage()*$users->perPage()-$users->perPage()+1 }}</td>
                                @endif
                                
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td> 
                                <td width="50px">
                                    <a title="comming" class="btn btn-primary btn-xs" href="{{ route('userManagementShow',$user->id) }}" data-toggle="modal" data-placement="top"><span class="fa fa-fw ti-eye"></span></a>
                                </td>
                                <td width="50px">
                                    <a title="comming" class="btn btn-success btn-xs" href="{{ route('userManagementEdit',$user->id) }}" data-toggle="modal" data-placement="top"><span class="fa fa-fw ti-pencil"></span></a>
                                </td>
                                <td width="50px">
                                    <a title="comming" class="btn btn-danger btn-xs" href="{{ route('userManagementDestroy',$user->id) }}" data-toggle="modal" data-placement="top"><span class="fa fa-fw fa-times"></span></a>
                                </td>            
                            </tr>
                            @empty
                                <tr>
                                    <td colspan='7' align="center">belum ada data</td>
                                </tr>
                            @endforelse                           
                        </tbody>
                    </table>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
@stop {{-- local scripts --}} 


@section('footer_scripts') @stop
