<?php include 'components/header.php'; ?>

	<div class="content">
		<div class="container">
			<img src="assets/images/logo.png" alt="">
			
			<p>Em breve</p>
			<h1>Novo Site</h1>

			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="form-group">
					<label>Seu nome</label>
					<input type="text" name="nome" id="nome" class="form-control" value="" />
				</div><!-- .form-group -->

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Seu email</label>
							<input type="text" name="email" id="email" class="form-control" value="" />
						</div><!-- .form-group -->
					</div><!-- .md-6 -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Mensagem</label>
							<textarea name="mensagem" id="mensagem" class="form-control"></textarea>
						</div><!-- .form-group -->
					</div><!-- .md-6 -->
				</div><!-- .row -->			

				<input type="submit" class="botao" value="Enviar" />
			</form>
		</div><!-- container -->
	</div><!-- content -->

	<section class="mapa">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.1932088897024!2d-35.22677058523287!3d-5.828361595776855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ffef768a245d%3A0x5cdb958cb016c480!2sEdif%C3%ADcio+Miguel+Seabra+Fagundes!5e0!3m2!1spt-BR!2sbr!4v1508504368746" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section><!-- mapa -->

<?php include 'components/footer.php'; ?>


<?php
  sleep(1);

  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

  ################# SCRIPT DE ENVIO DE E-MAIL #################
  if(!empty($_POST)){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    if($nome == "" || $email == ""){ echo 'Algum campo ficou em branco! Por favor, preencha-o.'; exit; }

    // Destinatário
    $para = "paulo1rm23@gmail.com";

    // Assunto do e-mail
    $assunto = "Formulario de Contato - Fontes e Pereira";

    $corpo = '<center><table width="700" border="1" cellpadding="0" cellspacing="0" style="border: 1px #6c3070 solid; border-collapse: collapse;">
          <tr>
            <td style="padding: 5px;" bgcolor="#FFF" style="border: 0 !important; bordercolor: #FFF;"  width="210" align="center" ></td>
            <td width="480" align="center" bgcolor="#6c3070" style=" padding: 15px; font-family: Verdana, Geneva, sans-serif; color: #FFF; font-weight: bold;">FORMULÁRIO DE CONTATO - FONTES E PEREIRA</td>
          </tr>
          <tr>
            <td colspan="2" style="padding: 20px; font-family: Arial; color: #666; font-weight: bold; text-align: justify;">
              Olá,
              <br /><br />Esta é uma mensagem automática para notificar um contato - Fontes e Pereira.
              <br /><br />
            </td>
          </tr>
          <tr>
            <td style="padding: 20px; font-family: Arial; color: #666; font-weight: bold; text-align: justify;">
              Nome:
            </td>
            <td style="padding: 20px; font-family: Arial; color: #666; text-align: justify;">
              '.$nome.'
            </td>
          </tr>
          <tr>
            <td style="padding: 20px; font-family: Arial; color: #666; font-weight: bold; text-align: justify;">
              E-mail:
            </td>
            <td style="padding: 20px; font-family: Arial; color: #666; text-align: justify;">
              '.$email.'
            </td>
          </tr>
          <tr>
            <td style="padding: 20px; font-family: Arial; color: #666; font-weight: bold; text-align: justify;">
              Mensagem:
            </td>
            <td style="padding: 20px; font-family: Arial; color: #666; text-align: justify;">
              '.$mensagem.'
            </td>
          </tr>
          <tr>
            <td style="padding: 20px; font-family: Arial; color: #666; font-weight: bold; text-align: justify;">
              INFO
            </td>
            <td style="padding: 20px; font-family: Arial; color: #666; font-weight: bold; text-align: justify;">
              Enviado em '.date('d/m/Y').' - '.date("H:i:s").'
            </td>
          </tr>
          <tr>
            <td bgcolor="#6c3070" colspan="2" style="padding: 10px; font-family: Arial; color: #FFF; font-weight: bold; text-align: center;">MAXMEIO</td>
          </tr>
          </table></center>';

    // Cabeçalho do e-mail
    $header = "MIME-Version: 1.0" . "\r\n".
    "Content-type: text/html; charset=iso-8859-1" . "\r\n".
    "From: fontesepereira@fontesepereira.com.br" . "\r\n" .
    "Bcc: \n".
    "Reply-To: naoresponder@fontesepereira.com.br";
    mail($para, $assunto, $corpo, $header);
    echo '<script> alert("Enviado com sucesso!"); history.back("-1"); </script>';
  }
    // Mostra a mensagem acima e redireciona para index.html
    ################# /SCRIPT DE ENVIO DE E-MAIL #################
?>