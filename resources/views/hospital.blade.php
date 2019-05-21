@extends('layouts.frontend.frontend_master')


@section('content')
<div id="emegenery">
  <div class="doctor-list"><span>Hospital's List</span></div>
  <div class="container">
    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">

          <ul class="list-group">
            <li class="list-group-item"><a href="medicine/medicine.html">Goverment Hospital</a></li>
            <li class="list-group-item"><a href="{{ route('medicine') }}">Eye Hospital</a></li>
            <li class="list-group-item"><a href="">Private Hospital</a></li>
            <li class="list-group-item"><a href="">Private Clinic</a></li>
            <li class="list-group-item"><a href="">Al-Banna General Hospital</a></li>
            <li class="list-group-item"><a href="">Al-Nur Eye Clinic </a></li>
            <li class="list-group-item"><a href="">Friends Eye Hospital</a></li>
            <li class="list-group-item"><a href="">Arogyo Poly Clinic </a></li>
        </ul>
        </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </div>
@endsection