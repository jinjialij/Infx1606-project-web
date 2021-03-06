<?php
    /**
     * Created by PhpStorm.
     * User: jl
     * Date: 2019/3/20
     * Time: 21:24
     */
    //check and display errors
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    //include_once './includes/myFunctions2.php';//load functions
    date_default_timezone_set('America/Halifax');//set time zone

    include_once './myFunctions.php';//load functions
    $course=loadCourseShort();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="container-fluid"><!--set interval to 20 seconds-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="nav nav-pills mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php" style="color: white;font-size: 1em;">Home</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="./hpro.php" style="color: white;font-size: 1em;">Health Promotion</a></li>
                    <li class="nav-item active"><a class="nav-link" href="./hpro.php" style="color: white;font-size: 1em;">Kinesiology</a></li>
                    <li class="nav-item active"><a class="nav-link" href="./hpro.php" style="color: white;font-size: 1em;">Recreation Management</a></li>
                    <li class="nav-item active"><a class="nav-link" href="./hpro.php" style="color: white;font-size: 1em;">Therapeutic Recreation</a></li>
                    <li class="nav-item active"><a class="nav-link" href="./course.php" style="color: white;font-size: 1em;">All Courses</a></li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-4">
                <h3>Health Promotion</h3>
            </div>
            <div class="col-sm-10"></div>
        </div>
        <div class="row">
            <div class="col-7">
                <table class="table table-borderless">
                    <tbody>
                        <?php
                        foreach ($course as $v1)
                        {
                            echo <<<c
                                <tr class="table table-sm">
                                    <th></th>
                                    <td><a href="./coursepage.php" style="font-size: 1em;">$v1[0]</a></td>
                                    <td>$v1[1]</td>
                                </tr>
                         
c;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-5">

            </div>
        </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/myScript.js"></script>
    </body>
    <footer>

    </footer>
</html>