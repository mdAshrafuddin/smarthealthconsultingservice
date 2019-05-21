@extends('layouts.frontend.frontend_master')


@section('content')
<section id="emegenery">
  
  <div class="container">
   
      
        <!-- News jumbotron -->
<div class="jumbotron text-center hoverable p-4">

  <!-- Grid row -->
  <div class="row">

   <div class="col-md-3"></div>

    <!-- Grid column -->
    <div class="col-md-7 text-md-left ml-3 mt-3">

      <!-- Excerpt -->

      

      <h4 class="h4 mb-4">Name : {{ $appoinments->name }}</h4>

      
      <p class="font-weight-normal"><a><strong>Email: </strong></a>{{ $appoinments->email }}</p>

       <p class="font-weight-normal"><a><strong>Phone: </strong></a>{{ $appoinments->phone }}</p>

      <p class="font-weight-normal"><a><strong>Enter Area: </strong></a>{{ $appoinments->enter_area }}</p>
       <p class="font-weight-normal"><a><strong>Enter city: </strong></a>{{ $appoinments->enter_city }}</p>
       <p class="font-weight-normal"><a><strong>Enter_state: </strong></a>{{ $appoinments->enter_state }}</p>

        <h4 class="h4 mb-4">Visiting Hour: </h4>

        <p class="font-weight-normal"><a><strong>Visiting Time : </strong></a>{{ $appoinments->created_at->diffForHumans() }}</p>

     

     
      </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>

  </div>
</section>

@endsection