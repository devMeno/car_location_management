@extends('base')

@section('title', 'All orders')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        {{-- <a href="{{ route('admin.order.create') }}" class="btn btn-primary">Add a order</a> --}}
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Car</th>
                <th>User</th>
                <th>Phone Number</th>
                <th>Date</th>
                <th>Number of days</th>
                <th>Number of cars</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td> {{ $order->car }} </td>
                    <td> {{ $order->user_id }} </td>
                    <td> {{ $order->phone_number }} </td>
                    <td> {{ $order->date }} </td>
                    <td> {{ $order->number_of_days }} </td>
                    <td> {{ $order->number_of_car }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
