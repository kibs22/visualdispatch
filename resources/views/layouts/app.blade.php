<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
     @include('components.header')
        <body>
        @include('components.navbar')
        <div class="container-fluid">
            @yield('content')
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="techdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Technician details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card text-center">
                        <div class="card-body">
                        <img src="{{ url('css/images/logo.png') }}" alt="Nature" class="rounded-circle mx-auto d-block" height="250" width="200"> 
                            <h5 class="card-title techname"></h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>


            <!-- Modal -->
        <div class="modal fade" id="viewnearbymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="map" style="height:100%; width:100%"></div>
                        </div>
                    </div>
                </div>
            </div>

        @include('components.footer')
        

    </body>
</html>
