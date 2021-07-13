<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h1>ADD NEW PRODUCTS</h1>
            <div class="row">
                <div class="pull-right">
                    <p>
                        <a href="" class="btn btn-primary"
                            ><span class="glyphicon glyphicon-plus"></span
                        ></a>
                    </p>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Product Name:</label>
                        <input type="text" class="form-control" name="name" />
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input
                            type="text"
                            class="form-control"
                            name="price"
                        />
                    </div>
                    <div class="form-group">
                        <label>Quantity:</label>
                        <input
                            type="text"
                            class="form-control"
                            name="quantity"
                        />
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <input
                            type="text"
                            class="form-control"
                            name="description"
                        />
                    </div>
                    <button class="btn btn-success">Save</button>
                    <button class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </body>
</html>
