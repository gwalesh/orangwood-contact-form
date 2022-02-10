<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Orange Wood | Contact Form</title>
  </head>
  <body>
    <div class="container text-center">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="card" style="margin-top: 5rem;">
                    <div class="card-body">
                        <form action="{{ route('store.form') }}" method="POST">
                            @csrf 
                            <h3 class="text-center">{{ __("Submit your Contact Details") }}</h3>
                            <div class="form-group">
                                <label for="name" class="form-label">{{ __("Name") }}</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contact" class="form-label">{{ __("Contact Details") }}</label>
                                <input type="text" name="contact" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="business_type" class="form-label">{{ __("Business Type") }}</label>
                                <select name="business_type" id="business_type" class="form-control">
                                    <option value="">Select your Business Type</option>
                                    @foreach(App\Models\Form::BUSINESS_TYPE_SELECT as $key => $business)
                                        <option value="{{ $business }}">{{ $business }}</option>
                                    @endforeach 
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">{{ __("Phone") }}</label>
                                <input type="tel" name="phone" max="10" min="10" required class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">{{ __("Submit") }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>