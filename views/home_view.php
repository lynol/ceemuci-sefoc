<?php include 'includes/head.php' ?>
<?php include 'includes/ajout.php' ?>

<body>

    <div class="entete col-md-12">
        <img class="logo logo1" src="assets/img/ceemuci_logo.jpg" alt="">
        <h2 style="text-align: center;">COMMUNAUTE DES ELEVES ET ETUDIANT MUSULMANS DE CÔTE D'IVOIRE</h2>
        <img class="logo logo2" src="assets/img/ceemuci_logo.jpg" alt="">
    </div>

    <div class="" style="padding:45px">
        
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
                <div class="row">
                    <div class="col-md-4">
                        <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
                            style="font-size: 30px"></span>  
                    </div>
                    <div class="col-md-8"> 
                    </div>
                </div>
                <br />
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="#"> <img src="assets/img/1.jpg" class="thumbnail" alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet.. -->
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                    <div class="item ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="#"> <img src="assets/img/2.jpg" class="thumbnail" alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet.. -->
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                    <div class="item ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="#"> <img src="assets/img/3.jpg" class="thumbnail" alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet.. -->
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->

                    <div class="item ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="#"> <img src="assets/img/4.jpg" class="thumbnail" alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                <!-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet.. -->
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                            style="color: Black; font-size: 30px"></span>
                    </div>
                    <div class="col-md-8">
                    </div>
                </div>
            </div>
        </div>

        <form class="well form-horizontal col-md-7 col-lg-6 ml-auto" method="post"  id="contact_form" style="float:right;">
            <fieldset>
                <!-- Form Name -->
                <legend style="text-align: center;"><h1 style="font-weight: bold;">INSCRIPTION SEFOC 2021</h1></legend>

                <!-- nom -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Nom:</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="nom" placeholder="Veuillez entrez le nom du séminariste" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- prénoms -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Prénom(s):</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="prenoms" placeholder="Veuillez entrez le(s) prénom(s) du séminariste" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- age -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Age:</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="age" placeholder="Veuillez entrez l'age du séminariste" class="form-control"  type="number">
                        </div>
                    </div>
                </div>

                <!-- Sexe -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Sexe du Séminariste:</label>
                    <div class="col-md-6">
                        <div class="radio">
                            <label>
                                <input type="radio" name="sexe" value="frère" /> Frère
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="sexe" value="soeur" /> Soeur
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Commune -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Lieux d'habitation du Séminariste:</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="commune" placeholder="Veuillez entrez la commune du séminariste" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- niveau -->
                <div class="form-group"> 
                    <label class="col-md-4 control-label">Nivau scolaire du séminariste:</label>
                    <div class="col-md-6 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                            <select name="niveau" class="form-control selectpicker">
                                <option value=" " >Veuillez selectionner le niveau du séminariste</option>
                                <option value="JARDIN">JARDIN</option>
                                <option value="CP1">CP1</option>
                                <option value="CP2">CP2</option>
                                <option value="CE1">CE1</option>
                                <option value="CE2">CE2</option>
                                <option value="CM1">CM1</option>
                                <option value="CM2">CM2</option>
                                <option value="6ème">6ème</option>
                                <option value="5ème">5ème</option>
                                <option value="4ème">4ème</option>
                                <option value="3ème">3ème</option>
                                <option value="2nd">2nd</option>
                                <option value="1ère">1ère</option>
                                <option value="Tle">Tle</option>
                                <option value="L1">L1</option>
                                <option value="BTS1">BTS1</option>
                                <option value="L2">L2</option>
                                <option value="BTS2">BTS2</option>
                                <option value="L3">L3</option>
                                <option value="M1">M1</option>
                                <option value="M2">M2</option>
                                <option value="D1">D1</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- etablissement -->
                <div class="form-group">
                    <label class="col-md-4 control-label">Etablissement du Séminariste:</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-bed"></i></span>
                            <input name="etablissement" placeholder="Veuillez entrez le nom de l'Etablissementdu séminariste" class="form-control"  type="text">
                        </div>
                    </div>
                </div>

                <!-- Contact -->   
                <div class="form-group">
                    <label class="col-md-4 control-label">Contact du Seminariste:</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="contact" placeholder="Veuillez entrer les 7 chiffres du numéro du seminariste" class="form-control" type="number">
                        </div>
                    </div>
                </div>

                <!-- Contact du parent -->   
                <div class="form-group">
                    <label class="col-md-4 control-label">Contact du parent Seminariste:</label>  
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="contact_parent" placeholder="Veuillez entrez les 7 chiffres du numéro du parent seminariste" class="form-control" type="number">
                        </div>
                    </div>
                </div>                

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success" >Enregistrer <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
    <!-- /.container -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script  src="assets/js/home.js"></script>
    </body>
</html>