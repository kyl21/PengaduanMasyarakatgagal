@extends('layouts.user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css')}}">
@endsection

@section('title', 'Pengaduan Masyarakat')

@section('content')

<section>
    <!DOCTYPE html>
<html lang="en">


<body class="bg-danger">

    <div class="container TernakKu-card">

        <!-- Outer Row -->
        <div class="row justify-content-center my-5 mx-5">

            <div class="col-lg-6     col-md-9 my-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 my-5">
                        <div class="row">
                            <div class="col-lg-12   ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <form action="{{ route('pekat.register') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="NIK" class="form-control form-control-user"
                                                placeholder="Masukan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="NIK" class="form-control form-control-user"
                                                placeholder="Nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="NIK" class="form-control form-control-user"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Passwod</label>
                                            <input type="NIK" class="form-control form-control-user"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telp</label>
                                            <input type="NIK" class="form-control form-control-user"
                                                placeholder="No. Telp">
                                        </div>

                                        <div>
                                            <a class="small text-danger mx-1" href="{{route('pekat.login')}}">Sudah Punya Akun? Masuk</a>

                                        </div>
                                        <br>
                                        <a href="{{route('pekat.index')}}" class="btn bg-danger text-white btn-user btn-block">
                                            Submit
                                        </a>
                                    </form>
                                </div>
                            </div>
                            @if (Session::has('pesan'))
                            <div class="allert allert-danger mt-2">
                                Mohon Mengisi Data Terlebih dahulu
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



</body>

</html>

</section>