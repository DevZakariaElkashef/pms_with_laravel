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
      @forelse ($users as $user)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $user->name }}</td>
        <td>
          <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Edit</a>
          <a href="#" onclick="$('#deleteCategory{{ $user->id }}').submit()" class="btn btn-sm btn-danger">Delete</a>
          <form id="deleteCategory{{ $user->id }}" action="{{ route('categories.destroy', $user) }}" method="post">
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