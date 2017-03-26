<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Frontend';

?>
<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">E-Commerce</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Responsive Design</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading">Web Security</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                    architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        </div>
    </div>
</section>
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
            <?php foreach ($portfolios as $element): ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#<?php echo $element['id']; ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= $element->getUploadedFileUrl('image') ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $element['title']; ?></h4>
                        <p class="text-muted"><?php echo $element['category']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->

<!-- Portfolio Modal 1 -->
<?php foreach ($portfolios as $element): ?>
    <div class="portfolio-modal modal fade" id="<?php echo $element['id']; ?>" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2><?php echo $element['title']; ?></h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered"
                                     src="<?= $element->getUploadedFileUrl('image') ?>" alt="">
                                <p><?php echo $element['description']; ?></p>
                                <ul class="list-inline">
                                    <li>Date: <?php echo $element['date']; ?></li>
                                    <li>Client: <?php echo $element['client']; ?></li>
                                    <li>Category: <?php echo $element['category']; ?></li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                            class="fa fa-times"></i> Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>


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
            <div class="col-lg-12">
                <ul class="timeline">
                    <?php foreach ($abouts as $index => $about_element): ?>

                        <li <?= ($index % 2)?'class="timeline-inverted"':''?>>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive"
                                     src="<?= $about_element->getUploadedFileUrl('image') ?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading"><?php echo $about_element['title']; ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $about_element['description']; ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
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
                        <img src="<?= $team_element->getUploadedFileUrl('image') ?>" class="img-responsive img-circle"
                             alt="">
                        <h4><?php echo $team_element['title']; ?></h4>
                        <p class="text-muted"><?php echo $team_element['description']; ?></p>
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
            <?php endforeach; ?>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact us</h2>

                <h3 class="section-subheading text-muted">Please fill out the following fields to send message:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php
                $model = new \common\models\Contact();
                $form = ActiveForm::begin(['id' => 'contactForm']); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'name')->textInput(['placeholder' => "Your name", 'required data-validation-required-message' => "Please enter a name.", "id"=>"name"])->label(false) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'email')->textInput(['placeholder' => "Your email", 'required data-validation-required-message' => "Please enter a email.", "id"=>"email"])->label(false) ?>
                        </div>
                        <div class="form-group">
                            <?= $form->field($model, 'phone')->textInput(['placeholder' => "Your phone", 'required data-validation-required-message' => "Please enter a phone.", "id"=>"phone"])->label(false) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?= $form->field($model, 'message')->textarea(['rows' => 6, 'placeholder' => "Your message", 'required data-validation-required-message' => "Please enter a message.", "id"=>"message"])->label(false) ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>

                        <?= Html::submitButton('Send Message', ['class' => 'btn btn-xl', 'name' => 'message-button']) ?>

                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>-->