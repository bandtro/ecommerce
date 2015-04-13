<?php $this->load->view("global/header") ?>

    <!-- Page Content -->
    <div class="container">
        <!-- <?= base_url();?> -->

        <div class="row">

            <?php $this->load->view("global/sidebar"); ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
<?php foreach ($toutesLesMarques as $key => $uneMarque): ?>
                    <div class="col-xs-6 col-lg-4">
                      <h2><?= $uneMarque->nom; ?></h2>
                      <p><?= $uneMarque->description ?></p>
                      <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                    </div><!--/.col-xs-6.col-lg-4-->
<?php endforeach; ?>
                    
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
<?php $this->load->view("global/footer"); ?>

<!--
<?php foreach ($toutesLesMarques as $key => $uneMarque): ?> 
                        <div class="col-xs-6 col-lg-4">
                            <h2><?= $uneMarque->nom; ?></h2>
                            <p><?= word_limiter($uneMarque->description, 6); ?></p>
                            <p>
                                <a class="btn btn-default" href="#" role="button">View details »</a>
                            </p>
                        </div>
                    <?php endforeach; ?>
                    -->