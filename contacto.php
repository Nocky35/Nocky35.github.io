<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="css/contacto2.css">

    <header class="header">
        <div class="owo">
            <div class="logo">
                <h1>Tortas "Los Tuki"</h1>
            </div>
            <nav class="menu">
            <a href="Index.php">Inicio</a>
               <a href="site.php">Pedir</a>
               <a href="contacto.php">Contacto</a>
               <a href="mostrarCarrito.php"> Carrito </a>
               <button class="logout">Cerrar Sesion</button> 
            </nav>
        </div>
  </header>

  <div class="owo">
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">

    <h1 class="display-4">Contacto "Los Tuki"</h1>
    
    
            
    <img class="tuki" src="imagenes/tukiquieres.JPG">

    <br>
    <br>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798.4120665991416!2d-100.1490213843837!3d25.64396177437924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c245772bf8dd%3A0x7ea6ea65588a9333!2sPrivada%20V%C3%ADa%20Siete%20Primer%20Sector!5e0!3m2!1ses-419!2smx!4v1652654493049!5m2!1ses-419!2smx" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <h2 class="uwu"> Numeros de telefono: </h2>
    <h2 class="numtel"> Numero telefonico 1: 8129138214 </h1>
    <h2 class="numtel2"> Numero telefonico 2: 8192374850 </h2>


    </div>


</div>
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