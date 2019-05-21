@extends('layouts.frontend.frontend_master')

@section('content')
  <div class="appoinment">
  	<div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book You Slot Now and Save your time</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis at lacus at rhoncus. Integer pharetra lacus vitae sapien blandit eleifend. </p>
                        <h2>For Help Call : +189-123-453</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                         @if (session('success'))
			                <div class="alert alert-success">
			                    {{ session('success') }}
			                </div>
			             @endif
                        <div class="form-body">
                        	 <form method="POST" action="{{ route('create') }}">
                        		@csrf
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Full name" class="form-control" name="name">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Mobile Number" class="form-control" name="phone">
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Enter Email Adreess" class="form-control" name="email">
                            </div>
                            <div class="row form-row">
                              <input type="password" placeholder="Enter your password" class="form-control" name="password">
                            </div>
                           <div class="row form-row">
                              <input id="dat" type="text" placeholder="Appointment Date" class="form-control" name="appoinment_date">
                            </div>
                            
                            <h6>Address Details</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter Area" class="form-control" name="enter_area">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter City" class="form-control" name="enter_city">
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter State" class="form-control" name="enter_state">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Postal Code" class="form-control" name="post_code">
                                </div>
                            </div>

                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment">
                                 Book Appointment
                               </button>
                               
                            </div>
                            </form>	
                        </div>
                    </div>
                </div>
            </div>
          </div>
   </div>
  </div>

@endsection