<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weigh-Till Manager Customers</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <!---*** Start: JQuery 3.3.1 version. ***--->
    <script language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!---*** End: JQuery 3.3.1 version. ***--->
    <!---*** Start: Bootstrap 3.3.7 version files. ***--->
    <script language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!---*** End: Bootstrap 3.3.7 version files. ***--->

    <script language="javascript" src="https://momentjs.com/downloads/moment.js"></script>
    <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">







</head>

<body>
    <div>
        <h1 class="text-center">Weigh-Till Contacts</h1>

    </div>

    <div class="container-fluid">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>