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
    <link rel="stylesheet" href="../index.css?v=<?php echo time(); ?>">
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
                                    <img src="../images/user/4.png" height="40" width="40" alt="">
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


        <h1 class="job-heading">VIEW JOBS</h1>

        <div class="content-body" style="min-height: 876px;">

            <div class="container-fluid mt-3 job-data">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">


                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th> JOB NAME</th>
                                                    <th>EMPLOYEE NAME</th>
                                                    <th>CLIENT NAME</th>
                                                    <th>START TIME</th>
                                                    <th>END TIME</th>
                                                    <th>EMPLOYEE FEEDBACK</th>
                                                    <th>CLIENT FEEDBACK</th>
                                                    <th>CURRENT STATUS</th>
                                                    <th>MODIFY</th>
                                                    <th>DELETE</th>


                                                </tr>
                                            </thead>


                                            <tbody id="job-list">

                                            </tbody>
                                        </table>

                                        <a href="./addJob.php">
                                            <button type="button" class="btn btn-primary">ADD JOB</button>
                                        </a>
                                    </div>
                                    <div id="timeoutmsg"></div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>


        <!-- delete modal data -->
        <div id="myDeleteModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="icon-box">
                            <i class="material-icons">&#xE5CD;</i>
                        </div>
                        <h4 class="modal-title">Are you sure?</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-id="" id="btnDelteYes">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- delete modal data ends-->


        <!-- update modal starts -->



        <div class="modal fade" id="myUpdateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Update</h4>
                    </div>

                    <div class="modal-body">
                        <form id="updateformofjobdata" method="post">
                            <div id="form1" action="" >
                                <div class="modal-update-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Job Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Job Name" name="nomPrestation">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Employee Name</label>
                                        <div class="col-sm-10">
                                            <select id="employee-list-for-update" class="form-control" name="ref_employe">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Client Name</label>
                                        <div class="col-sm-10">
                                            <select id="client-list-for-update" class="form-control" name="ref_client">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Start Time</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter The Start Time" name="heureArrivee">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">End Time</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Enter The End Time" name="heureDepart">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Employee Feedback</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Employee Feedback" name="commentaire">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Client Feedback</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Client Feedback" name="remarque_client">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Current Status of Job</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Current status" name="statut">
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input id="submit" type="submit" value="UPDATE" update-id="" class="btn btn-dark afterupdate" />

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- update modal ends -->

        <!-- timout starts -->

        <div id="timeoutmsg"></div>

        <!-- timeout ends -->


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

        <script>
            var baseUrl = "http://localhost:8000";
            $(() => {

                async function getEmpOptions() {
                    $.ajax({
                        url: baseUrl + "/employes/employeAPI-list/",
                        dataType: "json",
                        type: "GET",
                        async: true,
                        data: {},
                        success: function(data) {
                            console.log(data, "i am emp date for updte");
                            if (data) {
                                var output = '';
                                data.forEach(item => {
                                    output += `
                                                                     
                                                   <option value = "${item.id}"  >${item.prenomEmploye}</option>
                           
                    `;
                                });
                                $('#employee-list-for-update').html(output);
                                // console.log(output, "i am the output");
                              
                            } else {
                                $('#employee-list-for-update').html("<select >No data found</select>");

                            }


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

                }

                async function getClientOptions() {
                    $.ajax({
                        url: baseUrl + "/clients/clientAPI-list/",
                        dataType: "json",
                        type: "GET",
                        async: true,
                        data: {},
                        success: function(data) {
                            console.log(data, "i am client data for update");
                            if (data) {
                                var output = '';
                                data.forEach(item => {
                                    output += `                    
                                                  
                                                   <option value = "${item.id}"  >${item.prenomClient}</option>
                                                                                                       
                    `;
                                });
                                $('#client-list-for-update').html(output);
                            } else {
                                $('#client-list-for-update').html("<select >No data found</select>");

                            }


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
                }

                $.ajax({
                    url: baseUrl + "/prestationAPI-list/",
                    dataType: "json",
                    type: "GET",
                    async: true,
                    data: {},
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            var output = '';
                            data.forEach(item => {
                                output += `
                    
                                               <tr>
                                                    <td>${item.nomPrestation}</td>
                                                    <td>${item.ref_employe}</td>
                                                    <td>${item.ref_client}</td>
                                                    <td>${item.heureArrivee}</td>
                                                    <td>${item.heureDepart}</td>
                                                    <td>${item.commentaire}</td>
                                                    <td>${item.remarque_client}</td>
                                                    <td>${item.statut}</td>
                                                    
                                                    <td id = "${item.id}><button type="button" class="btn btn-primary btnupdate updatejobdata" update-id = "${item.id}" >UPDATE</button></td> 
                                                    <td id = "${item.id}"><button type="button" class="btn btn-danger btndelete deletejobdata"  data-id = "${item.id}">DELETE</button></td> 


                                                </tr>
                    `;
                            });
                            $('#job-list').html(output);
                        } else {
                            $('#job-list').html("<tr><td colspan = '7'>No data found</td></tr>");

                        }


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



                //open modal for update 
                $(document).on('click', '.updatejobdata', async function() {
                    console.log("i reached update step");
                    var updid = $(this).attr('update-id');
                    console.log(updid, "i am related to update job id");

                    $('.afterupdate').attr('update-id', updid)

                    console.log('update button clicked!')

                    $('#myUpdateModal').modal('show');
                    await getClientOptions();
                    await getEmpOptions();

                    $.ajax({
                        url: baseUrl + `/prestationAPI-detail/${updid}/`,
                        dataType: "json",
                        type: "GET",
                        async: true,
                        data: {},
                        beforeSend: function() {
                            console.log("before send fncn");

                        },
                        success: function(data) {
                            console.log(data, "i am the data after update ajax call is completed");
                            
                            $("#employee-list-for-update option[value ='" + data.ref_employe + "']").attr("selected", 'selected');
                            $("#client-list-for-update option[value ='" + data.ref_client + "']").attr("selected", 'selected');

                            $('input[name="nomPrestation"]').val(data.nomPrestation);
                            $('input[name="heureArrivee"]').val(data.heureArrivee);
                            $('input[name="heureDepart"]').val(data.heureDepart);
                            $('input[name="commentaire"]').val(data.commentaire);
                            $('input[name="remarque_client"]').val(data.remarque_client);
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

                // ajax update starts




                $('#updateformofjobdata').submit(function(e) {
                    console.log("i reached inside form of update");
                    e.preventDefault();
                    console.log('modal update button clicked!')
                    var fd = new FormData(this);
                    console.log(fd, "i am form data");
                    var uid = $('#submit').attr('update-id');
                    console.log(uid , "am i working uid even");


                    $.ajax({


                        url: baseUrl + `/updatePrestation/${uid}/`,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        async: true,
                        data: fd,
                        success: function(data) {
                            console.log(data, "i am the data after update job is completed");
                            console.log("update is done");
                            $('#myUpdateModal').modal('hide');
                            $('#timeoutmsg').html("Updated Successfully");

                            setTimeout(() => {
                                $('#timeoutmsg').html("");
                                window.location.reload();
                            }, 500)

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
                // ajax update ends

                // close modal for update


                //open modal for delete 
                $(document).on('click', '.deletejobdata', function() {
                    console.log("i reached delete step");
                    var delid = $(this).attr('data-id');
                    console.log(delid, " i am delete id");
                    $('#btnDelteYes').attr('data-id', delid)

                    $('#myDeleteModal').modal('show');

                });

                $(document).on('click', '#btnDelteYes', function() {
                    let id = $(this).attr('data-id');

                    console.log(id, "i am the job id that is to be deleted");
                    $('#' + id).parents("tr").remove();
                    console.log("delete is done");
                    $('#myDeleteModal').modal('hide');

                    $.ajax({


                        url: baseUrl + `/deletePrestation/${id}/`,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        type: 'DELETE',
                        async: true,

                        success: function(data) {
                            console.log(data, "i am the data after ajax call is completed");
                            $('#timeoutmsg').html("Deleted Successfully");
                            setTimeout(() => {
                                $('#timeoutmsg').html("");
                            }, 2000)

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

                // close modal for delete
            });
        </script>



</body>

</html>