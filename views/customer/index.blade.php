<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Category</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container px-60 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-pink-100 shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                    <h2>Customer</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('customer.create') }}"> Create item</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr  bgcolor ="DeepPink">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-Mail</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $item)
                    <tr bgcolor ="Lavenderblush">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fname }}</td>
                        <td>{{ $item->lname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_no }}</td>
                        <td>{{ $item->password }}</td>
                        <td>
                            <form action="{{ route('customer.destroy',$item->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('customer.edit',$item->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $customers->links() !!}
    </div>
</body>
</html>
</x-app-layout>