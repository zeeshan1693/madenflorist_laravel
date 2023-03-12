@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Customer Details</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>Customer Info</strong></span> 
                        <button type="button" class="btn btn-maden pull-right"><i class="fa fa-shopping-cart"></i> Orders(20)</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Verified?</th>
                                    <th>Registered</th>
                                    <th>Account Deleted?</th>
                                    <th>Reason For Deletion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Zeeshan</td>
                                    <td>m.zeeshan@sao.sa.com</td>
                                    <td>966 5503545xx</td>
                                    <td>No</td>
                                    <td>2022-11-20 12:00:00</td>
                                    <td>Yes</td>
                                    <td>Test</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>Wallet Amount : 100 SAR</strong></span> 
                        <button type="button" class="btn btn-maden pull-right"><i class="fa fa-wallet"></i> Add Wallet Amount</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Verified?</th>
                                    <th>Registered</th>
                                    <th>Account Deleted?</th>
                                    <th>Reason For Deletion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Zeeshan</td>
                                    <td>m.zeeshan@sao.sa.com</td>
                                    <td>966 5503545xx</td>
                                    <td>No</td>
                                    <td>2022-11-20 12:00:00</td>
                                    <td>Yes</td>
                                    <td>Test</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>Petals Point</strong></span> 
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Points</th>
                                    <th>Method</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15/12/2022</td>
                                    <td>10 Points</td>
                                    <td>Mada</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>Saved Addresses</strong></span> 
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Landmark</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Uday</td>
                                    <td>#24 Dummy House</td>
                                    <td>Near Hotel</td>
                                    <td>Riyadh</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>User Occasions</strong></span> 
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Customer Name</th>
                                    <th>Occasion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>15/02/2022</td>
                                    <td>Zeeshan</td>
                                    <td>Birthday</td>
                                </tr>
                            </tbody>
                        </table>
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