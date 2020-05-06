    <div class="col-10 offset-1 my-3 main-produits">
        <ul class="nav nav-tabs" id="Administration-produits">
            <li class="active"><a href="#homeProduits">Home</a></li>
            <li><a href="#insertProduits">Insertion</a></li>
            <li><a href="#updateProduits">Mise a jour</a></li>
            <li><a href="#deleteProduits">supprimer</a></li>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane active" id="homeProduits">

                <div class="row">
                    <h3>Liste des produits actuelles sur le site.</h3>
                </div>
                <?php foreach ($data as $pro) { ?>
                    <div class="row">
                        <p class="col-8"><?php echo $pro->PRO_DESCRIPTION;?></p>
                        <img src="<?php echo base_url() ;?>assets/img/produits/listes/<?php echo $pro->PRO_SLUG;?>.<?php echo $pro->PRO_PHOTO;?>" alt="<?php echo $pro->PRO_LIBELLE ;?>" class="col-4 img-fluid">
                    </div>
                <?php } ;?>
            </div>

            <div class="tab-pane fade " id="insertProduits">
                <h3>Ajout de produits</h3>
                <?= form_open_multipart('produits/create_produits', ["class" => "col-sm-12 col-lg-9 mt-2"]); ?>

                    <div class="form-group row <?= empty(form_error('pro_lib')) ? '' : 'has-error';?>">
                        <label for="libelle" class="offset-sm-1">Le libelle&nbsp;:&nbsp;*</label>
                        <input type="text" name="pro_lib" id="libelle" class="form-control w-75 offset-sm-1" placeholder="Gipson">
                        <span class="text-warning offset-sm-1"><?= form_error('pro_lib');?></span>
                    </div>

                    <div class="form-group row <?= empty(form_error('pro_ref')) ? '' : 'has-error';?>">
                        <label for="ref" class="offset-sm-1">La ref&nbsp;:&nbsp;*</label>
                        <input type="text" name="pro_ref" id="ref" class="form-control w-75 offset-sm-1" placeholder="gui000">
                        <span class="text-warning offset-sm-1"><?= form_error('pro_ref');?></span>
                    </div>



                    <div class="form-group row <?= empty(form_error('pro_prix')) ? '' : 'has-error';?>">
                        <label for="prix" class="offset-sm-1">Définir un prix&nbsp;:&nbsp;*</label>
                        <input name="pro_prix" id="prix" class="form-control w-75 offset-sm-1" placeholder="99.99" min-size="0" max-size="99999.99">
                        <span class="text-warning offset-sm-1"><?= form_error('pro_prix');?></span>
                    </div>

                    <div class="form-group row <?= empty(form_error('pro_stock')) ? '' : 'has-error';?>">
                        <label for="stock" class="offset-sm-1">Entrer un stock&nbsp;:&nbsp;*</label>
                        <input name="pro_stock" id="stock" class="form-control w-75 offset-sm-1" min-size="0" max-size="500" placeholder="10">
                        <span class="text-warning offset-sm-1"><?= form_error('pro_stock');?></span>
                    </div>

                    <div class="form-group row <?= empty(form_error('pro_desc')) ? '' : 'has-error';?>">
                        <label for="desc" class="offset-sm-1">Indiquez une inscription&nbsp;:&nbsp;*</label>
                        <textarea name="pro_desc" id="desc" class="form-control w-75 offset-sm-1" min-size="0" max-size="500" placeholder="Il étais une fois.."></textarea>
                        <span class="text-warning offset-sm-1"><?= form_error('pro_desc');?></span>
                    </div>

                    <!--test unit a faire-->
                    <!--<div class="form-group row">
                        <label for="cat" class="offset-sm-1">Mettre une catégories</label>
                        <select name="cat_id" id="cat" class="form-control w-75 offset-sm-1">
                            <?php //foreach($categories as $cat){?>
                            <option value=""></option>
                            <?php //};?>
                        </select>
                    </div>-->

<!-- mettre img-->
     
                    <div class="form-group row <?= empty(form_error('err_img')) ? '' : 'has-error';?>">
                        <label for="stock" class="offset-sm-1">Entrer un stock&nbsp;:&nbsp;*</label>

                        <input type="file" name="img" id="stock" class="form-control w-75 offset-sm-1">
                        <span class="text-warning offset-sm-1"><?= form_error('err_img');?></span>
                    </div>

                <?= form_submit("create_pro", "Envoyez", ["class" => "btn btn-custom my-2 mx-2"], ["type" => "submit"]);?>
                <?= form_close(); ?>

            </div>
            
            <div class="tab-pane fade" id="updateProduits">
                 <p>Lorem ipsum dolor sit amet, consect</p>
            </div>
            
            <div class="tab-pane fade" id="deleteProduits">
                 <p>Lorem ipsum dolo</p>
            </div>
        </div>
    </div>

 


























<div class="container-fluid"> 
            <div class="row"> 
                <div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-12">
                    <h1 class="text-dark">Partie Admin</h1>
                    <section>
                        <article>
                            <h4 classe="success bg-dark">Les Fournisseurs</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les fournisseurs en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("fournisseurs/fourni_list");?>" class="btn btn-dark offset-3" target="_blank"> Fournisseurs</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 classe="success bg-dark">Les produits</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les produits en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("produits/pro_list");?>" class="btn btn-dark offset-3" target="_blank"> Produits</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 classe="success bg-dark">Les catégories</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les catégories en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("categorie/cat_list");?>" class="btn btn-dark offset-3" target="_blank"> Categories</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 classe="success bg-dark">Les Clients</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les clients en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("clients/cli_list");?>" class="btn btn-dark offset-3" target="_blank"> Clients</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 classe="success bg-dark">Le Personnel </h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur le personnel en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("personnels/pers_list");?>" class="btn btn-dark offset-3" target="_blank"> Personnel</a>
                        </article>
                    </section>
</div>
</div>
</div>