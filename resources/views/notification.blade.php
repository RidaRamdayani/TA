@extends('Layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item"><a href="{{ route('notification.notifikasi') }}">Notifikasi</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h1>Pesan Masuk:</h1>

        @if (!empty($contacts))
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact['name'] }}</td>
                            <td>{{ $contact['email'] }}</td>
                            <td>{{ $contact['kecamatan'] }}</td>
                            <td>{{ $contact['desa'] }}</td>
                            <td>{{ $contact['message'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No notifications available.</p>
        @endif
    </div>
</div>
@endsection
