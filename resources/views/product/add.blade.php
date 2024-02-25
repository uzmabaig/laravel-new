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
            <input type="text" value="{{ old('productname')}}" class="form-control  @error('productname') is-invalid  @enderror" id="name" name="productname">
            <span class="text-danger">
              @error('productname')
              {{ $message }}
              @enderror
            </span>
          </div>
          <div class="mb-3">
            <label for="form-label">Price:</label>
            <input type="number" value="{{ old('productprice') }}" class="form-control  @error('productprice') is-invalid  @enderror" id="price" name="productprice">
            <span class="text-danger">
              @error('productprice')
              {{ $message }}
              @enderror
            </span>
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