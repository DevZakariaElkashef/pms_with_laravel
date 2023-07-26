@extends('layout.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nmae</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($categories as $category)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $category->name }}</td>
        <td>
          @can('handel-categories')
          {{-- @if(Auth::user()->role == 'admin') --}}
            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-primary">Edit</a>
            <a href="#" onclick="$('#deleteCategory{{ $category->id }}').submit()" class="btn btn-sm btn-danger">Delete</a>

          @endcan


          <form id="deleteCategory{{ $category->id }}" action="{{ route('categories.destroy', $category) }}" method="post">
            @csrf
          @method('DELETE')
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <th scope="row" colspan="3" class="text-center text-muted"><h2>Empty ..!</h2></th>
      </tr>
      @endforelse
      
    </tbody>
  </table>
@endsection