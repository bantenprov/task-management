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
            OPD
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
    <div class="alert alert-danger">
        <ul style="padding:0;">
            <li>{{ session()->get('message') }}</li>
        </ul>
    </div>
@endif
</div>   

<div class="row">
    <div class="col-lg-12">
        <a href="{{ route('opdCreate_root') }}" class="btn btn-sm btn-primary">
            <i class="fa fa-fw fa-plus"></i>
            Add new
        </a>
    </div>
</div>
<br><br>
<div class="row">    
    <div class="col-lg-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-list"></i> OPD List
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
                                <th>Kode</th>
                                <th>Unit Kerja</th>
                                <th>Nama Jabatan</th>
                                <th>Nama Pejabat</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($opds as $opd)
                            <tr>
                                <td><a href="{{ route('opdShow',$opd->id) }}">{{$opd->kunker}}</a></td>                
                                <td>{{$opd->name}}</td>
                                <td>{{$opd->njab}}</td>                
                                <td>{{$opd->npej}}</td>
                                <td>{{$opd->levelunker}}</td>
                                <td width="50px">
                                    <a class="btn btn-primary btn-xs" href="{{ route('opdAddChild',$opd->id)}}" data-toggle="modal" data-placement="top"><span class="fa fa-fw ti-plus"></span> add child</a>
                                </td>            
                            </tr>
                            @empty
                                <tr>
                                    <td colspan='6' align="center">belum ada data</td>
                                </tr>
                            @endforelse                           
                        </tbody>
                    </table>
                </div>
                {{ $opds->links() }}
            </div>
        </div>
    </div>
</div>

@stop {{-- local scripts --}} 


@section('footer_scripts') @stop
