@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-header">Add FAQ</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>English Question</label>
                                    <input type="text" name="english_question" class="form-control" placeholder="Enter the question">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>English Answer</label>
                                    <input type="text" name="english_answer" class="form-control" placeholder="Enter the answer">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Arabic Question</label>
                                    <input type="text" name="arabic_question" class="form-control" placeholder="Enter the question">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Arabic Answer</label>
                                    <input type="text" name="arabic_answer" class="form-control" placeholder="Enter the answer">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('faqs.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                            <button type="Submit" class="btn btn-maden">Add FAQs</button>
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