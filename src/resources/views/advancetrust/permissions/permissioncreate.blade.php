@extends('layouts/default') 
{{-- Page title --}} 
@section('title') 
{{ $title }} 
@stop {{-- local styles --}} 
@section('header_styles') 
<link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/css/select2.min.css')}}">
<link href="{{asset('vendors/select2/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
@stop 
{{-- Page Header--}} 
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>{{ $title }}</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('permission') }}">
                <i class="fa ti-arrow-circle-left"></i> Back
            </a>
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
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-pencil"></i> Form add new permission
                </h3>
                <span class="pull-right">
                    <i class="fa fa-fw ti-angle-up clickable"></i>
                </span>
            </div>
            <div class="panel-body">
                {{--  <form action="#" class="form-horizontal">  --}}
                {!! Form::open(['route' => 'storePermission','method' => 'post','class' => 'form-horizontal']) !!}  
                    <div class="form-body">
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Permission Name
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-pencil"></i>
                                    </span>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputUsername2" placeholder="Role Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Display Name
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-pencil"></i>
                                    </span>
                                    <input type="text" name="display_name" value="{{ old('display_name') }}" class="form-control" id="inputUsername2" placeholder="Display Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="" class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea placeholder="Description" name="description" id="inputContent1" rows="3"  class="form-control resize_vertical">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="row">
                            <div class="col-sm-offset-3 col-sm-9">
                                {!! Form::submit('submit',['class' => 'btn btn-primary']) !!}
                                &nbsp;
                                <button type="reset" class="btn btn-default bttn_reset">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop {{-- local scripts --}} 


@section('footer_scripts') 

<script type="text/javascript" src="{{asset('vendors/select2/js/select2.js')}}"></script>

<script>

$("#user").select2({
    theme: "bootstrap"
});

</script>

@stop

