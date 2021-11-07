<?php
use yii\helpers\Url;
$url = Yii::$app->homeUrl.'layouts/frontend/';
?>
<div class="loading">
    <div class="main">
        <div class="dot">
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">UZFOX</a>
        <button class="navbar-toggler navbar-toggler-right js-click-trigger" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-click-trigger js-scroll-trigger" href="#about">Men haqimda</a></li>
                <li class="nav-item"><a class="nav-link js-click-trigger js-scroll-trigger" href="#services">Xizmatlar</a></li>
                <li class="nav-item"><a class="nav-link js-click-trigger js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-click-trigger js-scroll-trigger" href="#pricing">Narxlar</a></li>
                <li class="nav-item"><a class="nav-link js-click-trigger js-scroll-trigger" href="#contact">Bog'lanish</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Obiddinov Xurrambek's info & portfolio</div>
        <div class="masthead-heading">I'm <span class="typer" id="first-typer" data-words="developer,designer,freelancer" data-colors="#fffff" data-delay="100" data-deleteDelay="1000"></span><span class="cursor" data-owner="first-typer"></span></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Men haqimda</a>
    </div>
</header>
<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Men haqimda</h2>
            <h3 class="section-subheading text-muted">Programmer, designer, freelancer</h3>
        </div>
        <!-- content -->
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                <img class="w-100" src="<?= $url ?>assets/img/avatar.jpg">
            </div>
            <div class="col-md-6">
                <div class="about-item">
                    <h4>Obiddinov Xurrambek</h4>
                    <p>Men Xurrambek Obiddinov Namangan viloyati Yangiqo'rg'on tumanida tavvalud topganman! Hozirgacha dasturlash va frilanserlik bilan shug'ullanganman! Hozirda o'qish bilan mashg'ulman!</p>
                    <ul>
                        <li>
                                  <span class="firstSpan">
                                    <i class="fas fa-user"></i>
                                    Name:
                                  </span>
                            <span class="secondSpan">
                                   Xurrambek Obiddinov
                                  </span>
                        </li>
                        <li>
                                  <span class="firstSpan">
                                    <i class="fas fa-calendar-alt"></i>
                                    Birthday:
                                  </span>
                            <span class="secondSpan">
                                     02 Feb 2003
                                  </span>
                        </li>
                        <li>
                                  <span class="firstSpan">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Address:
                                  </span>
                            <span class="secondSpan">
                                    Namangan, Uzbekistan
                                  </span>
                        </li>
                        <li>
                                  <span class="firstSpan">
                                    <i class="fa fa-phone"></i>
                                    Phone:
                                  </span>
                            <span class="secondSpan">
                                    +998 (94) 306 23-29
                                  </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section bg-light" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Xizmatlar</h2>
            <h3 class="section-subheading text-muted">Men taqdim etadigan xizmatlar</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-globe fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Web-sayt</h4>
                <p class="text-muted">Istalgan turdagi veb-saytlarni yaratish</p>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-robot fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Telegram bot</h4>
                <p class="text-muted">Istalgan turdagi telegram botlarni yaratish</p>
            </div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-search fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">SEO xizmatlari</h4>
                <p class="text-muted">Veb-saytingiz google, yandex kabi qidiruv tizimlarida chiqishini ta'minlash</p>
            </div>
        </div>
    </div>
</section>
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in" data-aos-delay="200">

        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3><i class="fab fa-telegram"></i> Buyurtmangiz bormi?</h3>
                <p> Telegramdan tezkor buyurtma bering!</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle text-decoration-none" href="https://t.me/XurrambekUz" target="_blank">Kirish</a>
            </div>
        </div>

    </div>
