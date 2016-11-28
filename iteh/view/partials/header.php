<html>
    <head>
        <meta charset="utf-8"/>
        <title>E-prodavnica</title>
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/style.css">
    </head>
    <body data-spy="scroll" data-target="#my-navbar">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"> 
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
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php session_start();?>
                        <?php if (isset($_SESSION['username']) && isset($_SESSION['level'])): ?>
                            <li><a href="admin/admin.php">Admin panel</a></li>
                            <a href="view/logout.php" class="btn btn-default login navbar-btn navbar-right">Logout</a>
                        <?php else: ?>
                            <a href="#login" data-toggle="modal" class="btn btn-default login navbar-btn navbar-right">Login</a>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

