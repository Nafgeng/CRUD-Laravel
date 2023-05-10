@extends('template')

@section('content')
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">
            <h2>Crud</h2>
        </a>
        <form class="d-flex">
            <a href="{{ url('/add') }}" href="" class="btn btn-success" type="submit">Create</a>
        </form>
    </div>
</nav>

<div class="container" style="margin-top: 50px">
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptop as $l)
            <tr class="text-center">
                <td>1</td>
                <td>{{ $l->name }}</td>
                <td>Rp. {{ number_format($l->price) }}</td>
                <td>
                    <img src="{{ url('storage/' . $l->image) }}" style="max-width: 100px !important" alt="">
                </td>
                <td>
                    <form class="container" action="{{ url("/delete-laptop/$l->id") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <a href="{{ url("/edit/$l->id") }}" class="btn btn-warning" type="submit">Edit</a>
                        <button type="submit" href="" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
