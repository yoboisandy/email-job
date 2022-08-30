@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <span>Add Customer</span>
        <a class="btn btn-primary btn-sm" href="{{ route('customers.index') }}">Go back</a>
    </div>
    <div class="card-body">
        <div class="text-danger">
            {{ $errors->first() }}
        </div>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  name="name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"  name="password">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address"  name="address">
            </div>
            <div class="form-group">
                <label for="pan_no">Pan Number</label>
                <input type="text" class="form-control" id="pan_no"  name="pan_no">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
    
@endsection