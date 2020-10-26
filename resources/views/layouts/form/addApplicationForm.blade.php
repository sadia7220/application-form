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

                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                placeholder="Name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email" id="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                placeholder="Phone"  id="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
