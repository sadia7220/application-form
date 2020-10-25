@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of forms</div>
                    <div class="card-body">
    <table>
        <tr>
            <th>Serial No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
                                
        </tr>
            <?php $count = 0; ?>
                @foreach($forms as $data)
            <?php $count = $count+1; ?>
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $data->name}}</td>
                    <td>{{ $data->email}}</td>
                    <td>{{ $data->phone}}</td>
                </tr>
                @endforeach
    </table>            
    </div>
        </div>
    </div>
</div>
@endsection