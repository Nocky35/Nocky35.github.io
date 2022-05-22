
<!DOCTYPE html>
<html lang="en">
<!-- NO MOVER NADA CTM -->
    <link rel="stylesheet" href="css/headerstyle.css">

    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Tortas "Los Tuki"</h1>
            </div>
            <nav class="menu">
            <a href="Index.php">Inicio</a>
               <a href="site.php">Pedir</a>
               <a href="contacto.php">Contacto</a>
               <a href="mostrarCarrito.php"> Carrito(<?php
                 echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
               ?>) </a>
               <button class="logout">Cerrar Sesion</button> 
            </nav>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
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
      import { getAuth, createUserWithEmailAndPassword, signOut, signInWithEmailAndPassword } from 'https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.11/firebase-auth.js';
      const app = initializeApp(firebaseConfig);

      //Cerrar sesion
    const auth = getAuth();    
    const logoutBtn = document.querySelector('.logout');
        logoutBtn.addEventListener('click', (e) => {
            signOut(auth).then(() => {
                console.log('sesion cerrada');
                window.location.href ="Inicio.php"
            }).catch((err) => {
                console.log(err.message);
                
            })

        });
</script>
  </header>
  <br>
  <br>
  <br>
  <br>
  <br>

  <body>