@extends('template')

@section('content')
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css">

    <h2>Daftar Pengguna</h2>

    <table class="table table-bordered" id="myTable">
        <thead>
            <tr>
                <td>ID</td>
                <td>Email</td>
                <td>Nama</td>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>


    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
@endsection