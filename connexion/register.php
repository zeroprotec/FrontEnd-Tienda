<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Chart.js Graficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Hoja de estilos CSS -->
    <link rel="stylesheet" href="/src/register.css">
    <link rel="stylesheet" href="/src/animation-btn.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>

<body>
    <Section class="register">
        <form method="post">
            <div class="form1">
                <div class="container justify-content-center" id="contend">
                    <div class="container text-center" id="logo-sup">
                        <img src="/Images/Logo Tienda Virtual.png" alt="Logo" width="100" height="100" id="logo-sup">
                    </div>
                    <div class="form-group" id="contenedor">
                        <div class="col-11">
                            <div class="container text-center" id="text-sup">
                                <h1>Regístrate</h1>
                            </div>
                            <input type="text" class="form-control form-control-lg" placeholder="Nombre" name="nombre">
                            <div class="contend3">
                                <ion-icon name="person-outline" class="icon"></ion-icon>
                            </div>
                        </div>
                        <div class="col-11">
                            <input type="text" class="form-control form-control-lg" placeholder="Apellido"
                                name="apellido">
                            <div class="contend2">
                                <ion-icon name="person-outline" class="icon-1"></ion-icon>
                            </div>
                        </div>
                        <div class="col-11">
                            <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
                            <div class="contend4">
                                <ion-icon name="mail-outline" class="icon-1"></ion-icon>
                            </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-11">
                                    <div class="col-4" id="form2">
                                        <input type="number" placeholder="+57" class="form-control form-control-lg"
                                            name="indicativo">
                                    </div>

                                    <div class="" id="form3">
                                        <input type="number" class="form-control form-control-lg" placeholder="Telefono"
                                            name="telefono">
                                    </div>
                                    <div class="contend5">
                                        <ion-icon name="call-outline" class="icon-1"></ion-icon>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-11">
                            <input type="password" class="form-control form-control-lg" name="contraseña"
                                placeholder="Contraseña" name="contraseña">
                            <div class="contend2">
                                <ion-icon name="lock-closed-outline" class="icon-1"></ion-icon>
                            </div>
                        </div>
                        <div class="container" id="cont">
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" required>Acepta <a
                                        href="http://">terminos y
                                        condiciones</a>. <a href="/login.html" class="sign-in">!Ya tengo
                                        Cuenta¡</a></label>
                            </div><br>
                            <div class="btn_lg">
                                <button class="button" type="$_POST" value="register">
                                    <span class="text">Crear mi cuenta</span>
                                    <i class="ri-check-line icon" id="ico"></i>
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
            <?php 
            include("../FrontEnd-Tienda/connexion/registrar.php");
            ?>
    </Section>


    <!-- Boostrap -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Iconos -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Conexion firebase Google -->

    <!-- <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-app.js";
        import { getDatabase, set, ref } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-database.js";
        import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.9.4/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyBU25pqm6oyor3qOE-wTXiswx3L1DgRChE",
          authDomain: "tiendavirtual-c66ac.firebaseapp.com",
          projectId: "tiendavirtual-c66ac",
          storageBucket: "tiendavirtual-c66ac.appspot.com",
          messagingSenderId: "37905433026",
          appId: "1:37905433026:web:76a5a00007694c8dae165b",
          measurementId: "G-QG06Y10EGP"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);
        const auth = getAuth();

        register.addEventListener('click', (e) => {

        var name = document.getElementById('nombre').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('contraseña').value;
        createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
        // Signed in
        const user = userCredential.user;

        set(ref(database,'users/' + user.uid),{
            nombre: nombre,
            email:email
        })
        alert('Usuario Creado con Exito');
        // ...
         })
         .catch((error) => {
          const errorCode = error.code;
          const errorMessage = error.message;
          
          alert(errorMessage);
          // ..
            });
        })
      </script> -->
</body>

</html>