<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center">Forma za logovanje</h4>
            </div>
            <div class="modal-body">
                <?php include("view/login.php"); ?>
            </div>
        </div>
    </div>
</div>

<footer >
    <hr>
    <div class="footer footer-fixed-bottom">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <a href="#collapse-1"  data-toggle="collapse" data-parent="#accordion">
                            <h3 align="center" id="kontakt" class="text-primary">Kontaktirajte nas</h3>
                        </a>
                    </div>
                    <div id="collapse-1" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="well">
                                <section >
                                    <div class="container text-center" >
                                        <form action="" method="post" class="form-group col-md-6 col-md-offset-3">

                                            <div class="form-group">
                                                <label for="text">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Your username">
                                            </div>
                                            <div class="form-group">
                                                <label for="sifra">Password</label>
                                                <input type="password" class="form-control" name="sifra" placeholder="Your password">
                                            </div>
                                            <div class="form-group">
                                                <label for="user-message" class=" control-label">
                                                    Vase pitanje?
                                                </label>
                                                <div class="form-group">
                                                    <textarea name="product_desc"  id="opis" class="form-control" cols="20" rows="8" placeholder="Unesite vase pitanje"></textarea>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-default" name="login">Posalji pitanje</button>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center" >
            <ul class="list-inline">
                <li><a href="">Twiter</a></li>
                <li><a href="">Facebook</a></li>
                <li><a href="">Youtube</a></li>
            </ul>
            <p>&copy; Copyright @ 2016</p>
        </div>
    </div>

</footer>


<script type="text/javascript" src="public/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/scripta.js"></script>
</body>
</html>