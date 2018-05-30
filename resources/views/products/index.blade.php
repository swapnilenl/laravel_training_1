@extends('layout.user')

@section('title', 'List Product')
@section('content')
<div class="container">
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>User Name</th>
                <th>Price</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->userDetails->name}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{url('products/'.$product->id.'/edit')}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{url('products/'.$product->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <a href="{{route('products.create')}}">Add Product</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
@section('js_content')
<script>
    $(document).ready(function() {
        alert('hii');
    });

</script>
@endsection