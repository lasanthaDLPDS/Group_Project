<?php
require_once("../PHP_CLASSES/Staff.php");
require_once("../PHP_CLASSES/StockKeeperClass.php");
include("../../Includes/Header.php");
$SANHINDAStockKeeper= new StockKeeperClass();
?>

<body>

<div class = "container" id="main">

<div class="navbar navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="../../Images/logo.png" alt="companyLogo"></a>
        <div class="nav-collapse collapse navbar-responsive-collapse">
            <ul class = "nav navbar-nav pull-left">
                <form class="navbar-form center" action="../PHP/Search.php">
                    <input type="text" class="form-control" placeholder="Search books here" id="searchInput">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form><!--end form-->
            </ul><!--end ul-->

            <ul class = "nav navbar-nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Stock Keeper<strong class="caret"></strong></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-cog"> Settings</span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Update Profile</span></a></li>
                        <li class="divider"></li>
                        <li><a href="../../index.html"><span class="glyphicon glyphicon-off"> Sign-Out</span></a></li><!--methenta home eka link karahan-->
                    </ul>

                </li>
            </ul>
        </div><!-- end nav-collapse-->
    </div><!--end container-->
</div><!--end navbar-->

<hr>
<hr>
<?php echo($SANHINDAStockKeeper->session->messageDisplay()); ?>
<div class="row">

    <div class="col-6 text-center" id="supplierCol">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Suppliers</strong></div>
            <div class="panel-body">
                <div class="row">
                    <img src="../../Images/supplier.jpg" alt="HTML5" class="img-thumbnail">
                </div><!--end row-->
                <hr>
                <div class="row">
                    <a href="#addSupplier" role="button" class="btn btn-default" data-toggle="modal" id="addButton">Add Supplier</a>

                    <div class="modal fade" id="addSupplier">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class ="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Supplier</h4>
                                </div><!--end modal header-->
                                <div class="modal-body">
                                    <h6>Supplier Details Form</h6>
                                    <form class="form-horizontal" action="../PHP/skFlow.php" method="post">

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="Name">Name</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="Name" placeholder="Supplier Name" type="text" name="supName" required="">
                                            </div>
                                        </div><!--end name form-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="email">Email</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="email" placeholder="Email" type="email" name="supMail" required="">
                                            </div>
                                        </div><!--end email-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="tel">Telephone</label>
                                            <div class="col-lg-4">
                                                <input class="form-control" id="tel" placeholder="Telephone" type="text" name="supTel" required="">
                                            </div>
                                        </div><!--end tel-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" >Address</label>
                                            <div class="col-lg-10">
                                                <input class="form-control"  placeholder="Post No" type="text" name="pCode" required=""><br/>
                                                <input class="form-control"  placeholder="Name" type="text" name="name" required=""><br/>
                                                <input class="form-control"  placeholder="City" type="text" name="supCity" required="">
                                            </div>
                                        </div><!--end address-->

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" name="addSupplier">Save</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                    </form><!--end form-->
                                </div><!--end modal body-->

                            </div><!--end modal content-->
                        </div><!--end modal dialog-->
                    </div><!--end modal-->

                    <a class="btn btn-default" href="../PHP/viewSupplier.php" role="button">View Suppliers</a>
                </div><!--end row-->
            </div><!--end panel body-->
        </div><!--end panel-->
    </div><!--end col-->

    <div class="col-6 text-center" id="bookCol">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Book Stock</strong></div>
            <div class="panel-body">
                <div class="row">
                    <img src="../../Images/bookStock.jpg" alt="HTML5" class="img-thumbnail">
                </div><!--end row-->
                <hr>
                <div class="row">
                    <a href="#addBook" role="button" class="btn btn-default" data-toggle="modal" id="addBookBtn">Add Book</a>

                    <div class="modal fade" id="addBook">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button class ="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Book</h4>
                                </div><!--end header-->

                                <div class="modal-body">

                                    <form class="form-horizontal" action="../PHP/skFlow.php" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="isbn">ISBN</label>
                                            <div class="col-lg-4">
                                                <input class="form-control" id="isbn" min=0 placeholder="ISBN" type="number" name="isbn" required="">
                                            </div>
                                        </div><!--end isbn-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="title">Book Title</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="title" placeholder="Title" type="text" name="title" required="">
                                            </div>
                                        </div><!--end title-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="author">Author</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="author" placeholder="Author" type="text" name="author" required="">
                                            </div>
                                        </div><!--end author-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" > Catagory</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="cat" required="">
                                                    <option selected>Select a Catagory</option>
                                                    <option>Action & Adventure</option>
                                                    <option>Arts</option>
                                                    <option>Business & Economics</option>
                                                    <option>Children's Books</option>
                                                    <option>Comics</option>
                                                    <option>Computing,Internet & Digital Media</option>
                                                    <option>Home & Lifestyle</option>
                                                    <option>Health, Family, Personal Developments</option>
                                                    <option>History</option>
                                                    <option>Languages</option>
                                                    <option>Law</option>
                                                    <option>Literature</option>
                                                    <option>Novels</option>
                                                    <option>Politics</option>
                                                    <option>Religion</option>
                                                    <option>Science</option>
                                                    <option>Sports</option>
                                                    <option>Travel</option>
                                                </select>
                                            </div>
                                        </div><!--end catagory-->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="price">Publisher</label>
                                            <div class="col-lg-10">
                                                <input class="form-control"  placeholder="Publisher" type="text" min=0 name="publisher" required="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label" for="price">Price</label>
                                            <div class="col-lg-10">
                                                <input class="form-control" id="price" placeholder="Price" type="number" min=0 name="price" required="">
                                            </div>
                                        </div>

                                        <div class="btn btn-default btn-file">
                                            Upload Photo<input type="file" name="bookCover" value="cover">
                                        </div>

                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-success" name="addBook" VALUE="SAVE">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>

                                    </form><!--end form-->

                                </div><!--end modal body-->

                                <!--end modal footer-->


                            </div><!--end content-->
                        </div><!--end dialog-->
                    </div><!--end modal-->

                    <a class="btn btn-default" href="../PHP/Search.php" role="button">Book Details</a>
                </div><!--end row-->
            </div><!--end panel-->
        </div><!--end panel-->
    </div><!--end col-->

</div><!--end row-->

<div class="row">

    <div class="col-6 text-center" id="purchaseCol">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Purchases</strong></div>
            <div class="panel-body">
                <div class="row">
                    <img src="../../Images/purchases.jpg" alt="HTML5" class="img-thumbnail">
                </div><!--end row-->
                <hr>
                <div class="row">
                    <a class="btn btn-default" href="#" role="button">Add Purchase</a>
                    <a class="btn btn-default" href="#" role="button">Purchase Details</a>
                </div><!--end row-->
            </div><!--end panel body-->
        </div><!--end panel-->
    </div><!--end col-->

    <div class="col-6 text-center" id="salseCol">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Sales (SANHINDA Publication)</strong></div>
            <div class="panel-body">
                <div class="row">
                    <img src="../../Images/sales.jpg" alt="HTML5" class="img-thumbnail">
                </div><!--end row-->
                <hr>
                <div class="row">
                    <a class="btn btn-default" href="#" role="button">Add Sale</a>
                    <a class="btn btn-default" href="#" role="button">Sale Details</a>
                </div><!--end row-->
            </div><!--end panel-->
        </div><!--end panel-->
    </div><!--end col-->

</div><!--end row-->

</div>

<footer>
    <div class="container">
        <div class = "row">
            <h6><strong>SANHINDA PUBLICATIONS</strong></h6>
        </div>
    </div>
    </div>
</footer>

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

