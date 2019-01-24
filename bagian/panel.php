<!DOCTYPE html>
<html lang="en">

<?php 
    include 'bagian/link.php';      
 ?>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top header" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php?p=lihat-data/home"> <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Lihat Data</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="operator"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Operator</a>
                    </li>
                    <li>
                        <a href="admin"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> Administrator</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</body>

</html>
