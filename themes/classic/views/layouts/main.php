<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <link href="<?php echo yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo yii::app()->theme->baseUrl;?>/css/ConvenioStyle.css" rel="stylesheet">
    <style type="text/css">
      h1{
        font-family: 'Francois One', sans-serif;
      }
    </style>

  </head>
  <body> 

    <header class="container-fluid" >
      <div class="row">
        <div id="dlogo" class="col-xs-2">
          <div class="pull-right">
            <img id="Logo" src="<?php echo yii::app()->theme->baseUrl;?>/img/LogoUnet.png" alt="Logo UNET" width="70" height="70">
          </div>
        </div >
        <div class="col-xs-6">
          <h1>Convenios UNET</h1>
          <!--<img id="siglas" src="<?php /*echo yii::app()->theme->baseUrl;*/?>/img/siglasUNET.png" alt="UNET" width="180" height="15"> -->     
        </div>
        <div class="col-xs-4">
          <div class="pull-right">
            <img id="manos" src="<?php echo yii::app()->theme->baseUrl;?>/img/Manos3.png" alt="logoconvenios" width="60" height="60">
          </div>
        </div>
      </div>  
    </header>

    <section id="OpcionesUser" >
      <div class="container-fluid">
        <nav>
          <ul class="nav nav-pills navbar-right">
           <!-- <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
     <img id="usuario" src="<?php /*echo yii::app()->theme->baseUrl;*/?>/img/User.png" width="25" height="25"> Leydy <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>                        
          </ul>
        </li>-->
          
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <span class="glyphicon glyphicon-log-in"></span></a>
          <div class="dropdown-menu">
            <form id="formLogin" class="form container-fluid">
              <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" id="usr">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <button type="button" id="btnLogin" class="btn btn-block">Login</button>
            </form>
            <div class="container-fluid">
              <br>
              <a class="small" href="#">Forgot password?</a>
            </div>  
          </div>
          </li>
          <li ><a href="" id="fecha"></a></li>
          </ul>
        </nav >
        </div>
    </section>

<!--<nav id="menuPrincipal" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <li><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span>  Consultar Convenios</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-book"></span> Información</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-book"></span> Contáctenos</a></li>
      </ul>
    </div>
  </div>
</nav>-->

<nav id="menuPrincipal" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    <!--  <a class="navbar-brand" href="#">WebSiteName</a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <?php $this->widget('zii.widgets.CMenu',array(
      'htmlOptions'=>array("class"=>"nav navbar-nav"),
      'items'=>array(
        array('label'=>'Inicio', 'url'=>array('/site/index')),
        array('label'=>'Consultar Convenios', 'url'=>array('/site/page', 'view'=>'about')),
        array('label'=>'Información', 'url'=>array('/site/informacion')),
        array('label'=>'Contactenos', 'url'=>array('/site/contact'),'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Configuracion', 'url'=>array('/site/login'),'visible'=>!Yii::app()->user->isGuest)
      ),
      )); ?>
    </div>
  </div>
</nav>

<main >
   <?php echo $content; ?>  
</main>

<footer id="foo" class="container-fluid text-center">
<p><a href="http://www.unet.edu.ve">Universidad Nacional Experimental del Táchira</a></p> 
  
</footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>

    <script>
      var d = new Date();
      var dia=d.getDate().toString();
      var mes=(d.getMonth()+1).toString();
      var anio=d.getFullYear().toString();
      var fecha1=dia.concat("/",mes,"/",anio);
      var fecha2=d.toDateString();
      document.getElementById("fecha").innerHTML = fecha1;
   </script>

  </body>
</html>
