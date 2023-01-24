<div class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                <a href="{{ route('post.create') }}" class="btn btn-success btn-md">
                    TAMBAH  
                </a>
                <input type="text" class="form-control my-4" wire:model="search" placeholder="Masukkan keyword..">
                <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">TITLE</th>
                        <th scope="col">CONTENT</th>
                        <th scope="col">OPTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($posts as $item)
                          <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->content}}</td>
                            <td>
                                <a href="{{ route('post.edit', $item->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                                <button wire:click="destroy({{ $item->id }})" class="btn btn-danger btn-sm">DELETE</button>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
