@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Categories</h1>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="text-right">
                    <a href="{{ route('categories.create') }}"><button type="button" class="btn btn-maden">Add New Category</button></a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                @if(session('message_success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('message_success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fas fa-times"></span></button>
                    </div>
                @endif

                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        {!! $dataTable->table(['class' => 'table table-bordered table-hover text-center','style' => 'width:100%']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-styles')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('page-script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
{!! $dataTable->scripts() !!}
@stop