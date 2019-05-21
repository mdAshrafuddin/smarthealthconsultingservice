@extends('layouts.frontend.frontend_master')


@section('content')
<div id="emegenery">
  <div class="doctor-list"><span>Doctor's List</span></div>
  <div class="container">
    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">

          <ul class="list-group">

            <li class="list-group-item"><a href="{{ route('medicine') }}">MEDICINE</a></li>
            <li class="list-group-item"><a href="">Orthopedic</a></li>
            <li class="list-group-item"><a href="">Opthamology</a></li>
            <li class="list-group-item"><a href="">Cardiologist</a></li>
            <li class="list-group-item"><a href="">Cardiologist</a></li>
            <li class="list-group-item"><a href="">Cardiologist</a></li>
            <li class="list-group-item"><a href="">Endodontist</a></li>
          </ul>
        </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>


@endsection