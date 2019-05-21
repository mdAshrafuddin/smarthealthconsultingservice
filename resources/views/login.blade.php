@extends('layouts.frontend.frontend_master')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
          <div class="col-md-6">
            <section class="form-light">
              <form action="" method="post">
                @csrf
                <!--Form without header-->
                          <div class="card">

                              <div class="card-body mx-4">

                                  <!--Header-->
                                  <div class="text-center">
                                      <h3 class="pink-text mb-5">
                                          <strong>LogIn</strong>
                                      </h3>
                                  </div>

                                  <!--Body-->
                                  <div class="md-form">
                                      <input type="text" id="Form-email2" class="form-control">
                                      <label for="Form-email2">Your email</label>
                                  </div>

                                  <div class="md-form pb-3">
                                      <input type="password" id="Form-pass2" class="form-control" name="email">
                                      <label for="Form-pass2">Your password</label>
                                      <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="defaultCheck12" name="password">
                                          <label for="defaultCheck12" class="grey-text">Accept the
                                              <a href="#" class="blue-text"> Terms and Conditions</a>
                                          </label>
                                      </div>
                                  </div>

                                  <!--Grid row-->
                                  <div class="row d-flex align-items-center mb-4">

                                      <!--Grid column-->
                                      <div class="col-md-3 col-md-6 text-center">
                                          <button type="button" class="btn btn-pink btn-block btn-rounded z-depth-1 waves-effect waves-light">Log in</button>
                                      </div>
                                      <!--Grid column-->

                                      <!--Grid column-->
                                      <div class="col-md-6">
                                          <p class="font-small grey-text d-flex justify-content-end">Have an account?
                                              <button type="submit" class="blue-text ml-1"> Log in</button>
                                          </p>
                                      </div>
                                      <!--Grid column-->

                                  </div>
                                  <!--Grid row-->
                              </div>

                              <!--Footer-->
                              <div class="footer pt-3 mdb-color lighten-3">

                                  <div class="row d-flex justify-content-center">
                                      <p class="font-small white-text mb-2 pt-3">or Sign up with:</p>
                                  </div>

                                  <div class="row mt-2 mb-3 d-flex justify-content-center">
                                      <!--Facebook-->
                                      <a class="fa-lg p-2 m-2 fb-ic">
                                          <i class="fab fa-facebook-f white-text fa-lg"> </i>
                                      </a>
                                      <!--Twitter-->
                                      <a class="fa-lg p-2 m-2 tw-ic">
                                          <i class="fab fa-twitter white-text fa-lg"> </i>
                                      </a>
                                      <!--Google +-->
                                      <a class="fa-lg p-2 m-2 gplus-ic">
                                          <i class="fab fa-google-plus-g white-text fa-lg"> </i>
                                      </a>
                                  </div>

                              </div>
              </form>
          </div>
            </section>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@endsection