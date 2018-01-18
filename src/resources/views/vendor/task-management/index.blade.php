@extends('layouts/default') 
{{-- Page title --}} 
@section('title') 
Task management 
@stop {{-- local styles --}} 
@section('header_styles') 
<link href="{{asset('vendors/circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('vendors/animate/animate.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/custom_css/widgets1.css')}}">
@stop {{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Task management </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li class="active">
            Task management
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

    <div class="col-lg-5 col-sm-6">
        <div class="card-box image_back">
            <div class="text-center">
                <span style="color:white"><i class="fa ti-user fa-4x"></i></span>
                <p><b>User</b>
                    <br> 
                    Total : {{ $countUser }}
                </p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card-box image_back">
            <div class="text-center">
                <span style="color:white"><i class="fa ti-user fa-4x"></i></span>
                <p><b>Member</b>
                    <br> 
                    Total : {{ $countMember }}
                </p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card-box image_back">
            <div class="text-center">
                <span style="color:white"><i class="fa ti-user fa-4x"></i></span>
                <p><b>Staf</b>
                    <br> 
                    Total : {{ $countStaf }}
                </p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="card-box image_back">
            <div class="text-center">
                <span style="color:white"><i class="fa ti-clipboard fa-4x"></i></span>
                <p><b>Task</b>
                    <br> 
                    Total : {{ $countTask }}
                </p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-sm-6">
        <div class="card-box image_back">
            <div class="text-center">
                <span style="color:white"><i class="fa ti-comment-alt fa-4x"></i></span>
                <p><b>Comment</b>
                    <br> 
                    Total : {{ $countComment }}
                </p>
                
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6">
        <div class="card-box image_back">
            <div class="text-center">
                <span style="color:white"><i class="fa ti-ruler-pencil fa-4x"></i></span>
                <p><b>Project</b>
                    <br> 
                    Total : {{ $countProject }}
                </p>
                
            </div>
        </div>
    </div>
    

@stop {{-- local scripts --}} 


@section('footer_scripts') @stop
