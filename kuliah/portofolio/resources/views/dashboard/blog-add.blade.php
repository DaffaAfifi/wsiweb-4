@extends('../layouts.mainlayout')

@section('title', 'Blog Add')

@section('content')
    <h1 class="text-body text-center mt-3">Add new blog</h1>
    <div class="col-sm-10 mx-auto my-3" style="flex:1;">
        <form action="blog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label for="title" class="mb-1">Blog Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Blog Title" name="title">
                </div>
                <div class="form-group col-6">
                    <label for="image" class="mb-1">Image</label><br>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
            </div>
            <div class="form-group my-3">
                <label for="content" class="mb-1">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <a class="btn btn-secondary btn-sm" href="/blog">Cancel</a>
        </form>
    </div>
@endsection