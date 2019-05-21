@extends('layouts.app')

@section('content')

   

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
              
                 @foreach($users as $key=>$user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                               </tr>
                @endforeach
                
               
              
              
            </tbody>
          </table>
    </div>
@endsection
