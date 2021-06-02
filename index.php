<!Doctype html>
<html>
<head>
<meta charset="utf-8">
 </head>
 <body>

 <script>

 function validarFormulario(){
     var nombre = document.getElementById("nombre").value;
     var apellido = document.getElementById("apellido").value;
     var telefono = document.getElementById("telefono").value;
     var edad = document.getElementById("edad").value;
     var fechaDeNacimiento = document.getElementById("fechaDeNacimiento").value;
     var email = document.getElementById("email").value;

    if(nombre=="" || apellido==""|| telefono==""|| email==""|| edad==""||fechaDeNacimiento==""){
        alert("Por favor llene todos los campos");
    } else {
        document.getElementById("formulario").submit;
    }
}
 </script>
   
 <form id ="formulario" action="formulario.php" method="POST">
     Nombre <input type="text" name="nombre" id="nombre">
     Apellido <input type="text" name="apellido" id="apellido">
     Telefono <input type="number" name="telefono" id="telefono">
     Edad <input type="number" name="edad" id="edad">
     Fecha de nacimiento <input type="number" name="fechaDeNacimiento" id="fechaDeNacimiento">
     Email <input type="email" name="email" id="email">
     <button type="button" onclick="validarFormulario()">Enviar</button>
 </form>  
  
 </body>
</html>

