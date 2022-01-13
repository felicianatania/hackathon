@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($number===2)
                        <a href="#"><button type="submit" class="btn btn-success">Member Dashboard</button></a>
                    @else
                        <a href="{{route('getGroupsDashboard')}}"><button type="submit" class="btn btn-success">Admin Dashboard</button></a>
                    @endif
                    <a href="{{route('getGroupById')}}"><button type="submit" class="btn btn-success">Add Member</button></a>
                    <a href="{{route('getGroupByIdPayment')}}"><button type="submit" class="btn btn-success">Upload Payment</button></a>
                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
