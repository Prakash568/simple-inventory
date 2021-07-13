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
        <h1>Edit Products</h1>
        <form action="" method="post">
            @csrf @method("put")
            <div class="form-group">
                <label>Product Name:</label>
                <input type="text" class="form-control" name="name" value={{$record->name}} />
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input
                    type="text"
                    class="form-control"
                    name="price" value={{$record->price}}
                />
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input
                    type="text"
                    class="form-control"
                    name="quantity" value={{$record->quantity}}
                />
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input
                    type="text"
                    class="form-control"
                    name="description" value={{$record->description}}
                />
            </div>
            <button class="btn btn-success">Update</button>
            <button class="btn btn-danger">Cancel</button>
        </form>
    </div>
    
</body>
</html>