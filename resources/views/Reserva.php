<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            min-height: 100vh;
        }

        .header {
            text-align: center;
            color: green;
            padding: 20px;
            bottom: 10px;
        }

        .header img {
            width: 572.09px;
            height: 100px;
            margin-bottom: 15px;
        }

        .navbar {
            background-color: #FFFFFF;
            overflow: hidden;
            display: flex;
            justify-content: center;
            padding: 20px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .navbar a {
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 25px;
            font-size: 17px;
            margin: 0 10px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .call-icon {
            margin-left: auto;
        }

        .modal-container {
            display: flex;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            bottom: 20px;
        }

        .modal {
            margin-bottom: 20px;
            display: none;
        }
        .modal-res {
            margin-bottom: 20px;
            display: none;
            max-width: 150%;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border: 1px solid #666f88;
            border-radius: 10px;
            max-width: 700px; 
            max-height: 700px; 
            overflow-y: auto; 
            margin: 0 auto; 
            margin-bottom: 20px;
        }

        .modal-content form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 800px;
            
        }

        .modal-content label {
            flex: 1 0 160px; 
            margin-right: 20px; 
            margin-bottom: -15px;  
            margin-top: 10px;
        }

        .modal-content input[type="text"],
        .modal-content input[type="number"],
        .modal-content input[type="date"],
        .modal-content select {
            flex: 2 0 calc(100% - 210px); 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            margin-bottom: 18px;
        }

        .modal-content button[type="submit"] {
            width: 100%; 
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s;
            margin-top: 50px; 
            display: flex; 
        }

        #reservation-form {
            margin-right: 100px; 
        }

        #adicional-info {
            margin-top: 100px; 
            margin-bottom: 100px; 
            width: 40%; 
        }

        @media (max-width: 768px) {
            #adicional-info {
                width: 150%; 
            }
        }

        #reservation-form button[type="submit"] {
            width: auto; 
            max-width: 200px; 
            margin-left: 250px;
        }

        #terms-modal,#confirmation-modal{
            margin-top: 150px;
        }

        #tiempo_uso {
            display: inline-block; 
            margin-bottom: 10px;
        }

        #hora_inicio_fin,
        #fecha_inicio_fin {
            display: none;
            margin-right: 350px; 
            margin-bottom: 20px;
        }

        
        .modal-content input[type="radio"] {
            margin-right: 10px;
            margin-top: 10px;
        }

        .modal-content button[type="submit"]:hover {
            background-color: #45a049;
        }

        #acceptar-btn,
        #rechazar-btn,
        #confirm-yes-btn,
        #confirm-no-btn {
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
        }

        .footer1,
        .footer2 {
            background-color: #d3d3d3;
            color: black;
            padding: 20px;
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: -600px;
        }

        .footer2 {
            background-color: #c9c9c9;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-column {
            flex: 1;
            margin: 0 20px;
        }

        .footer-column h3 {
            margin-bottom: 10px;
        }

        .footer-column p {
            margin: 5px 0;
        }

        .footer-bottom2 {
            margin-top: 20px;
        }

        .adicional-info {
            position: absolute;
            top: 50%;
            right: 0;
            display: none;
            transform: translateY(-50%);
            width: 100%; 
            margin-right: 20px; 
            padding: 10px; 
            border-radius: 5px; 
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="IMAGENES/LOGO-ANIVERSARIO-ESPE-SEDE.png" alt="Logo Aniversario ESPE Sede">
        <div class="navbar">
            <a href="#inicio">INICIO</a>
            <a href="#quienes_somos">QUIENES SOMOS</a>
            <a href="#servicios">SERVICIOS</a>
            <a href="#ubicacion">UBICACION</a>
            <a id="reserva-link" href="#" onclick="resetearFormulario()">RESERVA</a>
            <a href="#verificacion">VERIFICACION</a>
            <a href="#call" class="call-icon"><i class="fas fa-phone"></i></a>
        </div>
    </div>
    
    <div class="modal-container">
        <div id="terms-modal" class="modal">
            <div class="modal-content">
                <h2>Términos y Condiciones</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod enim vitae nunc tempor, in vulputate ex efficitur.</p>
                <button id="acceptar-btn">Aceptar</button>
                <button id="rechazar-btn">Rechazar</button>
            </div>
        </div>
        <div id="confirmation-modal" class="modal">
            <div class="modal-content">
                <h2>Pertenece a la Comunidad de la ESPE?</h2>
                <button id="confirm-yes-btn">Sí</button>
                <button id="confirm-no-btn">No</button>
            </div>
        </div>
        
        <div id="reservation-form" class="modal-res">
            <div class="modal-content">
                <center><h2>Formulario de Registro</h2></center>
                <form>
                    <label for="nombre">Nombres:</label>
                    <input type="text" id="nombre" name="nombre" required><br>
                    <label for="apellido">Apellidos:</label>
                    <input type="text" id="apellido" name="apellido" required><br>
                    <label for="ID">ID:</label>
                    <input type="text" id="ID" name="ID" required><br>
                    <label for="correo">Correo Institucional:</label>
                    <input type="text" id="correo" name="correo" required><br>
                    <label for="carrera">Ingrese la carrera:</label>
                    <input type="text" id="carrera" name="carrera" required><br>
                    <label for="nivel">Ingrese el nivel:</label>
                    <input type="text" id="nivel" name="nivel" required><br>
                    <label for="num_personas">Ingrese el número de personas:</label>
                    <input type="number" id="num_personas" name="num_personas" min="1" max="20" required><br>
                    <label for="tiempo_uso">Tiempo de uso:</label>
                    <select id="tiempo_uso" name="tiempo_uso" required onchange="mostrarCampos()">
                        <option value="">Seleccione</option>
                        <option value="1">Horas</option>
                        <option value="2">Días</option>
                    </select><br>

                    <div id="hora_inicio_fin" style="display: none;">
                        <label for="hora_inicio">Hora de inicio:</label>
                        <input type="time" id="hora_inicio" name="hora_inicio" required><br>
                        <label for="hora_final">Hora final:</label>
                        <input type="time" id="hora_final" name="hora_final" required><br>
                    </div>

                    <div id="fecha_inicio_fin" style="display: none;">
                        <label for="fecha_inicio">Fecha de inicio:</label>
                        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br>
                        <label for="fecha_final">Fecha final:</label>
                        <input type="date" id="fecha_final" name="fecha_final" required><br>
                    </div>
                    <label for="aparatos_externos">Aparatos Externos:</label><br>
                    <input type="radio" id="proyector" name="aparatos_externos" value="Proyector">
                    <label for="proyector">Proyector</label><br>
                    <input type="radio" id="pizarra_inteligente" name="aparatos_externos" value="Pizarra Inteligente">
                    <label for="pizarra_inteligente">Pizarra Inteligente</label><br>
                    <center><button type="submit">RESERVAR</button></center>
                </form>
            </div>
        </div>
        <div id="adicional-info" class="modal">
            <div class="modal-content" >
                <div class="dprimera-desc">
                    <h3>Primer Espacio</h3>
                    <p>Ubicado en el pasillo...</p>
                </div>
                <div class="image-slider">
                    <img src="imagen1.jpg" alt="Imagen 1">
                    <img src="imagen2.jpg" alt="Imagen 2">
                </div>
                <div class="descripcionion">
                    <p>Descripcion...</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer1">
        <div class="footer-container">
            <div class="footer-column">
                <h3>UNIDAD</h3>
                <p>Unidad de Emprendimiento</p>
            </div>
            <div class="footer-column">
                <h3>SEDES</h3>
                <p>Latacunga</p>
            </div>
            <div class="footer-column">
                <h3>DEPARTAMENTOS MATRIZ</h3>
                <p>Ciencias de la Computación</p>
                <p>Ciencias de la Tierra y de la Construcción</p>
            </div>
            <div class="footer-column">
                <h3>DEPARTAMENTOS LATACUNGA</h3>
                <p>Ciencias Exactas</p>
                <p>Energía y Mecánica</p>
                <p>Ciencias Exactas</p>
                <p>Energía y Mecánica</p>
                <p>Ciencias Exactas</p>
                <p>Energía y Mecánica</p>
                <p>Ciencias Exactas</p>
                <p>Energía y Mecánica</p>
                <p>Ciencias Exactas</p>
                <p>Energía y Mecánica</p>
            </div>
        </div>
    </footer>

    <footer class="footer2">
        <div class="footer-bottom2">
            <p>© 2024 ESPE | Sede quito</p>
        </div>
    </footer>

    <script>
        document.getElementById('reserva-link').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('terms-modal').style.display = 'block';
        });

        document.getElementById('acceptar-btn').addEventListener('click', function() {
            document.getElementById('terms-modal').style.display = 'none';
            document.getElementById('confirmation-modal').style.display = 'block';
        });

        document.getElementById('confirm-yes-btn').addEventListener('click', function() {
            document.getElementById('confirmation-modal').style.display = 'none';
            document.getElementById('reservation-form').style.display = 'block';
            document.getElementById('adicional-info').style.display = 'block'; // Oculta el contenedor adiciona
        });

        document.getElementById('confirm-no-btn').addEventListener('click', function() {
            document.getElementById('confirmation-modal').style.display = 'none';
        });

        function resetearFormulario() {
            document.getElementById('confirmation-modal').style.display = 'none';
            document.getElementById('reservation-form').style.display = 'none'; 
            document.getElementById('adicional-info').style.display = 'none'; 
            document.getElementById('reservation-form').reset(); 
            document.getElementById('hora_inicio_fin').style.display = 'none'; 
            document.getElementById('fecha_inicio_fin').style.display = 'none'; 
            document.getElementById('terms-modal').style.display = 'block';
        }

        function mostrarCampos() {
            var tiempoUso = document.getElementById("tiempo_uso").value;
            var horaInicioFin = document.getElementById("hora_inicio_fin");
            var fechaInicioFin = document.getElementById("fecha_inicio_fin");

            if (tiempoUso === "1") {
                horaInicioFin.style.display = "block";
                fechaInicioFin.style.display = "none";
            } else if (tiempoUso === "2") {
                horaInicioFin.style.display = "none";
                fechaInicioFin.style.display = "block";
            } else {
                horaInicioFin.style.display = "none";
                fechaInicioFin.style.display = "none";
            }
        }
        // Cerrar modal haciendo clic fuera de él
        window.onclick = function(event) {
            if (event.target == document.getElementById('terms-modal')) {
                document.getElementById('terms-modal').style.display = 'none';
            }
        }
    </script>
</body>
</html>

