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
            <a href="{{ route('opdIndex') }}">
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
                    <i class="ti-pencil"></i> Form add child
                </h3>
                <span class="pull-right">
                    <i class="fa fa-fw ti-angle-up clickable"></i>
                </span>
            </div>
            <div class="panel-body">
                {{--  <form action="#" class="form-horizontal">  --}}
                {!! Form::open(['route' => ['opdAddChildStore',$unit_kerja->id],'method' => 'post','class' => 'form-horizontal']) !!}  
                    <div class="form-body">
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Parrent
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>                                    
                                    <input type="hidden" name="root" value="{{ $unit_kerja->id }}" >
                                    <input type="text" value="{{ $unit_kerja->kunker }} - {{ $unit_kerja->name }}" class="form-control" id="inputUsername2" placeholder="" disabled="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Kode Unit Kerja
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>
                                    <input type="text" name="c_kunker" value="{{ old('c_kunker') }}" class="form-control" id="inputUsername2" placeholder="Kode Unit Kerja">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Nama Unit Kerja
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>
                                    <input type="text" name="c_name" value="{{ old('c_name') }}" class="form-control" id="inputUsername2" placeholder="Nama Unit Kerja">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Level Unit Kerja
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-world"></i>
                                    </span>
                                    <select id="levelunker" name="c_levelunker" class="form-control">
                                        <option value="" selected disabled>-Level Unker-</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Nama Jabatan
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>
                                    <input type="text" name="c_njab" value="{{ old('c_njab') }}" class="form-control" id="inputUsername2" placeholder="Nama Jabatan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Nama Pejabat
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>
                                    <input type="text" name="c_npej" value="{{ old('c_npej') }}" class="form-control" id="inputUsername2" placeholder="Nama Pejabat">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Kode Unit Kerja Simral
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>
                                    <input type="text" name="c_kunker_simral" value="{{ old('c_kunker_simral') }}" class="form-control" id="inputUsername2" placeholder="Kode Unit Kerja Simral">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-t-10">
                            <label for="inputUsername1" class="col-sm-3 control-label">
                                Kode Unit Kerja Sinjab
                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-fw ti-id-badge"></i>
                                    </span>
                                    <input type="text" name="c_kunker_sinjab" value="{{ old('c_kunker_sinjab') }}" class="form-control" id="inputUsername2" placeholder="Kode Unit Kerja Sinjab">
                                </div>
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

$("#levelunker").select2({
    theme: "bootstrap"
});

</script>

@stop
