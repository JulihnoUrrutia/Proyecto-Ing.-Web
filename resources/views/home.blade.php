<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FabLab UNCP - Laboratorio de Fabricación Digital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite('resources/css/home.css')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-robot me-2"></i>FabLab UNCP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#quees">¿Qué es?</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-light ms-2" href="{{ route('login') }}"><i class="fas fa-sign-in-alt me-1"></i>Acceso</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold mb-3">FabLab UNCP</h1>
            <p class="lead fs-4 mb-4">Innovación y fabricación digital al alcance de tus manos</p>
            <a href="#servicios" class="btn btn-primary btn-lg px-4 me-2">Nuestros Servicios</a>
            <a href="#contacto" class="btn btn-outline-light btn-lg px-4">Contáctanos</a>
        </div>
    </section>

    <!-- Qué es FabLab -->
    <section id="quees" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">¿Qué es el FabLab?</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80" 
                         alt="FabLab UNCP" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <p class="lead">El FabLab (Laboratorio de Fabricación Digital) de la UNCP es un espacio de innovación tecnológica que permite materializar ideas en objetos físicos.</p>
                    <p>Nuestro laboratorio está equipado con tecnología de vanguardia para prototipado rápido y fabricación digital, disponible para estudiantes, docentes, investigadores y emprendedores.</p>
                    <p>Formamos parte de la red mundial de FabLabs del MIT, lo que nos permite compartir conocimiento y proyectos con más de 2,000 laboratorios en 100 países.</p>
                    <div class="d-flex align-items-center mt-4">
                        <div class="me-4 text-center">
                            <h3 class="text-primary">+500</h3>
                            <p>Proyectos realizados</p>
                        </div>
                        <div class="me-4 text-center">
                            <h3 class="text-primary">+50</h3>
                            <p>Equipos disponibles</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-primary">2015</h3>
                            <p>Año de fundación</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Nuestros Servicios</h2>
            <div class="row">
                <!-- Servicio 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100">
                        <img src="https://lefasoc.ar/wp-content/uploads/2025/04/Nuevo-metodo-de-impresion-3D-que-fabrica-objetos-mas-rapido.webp" 
                             class="card-img-top service-img" alt="Impresión 3D">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-cube text-primary me-2"></i>Impresión 3D</h5>
                            <p class="card-text">Creación de piezas tridimensionales en diversos materiales plásticos con alta precisión y calidad superficial.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Filamento PLA, ABS, PETG</li>
                                <li><i class="fas fa-check text-success me-2"></i>Resina para detalles finos</li>
                                <li><i class="fas fa-check text-success me-2"></i>Asesoría en diseño 3D</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100">
                        <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             class="card-img-top service-img" alt="Corte Láser">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-cut text-primary me-2"></i>Corte y Grabado Láser</h5>
                            <p class="card-text">Precisión milimétrica en cortes y grabados sobre madera, acrílico, cuero, MDF y otros materiales.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Corte hasta 10mm de espesor</li>
                                <li><i class="fas fa-check text-success me-2"></i>Grabado de alta resolución</li>
                                <li><i class="fas fa-check text-success me-2"></i>Vectorización de imágenes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Servicio 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card service-card h-100">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBpqg8fZVd_WTNFCOJnUECYTct1atV3wemBw&s" 
                             class="card-img-top service-img" alt="Fresado CNC">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-cogs text-primary me-2"></i>Fresado CNC</h5>
                            <p class="card-text">Fabricación de piezas mecanizadas en madera, plásticos y metales no ferrosos con control numérico.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-success me-2"></i>Área de trabajo 60x90cm</li>
                                <li><i class="fas fa-check text-success me-2"></i>Precisión de 0.1mm</li>
                                <li><i class="fas fa-check text-success me-2"></i>Asesoría en diseño CAD/CAM</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="#contacto" class="btn btn-primary btn-lg px-4">Solicitar servicio</a>
            </div>
        </div>
    </section>

    <!-- Galería -->
    <section id="galeria" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Galería de Proyectos</h2>
            <div class="row g-3">
                <div class="col-md-4 col-6">
                    <img src="https://www.3ds.com/assets/invest/2023-02/bioprinting.jpeg" 
                         alt="Proyecto 1" class="img-fluid rounded shadow-sm" style="height: 250px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://cdn.artec3d.com/styles/734/s3/content-hub-images/how-does-a-3d-printer-work-01.jpg?VersionId=wM1Qvwzz27alLOKka4x26OPPTR_XG57k&itok=C7OBLqIG" 
                         alt="Proyecto 2" class="img-fluid rounded shadow-sm" style="height: 250px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://images.theconversation.com/files/592242/original/file-20240505-22-ojtcdm.jpg?ixlib=rb-4.1.0&rect=316%2C40%2C3907%2C2950&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip" 
                         alt="Proyecto 3" class="img-fluid rounded shadow-sm" style="height: 250px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://www.mecanizadosgarrigues.es/wp-content/uploads/2022/04/tipos-de-fresadoras.jpg" 
                         alt="Proyecto 4" class="img-fluid rounded shadow-sm" style="height: 250px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://www.rapiddirect.com/wp-content/uploads-v0/2022/07/cnc-machining-center.jpg" 
                         alt="Proyecto 5" class="img-fluid rounded shadow-sm" style="height: 250px; width: 100%; object-fit: cover;">
                </div>
                <div class="col-md-4 col-6">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6scMuNl4V3jxeDG0xSZEe3V9oLMQOtXT__w&s" 
                         alt="Proyecto 6" class="img-fluid rounded shadow-sm" style="height: 250px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Contáctanos</h2>
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="contact-info">
                        <h4 class="mb-4"><i class="fas fa-map-marker-alt me-2"></i>Ubicación</h4>
                        <p class="mb-4">Ciudad Universitaria UNCP, Pabellón de Ingeniería Mecánica, Primer piso, Huancayo - Perú</p>
                        
                        <h4 class="mb-4"><i class="fas fa-envelope me-2"></i>Correo Electrónico</h4>
                        <p class="mb-4">fablab@uncp.edu.pe</p>
                        
                        <h4 class="mb-4"><i class="fas fa-phone me-2"></i>Teléfonos</h4>
                        <p class="mb-4">(064) 481234 - Anexo 5678</p>
                        
                        <h4 class="mb-4"><i class="fas fa-clock me-2"></i>Horario de Atención</h4>
                        <p class="mb-4">Lunes a Viernes: 8:00 am - 6:00 pm<br>Sábados: 9:00 am - 1:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Formulario de Contacto</h4>
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Nombre completo">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Correo electrónico">
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control" placeholder="Teléfono">
                                </div>
                                <div class="mb-3">
                                    <select class="form-select">
                                        <option selected disabled>Seleccione un servicio</option>
                                        <option>Impresión 3D</option>
                                        <option>Corte Láser</option>
                                        <option>Fresado CNC</option>
                                        <option>Asesoría Técnica</option>
                                        <option>Otro</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5><i class="fas fa-robot me-2"></i>FabLab UNCP</h5>
                    <p>Laboratorio de Fabricación Digital de la Universidad Nacional del Centro del Perú. Innovación tecnológica al servicio de la comunidad universitaria y la sociedad.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Enlaces</h5>
                        <ul>
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#quees">¿Qué es?</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#galeria">Galería</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="footer-links">
                        <h5>Servicios</h5>
                        <ul>
                            <li><a href="#">Impresión 3D</a></li>
                            <li><a href="#">Corte Láser</a></li>
                            <li><a href="#">Fresado CNC</a></li>
                            <li><a href="#">Electrónica</a></li>
                            <li><a href="#">Capacitaciones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5>Contacto</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt me-2"></i> Ciudad Universitaria UNCP</li>
                            <li><i class="fas fa-envelope me-2"></i> fablab@uncp.edu.pe</li>
                            <li><i class="fas fa-phone me-2"></i> (064) 481234</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <p class="mb-0">&copy; 2025 FabLab UNCP - Todos los derechos reservados | Desarrollado por PRUS</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/51987654321" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                navbar.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>