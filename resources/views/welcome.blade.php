@extends('app')

@section('main')

<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td><a href="/{{ $item->id }}/view" class="text-dark">{{ $item->name }}</a></td>
                <td>{{ $item->description }}</td>
                <td><img src="{{ asset('images/'.$item->image) }}" width="50" height="50"></td>
                <td>
                    <a href="/{{ $item->id }}/update" class="btn btn-outline-secondary">Edit</a>
                    <form class="d-inline" method="POST" action="/{{ $item->id }}/delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                    <!--different to delete-->
                    <!--<a href="/{{ $item->id }}/delete" class="btn btn-outline-danger">Delete</a> -->
                    
                </td>
            </tr>
            @endforeach 

        </tbody>
    </table>
        {{ $items->links()}}
    <div class="d-grid gap-2 col-6 mx-auto mt-4">
        <a class="btn btn-outline-secondary fs-5 fw-medium" href="/create">Add Item</a>
    </div>
</div>
@endsection