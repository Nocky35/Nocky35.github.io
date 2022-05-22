<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="css/Css.css" />


     <header class="header">
       <div class="container">
           <div class="logo">
               <h1 >Tortas "Los Tuki"</h1>
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

 <body>

<div class="owo">
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1 class="display-4">¡Bienvenido a Tortas "Los Tuki"!</h1>
    <h2 class="uwu">Las Tortas que Tuki-sieras degustar.</h2>
    <br>
</div>

<div class="slider">
    <figure>
        <img src="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/11/torta-light-salmon-ahumado.jpg" />
        <img src="https://images.aws.nestle.recipes/resized/897a433ffcccdabf0482421576ed7d4c_TORTA_DE_BISTEC_TOREADA_-_MAGGI_TOREADO_150_1200_600.jpg" />
        <img src="https://assets.unileversolutions.com/recipes-v2/94527.jpg" />
        <img src="https://www.vvsupremo.com/wp-content/uploads/2019/10/180906_RT_Chicken-Milanesa-Torta-09-26-18_104_v1-Approvals.jpg" />
    </figure>
</div>
<br>
<br>
<br>
<div class="botonneon">
    <a class="btn-neon" href="spaceInvaders/Juego.html">
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
        <span id="span4"></span>
        ¡Juega para conseguir Descuentos!
    </a>
    </div>

<script type="text/javascript">
    document.getElementById("pedir").onclick = function () {
        location.href = 'site.php';
    }
</script>
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





