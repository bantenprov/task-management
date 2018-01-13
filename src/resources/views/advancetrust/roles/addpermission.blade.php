
 {{--  <a href="{{ route('role') }}">Back</a>   

    <h3>Role : {{ $role->name }}</h3>
   
    
    {{ Form::label('name','Role name :') }}
    {{ Form::text('name',$role->name) }}    
    <br> 
    {{ Form::label('description','Descriptio :') }}
    {{ Form::text('description',$role->description) }}           
    <br>
    {{ Form::label('display_name','Display name :') }}
    {{ Form::text('display_name',$role->display_name) }}   
    <br>
    <br>

    {!! Form::open(array('route' => ['storeRolePermission',$role->id], 'method' => 'POST')) !!}
    
    <b>Select permission</b>
    <br>
      <input type="checkbox" onchange="checkAll(this)" id="select_all">All<br>            
        
        @foreach($permissions as $permission) 
                    
          @if(in_array($permission->id,$available_permissions))     
            <input type="checkbox" value="{{ $permission->id }}" checked name="permission[]"> {{ $permission->name }}
            <br>
          @else
            <input type="checkbox" value="{{ $permission->id }}" name="permission[]"> {{ $permission->name }}
            <br>
          @endif          
        @endforeach  
        
        <br>                  
      {{ Form::submit('Update') }}
    {{ Form::close() }}
    <script>    
    function checkAll(ele) {
        var checkboxes = document.getElementsByTagName('input');
        if (ele.checked) {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = true;
                }
            }
        } else {
            for (var i = 0; i < checkboxes.length; i++) {
                console.log(i)
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = false;
                }
            }
        }
    }    
  </script>  --}}   


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
            <a href="{{ route('role') }}">
                <i class="fa ti-arrow-circle-left"></i> Back
            </a>
        </li>
    </ol>
</section>
@stop {{-- Page content --}} 

@section('content')  
<div class="col-sm-12 col-md-12">    
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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="ti-notepad"></i> {{ $title }} Detail
            </h3>
        </div>
        <div class="panel-body">
            <p><b>Role Name</b> : {{ $role->name }}</p>
            <p><b>Display Name</b> : {{ $role->display_name }}</p>
            <p><b>Description</b> : {{ $role->description }}</p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="panel ">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="ti-key"></i> Permission list
            </h3>
            <span class="pull-right">
                <i class="fa fa-fw ti-angle-up clickable"></i>
            </span>
        </div>
        <div class="panel-body">
            {!! Form::open(array('route' => ['storeRolePermission',$role->id], 'method' => 'POST')) !!}
    
            <b>Select permission</b>
            <br>
              <input type="checkbox" onchange="checkAll(this)" id="select_all">All<br>            
                
                @foreach($permissions as $permission) 
                            
                  @if(in_array($permission->id,$available_permissions))     
                    <input type="checkbox" value="{{ $permission->id }}" checked name="permission[]"> {{ $permission->display_name }}
                    <br>
                  @else
                    <input type="checkbox" value="{{ $permission->id }}" name="permission[]"> {{ $permission->display_name }}
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



<script>    

    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).attr('link')).select();
        document.execCommand('copy');
        $temp.remove();
    }

    $(document).ready(function(){
  
        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
        
            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e){
            if (e < onStar) {
                $(this).addClass('hover');
            }
            else {
                $(this).removeClass('hover');
            }
            });
            
        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
            $(this).removeClass('hover');
            });
        });
    
    
        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            //console.log($(this).parent());
            for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
            }
            
            for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
            }
            
            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
                val = ratingValue;  
                cmdi = $(this).parent().attr('cmid') ;
                $(this).parent().css('pointer-events','none');
            }
            else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                val = ratingValue;  
                cmdi = $(this).parent().attr('cmid') ;
                $(this).parent().css('pointer-events','none');
            }
            //console.log(cmdi);
            var url = '{{ route('ajaxTest',[':id',':cmid']) }}';
            var replace_url = url.replace(':id',val);
            var storeUrl = replace_url.replace(':cmid',cmdi);
            console.log(storeUrl);
            $.ajax({
                type: "get",
                url: storeUrl,
                data: "text",
                dataType: "json",
                success: function (response) {
                    console.log(response.msgs);
                    window.location.reload();
                }
            });
        });
    
    
    });

    $("#file2").change(function(){
        var filename = $("#file2").val();
        $("#filename").html(filename);


    });


    function responseMessage(msg) {
        $('.success-box').fadeIn(200);  
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
    }

    function checkAll(ele) {
        var checkboxes = document.getElementsByTagName('input');
        if (ele.checked) {
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = true;
                }
            }
        } else {
            for (var i = 0; i < checkboxes.length; i++) {
                console.log(i)
                if (checkboxes[i].type == 'checkbox') {
                    checkboxes[i].checked = false;
                }
            }
        }
    }    

</script>

@stop


