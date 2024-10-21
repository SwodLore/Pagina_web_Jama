@extends('layouts.app')

@section('content')

<main>
    <div class="blog">
        <h1>Blog</h1>
        <div class="blog-content">
            <div class="blog-content-title">
                <img src="{{ asset('img/adidas-forum.png') }}" alt="Img de adidas blog">
                <h1>Adidas</h1>
                <h2>FORUM: EL TENIS QUE REVOLUCIONÓ EL MUNDO DEL BALONCESTO Y LA MODA</h2>
                <div class="blog-content-title-text"> 
                    <p>Un tenis que ha superado las expectativas en el mundo del baloncesto y se ha convertido en un ícono cultural: el adidas Forum. 

                        En este cuarto episodio de nuestra serie, junto a Lorenz Wiedenmann y líderes de la cultura sneaker de Latinoamérica, exploramos algunos datos interesantes sobre este calzado que ha dejado su huella en la historia de la moda, el basketball y la cultura.</p>
                        
                    <p>Introducido en 1984, solo un grupo de jugadores de basketball seleccionados recibieron un par para usar mientras se preparaban para los Juegos Olímpicos en Los Ángeles. Después de los Juegos, los tenis llegaron al mercado de los Estados Unidos y, en Europa, una temporada más tarde en la primavera de 1985. El Forum fue el primer tenis en tener un valor de tres dígitos USD 100, algo inédito en esa época, siendo el tenis en el que todos querían jugar. </p>
                </div>
            </div>
            <div class="blog-content-title">
                <img src="{{ asset('img/blog-nike.jpg') }}" alt="Img de nike blog">
                <h1>Nike</h1>
                <h2>Nunca pares de escuchar</h2>
                <div class="blog-content-title-text">
                    <p>Cuando Bill Bowerman empezó como entrenador del equipo de atletismo de la Universidad de Oregón (EE. UU.) en 1948, la mayoría de zapatillas de running parecían zapatos de vestir de piel con clavos en las suelas. Bill era un estudiante impecable en todos los campos, desde anatomía hasta composición de materiales, y buscaba formas de mejorar los diseños de la época. Sin embargo, cuando le envió a los fabricantes de zapatillas de running sus ideas, muy pocos quisieron escucharlo, por no decir ninguno.</p>

                    <p>Por eso Bill se puso a trabajar en el taller. Lo mismo acoplaba unas zapatillas absolutamente únicas con partes superiores de piel de serpiente, de ciervo o de pescado, que le quitaba los clavos a otro modelo y los recolocaba para un runner en concreto: siempre buscaba nuevas formas de añadir a las zapatillas ligereza, velocidad y más eficiencia en cada paso.</p>
                </div>
            </div>
            <div class="blog-content-title">
                <img src="{{ asset('img/blog-puma.jpg') }}" alt="Img de puma blog">
                <h1>Puma</h1>
                <h2>IMPRESIONES: ESTUDIANTES DUALES</h2>
                <p>SIEMPRE CONECTADA
                    Después de terminar mis estudios de nivel avanzado en la escuela, solicité el programa de estudios duales en Negocios Internacionales en PUMA. El sistema de teoría en la universidad y experiencia práctica en una empresa global me atrajo de inmediato. Mi objetivo final era entrar en la marca PUMA. Desde el principio, me sentí muy a gusto en la empresa, ya que las personas con las que trabajaba me integraron como un miembro valioso del equipo. Aporté mi trabajo, mis ideas y mi pasión, y a cambio recibí responsabilidades para alcanzar mi máximo potencial.</p>
            </div>
            <div class="blog-content-title">
                <img src="{{ asset('img/blog-rebook.jpg') }}" alt="Img de reebook blog">
                <h1>Reebook</h1>
                <h2>EL JUEGO ES CLÁSICO</h2>
                <div class="blog-content-title-text">
                    <p>En lo que se refiere al estilo, los clásicos son atemporales. Zapatillas de cuero blanco impecables, chándales elegantes, camisetas con logo, sudaderas y sudaderas cómodas, zapatillas de baloncesto retro, prendas de estilo de vida que nunca pasan de moda, zapatos casuales y otros elementos básicos del guardarropa. No hay nada más clásico de Reebok que las zapatillas Reebok Club C combinadas con chándales de hombre o de mujer. ¡Un look completo que grita "tenniscore"!</p>

                    <p><span>Las nuevas Nano Court</span> Las zapatillas de alto rendimiento para deportes de cancha definitivas. Las nuevas Nano Court de Reebok han sido diseñadas para ser las zapatillas de alto rendimiento definitivas para deportes de cancha, como pickleball, pádel y tenis. Con un enfoque en el agarre, la estabilidad y la durabilidad, continúa la rica historia de Reebok en zapatillas de entrenamiento.</p>
                </div>
            </div>
    </div>
</main>

@endsection