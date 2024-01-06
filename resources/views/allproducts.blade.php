<!doctype html>
<html lang="en">
    <head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>All Products</h1>
            <a href= "/newproduct" class="btn btn-success btn-sm mb-3">Add new</a></td>
             <table class="table table-bordered table-striped">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>View</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>
                @foreach ($data as $id => $products)
                <tr>
                    <td>{{$products->id}}</td>
                    <td>{{$products->name}}</td>
                    <td>{{$products->price}}</td>
                    <td><a href="{{ route('viewproduct',$products->id) }}" class="btn btn-primary btn-sm">View</a></td>
                    <td><a href= "{{ route('deleteproduct',$products->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href= "{{ route('Update.page',$products->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                </tr>
                @endforeach
                
             </table>

        </div>
    </div>
  </div>


</body>
</html>


    
