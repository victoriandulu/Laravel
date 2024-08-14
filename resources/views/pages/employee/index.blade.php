@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4 text-center"> <!-- Fixed missing quotation mark -->
            <div class="card">
                <div class="card-header">
                    <h4> Fetch Data from Database using Eloquent Mode</h4>
                </div>
              <div class="card-body">

            <table class="table">
                <thead>
                  
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Designation</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employee as $empdata)

                    <tr>
                        <th >{{$empdata->id}}</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
