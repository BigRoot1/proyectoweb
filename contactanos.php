    <?php include 'cabecera.php'; ?>
      <section class="parallax-container" data-parallax-img="images/pexels-tima-miroshnichenko-5455007.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Contactanos</h2>
                <ul class="breadcrumbs-custom-path">

                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg text-center bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="tel:#">0-000-000-0000</a></h4>
                  <p>Puedes llamarnos en cualquier momento</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="https://www.google.com/maps/place/C.+Miguel+A.+Piantini+51,+Santo+Domingo+10217/@18.4772518,-69.8979651,17z/data=!3m1!4b1!4m5!3m4!1s0x8eaf88375999aa71:0xee6fb6fb2fc81476!8m2!3d18.4772467!4d-69.8957711">Calle #51 , Piantini, Republica Dominicana</a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="mailto:#">info@MenteSana.org</a></h4>
                  <p>No dude en enviarnos un correo electrónico con sus preguntas</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Envianos tus dudas</h3>

              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required" required>
                  <label class="form-label" for="contact-name">Nombre</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required"required>
                  <label class="form-label" for="contact-email">Correo</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric"required>
                  <label class="form-label" for="contact-phone">Telefono</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Preguntas y dudas</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"required></textarea>
                </div>
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7 col-lg-5">
                    <button class="button button-block button-lg button-primary" type="submit">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?php include 'pie.php'; ?>
