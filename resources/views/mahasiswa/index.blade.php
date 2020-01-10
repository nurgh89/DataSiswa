@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        {{-- ini sbuah contoh menggunakan variable dengan nama yang ada di route sebagai tampilan di view --}}
                        {{-- atau pun bisa menggunakan tag <php echo $variable karna ini menggunakan templeting engine makan menggunakan {}seperti ini juga bisa --}}
                        <h1 class="mt-3">Daftar Mahasiswa</h1> 
                        <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NRP</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                   {{--ini sebuah cara untuk meloping data yang masuk sesuai dengan mengunakan 
                                    iterastion untuk menghitung jumlah yang telah di looping  --}}
                                    {{-- $mhs nama adalah variable item yang akan menyambungkan
                                         data yang ada di database kemudian mentransfer data yang ada di data base di view --}}
                                    <td>{{$mhs->nama}}</td>
                                    <td>{{$mhs->nrp}}</td>
                                    <td>{{$mhs->email}}</td>
                                    <td>{{$mhs->jurusan}}</td>
                                    <td>
                                        <a href="\students\delete\1" class="badge badge-success">edit</a>
                                        <a href="\students" class="badge badge-danger">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection
      