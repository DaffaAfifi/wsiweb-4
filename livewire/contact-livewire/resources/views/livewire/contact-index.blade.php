<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    {{-- <livewire:contact-create :contacts="$contacts"/>  --}}
    @if ($statusUpdate)
        <livewire:contact-update />
    @else
        <livewire:contact-create />
    @endif 

    <hr>

    <div class="row">
        <div class="col-6">
            <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col-6">
            <input wire:model="search" type="text" name="" id="" class="form-control form-control-sm" placeholder="search">
        </div>
    </div>
    <hr>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <button wire:click="getContact({{$item->id}})" class="btn btn-sm btn-info text-white">Edit</button>
                        <button wire:click="destroy({{$item->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links('pagination::bootstrap-5') }}
</div>
