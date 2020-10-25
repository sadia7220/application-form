@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Application Form</div>
                    <div class="card-body">
                        @include('flash-message')
                        <form method="POST" action="{{ route('store_applicationForm') }}">
                            @csrf
                            <input type="text" class="form-control" name="name" 
                                placeholder="Name" id="name">
                                
                            <input type="text" class="form-control" name="email" 
                                placeholder="Email" id="email">
                                
                            <input type="text" class="form-control" name="phone" 
                                placeholder="Phone" id="phone">
            
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif 
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
