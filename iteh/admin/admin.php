<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>
<?php
$error = null;
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['level'])) {
    header('location: ../index.php');
}

$file = "../konekcija.php";
if (file_exists($file)) {
    include($file);
} else {
    echo "Doslo je do greske pri ucitavanju stranice,<br>molimo vas navratite kasnije";
}
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>E-prodavnica</title>
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../public/css/style.css">

    </head>
    <body data-spy="scroll" data-target="#my-navbar">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"><!--Begin navigation-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Petar Kostic</a>
                </div>
                <a href="../view/logout.php" class="btn btn-primary navbar-btn navbar-right">Logout</a>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="admin.php">Admin</a></li>


                    </ul>
                </div>
            </div>
        </nav><!--End navigation-->
        <br> <br> <br> <br>
        <h1 align="center"><?php echo "Dobro dosli - " . $_SESSION['username']; ?>&emsp;
            <small><?php echo "Poslednji put ste se ulogovali : " . $_SESSION['vreme']; ?></small>
        </h1>
        <h4 align="center"></h4>
        <div>
        <div class="container">
            <div class="col-md-12">
                <div class="page-header" id="lista">
                    <nav class="navbar navbar-default"  role="navigation">
                        <div class="navbar-header">
                            <ul class="nav navbar-nav" id="lista">
                                <li> <a href="index.php" class="navbar-brand"><b>Ubacivanje &emsp;&emsp;&emsp;</b></a></li>
                                <li><a href="admin.php?ubaci=kat" class="kategorija">Ubacivanje kategorije i brenda &emsp;&emsp;&emsp;</a></li>
                                <li><a href="admin.php?ubaci=proizvod" class="proizvod">Ubacivanje proizvoda &emsp;&emsp;&emsp;</a></li>
                                <li><a href="admin.php?ubaci=brend" class="brend">Ubacivanje brenda &emsp;&emsp;&emsp;</a></li>
                                <li><a href="admin.php?str=obrisi">Brisanje proizvoda</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>
<div class="clearfix">
<?php
if (isset($_GET['str']) && $_GET['str'] == 'obrisi') {
    include('obrisi.php');
} else {
    include('admin_kontroler.php');
}
?>
</div>
        <br><br><br>
        <?php if (isset($ok)) { ?>
            <div class="col-md-12">
                <div class="alert alert-success text-center">
                    <strong><?php echo $ok; ?></strong>
                </div>
            </div>
            <?php
        }

        if (isset($error)) {
            ?>
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    <strong><?php echo $error; ?></strong>
                </div>
            </div>
            <?php
        }
        ?>
  
    <?php require('../view/partials/footer.php'); ?>

    </body>
</html>