</section><!-- End Cta Section -->
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Men bajargan loyihalarim</h3>
        </div>
        <div class="row">
            <?php foreach($dataProvider->getModels() as $model){ ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                        <div class="portfolio-link">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><a class="text-decoration-none" href="<?= $model->link ?>" target="_blank"><div class="button-view">Ko'rish</div></a></div>
                            </div>
                            <img class="img-fluid" src="uploads/<?= $model->image ?>" alt="" />
                        </div>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= $model->title ?></div>
                            <div class="portfolio-caption-subheading text-muted"><?= $model->description ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</section>
<!-- ======= Tel Section ======= -->
<section id="tel" class="tel">
    <div class="container" data-aos="zoom-in" data-aos-delay="200">

        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3><i class="fa fa-phone-alt"></i> Sizning buyurtmangiz bormi?</h3>
                <p> Tezkor buyurtma berishni xohlaysizmi? Unda hoziroq qo'ng'iroq qiling</p>
            </div>
            <div class="col-lg-3 tel-btn-container text-center">
                <a class="tel-btn align-middle text-decoration-none" href="tel:943062329" target="_blank">Qo'ng'iroq qilish</a>
            </div>
        </div>

    </div>
</section><!-- End Tel Section -->
<!--price -->
<section class="page-section bg-light" id="pricing">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Narxlar</h2>
            <h3 class="section-subheading text-muted">Xizmatlarim uchun qo'yilgan narxlar</h3>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="">
                <div class="pricing">
                    <h3 class="text-center text-black">Telegram bot</h3>
                    <div class="price text-center mb-4 ">
                        <span><span>$15+</span></span>
                    </div>
                    <ul class="list-unstyled ul-check success mb-5">

                        <li>Ma'lumotlar xavfsizligi</li>
                        <li>Admin panel</li>
                        <li>Qo'llab quvvatlash</li>
                        <li class="remove">Tekin hosting</li>
                    </ul>
                    <p class="text-center">
                        <a href="#contact" class="btn btn-secondary js-scroll-trigger">Buyurtma berish</a>
                    </p>
                </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="pricing">
                    <h3 class="text-center text-black">Veb-sayt</h3>
                    <div class="price text-center mb-4 ">
                        <span><span>$200+</span></span>
                    </div>
                    <ul class="list-unstyled ul-check success mb-5">

                        <li>Istalgan turdagi veb-sayt</li>
                        <li>Veb-saytda admin panel</li>
                        <li>Qo'llab quvvatlash</li>
                        <li class="remove">Tekin hosting</li>
                    </ul>
                    <p class="text-center">
                        <a href="#contact" class="btn btn-primary js-scroll-trigger">Buyurtma berish</a>
                    </p>
                </div>
            </div>

            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="pricing">
                    <h3 class="text-center text-black">SEO xizmatlari</h3>
                    <div class="price text-center mb-4 ">
                        <span><span>$50+</span></span>
                    </div>
                    <ul class="list-unstyled ul-check success mb-5">

                        <li>Google, Yandex, Bing</li>
                        <li>Ma'lumotlar xavfsizligi</li>
                        <li>Sayt statistikasi</li>
                        <li>Qo'llab quvvatlash</li>
                    </ul>
                    <p class="text-center">
                        <a href="#contact" class="btn btn-secondary js-scroll-trigger">Buyurtma berish</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Bog'lanish</h2>
            <h3 class="section-subheading owl">Menga xabaringizni quyidagi forma orqali yo'llashingiz mumkin!</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate" data-aos="zoom-in-down" data-aos-delay="200">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Ism *" required="required" data-validation-required-message="Iltimos ismingizni kiriting" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Iltimos emailingizni kiriting" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Telefon *" required="required" data-validation-required-message="Iltimos telefon raqamingnizni kiriting" />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Xabar *" required="required" data-validation-required-message="Iltimos xabaringizni kiriting"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Xabarni yuborish</button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © Xurrambek Obiddionov <?=date("Y");?></div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="tel:943062329" target="_blank"><i class="fa fa-phone"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="mailto:uzfoxofficial@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://github.com/uzfox" target="_blank"><i class="fab fa-github"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://t.me/XurrambekUz" target="_blank"><i class="fab fa-telegram"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="text-decoration-none mr-3 mylink" href="https://uzfox.uz" target="_blank">My web-site</a>
                <a class="text-decoration-none mylink" href="https://t.me/Xurramshox" target="_blank">My telegram channel</a>
            </div>
        </div>
    </div>
</footer>
<a href="#page-top" class="js-scroll-trigger to-top">
    <i class="fas fa-chevron-up"></i>
</a>