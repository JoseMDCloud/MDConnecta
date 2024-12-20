<!-- Archivo privicional, funcionar con menuPrincipal.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
    <title>Menu</title>
</head>
<body>
<script>
    // Configuración de Firebase
    const firebaseConfig = {
        apiKey: "AIzaSyCh8BFeIi4JcAAe-aW8Z2odIqdytw-wnDA",
        authDomain: "mdconnecta-4aeb4.firebaseapp.com",
        databaseURL: "https://mdconnecta-4aeb4-default-rtdb.firebaseio.com",
        projectId: "mdconnecta-4aeb4",
        storageBucket: "mdconnecta-4aeb4.appspot.com",
        messagingSenderId: "134553407299",
        appId: "1:134553407299:web:1b1b3fc6294a3695e3a9f6",
        measurementId: "G-8X256NJ6J6"
    };

    // Inicializar Firebase
    firebase.initializeApp(firebaseConfig);
    const database = firebase.database();
</script>
    <div class="w3-modal" id="modalEmpresas" style="display: block;">
        <div class="w3-modal-content w3-card-4 w3-padding-16 w3-animate-zoom w3-light-gray" style="width:40%;border-radius:20px;">
            <div class="w3-bar" style="display: flex; justify-content: flex-start; ">
                <h2 style="padding-left:3%;">Escoge la Empresa</h2>
            </div>
            <div class=" w3-panel w3-padding-16">
                <div id="divEmpresas" class="w3-col s12">
                    <div id="botonEmpresa" style="width: 90%; height:70%; background:white; margin:auto; margin-left:15px;opacity: 0.9; border-radius:15px;">
                        <img src="" width="100px" height="100px" style="margin:px">
                        <input type="button" value="Empresa" onclick="cerrarModal()">
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="../JS/menu.js"></script>
</body>
</html>


<!--

/*foreach ($empresas as $empresas){?>
    <div id="divContenedor">
        <h2 style="text-align: center;">Empresas</h2>
        <div id="divEmpresas" class="w3-col s12">
            <div id="botonEmpresa" style="width: 90%; height:70%; background:white; margin:auto; margin-left:15px;opacity: 0.9; border-radius:15px;">
                    <img src="../IMG/whalmart.png" width="100px" height="100px" style="margin:px">
                    <p>Whalmart</p><a href="./menuPrincipal.php"></a>
            </div>
        </div>
    </div><
}*/
-->