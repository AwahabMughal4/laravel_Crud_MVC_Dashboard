@extends('layouts.home')
@section('abc')
         
    <div id="layoutSidenav_content">
        
            <div class="container-fluid pt-1 pb-5 px-4 " id="mainform">
                <form method="POST" class=" p-5  text-light border border-cyan-600 " id="myform" action="store_form">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                  @csrf
                    <div class="row mb-4">
                      <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form6Example1">First name</label>
                          <input type="text" id="form6Example1" class="form-control" />
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                          <label class="form-label" for="form6Example2">Last name</label>
                          <input type="text" id="form6Example2" class="form-control" />
                        </div>
                      </div>
                    </div>
                  
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form6Example3">Company name</label>
                      <input type="text" id="form6Example3" class="form-control" />
                    </div>
                  
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form6Example4">Address</label>
                      <input type="text" id="form6Example4" class="form-control" />
                    </div>
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form6Example5">Email</label>
                      <input type="email" id="form6Example5" class="form-control" />
                    </div>
                  
                    <!-- Number input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form6Example6">Phone</label>
                      <input type="number" id="form6Example6" class="form-control" />
                    </div>
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form6Example7">Additional information</label>
                      <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                    </div>
                  
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                      <label class="form-check-label " for="form6Example8 "> Create an account? </label>
                      <span class="ss">
                    <button type="submit" class="btn btn-primary btn-block ">Place order</button>

                      </span>
                    </div>
                     
                    <!-- Submit button -->
           
                </form>
</div>
@endsection