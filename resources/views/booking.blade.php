@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas Akhir</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body >

   

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">BOOKING</h1>
                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <!-- kategori -->
            <div class="card-body">
            <div class="mb-3 col-md-10">
            <label for="" class="form-label">Jenis Event</label>
            <select id="" class="form-select">
            <option>Konser</option>
            <option>Lomba</option>
            <option>Bazar</option>
            <option>Sholawat</option>
             </select>
             </div>

             <a class="btn btn-dark" href="qr" role="button">Submit</a>
             <a class="btn btn-dark" href="/" role="button">Back</a>
             </div>
             </div>
                   
                   
                 










                          
        </div>
    </div>

   

    <!-- Bootstrap core JavaScript-->
    <script src="{{ ('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ ('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ ('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
@endsection