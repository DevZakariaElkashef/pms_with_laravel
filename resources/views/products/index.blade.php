@extends('layout.app')

@section('content')
      @if(session()->has('message'))
        {{ session('message') }}
        @endif
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category</th>
        <th scope="col">product</th>
        <th scope="col">Price</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($products as $product)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $product->category->name }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>
          <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">Edit</a>
          <a href="#" onclick="$('#deleteProduct{{ $product->id }}').submit()" class="btn btn-sm btn-danger">Delete</a>
          <form id="deleteProduct{{ $product->id }}" action="{{ route('products.destroy', $product) }}" method="post">
            @csrf
          @method('DELETE')
          </form>
        </td>
      </tr>
      @empty
          <p>empty</p>
      @endforelse
      
    </tbody>
  </table>
  <div class="">
    {!! $products->links() !!}
  </div>
@endsection