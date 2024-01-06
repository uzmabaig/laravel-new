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
            <h1>Add Product</h1>
            <form action="{{ route('addProduct')}}" method="POST">
              @csrf
        <div class="mb-3">
          <label for="form-label">Name:</label>
          <input type="text"class="form-control" id="name" name="productname">
        </div>
        <div class="mb-3">
          <label for="form-label">Price:</label>
          <input type="number" class="form-control" id="price" name="productprice">
        </div>
        <div class="mb-3">
          <button class="btn btn-primary" type="submit" name="submit">Submit</button>
        </div>
            </form>

</div>
    </div>
  </div>


</body>
</html>