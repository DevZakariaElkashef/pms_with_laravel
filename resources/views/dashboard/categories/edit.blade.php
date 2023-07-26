@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-end">
        <form method="post" action="{{ route('categories.update', $category) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="name" class="form-control" name="name" id="name" value="{{ $category->name }}">
              @error('name')
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