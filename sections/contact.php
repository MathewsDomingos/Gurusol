<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
      <div class="bg-section"><img src="assets/images/background/3.jpg" alt="background" /></div>
      <div class="container">
        <div class="contact-panel contact-panel-3">
          <div class="heading heading-light heading-6">
            <p class="heading-subtitle">Melhorando O Desempenho Da Energia Solar.</p>
            <h2 class="heading-title">Descubra A Independência Usando O Poder Dos Painéis Solares!</h2>
            <p class="heading-desc">Oferecemos produtos, soluções e serviços em toda a cadeia de valor de energia.
              Apoiamos nossos clientes em seu caminho para um futuro mais sustentável - não importa o quão longe ao
              longo da jornada para energizar a sociedade com sistemas de energia acessíveis.</p>
            <div class="advantages-list-holder">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <ul class="list-unstyled advantages-list advantages-list-2">
                    <li>Confiabilidade E <br />Desempenho</li>
                    <li>Financiamento De <br />Material Solar</li>
                    <li>Entregue dentro <br>do prazo</li>
                  </ul>
                </div>
                <div class="col-12 col-lg-6">
                  <ul class="list-unstyled advantages-list advantages-list-2">
                    <li>Até 95% de economia<br /> nas contas de luz</li>
                    <li>Não denigre o meio<br />ambiente</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="contact-action"><a class="btn btn--white" href="page-about.html">Saiba Mais <i
                  class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                href="page-contact.html">Orçamento
                Grátis</a></div>
            <div class="contact-quote"> <img src="assets/images/icons/noteicon.png" alt="icon" />
              <p>Receba uma cotação precisa dentro de 24hs ao preencher este formulário. Ou ligue: <a
                  href="tel:63999460589">(63) 9 9946-0589</a></p>
            </div>
          </div>
          <div class="contact-card">
            <div class="contact-body">
              <h5 class="card-heading">Solicite Um Orçamento</h5>
              <p class="card-desc">Temos muito orgulho em tudo o que fazemos, o controle sobre os produtos nos permite
                garantir que nossos clientes recebam o melhor serviço de qualidade.</p>

              <!--===================================================
                Formulário de contato
                ===================================================-->

              <!-- Script do envio do formulário sem mudar de página -->

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
              <img src="assets/imagens/preloader-escuro.svg" alt="processing..." class="carregando" width="48" />

              <script>
                $(function () {
                  $("#solucoesFormulario").on("submit", function (event) {
                    event.preventDefault();

                    var data = $(this).serialize();
                    $.ajax({
                      url: "./assets/php/enviar.php",
                      type: "post",
                      data: data,

                      // chamada antes de enviar a requisição
                      // alteramos para mostra a imagem
                      beforeSend: function (xhr) {
                        $(".carregando").css('visibility', 'visible');
                      },

                      // chamada quando a requisição termina (seja com erro ou OK)
                      // alteramos e escondemos a imagem
                      complete: function (jqXHR, textStatus) {
                        $(".carregando").css('visibility', 'hidden');
                      },

                      success: function (data, textStatus, jqXHR) {
                        alert('Mensagem enviada com sucesso!');
                        window.location = 'index';
                      }
                    });
                  });
                });
              </script>

              <!-- Script do envio do formulário sem mudar de página -->
              <form class="contactForm" action="" method="post" autocomplete="off" id="solucoesFormulario" name="solucoesFormulario">
                <div class="row">

                  <!--Nome Completo-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Nome Completo</label>
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Insira o nome"
                      required="" maxlength="50" pattern="[0-9]{9}" />
                  </div>

                  <!--Email-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Endereço De Email</label>
                    <input class="form-control" type="text" id="email" name="email"
                      placeholder="Insira o endereço de Email" required="" maxlength="40"
                      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                  </div>

                  <!--Número De Telefone-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Número De Telefone</label>
                    <input class="form-control" type="text" id="telefone" name="telefone" placeholder="Insira números"
                      required="" maxlength="13" OnKeyPress="formatar('00-00000-0000', this)" />
                  </div>

                  <!--Assunto-->
                  <div class="col-12 col-md-6">
                    <label class="form-label" for="contact-usage">Sujeito</label>
                    <input class="form-control" type="text" id="assunto" name="assunto" placeholder="Digite o assunto"
                      required="" maxlength="40" />
                  </div>

                  <div class="col-12">
                    <!--Mensagem-->
                    <div class="col-12 col-md-12">
                      <label class="form-label" for="contact-usage">Digite a mensagem</label>
                      <textarea class="placeHolder-mensagem" type="text" id="mensagem" name="mensagem"
                      placeholder="Digite a mensagem" required=""></textarea>
                    </div>

                    <!--Captcha-->
                    <!--<div class="g-recaptcha" data-sitekey="??????" data-callback="verifyRecaptchaCallback" 
                    data-expired-callback="expiredRecaptchaCallback"></div><br />-->

                    <!--Enviar-->
                    <button class="btn btn--secondary w-100">Enviar pedido <i class="energia-arrow-right"></i></button>
                  </div>
                </div>
              </form>

            </div>
            <!-- End .contact-body -->
          </div>
        </div>
        <!-- End .contact-panel-->
      </div>
      <!-- End .container-->
    </section>