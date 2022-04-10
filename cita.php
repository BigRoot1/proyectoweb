    <?php include 'cabecera.php'; ?>
      <section class="parallax-container" data-parallax-img="images/pexels-karolina-grabowska-4476637.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Solicita tu consulta</h2>
                <ul class="breadcrumbs-custom-path">

                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      </section>

      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Solicitud de consulta</h3>

              <form  data-form-output="form-output-global" data-form-type="contact" method="post" action="base/consulta.php">
                <div class="form-wrap">
                  <input class="form-input" id="nombre" type="text" name="nombre" data-constraints="@Required" required>
                  <label class="form-label" for="nombre">Nombre</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="nombre" type="text" name="apellido" data-constraints="@Required" required>
                  <label class="form-label" for="nombre">Apellidos</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="correo" type="email" name="correo" data-constraints="@Email @Required" required>
                  <label class="form-label" for="correo">Correo</label>
                </div>

                <div class="form-wrap">
                  <input class="form-input" id="telefono" type="text" name="telefono" data-constraints="@Numeric" required>
                  <label class="form-label" for="telefono">Telefono</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="mensaje"> Asunto</label>
                  <textarea class="form-input" id="mensaje" name="motivo" data-constraints="@Required" required ></textarea>
                </div>
                <div class="form-wrap">
                <input type="checkbox" name="transporte" value="1" data-constraints="@Required" required> He leído y acepto el aviso legal y la política de privacidad.
                <ul class="rd-navbar-nav">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Aviso legal y Politica de privacidad</a>
                    </li>
                  </div>


                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7 col-lg-5">
                    <button class="button button-block button-lg button-primary" type="submit">Enviar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <?php include 'pie.php';  ?>
