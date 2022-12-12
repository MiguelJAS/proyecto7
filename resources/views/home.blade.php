@extends('layouts.master')
@section('content')
<body>
    <div class="titulos contenedor">
        <h1>TRANSFORMAMOS TUS IDEAS EN UN SOFTWARE ÓPTIMO</h1>
        <h3>En Optimus Pro Software ofrecemos un desarrollo de alta calidad para pequeñas empresas<h3>
                <button class="titulos-boton-contacto" action="#contacto"><a href="#">Descubre más</a></button>
    </div>
    <div class="hero">
        <video src="coverr-workers-typing-and-closing-their-laptops-4953-1080p.mp4" autoplay="true" muted="true"
            loop="true" width="100%"></video>
    </div>
    <main>
        <section class="categorias contenedor">
            <h2>¿QUE PODEMOS HACER POR TI?</h2>
            <div class="listado-categorias">
                <div class="categoria">
                    <i class="fa-brands fa-connectdevelop"></i>
                    <h4>Desarrollo full stack</h4>
                    <p>Somos expertos en PHP, Javascript, Python o .NET, entre otras muchas tecnologías</p>
                </div>
                <div class="categoria">
                    <i class="fa-solid fa-layer-group"></i>
                    <h4>Desarrollo web y móvil</h4>
                    <p>Nuestro servicio combina una excelente gestión de producto con el desarrollo más avanzado de
                        software</p>
                </div>
                <div class="categoria">
                    <i class="fa-solid fa-laptop"></i>
                    <h4>A tu medida</h4>
                    <p>Nos ajustamos a tus gustos, necesidades y preferencias.</p>
                </div>
                <div class="categoria">
                    <i class="fa-brands fa-connectdevelop"></i>
                    <h4>Desarrollo fluido y responsive</h4>
                    <p>Ajusta tu web a todos los dispositivos: todo el mundo disfrutará de la mejor versión de tu web.
                    </p>
                </div>
                <div class="categoria">
                    <i class="fa-solid fa-layer-group"></i>
                    <h4>Descripción del producto</h4>
                    <p>Te ayudaremos a definir los requisitos de tu proyecto calculando tus necesidades de forma modular
                        al precio más competitivo posible.</p>
                </div>
                <div class="categoria">
                    <i class="fa-solid fa-laptop"></i>
                    <h4>Contacto continuo con el cliente</h4>
                    <p>Es tu página web: queremos que te involucres en su desarrollo. Estaremos en contacto contigo
                        durante todo el proceso.</p>
                </div>
            </div>
        </section>
    </main>
    <section id="contacto">
        <div id="encabezado-contacto">
            <h2>Contacto</h2>
            <h3>Envíanos tus dudas</h3>
        </div>
        <form action="#">
            <div class="item-form">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" minlength="2" maxlength="64" size="14"
                    required>
            </div>
            <div class="item-form">
                <label for="empresa">Empresa</label>
                <input type="text" id="empresa" name="empresa" minlength="2" maxlength="64" size="14">
            </div>
            <div class="item-form">
                <label for="empresa">Email</label>
                <input type="email" id="email" name="email" minlength="10" maxlength="64" size="14"
                    required>
            </div>
            <div class="item-form">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" cols="33" rows="5"></textarea>
            </div>
            <div class="item-form" id="enviarformulario">
                <input type="submit" id="enviar" name="enviar" value="CONTACTAR">
        </form>
    </section>
    </main>
</body>

</html>
@stop

