@extends('layouts.app')

@push('css')
    <style>
     .card-header-custom {
            background-color: #277ed6 !important;
        }
    </style>
@endpush

@section('content')
<div class="row">
    <div class="col-2 p-2">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header-custom card-header bg-primary">Technicians</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush"  style=" max-height: 200px; overflow-x:hidden; overflow-y:hidden;  overflow:scroll;">
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
    

    <div class="col-8 p-2">
        <div class="row" style="padding-bottom:10px;">
            <div class="col">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputAddress">Customer Name</label>
                            <input type="text" class="form-control form-control-sm" id="inputAddress" >
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputAddress">Phone number</label>
                            <input type="text" class="form-control form-control-sm" id="inputAddress">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control form-control-sm">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                      
                    </div>
                    <div class="form-row">
                      
                        <div class="form-group col-md-2">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control form-control-sm" id="inputCity">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputCity">SVO NO</label>
                            <input type="text" class="form-control form-control-sm" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCity">Contact name</label>
                            <input type="text" class="form-control form-control-sm" id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Allocated to</label>
                            <select id="inputState" class="form-control form-control-sm">
                                <option>...</option>
                            </select>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputState"></label>
                            <button type="button" id="btnnearby" class="btn btn-danger btn-xs btn-block">View nearby</button>
                        </div>
                                          
                    </div>
                </form>
            </div>
        </div>
        
        <div id="map" style="height:100%; width:100%"></div>
    </div>
  
    <div class="col-2 p-2">
    <div id="pano" style="height:60%; width:100%"></div>
        <div class="card">
            <div class="card-header bg-success">
                Work order
            </div>
            <div class="card-body">
                 <ul class="list-group list-group-flush" style=" max-height: 200px; overflow:scroll; overflow-x:hidden; overflow-y:hidden;">
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



@endsection


@push('js')

<script>
    var map;
    var locations = [
    ['Adrian Kim Dy', 33.779423, -118.109905, 4],
    ['Mia Caram Garcia', 33.718246, -118.114358, 5],
    ['Nicole Canete', 33.728769, -118.118609, 3],
    ['Bronson Deguzman', 33.781950, -118.116780, 2],
    ['Eric Dobbins', 33.781950, -118.117780, 1],
    ];


    function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 33.7583303, lng: -118.186332588},
        zoom: 12
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

        for (i = 0; i < locations.length; i++) {  
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                
                $('.techname').text(locations[i][0])
                $('#techdetails').modal('show');
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
                }
            })(marker, i));
            }

        var fenway = {lat: 42.345573, lng: -71.098326};
        var panorama = new google.maps.StreetViewPanorama(
        document.getElementById('pano'), {
                position: fenway,
                pov: {
                heading: 34,
                pitch: 10
                }
            });
        map.setStreetView(panorama);

    } 
    
</script>

<script>
    $('#btnnearby').on('click', function() {
        $('#viewnearbymodal').modal('show')
    })
    $('#viewnearbymodal').on('shown.bs.modal', function() {
        mapnearby = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 33.7583303, lng: -118.186332588},
            zoom: 12
        });
     });
</script>

@endpush