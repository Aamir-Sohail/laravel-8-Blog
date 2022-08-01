@extends('layouts.app')
@section('content')

    <!doctype html>
    <html lang="en">

    <head>
        <title>User Blog</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>
        <form  method="post" action="{{ $url }}" enctype="multipart/form-data">
@csrf

            <section class="mb-5">
                <h4 class="mb-5 text-center"><strong>{{ $title }}</strong></h4>

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
                        <form method="post" action="{{ $url }}"  enctype="multipart/form-data">
                            @csrf

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" name="username" class="form-control"
                                            value="{{ $blog->username }}" />
                                        <span class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <label class="form-label" for="form3Example1">User name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example2" name="blogname" class="form-control"
                                            value="{{ $blog->blogname }}" />
                                        <span class="text-danger">
                                            @error('blogname')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <label class="form-label" for="form3Example2">Blog Name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" name="email" class="form-control"
                                    value="{{ $blog->email }}" />
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Description input -->
                            <div class="form-outline mb-4">
                                <input type="texraera" id="form3Example4" name="description" class="form-control"
                                    value="{{ $blog->description }}" />
                                <span class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <label class="form-label" for="form3Example4">Description Of Blog</label>
                            </div>

                            <!-- Contact Number input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example4" name="contact_no" class="form-control"
                                    value="{{ $blog->contact_no }}" />
                                <span class="text-danger">
                                    @error('contact_no')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <label class="form-label" for="form3Example4">Mobile Number</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="file" id="form3Example4" name="file" class="form-control"
                                    value="{{ $blog->file }}" />
                                <span class="text-danger">
                                    @error('file')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <label class="form-label" for="form3Example4">Blog File</label>
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
                                Send
                            </button>
                            {{-- <button type="" class="btn btn-danger btn-block mb-4">
                                Clear
                               </button> --}}

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
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    </body>

    </html>



@endsection
