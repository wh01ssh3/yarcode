<?php

/* @var $this yii\web\View */

$this->title = 'Frontend';

?>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <?php
            $portfolios = Yii::$app->db->createCommand('SELECT * FROM portfolio')
                ->queryAll();
            ?>
            <?php foreach ($portfolios as $element): array_map('htmlentities', $element)?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $element['title'];?></h4>
                        <p class="text-muted"><?php echo $element['description'];?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <?php $abouts = Yii::$app->db->createCommand('SELECT * FROM about')
                ->queryAll();?>
            <?php foreach ($abouts as $about_element): array_map('htmlentities', $about_element)?>
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading"><?php echo $about_element['title'];?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><?php echo $about_element['description'];?></p>
                            </div>
                        </div>
                    </li>
                    <?php endforeach;?>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
             <?php foreach ($teams as $team_element): ?>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?= $team_element->getUploadedFileUrl('image')?>" class="img-responsive img-circle" alt="">
                        <h4><?php echo $team_element['title'];?></h4>
                        <p class="text-muted"><?php echo $team_element['description'];?></p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endforeach;?>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
</section>
