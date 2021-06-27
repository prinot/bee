


           <!DOCTYPE html>
           <html lang="es">


           <head><meta charset="windows-1252">
               <title>Bee Design Perú</title>
               <!--== META TAGS ==-->
               <meta name="title" content="🥇 BeeDesign Agencia de Marketing Digital en Lima | Agencia Digital PERU">
               <meta name="description" content="Agencia de Marketing Digital especializada en el desarrollo de estrategia Digital, Publicidad Online, Posicionamiento Web SEO, Ecommerce y Diseño web ✅">
               <meta name="keywords" content="Agencia digital, agencia digital en lima, agencia de marketing digital peru, agencia de marketing digital, empresa de marketing digital, marketing online, marketing digital peru, agencia de marketing digital, publicidad digital, posicionamiento web, posicionamiento web seo, marketing digital en lima, publicidad en internet, publicidad en redes sociales,publicidad en social media">
               <meta name="author" content="BeeDesign" />
               <meta name="geo.position" content="-12.067671;-76.955216">
               <meta name="geo.placename" content="Lima, Peru">
               <meta name="geo.region" content="PE-LIM">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta property="og:image" content="https://beedesign.pe/images/bee-design-peru.png">

           <title>Bee Design | Agencia de Marketing Mexicana</title>
               <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
               <!--== GOOGLE FONTS ==-->
               <link href="../../../../fonts.googleapis.com/cssb656.css?family=Poppins:300,400,500,700" rel="stylesheet">
               <!--== CSS FILES ==-->
               <link href=" {{ asset('landing/css/tour.css') }}" rel="stylesheet" />

               <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
               <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
               <!--[if lt IE 9]>
               <script src="js/html5shiv.js"></script>
               <script src="js/respond.min.js"></script>
               <![endif]-->
           </head>

           <body>
               <!-- Preloader -->
               <div id="preloader">
                   <div id="status">&nbsp;</div>
               </div>

               <!-- TOP HEADER - LOGO AND PHONE NUMBER -->
               <section>
                   <div class="land-full land-3-top-full">
                       <div class="land-container">
                           <div class="land-3-top">
                               <div class="land-3-top-logo">
                                   <a href="#"><img src="{{ asset('landing/images/logo-bee.png') }}" alt="Company name"></a>
                               </div>
                               <div class="land-3-top-contact">
                                   <ul>
                                       <li>Tel&eacute;fono: +51 943 861 533</li>
                                       <li>Correo: Hola@beedesign.pe </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

               <!-- BANNER SECTION -->
               <section>
                   <div class="land-full land-3-banner-full">
                       <div class="land-container">
                           <div class="land-3-banner">
                               <div class="land-3-banner-conte">
                                   <h1>Haz que tu negocio crezca r&aacute;pidamente</h1>
                                   <h4>Te brindamos servicio de dise&ntilde;o y desarrollo web</h4>
                                   <p>En BeeDesign diseñamos y desarrollamos páginas web creativas e innovadoras para tu empresa. Desde una tienda en linea hasta un blog para hablar sobre los beneficios de tu producto. Obtén Ahora una Web Profesional a Buen Precio. Llama ahora.</p>
                               </div>

                               <!-- BOOKING FORM -->
                               <div class="land-3-banner-form">
                                   <div class="land-com-form">
                                       <h2>Comun&iacute;cate con nosotros</h2>
                                       <form class="contact__form" method="post" action="/envio">
                                        {{csrf_field()}}
                                           <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                           Tu mensaje llego con &eacute;xito
                                           </div>
                                           <ul>
                                               <li><input  type="text" name="name" placeholder="¿Cúal es tu Nombre?" required></li>
                                               <li><input type="text" name="email" placeholder="Correo Electr&oacute;nico" required></li>
                                               <li><input type="text" name="phone" placeholder="N&uacute;mero de Celular" required></li>
                                               <li><input type="text" name="name_business" placeholder="Nombre de tu empresa" ></li>
                                               <li>

                                                   <select name="package" class="form-control" required>
                                                    <option value="Diseño Web">Diseño Web</option>
                                                    <option value="Tiendas en Linea">Tiendas en Linea</option>
                                                    <option value="posicionamiento seo">Posicionamiento SEO</option>
                                                    <option value="Sms Masivo">Sms Masivo</option>
                                                    <option value="Email Marketing">Email Marketing</option>
                                                    <option value="Redes Sociales">Manejo de Redes Sociales</option>
                                                    <option value="base de datos">Base de Datos</option>
                                                    <option value="Marketing digital">Marketing Digital</option>
                                                </select>

                                               </li>
                                               <li><input type="submit" ></li>
                                               <li><p>Tu negocio lo necesita, estamos para ayudarte, Datos siempre protegidos. Lee Nuestras pol&iacute;ticas de Privacidad de datos. <a href="#">Pol&iacute;ticas de Privacidad</a></p></li>
                                           </ul>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

               <!-- TOUR PACKAGES(GRID SECTION) -->
               <section>
                   <div class="land-full land-packages">
                       <div class="land-container">
                           <div class="land-pack">
                               <ul>
                                   <li>
                                       <div class="land-pack-grid">
                                           <div class="land-pack-grid-img">
                                               <img src="{{ asset('landing/images/a.png') }}" alt="package 1"></div>
                                           <div class="land-pack-grid-text">
                                               <h4>Paquete Inicial</h4>
                                               <a href="https://api.whatsapp.com/send?phone=+51943861533&text=%C2%A1Hola!%20Quiero%20informaci%C3%B3n%20sobre%20los%20servicios%20del%20paquete%20inicial%20de%20desarrollo%20web" class="land-pack-grid-btn">Más Información</a></div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="land-pack-grid">
                                           <div class="land-pack-grid-img">
                                               <img src="{{ asset('landing/images/b.png') }}" alt="package 2"></div>
                                           <div class="land-pack-grid-text">
                                               <h4>Paquete Pymes</h4>
                                               <a href="https://api.whatsapp.com/send?phone=+51943861533&text=%C2%A1Hola!%20Quiero%20informaci%C3%B3n%20sobre%20los%20servicios%20del%20paquete%20pymes%20%20de%20desarrollo%20web" class="land-pack-grid-btn land-pack-grid-btn-blu">Más Información</a></div>
                                       </div>
                                   </li>
                                   <li>
                                       <div class="land-pack-grid">
                                           <div class="land-pack-grid-img">
                                               <img src="{{ asset('landing/images/c.png') }}" alt="package 3"></div>
                                           <div class="land-pack-grid-text">
                                               <h4>Paquete Empresarial</h4>
                                               <a href="https://api.whatsapp.com/send?phone=+51943861533&text=%C2%A1Hola!%20Quiero%20informaci%C3%B3n%20sobre%20los%20servicios%20del%20paquete%20empresarial%20de%20desarrollo%20web" class="land-pack-grid-btn land-pack-grid-btn-red">Más Información</a></div>
                                       </div>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </section>

               <!-- TRAVEL PLAN -->
               <section>
                   <div class="land-full land-4-agen-full">
                       <div class="land-container">
                           <div class="land-3-agen bor-top-0">
                               <div class="land-3-agen-left">
                                   <h2>Metodolog&iacute;a Bee</h2>
                                   <img src="{{ asset('landing/images/joven.png') }}" alt="travel plan">
                                   <h4>Hagamos las cosas Juntos.</h4>
                                   <p>Que tu negocio sean tus ideas y nosotros las herramientas.</p>
                                   <a href="https://api.whatsapp.com/send?phone=+51943861533&text=%C2%A1Hola!%20Quiero%20informaci%C3%B3n%20sobre%20los%20servicios%20de%20desarrollo%20web" class="vmr-btn">Consulta Ya</a>
                               </div>
                               <div class="land-3-agen-right">
                                   <ul>
                                       <li>
                                           <h4>Exploración y Análisis</h4>
                                           <p>¿Por qué necesitas una pagina web? ¿Que buscan tus clientes? ¿Cual es el objetivo?</p>
                                       </li>
                                       <li>
                                           <h4>Diseño y Desarrollo</h4>
                                           <p>Diseñamos tu sitio web alineado a nuestras estrategias de digitales y de negocio (orientadas a conversiones) .</p>
                                       </li>
                                       <li>
                                           <h4>Activación Digital</h4>
                                           <p>Estrategia digital, Activación de canales digitales, configuración de herramientas de medición.</p>
                                       </li>
                                       <li>
                                           <h4>Growth Marketing</h4>
                                           <p>Servicios de Marketing Avanzado. Ejecución de campañas de marketing enfocadas en hacer crecer tu negocio. </p>
                                       </li>
                                       <li>
                                           <h4>Performance Marketing</h4>
                                           <p>Data-driven marketing y medición de resultados para mejorar continuamente tus actividades digitales.</p>
                                       </li>

                                       <li>
                                           <h4>Campaña de regalo</h4>
                                           <p>En nuestra promoción por la pandemia del covid-19 Te obsequiamos 25 mil mensajes de texto segmentados. Para potenciar aun más tu negocio en redes.</p>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>

               <!-- CUSTOMER SAYS -->
               <section>
                   <div class="land-full land-3-cus-full">
                       <div class="land-container">
                           <div class="land-3-cus-tit">
                               <h2>¿Que dicen nuestros clientes?</h2>
                               <p>¿Que esperas para solicitar tu servicio?.</p>
                           </div>
                           <div class="land-3-cus-box">
                               <div class="test-box">
                                   <img src="{{ asset('landing/images/cus4.png') }}" alt="customers">
                                   <p>En las empresas de seguridad hay una necesidad. Controlar los tenderos y mostrar datos analiticos al cliente. Con sistema Ultra pudimos resolverlo. Desarrollo bajo Django es muy seguro y confiable. Gracias BeeDesign.</p>
                                   <h4>Ivan Rodriguez</h4>
                                   <h6>Odisea SAC</h6>
                               </div>
                           </div>
                           <div class="land-3-cus-box">
                               <div class="test-box">
                                   <img src="{{ asset('landing/images/cus2.png') }}" alt="customers">
                                   <p>Sin duda clickeas sigue creciendo durante años, Era la mejor hora para pasar a una tienda digital completa, facil y segura. Bee Design llego en el momento justo. Ahora nuestros clientes tienen mayor facilidad a la hora de ordenar sus pedidos desde casa.</p>
                                   <h4>Federico</h4>
                                   <h6>Grupo Clickeas CA</h6>
                               </div>
                           </div>
                           <div class="land-3-cus-box">
                               <div class="test-box">
                                   <img src="{{ asset('landing/images/cus2.png') }}" alt="customers">
                                   <p>Desde el primer momento no dudamos, vimos la Metodologia y nos dimos cuenta que sabian su trabajo. Ahora somos una de las pocas compañias de prestamos en Colombia que puede estar en numeros verdes en plena pandemia. Gracias BeeDesign</p>
                                   <h4>Jose Orellana</h4>
                                   <h6>Inklusiva CA</h6>
                               </div>
                           </div>
                           <div class="land-3-cus-box">
                               <div class="test-box">
                                   <img src="{{ asset('landing/images/cus4.png') }}" alt="customers">
                                   <p>Aragcu es un sueño en el que Perú pueda ser lider mundial en el tema de la electricidad de alta y baja tensión. Ha sido duro el trabajo y no teniamos forma de vender online. Ahora con BeeDesign entendimos la importancia de una plataforma digital y estamos creciendo.</p>
                                   <h4>Carlos Aguirre</h4>
                                   <h6>Aragcu Peru SAC</h6>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>



               <!-- COPY RIGHTS -->
               <section>
                   <div class="land-full land-1-foot-full">
                       <div class="land-container">
                           <div class="land-1-foot-text">
                               <p>Copyrights © 2020 <a href="https://beedesign.pe/">BeeDesign.pe</a> Todos Los Derechos Reservados.</p>
                           </div>
                       </div>
                   </div>
               </section>

               <!--SCRIPTS-->
               <script src=" {{ asset('landing/js/main.min.js') }}"></script>

               <script src=" {{ asset('landing/js/custom.js') }}"></script>


           </body>


           </html>
