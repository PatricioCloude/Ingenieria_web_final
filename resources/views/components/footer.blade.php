<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Contenedor con texto y columnas -->
            <div class="d-flex flex-column align-items-center w-100">
                <div class="text-muted texto-footer mb-3">
                    Universidad Nacional Jorge Basadre Grohmann
                </div>

                <!-- Filas con los nombres y códigos -->
                <div class="row w-100 text-center">
                    <div class="col">
                        <p class="mb-0">Eduardo Yack Patricio Callo</p>
                        <p class="mb-0">2021-119088</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Oscar Eduardo Mamani Maquera</p>
                        <p class="mb-0">2021-119087</p>
                    </div>
                    <div class="col">
                        <p class="mb-0">Maria Roxana Saccatuma Tintaya</p>
                        <p class="mb-0">2021-119072</p>
                    </div>
                </div>
            </div>

            <!-- Imagen al lado derecho -->
            <img src="{{ asset('unjbg.png') }}" alt="UNJBG Logo" class="logo-footer">
        </div>
    </div>
</footer>

<style>
    .texto-footer {
        font-size: 30px; /* Tamaño del título */
        font-weight: bold; /* Negrita */
    }

    .logo-footer {
        width: 100px; /* Ancho aproximado al de un tajador */
        height: 100px; /* Alto aproximado */
    }

    footer {
        background-color: #f8f9fa; /* Fondo claro */
        color: #6c757d; /* Color gris suave */
    }

    .row p {
        font-size: 20px; /* Tamaño adecuado para los nombres */
    }
</style>
