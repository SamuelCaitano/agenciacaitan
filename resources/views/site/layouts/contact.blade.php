<section id="contact" class="ts-block ts-separate-bg-element" style="background: white; color:black">
  <div class="container"> 
    <div class="pt-5">
      <div class="row">
        <div class="col-md-4">
          <h3 style="margin: 0">Escanei o QR Code</h3>
          <p style="color: dimgray">aponte a câmera ou click sobre.</p>
          <div class="ts-column-count-sm-2">
            <div class="col-12" style="text-align: center; display:flex">
              {{-- QRCODE GERADO PELO SITE https://me-qr.com/pt/qr-code-generator/qr --}}
              <div class="col-6">
                <a href="https://www.instagram.com/agenciacaitan/" target="_blank" rel="noopener noreferrer">
                  <img style="width: 100%; max-width: 200px;" src="assets\img\me\qrcode-instagram.png" alt="">
                </a>
                </div>
              <div class="col-6"> 
                <img style="width: 100%; max-width: 200px;" src="assets\img\me\qrcode.png" alt=""></div>
              <a href="" class="mb-3 d-flex text-white ts-align__vertical" style="position: relative;
                    justify-content: center; border-radius: 15px; padding: 10px; z-index: 1;vtext-decoration: none;vwidth: fit-content;"> 
                
              </a>
            </div>
            <div>
              <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                <span class="ts-circle__xs border border-white ts-border-light mr-4">
                  <i class="fab fa-facebook-f"></i>
                </span>
                <span>Facebook</span>
              </a>
              <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                <span class="ts-circle__xs border border-white ts-border-light mr-4">
                  <i class="fab fa-twitter"></i>
                </span>
                <span>Twitter</span>
              </a>
              <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                <span class="ts-circle__xs border border-white ts-border-light mr-4">
                  <i class="fab fa-instagram"></i>
                </span>
                <span>Instagram</span>
              </a>
              <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                <span class="ts-circle__xs border border-white ts-border-light mr-4">
                  <i class="fab fa-pinterest-p"></i>
                </span>
                <span>Pinterest</span>
              </a>
              <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                <span class="ts-circle__xs border border-white ts-border-light mr-4">
                  <i class="fab fa-skype"></i>
                </span>
                <span>Skype</span>
              </a>
              <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                <span class="ts-circle__xs border border-white ts-border-light mr-4">
                  <i class="fab fa-behance"></i>
                </span>
                <span>Behance</span>
              </a>
            </div>

          </div>
        </div>
        <!--end col-md-4-->
        <div class="col-md-8">
          <h3>Envie sua mensagem, nossa equipe irá te ajudar!</h3>
          <form id="form-contact" method="post" class="clearfix ts-form ts-form-email"
            data-php-path="assets/php/email.php">
            @csrf
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="form-contact-name">Nome *</label>
                  <input type="text" class="form-control" id="form-contact-name" name="name" placeholder="Nome"
                    required>
                </div>
                <!--end form-group -->
              </div>
              <!--end col-md-6 col-sm-6 -->
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label for="form-contact-email">Email *</label>
                  <input type="email" class="form-control" id="form-contact-email" name="email" placeholder="Email"
                    required>
                </div>
                <!--end form-group -->
              </div>
              <!--end col-md-6 col-sm-6 -->
            </div>
            <!--end row -->
            <div class="form-group">
              <label for="form-contact-subject">Assunto *</label>
              <input type="email" class="form-control" id="form-contact-subject" name="subject" placeholder="Informe o que voçe busca aqui"
                required>
            </div>
            <!--end form-group -->
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="form-contact-message">Mensagem *</label>
                  <textarea class="form-control" id="form-contact-message" rows="5" name="message" placeholder="Deixe sua breve mensagem"
                    required></textarea>
                </div>
                <!--end form-group -->
              </div>
              <!--end col-md-12 -->
            </div>
            <!--end row -->
            <div class="clearfix">
              <button type="submit" class="btn btn-primary float-right ts-btn-arrow" id="form-contact-submit">Enviar</button>
            </div>
            <!--end form-group -->
            <div class="form-contact-status"></div>
          </form>
          <!--end form-contact -->
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
  <!--end container-->
</section> 