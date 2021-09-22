<?php include HEADER2; ?>

<!-- Breacrumb Area -->
<!-- Breacrumb Area -->
<div class="breadcrumb-area" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="cr-breadcrumb text-center">
                    <!-- <h1>Devenez partenaire</h1>
                    <p>
                        Au travers du partenariat, nous maximisons notre impact pour le Royaume de Dieu
                    </p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breacrumb Area -->

<!-- Page Content -->
<main class="page-content">

    <!-- Contact Us Area -->
    <div class="pg-contact-us-area section-padding-lg bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pg-contact-form mr-0 mr-lg-3">
                        <div class="small-title">
                            <h2>Besoin d'aide ? de prière?</h2>
                            <p>
                                Guérison/ Grandir dans la foi/ Salut. <br>

                                Besoin de prière ? <br>


                                ou cliquez ici pour envoyer votre requête de prière en ligne.

                            </p>
                        </div>
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="row no-gutters">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="name" placeholder="Votre nom complet">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-input">
                                        <input type="text" name="phone" placeholder="Téléphone">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="single-input">
                                        <textarea name="message" cols="10" rows="4" placeholder="Votre "></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-input">
                                        <button class="cr-btn" type="submit">
                                            <span>Envoyez</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pg-contact-details">
                        <div class="small-title">
                            <h2>Contactez-nous directement</h2>
                            <p>Nous sommes là pour vous. contactez – nous par :</p>
                        </div>
                        <ul>
                            <li class="single-quick-contact">
                                <h5>Téléphone</h5>
                                <p>
                                    <a href="tel:+88012659845">+<?php echo TELEPHONE_1; ?></a>
                                </p>
                            </li>
                            <li class="single-quick-contact">
                                <h5>E-Mail</h5>
                                <p>
                                    <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--// Contact Us Area -->



</main>
<!--// Page Content -->

<!--Footer Section-->
<?php include FOOTER; ?>