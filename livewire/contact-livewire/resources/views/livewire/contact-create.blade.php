<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="flex row">
                <div class="col-6 my-2">
                    <input wire:model="name" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="name">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-6 my-2">
                    <input wire:model="phone" type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="phone">
                    @error('phone')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
