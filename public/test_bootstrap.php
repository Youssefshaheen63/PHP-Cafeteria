<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap Test</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1 class="text-center text-primary mb-4">Bootstrap Test Page</h1>

        <div class="alert alert-success">
            If you see this green alert → Bootstrap is working ✅
        </div>

        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Test Card</h5>
                <p class="card-text">
                    This card uses Bootstrap classes.
                </p>
                <button class="btn btn-primary">Test Button</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>

        <table class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Coffee</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tea</td>
                    <td>15</td>
                </tr>
            </tbody>
        </table>

    </div>

    <script src="assets/js/bootstrap.js"></script>

</body>

</html>