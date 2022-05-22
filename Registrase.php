<!DOCTYPE html>
<html lang="en">
<HEAD>
    <title>Los tukis</title>
</HEAD>
<link rel="stylesheet" href="css/CssFormularios.css">
<body>

    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Tortas "Los Tuki"</h1>
            </div>
            <nav class="menu">
            
            </nav>
        </div>
  </header>

  <br>
  <br>
  <br>
  <br>


    <h1 class="titulo">¡Registrate Ahora!</h1>
    <h2 class="subtitulo">Registrate para poder pedir y recibir notificaciones acerca de ofertas y mas cosas</h2>
    <h3 class="texto">Las notificaciones y ofertas son totalmente opcionales</h3>
    <br>
    <br>
    <div id="Formulario_Reg">
        <form action="" class="Formulario_Reg">
            <input type="email" name="email_Reg" id="email_Reg" value="" size="30" required placeholder="Correo"><br>
            <input type="password" name="password_Reg" id="password_Reg" value="" size="30" required placeholder="Contraseña"><b></b>
            <p class="textoform">Acepta los terminos de politicas y condiciones <input type="checkbox" name="terminos" value="ON" required></p>
            <button type="submit" value="Enviar" name="Enviar" class="Enviar">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<script type="module"> 
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-app.js";
      import { } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-auth.js"
      // TODO: Add SDKs for Firebase products that you want to use
      // https://firebase.google.com/docs/web/setup#available-libraries

      // Your web app's Firebase configuration
      const firebaseConfig = {
        apiKey: "AIzaSyDkHTK7Fq_iNBJleSYmq9Of86Ph5thXlFM",
        authDomain: "pia-tukis.firebaseapp.com",
        projectId: "pia-tukis",
        storageBucket: "pia-tukis.appspot.com",
        messagingSenderId: "519151062718",
        appId: "1:519151062718:web:23bb10514144c7dc8858ef"
      };

      // Initialize Firebase
      const app = initializeApp(firebaseConfig);

import { getAuth, createUserWithEmailAndPassword } from "https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.11/firebase-auth.js";
import { } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-auth.js"
// Pa formulario registrar pofabor funsiona sino JeSusඞ arreglalo u.u 
    console.log('Hola jorge')
    const signupForm = document.querySelector('.Formulario_Reg');
    

    const auth = getAuth();
        signupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const email= signupForm.email_Reg.value;
        const password = signupForm.password_Reg.value;
        createUserWithEmailAndPassword(auth, email, password)
        .then(
        (cred) => {
            console.log('Funciono Jorge, Funciono LPTM :,D', cred.user);
            signupForm.reset();
            window.location.href = "index.php";
        }).catch((err)=>{
            console.log(err.message);
	});
  });
</script>
