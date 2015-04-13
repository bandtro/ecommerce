<?php $this->load->view("global/header") ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php $this->load->view("global/sidebar"); ?>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?= base_url().'assets/img/'.$leproduit->img; ?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?= $leproduit->prix; ?>€</h4>
                        <h4><a href="#"><?= $leproduit->titre; ?></a>
                        </h4>
                        <p><?= $leproduit->descrip; ?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <h2>Laissez un commentaire:</h2>

                    <div class="text-right">
                        
                        <?= form_open("Produit/infoProduit/".$idProduit); ?>
                        
                        <?php $data=[
                        "name"=>"auteur",
                        "placeholder"=>"Votre nom",
                        "class"=>"form-control",
                        "value"=>set_value("auteur")];
                        echo form_input($data);
                        echo form_error('auteur', '<div class="error">', '</div>');
                        ?>

                        <?php $data=[
                        "name"=>"commentaire",
                        "placeholder"=>"Votre commentaire",
                        "class"=>"form-control",
                        "value"=>set_value("commentaire")];
                        echo form_textarea($data);
                        echo form_error('commentaire', '<div class="error">', '</div>');
                        ?>

                        <?php $data=[
                        "name"=>"note",
                        "placeholder"=>"Votre note",
                        "class"=>"form-control",
                        "value"=>set_value("note")];
                        echo form_input($data);
                        echo form_error('note', '<div class="error">', '</div>');?>

                        <?= form_submit('mysubmit', 'Valider', "class='btn btn-success'");?>

                        <?= form_close(); ?>


                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <?php $this->load->view("global/footer"); ?>