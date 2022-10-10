<?php


echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="Servicios.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <nav class="nav">
    <a class="nav__logo" href="index.html">Vive Sano</a>
    <a class="fas fa-chevron-left arrow fa-2x" href="index.html"></a>
</nav>
 
    <form style="width:100%;" action="correoS.php" method="POST"  id="form">
      <h2 id="form__title">Laboratorio</h2>
      <p class="form__paragraph">Para La Asignacion De La Cita Me Envias Por favor La Siguente informacion</p>
   <div class="form__container">
       <div class="form__group">
         <input type="text" name="nombre" id="name" class="form__input" placeholder=" " required>
         <label for="name" class="form__label">✔Nombres Y Apellidos</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="number" name="identificacion" id="id" class="form__input" placeholder=" " required>
         <label for="id" class="form__label">✔Identificacion</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="number" name="edad" id="name" class="form__input" placeholder=" ">
         <label for="name" class="form__label">✔Edad</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="text" name="estado" id="estado" class="form__input" placeholder=" " required>
         <label for="estado" class="form__label">✔Estado Civil</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="date" name="nacimiento" id="fecha" class="form__input" placeholder=" " required>
         <label for="fecha" class="form__label">✔Fecha De Nacimiento</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="number" name="telefono" id="telefono"  class="form__input" placeholder=" " required>
         <label for="telefono" class="form__label">✔Telefono</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="number" name="celular" id="celular" class="form__input" placeholder=" " required>
         <label for="celular" class="form__label">✔Celular</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="adress" name="direccion" autocomplete="street-address" id="direccion" class="form__input" placeholder=" " required>
         <label for="direccion" class="form__label">✔Direccion</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
         <input type="text" name="requerimiento" id="requerimiento" class="form__input" placeholder=" " required>
         <label for="requerimiento" class="form__label">✔Requerimiento</label>
         <span class="form__line"></span>
       </div>

       <div class="form__group">
        <div class="g-recaptcha" data-sitekey="6LfEavMhAAAAAA-QTeFRd16WzXyjjT3f5YkIadF_" aria aria-required="true"></div>
      </div>
      <h2 class="subtitle">Verifique El Captcha</h2>


      <input type="submit" id="button" class="form__submit" value="Enviar" data-toggle="modal" data-target="#sigupmodal">
   </div>
    </form>



    <!-- Button trigger modal -->




















    <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>



    
    <script src="https://kit.fontawesome.com/5c097ba349.js" crossorigin="anonymous"></script>

    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="https://kit.fontawesome.com/5c097ba349.js" crossorigin="anonymous"></script>
  
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"></script>


   
</body>
</html>';



?>