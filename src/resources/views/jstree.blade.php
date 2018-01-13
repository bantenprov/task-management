@extends('layouts/default') {{-- Page title --}}
@section('title') Blank @stop
{{-- local styles --}}
@section('header_styles')

    <link type="text/css" href="vendors/jstree/css/style.min.css" rel="stylesheet">
    <style>
        #input_search {
            border: 1px solid #ccc;
            height: 29px;
            border-radius: 5px;
        }
        #search{
            margin-bottom: 10px;
        }
    </style>
@stop
{{-- Page Header--}}
@section('page-header')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Jstree</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{url('index')}}">
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li> Components</li>
        <li class="active">
            Jstree
        </li>
    </ol>
</section>
@stop
{{-- Page content --}}
@section('content')
        <div class="row overflow-y">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Basic tree model</h4></div>
                            <div class="panel-body">
                                <div id="html1">
                                    <ul>
                                        <li>Root node 1
                                            <ul>
                                                <li class="jstree-icon jstree-ocl" role="presentation">Child node 1</li>
                                                <li><a href="#">Child node 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Initial with child</h4></div>
                            <div class="panel-body">
                                <div id="node_1">
                                    <ul>
                                        <li class="jstree-open">Root
                                            <ul>
                                                <li>
                                                    <a href="#" class="jstree-clicked">Child</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Nested Child nodes</h4></div>
                            <div class="panel-body">
                                <div id="jstree1" class="demo">
                                    <ul>
                                        <li>Root node 1
                                            <ul>
                                                <li data-jstree='{ "selected" : true }'>
                                                    <a href="#">initially<strong>selected</strong></a></li>
                                                <li data-jstree='{ "icon" : "//jstree.com/tree-icon.png" }'>custom iconrapURL
                                                </li>
                                                <li data-jstree='{ "opened" : true }'>initially open
                                                    <ul>
                                                        <li>Another node</li>
                                                    </ul>
                                                </li>
                                                <li data-jstree='{ "icon" : "glyphicon glyphicon-leaf" }'>Custom icon class

                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="//www.jstree.com">Root node 2</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>initial state with data attribute</h4></div>
                            <div class="panel-body">
                                <div id="html4">
                                    <ul>
                                        <li data-jstree='{"opened":true,"selected":true}'>Root
                                            <ul>
                                                <li data-jstree='{"disabled":true}'>Child</li>
                                                <li data-jstree='{"icon":"//jstree.com/tree.png"}'>
                                                    Child</li>
                                                <li data-jstree='{"icon":"glyphicon glyphicon-leaf"}'>
                                                    Child</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Using check box</h4></div>
                            <div class="panel-body">
                                <div id="jstree2" class="demo" style="margin-top:2em;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">

                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Basic and draggable tree</h4></div>
                            <div class="panel-body">
                                <div id="jstree6">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4> Tree with Icons</h4></div>
                            <div class="panel-body">
                                <div id="jstree8">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Create, Rename and Deleting tree by right click
                                </h4></div>
                            <div class="panel-body">
                                <div id="jstree9">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 4.4</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Tree with search</h4></div>
                            <div class="panel-body">
                                <form id="search">
                                    <input type="search" id="input_search" class="my-3"/>
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </form>
                                <div id="jstree10">
                                    <ul>
                                        <li data-jstree='{"opened":true}'>
                                            Root node
                                            <ul>
                                                <li>Child node 1
                                                    <ul>
                                                        <li>Child node 1.1</li>
                                                        <li>Child node 1.2
                                                            <ul>
                                                                <li>Child node 1.2.1</li>
                                                                <li>Child node 1.2.2</li>
                                                            </ul>
                                                        </li>
                                                        <li>Child node 1.3</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 2
                                                    <ul>
                                                        <li>Child node 2.1</li>
                                                        <li>Child node 2.2</li>
                                                    </ul>
                                                </li>
                                                <li>Child node 3</li>
                                                <li data-jstree='{"opened":true}'>Child node 4
                                                    <ul>
                                                        <li>Child node 4.1</li>
                                                        <li>Child node 4.2</li>
                                                        <li>Child node 4.3
                                                            <ul>
                                                                <li>Child node 4.1</li>
                                                                <li>Child node 4.2</li>
                                                                <li>Child node 4.3</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading"><h4>Custom</h4></div>
                            <div class="panel-body">
                                <div id="jstree15" class="demo">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-overlay"></div>
