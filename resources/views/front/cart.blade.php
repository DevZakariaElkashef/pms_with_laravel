@extends('layout.front')

@section('content')

<div class="container my-5">
    @if(session('cart'))
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(session('cart') as $id => $details)
                    <tr>
                        <td><img src="{{ Storage::url($details['image']) }}" alt="{{ $details['name'] }}" width="50"></td>
                        <td>{{ $details['name'] }}</td>
                        <td>{{ $details['price'] }}</td>
                        <td>
                            <form method="post" action="{{ route('cart.update') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="form-control" min="1">
                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('cart.remove', $id) }}" class="btn btn-sm btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td><strong>Total:</strong></td>
                    <td>{{ array_sum(array_column(session('cart'), 'quantity')) }}</td>
                    <td>
                        <a href="{{ route('cart.destroy') }}" class="btn btn-sm btn-danger">Clear Cart</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif
</div>


@endsection