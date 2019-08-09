<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

    } 
    
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkQEOYNBe30hGMcEEx_K-FYffyZnZGcH4&callback=initMap"
async defer></script>

<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
 $('#logout').on('click', function() {
    Swal.fire({
    title: 'Logout?',
    text: "",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, logout'
    }).then((result) => {
        if (result.value) {
            window.location.href = "{{ route('logout') }}"
        }
    })
 })
</script>

@stack('js')