@stop
{{-- local scripts --}}
@section('footer_scripts')
    <script src="vendors/jstree/js/jstree.min.js"></script>
    <script>
    $('#html1').jstree();
    $('#node_1').jstree();
    $('#node_2').jstree();
    $('#html4').jstree();
    $('#jstree6').jstree({
    "core": {
    "check_callback": true
    },
    "plugins": ["dnd"]
    });
    $('#jstree8').jstree({
    "types": {
    "default": {
    "icon": "fa fa-file text-primary"
    },
    "demo": {
    "icon": "fa fa-check"
    }
    },
    "plugins": ["types"]
    });
    $('#jstree9').jstree({
    "core": {
    "check_callback": true,
    },
    "plugins": ["contextmenu"]
    });
    $('#jstree10').jstree({
    "plugins": ["search"]
    });
    $("#search").submit(function(e) {
    e.preventDefault();
    $("#jstree10").jstree(true).search($("#input_search").val());
    });
    $(function () {
    $('#jstree1').jstree();
    $('#jstree2').jstree({
    'plugins': ["wholerow", "checkbox"], 'core': {
    'data': [
    {
    "text": "Same but with checkboxes",
    "children": [
    {"text": "initially selected", "state": {"selected": true}},
    {"text": "custom icon URL", "icon": "//jstree.com/tree-icon.png"},
    {"text": "initially open", "state": {"opened": true}, "children": ["Another node"]},
    {"text": "custom icon class", "icon": "glyphicon glyphicon-leaf"}
    ]
    },
    "And wholerow selection"
    ]
    }
    });
    });
    $(function () {
    $('#jstree1').jstree();
    $('#jstree2').jstree({
    'plugins': ["wholerow", "checkbox"], 'core': {
    'data': [
    {
    "text": "Same but with checkboxes",
    "children": [
    {"text": "initially selected", "state": {"selected": true}},
    {"text": "custom icon URL", "icon": "//jstree.com/tree-icon.png"},
    {"text": "initially open", "state": {"opened": true}, "children": ["Another node"]},
    {"text": "custom icon class", "icon": "glyphicon glyphicon-leaf"}
    ]
    },
    "And wholerow selection"
    ]
    }
    });
    });







// custom get json value after edit structure
// implement save json to databse
var arrayCollection = [
        {"id": "animal", "parent": "#", "text": "Animals"},
        {"id": "device", "parent": "#", "text": "Devices"},
        {"id": "dog", "parent": "animal", "text": "Dogs"},
        {"id": "lion", "parent": "animal", "text": "Lions"},
        {"id": "mobile", "parent": "device", "text": "Mobile Phones"},
        {"id": "lappy", "parent": "device", "text": "Laptops"},
        {"id": "daburman", "parent": "dog", "text": "Dabur Man", "icon": "fa fa-file text-primary"},
        {"id": "Dalmation", "parent": "dog", "text": "Dalmatian", "icon": "fa fa-file text-primary"},
        {"id": "african", "parent": "lion", "text": "African Lion", "icon": "fa fa-file text-primary"},
        {"id": "indian", "parent": "lion", "text": "Indian Lion", "icon": "fa fa-file text-primary"},
        {"id": "apple", "parent": "mobile", "text": "Apple IPhone 6", "icon": "fa fa-file text-primary"},
        {"id": "samsung", "parent": "mobile", "text": "Samsung Note II", "icon": "fa fa-file text-primary"},
        {"id": "lenevo", "parent": "lappy", "text": "Lenevo", "icon": "fa fa-file text-primary"},
        {"id": "hp", "parent": "lappy", "text": "HP", "icon": "fa fa-file text-primary"}
    ];
//console.log(JSON.stringify(arrayCollection));
//localStorage.setItem('tree',arrayCollection);
$('#jstree15').jstree({
'core' : {
'check_callback' : true,
'data' :localStorage.getItem("tree") ,

},


"plugins" : ["dnd","wholerow"]

});

$(document).on('dnd_stop.vakata', function (e, data) {
    //setTimeout(function(){
        var json = $("#jstree15").jstree(true).get_json();
        console.log(JSON.stringify(json));
        localStorage.setItem('tree',JSON.stringify(json));
        // Here I make an AJAX call to save the tree in database
    //}, 100);
});
</script>
@stop
