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
            <a href="{{ route('opdIndex') }}">
                <i class="fa ti-arrow-circle-left"></i> Back
            </a>
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content') 

<div class="col-sm-12 col-md-12">    
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="ti-user"></i> {{ $title }} Detail
            </h3>
        </div>
        <div class="panel-body">
            <p><b>Kode</b> : {{ $unit_kerja->kunker }}</p>
            <p><b>Unit Kerja</b> : {{ $unit_kerja->name }}</p>
            <p><b>Nama Jabatan</b> : {{ $unit_kerja->njab }}</p>
            <p><b>Nama Pejabat</b> : {{ $unit_kerja->npej }}</p>
            <p><b>Level</b> : {{ $unit_kerja->levelunker }}</p>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12">
        <div class="panel ">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="ti-list"></i> Staf List
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
                                <th>Staf</th>
                                <th>Project</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@if($stafs->count() > 0)
								@forelse($stafz as $staf)
	                            <tr>
	                                <td>{{$staf->getStaf->full_name}}</td>                
	                                <td>
	                                	<a href="{{ route('taskManagementProjectShow',$staf->id)}}">
	                                	{{$staf->name}}
	                                	</a>

	                                </td>
	                                <td>{{$staf->start_date}}</td>                
	                                <td>{{$staf->end_date}}</td>              
	                            </tr>
	                            @empty
	                                <tr>
	                                    <td colspan='6' align="center">belum ada data</td>
	                                </tr>
	                            @endforelse 
							@else
								<tr>
                                    <td colspan='6' align="center">belum ada data</td>
                                </tr>
                        	@endif
                        </tbody>
                    </table>
                </div>
                @if($stafs->count() > 0)
                	{{ $stafz->links() }}
                @endif
            </div>
        </div>
    </div>
@stop {{-- local scripts --}} 


@section('footer_scripts') @stop