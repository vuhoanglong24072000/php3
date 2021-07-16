<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>List Product</title>
  </head>
  <body>
    <div class="container">

        <a href="{{Route('add.products')}}"><button type="button" class="btn btn-danger mt-3 mb-3">Add Product</button></a>
        
        <table class="table table-bordered border-primary">
            
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>image</th>
                <th>price</th>
                <th>quantity</th>
                <th>status</th>
            </thead>
            <tbody>
                @foreach ($products as $pro)
                    <tr>
                        <td>{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->ecreated_atail}}</td>
                        <td>{{$pro->updated_at}}</td>
                        <td><img src={{$pro->image}} alt="" style="width:100px; height:60px"></td>
                        <td>{{$pro->price}}</td>
                        <td>{{$pro->quantity}}</td>
                        <td>{{$pro->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        {!! $products->render() !!}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
