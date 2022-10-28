<?php
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Pignose Calender -->
    <link href="../plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../index.css?v=1659091293">
</head>

<body>


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader" style="display: none;">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="show menu-toggle">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="../images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="../images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="../images/logo-text.png" alt="">

                    </span>
                </a>
            </div>
        </div>

        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">

                </div>
                <div class="header-right">

                    <div class="header-right">
                        <ul class="clearfix">

                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative" data-toggle="dropdown" aria-expanded="false">
                                    <span class="activity active"></span>
                                    <img src="../images/user/1.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(5px, 57px, 0px);">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a href="../logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
                <div class="nk-nav-scroll active" style="overflow: hidden; width: auto; height: 100%;">
                    <ul class="metismenu in" id="menu">
                        <li class="nav-label">Dashboard</li>
                        <li class="">
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                            <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                <li class="active"><a href="./index.html" class="active">Home 1</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a class="has-arrow" href="../Jobs/viewJob.php" aria-expanded="false">
                                <i class="fa fa-tasks"></i><span class="nav-text">Jobs</span>
                            </a>

                        </li>

                        <li class="">
                            <a class="has-arrow" href="../Client/viewClient.php" aria-expanded="false">
                                <i class="fa fa-user"></i><span class="nav-text">Client</span>
                            </a>

                        </li>

                        <li class="">
                            <a class="has-arrow" href="../Employee/viewEmp.php" aria-expanded="false">
                                <i class="fa fa-users"></i><span class="nav-text">Employee</span>
                            </a>

                        </li>


                    </ul>
                </div>
                <div class="slimScrollBar" style="background: transparent; width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 860px;"></div>
                <div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


        <!--  client form starts -->

        <div class="content-body" style="min-height: 876px;">

            <div class="container-fluid mt-3">
                <div class="w-75 col-lg-12 mx-auto mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Client</h4>
                            <div class="basic-form" >
                                <form id="addclientdata" method="post">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="First Name" name="nomClient">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Last Name" name="prenomClient">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter Your Age" name="ageClient">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Address" name="complementAdresseClient">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="E-mail" name="emailClient">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Client Postal Code</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Client Postal Code" name="cpClient">
                                        </div>
                                    </div>


                                    <div class=" d-flex justify-content-between">

                                        <button type="submit" class="btn btn-dark" id="add-data">ADD </button>

                                        <a href="./viewClient.php"><button type="button" class="btn btn-info">VIEW CLIENTS</button></a>

                                    </div>

                                    <div id="timeoutmsg"></div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>





            <!--**********************************
        Scripts
    ***********************************-->
            <script src="../plugins/common/common.min.js"></script>
            <script src="../js/custom.min.js"></script>
            <script src="../js/settings.js"></script>
            <script src="../js/gleek.js"></script>
            <script src="../js/styleSwitcher.js"></script>

            <!-- Chartjs -->
            <script src=".../plugins/chart.js/Chart.bundle.min.js"></script>
            <!-- Circle progress -->
            <script src=".../plugins/circle-progress/circle-progress.min.js"></script>
            <!-- Datamap -->
            <script src="../plugins/d3v3/index.js"></script>
            <script src="../plugins/topojson/topojson.min.js"></script>
            <script src="../plugins/datamaps/datamaps.world.min.js"></script>

            <!-- Morrisjs -->
            <script src="../plugins/raphael/raphael.min.js"></script>
            <script src="../plugins/morris/morris.min.js"></script>
            <!-- Pignose Calender -->
            <script src="../plugins/moment/moment.min.js"></script>
            <script src="../plugins/pg-calendar/js/pignose.calendar.min.js"></script>
            <!-- ChartistJS -->
            <script src="../plugins/chartist/js/chartist.min.js"></script>
            <script src="../plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

            <!-- add client script starts -->

            <script>
                $(() => {
                    $('#addclientdata').submit(function(e) {
                        e.preventDefault();

                        console.log('add button clicked!')
                        var fd = new FormData(this);
                        console.log(fd , "i am form data");
                        var baseUrl = "http://localhost:8000";
                        $.ajax({
                            url: baseUrl + "/clients/addClient/",
                            dataType: "json",
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            async: true,
                            data: fd,
                            success: function(data) {
                                console.log(data , "i am the data after ajax call is completed");
                                $('#timeoutmsg').html("Client Added Successfully");
                                setTimeout(()=>{
                                    $('#timeoutmsg').html("");
                                }, 2000)
                                document.getElementById("addclientdata").reset();

                            },
                            error: function(xhr, exception) {
                                var msg = "";
                                if (xhr.status === 0) {
                                    msg = "Not connect.\n Verify Network." + xhr.responseText;
                                } else if (xhr.status == 404) {
                                    msg = "Requested page not found. [404]" + xhr.responseText;
                                } else if (xhr.status == 500) {
                                    msg = "Internal Server Error [500]." + xhr.responseText;
                                } else if (exception === "parsererror") {
                                    msg = "Requested JSON parse failed.";
                                } else if (exception === "timeout") {
                                    msg = "Time out error." + xhr.responseText;
                                } else if (exception === "abort") {
                                    msg = "Ajax request aborted.";
                                } else {
                                    msg = "Error:" + xhr.status + " " + xhr.responseText;
                                }

                            }
                        });
                    });
                });
            </script>
            <!-- add client script ends -->

</body>

</html>