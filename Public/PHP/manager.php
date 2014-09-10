<?php
    include("../../Includes/Header.php");
?>
<body>

<div class="container" id="main">
    <div class="navbar navbar-fixed-top">
        <div class="container">
            <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class = "navbar-brand" href="#"><img src = "../../Images/logo.png" alt="My Logo"></a>
            <div class = "nav-collapse collapse navbar-responsive-collapse">
                <ul class = "nav navbar-nav">
                    <li><a href = "manager main.php">Home</a></li>
                    <li class= "active"><a href = "#">Manage Profiles</a></li>
                    <li class="dropdown">
                        <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Reports<strong class="caret"></strong></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "#">View Report</a></li>
                            <li><a href = "#">Send Report</a></li>
                        </ul><!--end of dropdown menu-->
                    </li>
                </ul>
                <ul class = "nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Manager<strong class="caret"></strong></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="../../index.html"><span class="glyphicon glyphicon-off"> Sign-Out</a></li><!--methenta home eka link karahan-->
                        </ul>

                    </li>
                </ul>
            </div><!--end nav-collapse-->
        </div><!--end container-->

    </div><!--end navbar-->

</div> <!--end container-->

<div>
    <hr>
    <hr>
    <h3 id="stfmember">STAFF</h3>
</div>
<div class="row" id="staffDetails">
    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Chairman</h3>
            </div>
            <img src="../../Images/chairman.jpg" alt="HTML5" class="img-circle">
            <a class="btn btn-default btn-block">View Details</a>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Manager</h3>
            </div>
            <img src="../../Images/Manager.jpg" alt="HTML5" class="img-circle">
            <a class="btn btn-default btn-block">View Details</a>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Stock Keeper</h3>
            </div>
            <img src="../../Images/Stock Keeper.jpg" alt="HTML5" class="img-circle">
            <a class="btn btn-default btn-block">View Details</a>
        </div>
    </div>

    <div class="col-sm-3 feature">
        <div class="panel">
            <div class= "panel-heading">
                <h3 class="panel-title">Cashier</h3>
            </div>
            <img src="../../Images/Cashier.jpg" alt="HTML5" class="img-circle">
            <a class="btn btn-default btn-block">View Details</a>
        </div>
    </div>
</div>

<div>
    <div class="row" id="btnMenu">
        <div class="col-sm-4 feature">
            <a href="#addProfile" role="button" class="btn btn-info" data-toggle="modal" id="addButton">ADD PROFILE</a>
            <div class="modal fade" id="addProfile">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class ="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Add Profile</h5>
                        </div>

                        <div class="modal-body">
                            <h6>Employee Details Form</h6><!--mekata data base eka link ka balahan-->
                            <form class="form-horizontal" action="SignUpFormProcessing.php" method="post" name="reg" onsubmit="return checkForm();">

                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="first_name">First Name</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="Name" placeholder="First Name" type="text" required name="firstName">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="Last_name">Last Name</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" id="Name" placeholder="Last Name" type="text" required name="lastName">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="Birth_Day">Birth Day</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="date" placeholder="Birth Day" name="bDay">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="Username">UserName</label>
                                    <div class="col-lg-4">
                                        <input class="form-control" id="Name" placeholder="UserName" type="text" name="username" required>
                                    </div>

                                    <label class="col-lg-2 control-label" for="Password">Password</label>
                                    <div class="col-lg-4">
                                        <input class="form-control" id="passwordName" placeholder="Password" type="password" name="passwordName" required>
                                    </div>
                                </div>



                                <div class="form-group">

                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="Confirm_password">Confirm password</label>
                                    <div class="col-lg-4">
                                        <input class="form-control" id="confirmPassword" placeholder="Confirm password" type="password" required name="confirmPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label" for="Position">Position</label>
                                    <div class="col-lg-6">
                                        <select  id='id_title'  name="priority" class="form-control">
                                            <option selected>Choose a position</option>
                                            <option>Cashier</option>
                                            <option>Stock Keeper</option>
                                            <option>Manager</option>
                                            <option>Chairman</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="btn btn-default btn-file">
                                    Upload Photo<input type="file">
                                </div>

                            <div class="modal-footer">
                                <!--<button class="btn btn-success" name="submit" value="submit" type="submit">Save</button>-->
                                <input type="submit" class="btn btn-success" value="Save" name="submit">
                                <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4 feature">
            <a class="btn btn-warning btn-info">DELETE PROFILE</a>
        </div>

        <div class="col-sm-4 feature">
            <a class="btn btn-warning btn-info">UPDATE PROFILE</a>
        </div>
    </div>
</div>


<!-- All Javascript at the bottom of the page for faster page loading -->

<!-- First try for the online version of jQuery-->
<script src="http://code.jquery.com/jquery.js"></script>

<!-- If no online access, fallback to our hardcoded version of jQuery -->
<script>window.jQuery || document.write('<script src="../JS/jquery-1.8.2.min.js"><\/script>')</script>

<!-- Bootstrap JS -->
<script src="../JS/bootstrap.min.js"></script>

<!-- Custom JS -->
<script src="../JS/script.js"></script>

</body>
</html>
