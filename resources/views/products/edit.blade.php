@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-end">
        <form method="post" action="{{ route('products.update', $product) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="cateogry" class="form-label">Category</label>
                <select class="form-control" name="category_id" id="cateogry">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif >{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
               
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" class="form-control" name="name" id="name" value="{{ $product->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="mb-3" >
                <button type="submit" class="btn btn-primary">
                    submit
                </button>
            </div>
        </form>

    </div>
</div>
@endsection