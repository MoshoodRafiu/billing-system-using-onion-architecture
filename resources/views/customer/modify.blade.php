@extends('layouts.layout')

@section('content')
    <div class="page-header clearfix">
        <h2>
            <?= isset($customer) ? 'Edit' : 'New' ?>
            Customer
        </h2>
    </div>
    <form role="form" action="{{ isset($customer) ? ('/customers'.$customer->getId()) : '/customers' }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"
                value="{{ isset($customer) ? $customer->getName() : null }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"
                value="{{ isset($customer) ? $customer->getEmail() : null }}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
