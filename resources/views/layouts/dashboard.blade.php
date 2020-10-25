@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>
                    <div class="card-body">
                    <form action="/application_management/forms/create">
                    <input type="submit" value="Add Application Form">
                    </form>
                    </div>
        </div>
    </div>
</div>
@endsection