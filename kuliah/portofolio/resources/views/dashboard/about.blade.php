@extends('../layouts.mainlayout')

@section('title', 'About')

@section('content')
    <div class="card mx-auto mt-3" style="width: 18rem;">
        <img src="{{ asset("storage/images/me.jpeg") }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Daffa Shelby</h5>
            <p class="card-text">Daffa adalah anak yang sangat sholeh dan berbakti kepada orang tua.</p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">E41210089</li>
            <li class="list-group-item">Teknik Informatika</li>
            <li class="list-group-item">Politeknik Negeri jember</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Daffa's Instagram</a>
            <a href="#" class="card-link">Daffa's Facebook</a>
        </div>
    </div>
@endsection