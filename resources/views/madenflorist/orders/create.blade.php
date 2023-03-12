@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Card Preview</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-maden pull-right">Print</button> 
                                <div class="container-card">
                                    <img src="{{ asset('assets/admin-img/maden-card.JPG') }}" alt="Snow" >
                                    <div class="bottom-right">
                                        <img src="{{ asset('assets/admin-img/qr-code.png') }}" width="100" height="100"/>
                                    </div>
                                    <div class="centered">
                                        <p>Uday</p>
                                        <p>Wishing You A Happy New Year!</p>
                                        <p>Afroz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('page-styles')
@stop

@section('page-script')
@stop