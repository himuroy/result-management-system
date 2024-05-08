<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'partial\headNav.php';
    ?>
    <!-- PHOTO -->
    <div class="container-fluid" style="display: flex;">
        <img src="./img//front.jpg" class="d-block w-100" alt="Hello">
        <img src="./img//top.jpg" class="d-block w-100" alt="There">
    </div>
    <!-- RESULT TOP THREE -->
    <center>
        <h2 class="mt-5">TOP THREE RESULTS</h2>
    </center>



    <div class="container-fluid" style="display: inline-block;">
        <div class="table-responsive m-5">
            <h3>Class 1</h3>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Total</th>
                        <th>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>210201011</td>
                        <td>Himu</td>
                        <td>500</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>210201011</td>
                        <td>Himu</td>
                        <td>500</td>
                        <td>A</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="shadow-lg m-2 bg-body rounded m-5 p-5">
        <center>
            <h5 class="bg-danger text-white title mt-2 p-2">
                নোটিশ
            </h5>
        </center>
        <div class="table table-borderless">
            <div>
                <table>
                    <thead>
                        <th style="width:135px ;">Date</th>
                        <th>Notices</th>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="card radius-10 border-start border-0 border-5 border-success m-1 p-2">
                                    <div>
                                        26-08-23
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="card radius-10 border-start border-0 border-5 border-warning m-1">
                                    Welccome to notice board 
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include 'partial\footer.php';
    ?>
</body>

</html>