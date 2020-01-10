@extends('layout.main')

@section('title', 'About')

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        {{-- ini sbuah contoh menggunakan variable dengan nama yang ada di route sebagai tampilan di view --}}
                        {{-- atau pun bisa menggunakan tag <php echo $variable karna ini menggunakan templeting engine makan menggunakan {}seperti ini juga bisa --}}
                        <h1 class="mt-3">Hello, {{$nama}}</h1> 
                    </div>
                </div>
            </div>
@endsection
      