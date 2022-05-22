<DOCTYPE html>
    
    <link rel="stylesheet" href="css/iniciodesesion.css">
    <link rel="import" href="/Js/InstruccionesJs.js">
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1>Tortas "Los Tuki"</h1>
            </div>
            <nav class="menu">
            
            </nav>
        </div>
  </header>
    <html class="html">
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h1 class="text1">Para pedir por delivery las Tortas "Los Tuki" necesitas una cuenta, ¡Inicia sesión!<br />Inicio De Sesión:</h1>
        <div id="fomulario">
            <form action="" id="Inicio_De_Sesion" class="iniciarsesion">
                
                <input type="email" name="email" value="" size="30" id="email" required placeholder="Ingrese su Usuario"><br>
                
                <input type="password" name="password" value="" size="30" id="password"required placeholder="Ingrese su contraseña">
                <br>
                
                <button type="submit" value="Enviar" name="enviar" class="Enviar">Enviar</button>
                
                O registrate <a  href="Registrase.php" style="color:#00abe4dc" class="aqui">aqui</a>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
      const app = initializeApp(firebaseConfig);


      //Para loggear
      import { getAuth, signInWithEmailAndPassword } from "https://cdnjs.cloudflare.com/ajax/libs/firebase/9.6.11/firebase-auth.js";

        const iniciarsesion = document.querySelector('.iniciarsesion');
        iniciarsesion.addEventListener('submit', (e) =>{
          e.preventDefault();
          const auth = getAuth();
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
            // Signed in
            const user = userCredential.user;
            console.log("funciona Kong-chatumare:D");
            window.location.href = "index.php";

            // ...
          })    
          .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
          });
        })
        
    </script>
    </html>