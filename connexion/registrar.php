<!-- <?php 
    // include("principal.php");
    
    // // if(isset($_POST['register'])){
    // //     if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) < 1 && strlen($_POST['contraseña']) >= 1){
    // //         $name = trim($_POST['nombre']);
    // //         $email = trim($_POST['email']);
    // //         $phone = trim($_POST['telefono']);
    // //         $password = trim($_POST['contraseña']);
    // //         $consulta = "INSERT INTO regsitro(name, email, phone, password) VALUES ('$name','$email','$phone','$password')";
    // //         $resultado = mysqli_query($con,$consulta);
    // //         if($resultado){
    //             ?>
    //             <h1 class="bg-primary">Incripcion correcta</h3>
    //             <?php
    //         }else{
    //             ?>
    //             <h1 class="bg-danger">Ups a ocurrido un error</h3>
    //             <?php
    //         }
    //     } else{
    //         ?>
    //         <h1 class="bg-danger">Porfavor completa todos los campos</h3>
    //         <?php
    //     }
    // }
?> -->
<?php 

include(".php");

if (isset($_POST[''])) {
    if(strlen($_POST['']) >= 1 && strlen($_POST['']) < 1 && strlen($_POST['']) >= 1){
	    $name = trim($_POST['']);
        $email = trim($_POST['']);
        $phone = trim($_POST['']);
        $password = trim($_POST['']);
        $consulta = " INSERT INTO `regsitro`(``, ``, ``, ``) VALUES ('[$]','[$]','[$]','[$]') ";
        $resultado = mysqli_query($conex,$consulta);
	    
    }  
}

?>