<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
 <style>
   .carousel-inner > .item > img,
   .carousel-inner > .item > a > img {
      width: 95%;
      margin: auto;
  }
  .carousel-caption{
  	background-color:#fff;
    opacity: 0.6;
    filter: alpha(opacity=60);
  }
 
  div h3{
    
    color: #293F83;

  }
  h2{
    /*font-family: 'Pacifico', cursive;*/
    font-family: 'Dancing Script', cursive;
  }
  div p{
    color: #151414;
  }
  #mensajesUser{
    /*background-color:#e9f2f9; #eee*/
  }
  .btn-default{
    color: #1b325f;
    background-color: #3fb8af;
  }
  .btn-default:hover{
    color: #fff;
    background-color: #3cc2b8; 
  }

  </style>

<!--<h1>Welcome to <i><?php /*echo CHtml::encode(Yii::app()->name);*/ ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php /*echo __FILE__; */?></code></li>
	<li>Layout file: <code><?php /*echo $this->getLayoutFile('main');*/ ?></code></li>
</ul>
-->
<div class="container-fluid">
<div class="row">

  <div class="col-sm-12">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div id="carrusel" class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo yii::app()->theme->baseUrl;?>/img/convenio.jpg" alt="Convenio" >
        <div class="carousel-caption">
          <h3>Convenio con Universidad de los Andes</h3>
          <p>texto para la imagen</p>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo yii::app()->theme->baseUrl;?>/img/convenio.jpg" alt="Convenio" >
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>texto para la imagen</p>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo yii::app()->theme->baseUrl;?>/img/convenio.jpg" alt="Convenio" >
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>texto para la imagen</p>
        </div>
      </div>

      <div class="item">
         <img src="<?php echo yii::app()->theme->baseUrl;?>/img/convenio.jpg" alt="Convenio">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>texto para la imagen</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
</div>
</div>

<div id="mensajesUser" class="container">
<div class="row">
   <div class="col-sm-4">
     <h3>¿Cómo Establecer un convenio?</h3>
     <p>Debes llenar el Acta de intención, su formato esta disponible en <a>formato acta de intención</a>
     Puedes leer las normas y procedimientos o tambien puedes contactarnos</p>
     <button type="button" class="btn btn-default">Ver Formatos</button>
  </div>

  <div class="col-sm-4">
     <h3>Conoce nuestras normas y procedimientos</h3>
    <p>Con la finalidad de estandarizar y facilitar el proceso de establecer un convenio se han creado las normas y procedimientos que los rigen</p>
<button type="button" class="btn btn-default">Leer Más</button>

  </div>

  <div class="col-sm-4">
     <h3>Encuentra el convenio que buscabas</h3>
    <p>Consulta a partir de varios criterios como año, institución contraparte, pais y entre otras caracteristicas que te ofrecemos, de esta foma hallaras el convenio que buscabas</p>
  
   <button type="button" class="btn btn-default">Consultar</button>      
  </div>
</div>



  <div class="row">
<div class="col-sm-6">
     <h3>Contactenos</h3>
</div>
<div class="col-sm-6">
<h2> Los Convenios son acuerdos que nos benefician a todos</h2>  
</div >
</div>

</div>
  
 
  


