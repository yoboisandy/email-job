@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Customers</span>
        <a class="btn btn-primary btn-sm" href="{{ route('customers.create') }}">Add</a>
    </div>
    <div class="card-body">
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Pan Num</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>    
                        <td>{{ $customer->name }}</td>    
                        <td>{{ $customer->email }}</td>    
                        <td>{{ $customer->address }}</td>    
                        <td>{{ $customer->pan_no }}</td>    
                    </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection