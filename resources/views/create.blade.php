@extends('app')

@section('main')

<div class="container">
    <div class="d-grid gap-2 col-6 mx-auto mt-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fs-5 fw-medium">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label fs-5 fw-medium">Description</label>
                        <textarea type="text" class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fs-5 fw-medium">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @if($errors->has('image'))
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>

                    <div class="d-grid col-12 mx-auto mt-4">
                        <button class="btn btn-outline-secondary fs-5 fw-medium" type="submit">Add Item</button>
                    </div>
                </form>
            </div>
        </div>    
        </div>
    </div>
</div>
@endsection