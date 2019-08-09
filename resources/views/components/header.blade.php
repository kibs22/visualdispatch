<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('css/images/logo.png') }}" />
    <title>Visual Dispatch</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/default.min.css"/>
    <style>
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
        width: 100%;
        }    

        /* change the background color */
        .navbar-custom {
        background-color: #277ed6 !important;
        }
        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
        color: rgba(255,255,255,.8);
        }
        /* change the link color */
        .navbar-custom .navbar-nav .nav-link {
        color: rgba(255,255,255,.5);
        }
        /* change the color of active or hovered links */
        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:focus .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
        color: #ffffff;
        }
    </style>
    @stack('css')
</head>

