@extends('../layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <div>
        <h1 class="text-center my-5">Daffa Shelby's Company</h1>
        <div class="text-center">
            <iframe src="https://www.youtube.com/embed/RPC1-qqxBQ4" width="700" height="400" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <h1 class="text-center mt-5">Daffa Shelby's Blogs</h1>
    <div class="d-flex row justify-content-center" style="flex:1;">
        @foreach ($blogList as $item)
            <div class="card mx-3 my-3" style="width: 20rem;">
                @if ($item->image != null)
                    <img src="{{ asset('storage/' . $item->image) }}" width="295px" height="200px" alt="{{ $item->title }}">
                @else
                    <img src="{{ asset('images/lospollos.jpg') }}" width="295px" height="200px" alt="{{ $item->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="text-truncate card-text">{{ $item->content }}</p>
                    <a href="/blog-detail/{{$item->id}}" class="btn btn-dark btn-sm">Read more</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection