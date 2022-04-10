<?php
        include 'coneccion.php';

       $nombre=$_POST['nombre'];
       $apellido=$_POST['apellido'];
       $correo=$_POST['correo'];
       $telefono=$_POST['telefono'];
       $asunto=$_POST['motivo'];

       if ($nombre=="" and $apellido=="" and $correo=="" and $telefono=="" and $asunto=="") {
           echo '<script> alert("Favor llenar formulario");
                    window.location="../cita.php"

                </script>';
            exit();

       }
        $insertar="INSERT INTO solicitudes( nombre, apellido, correo,telefono , motivo) VALUES ('$nombre','$apellido','$correo','$telefono','$asunto')";


       $nodoble=mysqli_query($conexion,"SELECT * FROM `solicitudes` WHERE correo='$correo'");

       if (mysqli_num_rows($nodoble)>0) {

           echo '<script>alert("Ya tienes una consulta pendiente");
                   window.location="../cita.php"
               </script>';
           exit();
       }else {
           $query = mysqli_query($conexion,$insertar);
       }



       if ($query) {
           echo '<script> window.location="../aviso.php";</script>';
       }else {
           echo '<script>alert("Algo salio Mal");</script>';
       }














 ?>
