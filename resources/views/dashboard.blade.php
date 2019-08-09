@extends('layouts.app')

@push('css')
    <style>
     .card-header-custom {
            background-color: #277ed6 !important;
        }
    </style>
@endpush

@section('content')

<div class="row ">
    <div class="col-3 p-2">
        
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header-custom card-header bg-primary">Technicians</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush" style=" max-height: 200px; margin-bottom: 10px; overflow:scroll; -webkit-overflow-scrolling: touch;">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            Adrian Kim Dy  <span class="badge badge-success badge-pill"  style="padding:6px 6px 6px 6px;"> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                            Adrian Kim Dy  <span class="badge badge-success badge-pill"  style="padding:6px 6px 6px 6px;"> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Adrian Kim Dy <span class="badge badge-danger badge-pill"  style="padding:6px 6px 6px 6px;"> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Adrian Kim Dy  <span class="badge badge-danger badge-pill"  style="padding:6px 6px 6px 6px;"> </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Adrian Kim Dy <span class="badge badge-warning badge-pill"  style="padding:6px 6px 6px 6px;"> </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" style="padding-top:10px;">
            <div class="col-6">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header-custom card-header text-center" style="font-size:10px;">  <b>Technician count</b>  </div>
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:30px;"><b>5</b></p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center" style="font-size:10px;">  <b>Work Order Count</b>  </div>
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size:30px;"><b>5</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-6 p-2">
            <div id="map" style="height:130%;"></div>
    </div>
   
    <div class="col-3 p-2">
        <div class="card">
            <div class="card-header bg-success">
                Work order
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">SVO </label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
