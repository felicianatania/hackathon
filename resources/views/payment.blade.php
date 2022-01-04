@extends('layouts.layout')
@section('content')
    <h1>Payment</h1>
    <form action="{{route('createPayment', ['id'=>$groupId])}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="payment" class="form-label">Upload Payment</label>
            <input class="form-control" type="file" id="payment" name='payment'>
        </div>

        <button type="submit" class="btn btn-success">Upload</button>
    </form>
@endsection
