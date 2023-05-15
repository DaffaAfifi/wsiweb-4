@extends('../layouts.mainlayout')

@section('title', 'Blog')

@section('content')
    <h1 class="text-body text-center mt-5 mb-3">Daffa Shelby's Blogs</h1>
    @if(Session::has('status'))
        <div class="alert alert-success mt-3 font-weight-bold" style="margin-left: 112px; margin-right: 112px;" role="alert">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            {{Session::get('message')}}
        </div>
    @endif
    <div class="col-sm-10 mx-auto mb-3" style="flex:1;">
        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-primary btn-sm me-1" href="/blog-add">Add</a>
            <form action="/blog-delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            @foreach ($blogList as $item)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if ($item->image != null)
                                <img src="{{ asset('storage/' . $item->image) }}" width="50px" height="50px" alt="{{ $item->title }}">
                            @else
                                <img src="{{ asset('images/lospollos.jpg') }}" width="50px" height="50px" alt="{{ $item->title }}">
                            @endif    
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>
                            @if ($item->status === 'active')
                                <p style="color: green; font-weight:bold">Active</p>
                            @else
                                <p style="color: red; font-weight:bold">Non-Active</p>
                            @endif
                        </td>
                        <td>
                            <a href="/blog-detail/{{$item->id}}" class="btn btn-outline-secondary btn-sm mx-1 my-2">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/blog-update/{{$item->id}}" class="btn btn-outline-secondary btn-sm mx-1 my-2">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            @if ($item->status === 'active')
                                <a href="/blog-non-active/{{$item->id}}" class="btn btn-outline-secondary btn-sm mx-1 my-2">
                                    <i class="fa-solid fa-x"></i>
                                </a>
                            @else
                                <a href="/blog-active/{{$item->id}}" class="btn btn-outline-secondary btn-sm mx-1 my-2">
                                    <i class="fa-solid fa-check"></i>
                                </a>
                            @endif
                        </td>
                        <td class="text-center">
                            <input type="checkbox" name="ids[{{$item->id}}]" id="delete" value="{{$item->id}}">
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="my-4 d-flex justify-content-center">
            {!! $blogList->links('pagination::bootstrap-4') !!}
        </div>
        </form>
    </div>
@endsection