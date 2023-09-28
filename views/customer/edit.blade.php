<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Customer Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Customer</h2>
                </div>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('customer.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        <br>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('customer.update',$customer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        <input type="text" name="fname" value="{{ $customer->fname }}" class="form-control" placeholder="First Name">
                        <br>
                        <strong>Last Name:</strong>
                        <input type="text" name="lname" value="{{ $customer->lname }}" class="form-control" placeholder="Last Name">
                        <br>
                        <strong>E-Mail:</strong>
                        <input type="text" name="email" value="{{ $customer->email }}" class="form-control" placeholder="E-Mail">
                        <br>
                        <strong>Phone:</strong>
                        <input type="text" name="phone_no" value="{{ $customer->phone_no }}" class="form-control" placeholder="Phone Number">
                        <br>
                        <strong>Password:</strong>
                        <input type="text" name="password" value="{{ $customer->password }}" class="form-control" placeholder="Password">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
</x-app-layout>