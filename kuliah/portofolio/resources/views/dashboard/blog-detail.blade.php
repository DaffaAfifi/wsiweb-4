@extends('../layouts.mainlayout')

@section('title', 'Blog Detail')

@section('content')
    <h1 class="text-body text-center mt-3">{{$blog->title}}</h1>
    @if ($blog->image != null)
    <div class="text-center my-3">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="" width="200">
    </div>
    @endif
    <div class="col-sm-10 mx-auto my-3" style="flex:1;">
        <p>{{$blog->content}} <i> Jember, {{$blog->created_at}}</i></p>
        <p><strong>Author : {{$blog->user->name}}</strong></p>
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary">Back</a>
    </div>
@endsection