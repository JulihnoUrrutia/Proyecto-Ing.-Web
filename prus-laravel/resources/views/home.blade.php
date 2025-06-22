<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FabLab UNCP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">FabLab UNCP</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#quees">¿Qué es el FabLab?</a></li>
                <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Iniciar sesión solo personal</a></li>

            </ul>
        </div>
    </nav>

    
    

    <header class="bg-light text-center py-5">
        <h1>FabLab UNCP</h1>
        <p class="lead">Laboratorio de Fabricación Digital</p>
    </header>

    <section id="quees" class="container py-4">
        <h2>¿Qué es el FabLab?</h2>
        <p>El FabLab (Laboratorio de Fabricación Digital) es un espacio de innovación tecnológica que permite a estudiantes, docentes y emprendedores desarrollar prototipos y soluciones usando herramientas como impresión 3D, corte láser, CNC, entre otros.</p>
    </section>

    <section id="servicios" class="container py-4">
        <h2>Servicios que ofrecemos</h2>
        <div class="row">
            <div class="col-md-4">
                <h4>Impresión 3D</h4>
                <p>Creación de piezas plásticas en diversos formatos.</p>
            </div>
            <div class="col-md-4">
                <h4>Corte Láser</h4>
                <p>Precisión en cortes y grabado en madera, acrílico y más.</p>
            </div>
            <div class="col-md-4">
                <h4>Asesoría Técnica</h4>
                <p>Soporte en el diseño y ejecución de tus proyectos.</p>
            </div>
        </div>
    </section>

    <section id="contacto" class="container py-4">
        <h2>Contacto</h2>
        <p>📧 Email: fablab@uncp.edu.pe</p>
        <p>📍 Dirección: Ciudad Universitaria UNCP, Pabellón de Ingeniería</p>
        <p>📞 Teléfono: (064) 123456</p>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 PRUS - UNCP. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
