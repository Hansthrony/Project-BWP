<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="/jquery.min.js"></script>
    <script src="/jquery.form.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            margin-top: 2%;
        }

        .row1 {
            border: 1px solid black;
            width: 80%;
            height: 580px;
            margin-top: 25%;
            margin-right: 2%;
            overflow-y: auto;
        }

        .row2 {
            border: 1px solid black;
            width: 80%;
            height: 580px;
            margin-top: 25%;
            margin-right: 2%;
            overflow-y: auto;
        }

        .row3 {
            border: 1px solid black;
            width: 80%;
            height: 580px;
            margin-top: 25%;
            margin-right: 2%;
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <h3 class="text-center">Test web service</h3>
    <a href="{{route('admin-home')}}">Kembali</a>
    <hr>
    <div class="container">
        <div class="row1">
            <p>1. Test user</p>
            <form action="{{route('lihat-semua-user')}}" method="post">
                @csrf
                <p>1. Lihat semua user : </p>
                <input type="submit" value="Execute" name="exec" class="btn btn-outline-success">
            </form>
            <hr>
            <form action="{{ route('tes-add-user')}}" method="post">
                @csrf
                <h4 style="text-align:center;margin-top:10px;">2. Register User</h4>
                Email : 
                <input type="text" name="txtEmail" id="txtEmail" class="form-control"><br>
                Nama : 
                <input type="text" name="txtNama" id="txtNama" class="form-control"><br>
                Username : 
                <input type="text" name="txtUsername" id="txtUsername" class="form-control"><br>
                Password : 
                <input type="password" name="txtPass" id="txtPass" class="form-control"><br>
                Confirm Password : 
                <input type="password" name="txtCpass" id="txtCpass" class="form-control"><br>
                Tanggal Lahir : 
                <input type="date" name="txtDate" id="txtDate" class="form-control"><br>
                Role : 
                <select name="cbRole" id="cbRole" class="form-control">
                    <option value="1">Author</option>
                    <option value="3">Normal Customer</option>
                </select><br>
                <input type="submit" value="Register" class="btn btn-outline-primary"><br>
            </form>
            <hr>
            <form action="" method="post">
                @csrf
                <h4 style="text-align:center;margin-top:10px;">3. Login User</h4>
            </form>
        </div>
        <div class="row2">
            <p>2. Test CRUD Author</p>
        </div>
        <div class="row3">
            <p>3. Test User</p>
        </div>
    </div>
</body>
</html>