

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
	

element.style {
}
.contenedor {
    width: 92%;
    max-width: 1200px;
    margin: 0 auto;
    padding-bottom: 8px;
}

.encabezado {
    padding-top: 10px;
    padding-bottom: 15px;
}
.boxslogan {
    display: block;
    width: 100%;
    padding-top: 36px;
    padding-bottom: 36px;
    background: #13bfb1;
}
h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
.contenthead {
    display: block;
    max-height: 500px;
    overflow: hidden;
    width: 100%;
}
.imgtratamiento {
    display: block;
    width: 100%;
}
.whiteline {
    border-bottom: solid 0 #fff;
    margin-bottom: 1px;
    border: none;
    position: relative;
}
.grenline {
    border-bottom: solid 2px #13bfb1;
    position: relative;
    margin-bottom: 55px;
}
.letterbig {
    font-size: 39px;
}
.texto-moderna {
    color: #555;
    font-size: 15px;
    font-family: 'Roboto';
    line-height: 23px;
    text-align: center;
    display: block;
    width: 67%;
    margin: 0 auto;
}
.boxnosotros {
    display: block;
    margin-bottom: 60px;
    margin-top: 67px;
}
.hr-grislinetwo {
    border-bottom: solid 3px #dedede;
    position: relative;
    margin-bottom: 55px;
}
.left-nosotros {
    display: block;
    float: left;
    width: 45%;
    margin-right: 5%;
}
.titulo-two {
    padding-top: 38px;
    padding-left: 13px;
    margin-bottom: 16px;
}
.texto {
    font-size: 15px;
    font-family: 'Roboto';
    line-height: 24px;
    color: #555;
    display: block;
    text-align: justify;
}
.right-nosotros {
    display: block;
    float: left;
    width: 45%;
    margin-left: 5%;
}
.boxslogan {
    display: block;
    width: 100%;
    padding-top: 36px;
    padding-bottom: 36px;
    background: #13bfb1;
}
.boxslogan p, .boxslogan h1 {
    display: block;
    text-align: left;
    font-size: 34px;
    font-family: 'Roboto';
    font-weight: 400;
    font-style: italic;
    color: #fff;
    float: left;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}

.tit-items {
    font-family: 'Roboto';
    font-size: 31px;
    color: #00b4b5;
    font-weight: 700;
}
.items {
    display: block;
    margin-top: 30px;
}
strong {
    color: #000;
}
</style>
<body>
<div class=" boxslogan encabezado">
	

<div class="contenedor">
	<h1>Cirug??a de Enc??as con Laser- Gingivoplast??a</h1>
	
</div>
<div class="contenthead">
	<picture><img src="../img/cirugia1.jpg" class="imgtratamiento" alt=" profilaxis dental" itemprop="image"></picture>
</div>


</div>

<div class="whiteline" >
	
</div>
<div class="grenline"></div>

<div>
	<h2 align="center">
	Cirug??a Laser de Enc??as - Gingivoplastia
	</h2>
	<p class="texto-moderna">La <strong>Cirug??a Est??tica de Enc??as o Gingivoplastia</strong> es un procedimiento quir??rgico relativamente simple y r??pido, que busca corregir los problemas est??ticos como por ejemplo, enc??as grandes ( Sonrisa Gingival ) que son muy notorias al momento de sonre??r o enc??as que presentan asimetr??a entre unos dientes y otros.<br> Este tratamiento consiste en eliminar el exceso de tejido y remodelar las enc??as, se realiza de forma ambulatoria y su recuperaci??n es muy r??pida, En la <i>Clinica Dental Krebs</i> realizamos esta cirug??a utilizando un <strong>Laser de Diodo</strong> que nos ayuda a obtener excelentes resultados y con un post-operatorio sin dolor.</p>
	<br>
	

</div>
<div class="contenedor">
	
<div class="boxnosotros">
	<div class="hr-grislinetwo">
	</div>
	<div class="left-nosotros">
		<img src="../img/cirugiaencima.jpg">
	</div>


	<div class="boxeright">
          <h2 class="tit-items">La Gingivoplastia est?? indicada en pacientes que presentan:</h2>
          <ul class="items">
            <li><p>Dientes cortos</p></li>
            <li><p>Enc??as muy grades (Hiperplasia Gingival)</p></li>
            <li><p>M??rgenes Gingivales Irregulares</p></li>
            <li><p>Sonrisa Gingival</p></li>
            </ul>
        </div>
	
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="boxslogan">
	
<div class="contenedor">
	<p>Una hermosa sonrisa le abrir?? las puertas del mundo...</p>
</div>
</div>

</body>
</html>
<?php 
	}else
	{
		header("location:../index.php");
	}
 ?>
