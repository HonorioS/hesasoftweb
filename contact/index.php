<?php
include_once('../header.php')
?>

<!-- CONTENT CLIENT -->


<div class="container mt-5">


    <!--Section: Content-->
    <section class="dark-grey-text mb-5">

        <style>
            .map-container-section {
                overflow: hidden;
                padding-bottom: 56.25%;
                position: relative;
                height: 0;
            }

            .map-container-section iframe {
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                position: absolute;
            }
        </style>

        <!-- Section heading -->
        <h3 class="font-weight-bold text-center mb-4">Contactos</h3>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
            eum porro a pariatur veniam.</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="form-header  accent-1">
                            <h5 class="mt-2"><i class="fas fa-envelope"></i> Formulário de Contacto</h5>
                        </div>
                      <!--   <p class="dark-grey-text">.</p> -->
                        <!-- Body -->
                        <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form-name" class="form-control">
                            <label for="form-name">Seu Nome</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="form-email" class="form-control">
                            <label for="form-email">Seu email</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-tag prefix grey-text"></i>
                            <input type="text" id="form-Subject" class="form-control">
                            <label for="form-Subject">Assunto</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                            <label for="form-text">Sua messagem</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-light-blue">Enviar</button>
                        </div>
                    </div>
                </div>
                <!-- Form with header -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!--Google map-->
                <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                    <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- Buttons-->
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class="btn-floating">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <p>Zaventem, 1932 </p>
                        <!-- <p>Berreveldlaan 26</p> -->
                        <p class="mb-md-0">Belgica</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating">
                            <i class="fas fa-phone"></i>
                        </a>
                        <p>+351 932310832</p>
                        <p class="mb-md-0">Seg.f - Sexta.f  10:00-18:30</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <p>info@hesasoft.com</p>
                        <p class="mb-0">recrutamento@hesasoft.com</p>
                    </div>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Content-->


</div>


<?php
include_once('../footer.php')
?>

</body>

</html>