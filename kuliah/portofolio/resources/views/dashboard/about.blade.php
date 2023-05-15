@extends('../layouts.mainlayout')

@section('title', 'About')

@section('content')
    <div class="card mx-auto my-5" style="width: 18rem; flex:1;">
        <img src="{{ asset("images/me.jpeg") }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Daffa Afifi Syahrony</h5>
            <p class="card-text">Daffa adalah anak yang sangat sholeh dan berbakti kepada orang tua.</p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">E41210089</li>
            <li class="list-group-item">Teknik Informatika</li>
            <li class="list-group-item">Politeknik Negeri jember</li>
        </ul>
    </div>
@endsection