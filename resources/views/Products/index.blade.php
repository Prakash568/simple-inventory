<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery.min.js/"></script>
    <!-- Latest compiled and minified CSS -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous"
    />

    <!-- Optional theme -->
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous"
    />

    <!-- Latest compiled and minified JavaScript -->
    <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"
    ></script>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <div class="pull-right">
            <p>
                <a href="product/create" class="btn btn-primary"
                    ><span class="glyphicon glyphicon-plus"></span
                ></a>
            </p>
        </div>
        <table class="table table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($products as $product)
              <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->description}}</td>
                    <form action="product/delete/{{$product->id}}" method="post">
                        @csrf @method("delete")
                          <td><a href="product/edit/{{$product->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                           <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>