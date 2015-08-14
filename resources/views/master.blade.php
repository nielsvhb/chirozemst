<!DOCTYPE html>
<html>
    <head>
        <title>Chiro Tijl Zemst</title>
        <link rel="icon" type="image/png" href="{{ asset('images/logo.gif') }}">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen,projection"/>
        <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}"/>

    </head>

    <body>
        @include('nav')
        @yield('content')
        @include('footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('.modal-trigger').leanModal();
                $(".button-collapse").sideNav();
                $(".dropdown-button").dropdown();
                $('.datepicker').pickadate({
                    format: "yyyy-mm-dd",
                    today: 'Vandaag',
                    clear: 'Opnieuw',
                    close: 'Sluiten',
                    firstDay: 1,
                    closeOnSelect: true,
                    monthsFull: ['januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december'],
                    monthsShort: ['jan', 'feb', 'maa', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec'],
                    weekdaysFull: ['zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'],
                    weekdaysShort: ['zon', 'maa', 'din', 'woe', 'don', 'vrij', 'zat']
                });

            });

        </script>
    </body>
</html>
