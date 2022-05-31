@extends('layouts.app')



@section('content')
{{-- body of the conatact page --}}

<section class="mb-5">
    <h4 class="mb-5 text-center"><strong>Contact Us</strong></h4>

    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session()->get('success') }}
        </div>
    @endif
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example1" name="firstname" class="form-control" value="{{ old('firstname') }}" /> 
                <span class="text-danger">
                    @error('firstname')
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-label" for="form3Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form3Example2" name="lastname" class="form-control" value="{{ old('lastname') }}"/>
                <span class="text-danger">
                    @error('lastname')
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-label" for="form3Example2">Last name</label>
              </div>
            </div>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control" value="{{ old('email') }}" />
            <span class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Description input -->
          <div class="form-outline mb-4">
            <input type="texraera" id="form3Example4" name="description" class="form-control" value="{{ old('description') }}"/>
            <span class="text-danger">
                @error('description')
                    {{ $message }}
                @enderror
            </span>
            <label class="form-label" for="form3Example4">Description</label>
          </div>

            <!-- Contact Number input -->
            <div class="form-outline mb-4">
                <input type="text" id="form3Example4" name="contact_no" class="form-control" value="{{ old('contact_no') }}"/>
                <span class="text-danger">
                    @error('contact_no')
                        {{ $message }}
                    @enderror
                </span>
                <label class="form-label" for="form3Example4">Mobile Number</label>
              </div>

          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" checked />
            <label class="form-check-label" for="form2Example3">
              Subscribe to our newsletter
            </label>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">
            Sign up
          </button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>or sign up with:</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>


@endsection