

<?php 
session_start();

if (isset($_SESSION['dni'])) {
	# code...
//	echo $_SESSION;


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once("menucliente.php") ?>
</head>
<style type="text/css">

    .homeback {
        display: block;
        height: 77vh;
        max-height: 600px;
        background: url(../img/banner4.jpg) no-repeat top center;
        background-size: cover;
        position: relative;
        overflow: hidden;
        margin-bottom: 0;
    }
    .contenedor {
        width: 92%;
        max-width: 1200px;
        margin: 0 auto;
        padding-bottom: 8px;
    }
    .boxinfo {
        position: absolute;
        display: block;
        background: rgba(0,180,181,0.88);
        border-radius: 5px;
        padding: 0 3%;
        width: 94%;
        height: 78%;
        max-width: 458px;
        box-sizing: border-box;
        margin-top: 60px;
        padding-top: 55px;
    }
    .boxinfo h1 {
        color: #fff;
        font-size: 25px;
        font-family: 'Roboto';
        font-weight: 700;
        font-style: oblique;
        margin-bottom: 36px;
        text-align: left;
        line-height: 43px;
    }
    .boxinfo p {
        color: #fff;
        font-size: 14px;
        font-family: 'Roboto';
        margin-bottom: 43px;
        text-align: justify;
        line-height: 27px;
    }
    .boxtratamiento h2{color:#777;font-size:35px;line-height:45px;display:block;text-align:center;font-family:'Roboto';font-weight:700;width:800px;margin:0 auto;margin-top:69px;margin-bottom:40px}
    .box-servicios{
    	display:block;margin-top:40px
    }

    .titulo-moderna {
        width: 53%;
        color: #555;
        font-size: 35px;
        font-weight: 700;
        font-family: 'roboto';
        display: block;
        width: 55%;
        width: 75%;
        margin: 0 auto;
        box-sizing: border-box;
        text-align: center;
        padding: 0 30px;
        border-left: 2px solid #bfbfbf;
        border-right: 2px solid #bfbfbf;
        margin-bottom: 40px;
    }
    .box-servicios:after{content:"";display:block;clear:both}.box-servicios li{display:block;float:left;margin:0 1%;width:23%;max-width:270px}
    .box-servicios li img{display:block;width:100%;border-radius:3px}.box-servicios h3{color:#00b091;font-size:15px;display:block;text-align:center;font-family:'Roboto';font-weight:700;margin-bottom:15px;margin-top:10px}.box-servicios h3,.texto-moderna a{color:#fff;text-decoration:none;font-weight:700}.box-servicios h3{background:#ff4d8e;border-radius:3px;display:block;width:100%;padding-top:9px;padding-bottom:9px}	
</style>
<body>

<div class="homeback">
	<div class="contenedor">
		
		<div class="boxinfo">
			<h1>Dentista en Tacna, Especialistas <br>en Implantes y Est??tica Dental</h1>
			<p>Le damos la bienvenida a la <i>Cl??nica Dental Krebs</i>, Resolveremos todos sus problemas dentales en Dise??o de sonrisa, Blanqueamiento Dental, Carillas, Implantes, Ortodoncia, endodoncia con la mejor tecnolog??a y la calidad que nos caracteriza. Contamos con Tecnolog??a L??ser</p>
		</div>
	</div>
	

</div>
<div class="contenedor">
	
	<div class="boxtratamiento">
		<h2 class="titulo-moderna">Tratamientos Dentales <span>Mas Solicitados</span></h2>
		<ul class="box-servicios">
<li><a href="#"> 
<figure><img src="../img/comestica.jpg" alt="Cosmetica Dental" title="Ver: Cosm??tica Dental" itemprop="image"></figure>
                <h3 class="texto-moderna a">Cosm??tica Dental</h3><p>Corrige defectos en sus Dientes y enc??as, como el color, forma, tama??o y contornos, con las diferentes alternativas en tratamientos odontol??gicos que nuestro centro dental puede ofrecerle.  Obtenga unos bellos dientes.</p></a></li>
              
              <li><a href="https://www.dentalkrebs.com/blanqueamiento-dental">
<figure><img src="../img/bla.jpg" alt="Blanqueamiento Dental laser" title="Ver: Blanqueamiento Dental" itemprop="image"></figure>
                <h3 class="texto-moderna a">Blanqueamiento Dental</h3><p>El tratamiento para blanquear los dientes es r??pido y efectivo, logrando aclarar en varios tonos su color con resultados sorprendentes. Se realiza en el consultorio y en una sola cita. Tenga sus Dientes Blancos y Bellos Hoy.</p></a></li>
              <li><a href="https://www.dentalkrebs.com/diseno-sonrisa"> 
<figure><img src="../img/diseno.jpg" alt="Dise??o de Sonrisas dientes" title="Ver: Dise??o de Sonrisa" itemprop="image"></figure>
                <h3 class="texto-moderna a">Dise??o de Sonrisas</h3><p>Obtenga una sonrisa deslumbrante en un muy corto tiempo. Los resultados logran armon??a entre la textura, forma, color y tama??o de los dientes y enc??as. Dise??amos su Sonrisa.</p></a></li>
                <li><a href="https://www.dentalkrebs.com/implantes-dentales"> 
<figure><img src="../img/tornillo.jpg" alt="Implantes Dentales de titanio" title="Ver: Implantes Dentales" itemprop="image"></figure>
                <h3 class="texto-moderna a">Implantes Dentales</h3><p>Recupere los dientes perdidos con implantes dentales de excelente calidad a un costo competitivo. Los implantes reemplazan a las ra??ces dentales perdidas. Implantes Dentales de Titanio.</p></a></li></ul>
		
	</div>
</div>
<br>
<hr>





</body>
</html>
<?php 
	}else
	{
		header("location:iniciocliente.php");
	}
 ?>
