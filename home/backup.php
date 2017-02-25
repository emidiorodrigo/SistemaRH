<section id="Cadastro">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Cadastro Funcionario</h2>
          <hr>

          <h5>Dados pessoais</h5>
          <hr>
          <div class="row">
            <div class="form-group">
              <label for="campo1">Nome</label>
              <input type="text" class="form-control" name="nome">
            </div>

            <div class="form-group">
              <label for="campo2">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
            <div class="form-group">
              <label>Sexo</label>
              <select class="form-control select2" name="sexo" id="sexo" required="" style="width: 100%;">
                <option value="" disabled selected>Selecione o sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino" >Feminino</option>
              </select>
            </div>

          </div>
          <h5>Endereço</h5>
          <hr>
          <div class="row">


            <div class="form-group col-md-4">
              <label>Cidade</label>
              <select class="form-control select2" name="cidade" id="cidade" required="" style="width: 100%;">
                <option value="" disabled selected>Cidade/UF</option>
                <option value="são miguel" >Cidade</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="campo3">Rua</label>
              <input type="text" class="form-control" name="rua">
            </div>
            <div class="form-group col-md-4">
              <label for="campo3">Número</label>
              <input type="text" class="form-control" name="numero">
            </div>
            <div class="form-group col-md-4">
              <label for="campo3">Bairo</label>
              <input type="text" class="form-control" name="bairo">
            </div>
          </div>
          <h5>Contato</h5>
          <hr>
          <div class="row">
            <div class="form-group col-md-4">
              <label for="campo1">E-mail</label>
              <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group col-md-4">
              <label for="campo2">Telefone 1</label>
              <input type="text" class="form-control" name="telefone1" id="telefone1" placeholder="(___)___-______-______">
            </div>

            <div class="form-group col-md-4">
              <label for="campo3">Telefone/Fixo</label>
              <input type="text" class="form-control" name="telefone2" id="telefone2" placeholder="(___)___-______-______">
            </div>
          </div>



        </div>
      </div>
          <div class="row">
              <div class="form-group col-xs-12" style="text-align: right;">
                <button type="submit" class="btn btn-success btn-lg pull-rigth">Cadastrar</button>
              </div>
          </div>
      </div>
  </section>
</form>
  <!-- About Section -->
  <section class="success" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Pesquisar funcionário</h2>

        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
          <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
        </div>
        <div class="col-lg-4">
          <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <a href="#" class="btn btn-lg btn-outline">
            <i class="fa fa-download"></i> Download Theme
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Contact Me</h2>
          <hr class="star-primary">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Phone Number</label>
                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="row control-group">
              <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="row">
              <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-success btn-lg">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
