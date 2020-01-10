@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        {{-- ini sbuah contoh menggunakan variable dengan nama yang ada di route sebagai tampilan di view --}}
                        {{-- atau pun bisa menggunakan tag <php echo $variable karna ini menggunakan templeting engine makan menggunakan {}seperti ini juga bisa --}}
                        <h1 class="mt-3">Detail Mahasiswa</h1> 
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">{{$student -> nama}}</h5>
                                  <h6 class="card-subtitle mb-2 text-muted">{{$student -> nrp}}</h6>
                                  <p class="card-text">{{$student -> email}}</p>
                                  <p class="card-text">{{$student -> jurusan}}</p>

                                    <a href="{{$student->id}}/edit"  class="btn btn-primary">Edit</a>

                                <form action="{{$student->id}}" method="POST" class="d-inline">
                                    
                                    @method('delete')
                                    @csrf
                                    {{-- menggunakan method post tapi sebenarnya memakai delete --}}
                                     
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                  <a href="/students" class="card-link">Kembali</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
      