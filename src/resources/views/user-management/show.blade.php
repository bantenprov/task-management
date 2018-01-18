@extends('layouts/default') 
{{-- Page title --}} 
@section('title') 
{{ $title }} 
@stop 
{{-- local styles --}} 
@section('header_styles') 
<link href="{{asset('css/alertmessage.css')}}" rel="stylesheet">

@stop {{-- Page Header--}} 


@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>{{ $title }}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('userManagementIndex') }}">
                <i class="fa ti-arrow-circle-left"></i> Back
            </a>
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content') 

<div class="col-sm-12 col-md-12">
    {{-- <div>
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
    </div>  --}}    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="ti-user"></i> {{ $title }} Detail
            </h3>
            <span class="pull-right">
                <a href="{{ route('userManagementEdit',$user->id) }}"><i class="fa fa-fw ti-pencil"></i> Edit</a>
            </span>
        </div>
        <div class="panel-body">
            <p><b>Full Name</b> : {{ $user->name }}</p>
            <p><b>Email</b> : {{ $user->email }}</p>
            <p><b>Password</b> : *********</p>
            <p><b>Created</b> : {{ $user->created_at }}</p>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-12">    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="ti-user"></i> {{ $title }} Role
            </h3>
        </div>
        <div class="panel-body">
            {!! Form::open(array('route' => ['userManagementRoleUserStore',$user->id], 'method' => 'POST')) !!}
    
            <b>Select Role</b>
            <br>                        
                
                @foreach($roles as $role) 
                   @if($available_role->count() > 0)     
                        @if($available_role->first()->id == $role->id) 

                        <input type="radio" value="{{ $role->id }}" checked name="role"> {{ $role->display_name }}
                        <br>
                        @else
                        <input type="radio" value="{{ $role->id }}" name="role"> {{ $role->display_name }}
                        <br>
                        @endif 
                    @else
                        <input type="radio" value="{{ $role->id }}" name="role"> {{ $role->display_name }}
                        <br>
                    @endif

                @endforeach  
                
                <br>                  
              {{ Form::submit('Update') }}
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop {{-- local scripts --}} 


@section('footer_scripts') 
@stop