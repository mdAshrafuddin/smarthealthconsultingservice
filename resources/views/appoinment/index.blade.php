@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end mb-2">
        <a href="" class="btn btn-success">Add Category</a>
    </div>

    <div class="card card-default">
        <div class="card-header">Categories</div>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
               
              </tr>
            </thead>
            <tbody>
              
                 @foreach($appoinments as $key=>$appoinment)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$appoinment->name}}</td>
                                    <td>{{$appoinment->email}}</td>
                               </tr>
                @endforeach
                
               
              
              
            </tbody>
          </table>
    </div>
@endsection
