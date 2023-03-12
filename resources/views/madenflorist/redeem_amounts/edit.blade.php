@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Edit Redeem Amount</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>English Name</label>
                                    <input type="text" name="english_name" class="form-control" placeholder="15 Riyal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Arabic Name</label>
                                    <input type="text" name="arabic_name" class="form-control" placeholder="15 Riyal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="number" name="amount" class="form-control" placeholder="15">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('redeem-amounts.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                            <button type="Submit" class="btn btn-maden">Save Changes</button>
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