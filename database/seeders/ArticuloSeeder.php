<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articulo = new Articulo();

        $articulo->nombre = 'Zapatillas adidas Hombre Outdoor Tracefinder';
        $articulo->marca_id = 1;
        $articulo->codigo = 'IE5906';
        $articulo->imagen = 'adidas-modelo.webp';
        $articulo->color = 'Negro';
        $articulo->precio = 160;
        $articulo->descripcion = 'Zapatillas de alta calidad y diseño. Con una amplia gama de estilos y colores, Adidas ofrece una variedad de zapatillas para todos los estilos de deportes. Ofrecemos zapatillas de alta velocidad, resistencia, fuerza y agilidad, así como zapatillas de resistencia y fuerza para aquellos que buscan una zapatilla más robusta.';
        $articulo->genero = 'M';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->nombre = 'Nike Dunk Low';
        $articulo->marca_id = 2;
        $articulo->codigo = 'DD1503-101';
        $articulo->imagen = 'nike.webp';
        $articulo->color = 'Negro y Blanco';
        $articulo->precio = 569.90;
        $articulo->descripcion = 'El ícono del básquetbol de los 80, que se creó para la cancha pero conquistó las calles, vuelve con revestimientos perfectamente brillantes y colores del equipo clásicos. Con su diseño icónico de básquetbol, el clásico Nike Dunk Low canaliza el espíritu vintage de la década de los 80 y vuelve a las calles, al tiempo que su cuello acolchado de corte low te permite llevar tu juego a cualquier lugar con comodidad.';
        $articulo->genero = 'F';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->nombre = 'Zapatillas Rebound unisex';
        $articulo->marca_id = 3;
        $articulo->codigo = '392326_04';
        $articulo->imagen = 'puma.avif';
        $articulo->color = 'Rojo';
        $articulo->precio = 259.90;
        $articulo->descripcion = 'Inyectando el ADN de PUMA con una inspiración retro a esta nueva era del baloncesto, las zapatillas Rebound llevan una parte superior resistente al desgaste, una construcción de caña alta y una plantilla suave para una amortiguación superior que te permitirá afrontar tu día a día con comodidad y estilo.';
        $articulo->genero = 'M';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->nombre = 'Zapatillas Urbanas Hombre Reebok Club C 85';
        $articulo->marca_id = 4;
        $articulo->codigo = '392326_04';
        $articulo->imagen = 'reebok.webp';
        $articulo->color = 'Verde';
        $articulo->precio = 239.92;
        $articulo->descripcion = 'Zapatillas Urbanas Hombre Reebok Club C 85';
        $articulo->genero = 'M';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->nombre = 'Zapatilla Cat Invader St P91360';
        $articulo->marca_id = 5;
        $articulo->codigo = 'P91360';
        $articulo->imagen = 'cat.webp';
        $articulo->color = 'Gris';
        $articulo->precio = 239.92;
        $articulo->descripcion = 'Trabajar sin límites. Haciendo su trabajo con orgullo. Ir con todo. Es por eso que el trabajo moderno requiere un zapato moderno. Presentamos Invader de Cat Footwear. Si el nombre suena como que podría conquistarlo todo, es porque probablemente podría hacerlo. Esta es la comodidad y el estilo de Cat en su máxima expresión. Dureza de gato con puntera de acero. El icónico Intruder de Cat Footwear renovado. La silueta resistente, gruesa y de estilo excursionista que inspiró a una generación.';
        $articulo->genero = 'F';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->nombre = 'New Balance 550';
        $articulo->marca_id = 8;
        $articulo->codigo = 'BB550WT1';
        $articulo->imagen = 'newbalance.webp';
        $articulo->color = 'Blanco y Verde';
        $articulo->precio = 400;
        $articulo->descripcion = 'New Balance 550, el clásico atemporal que no puede faltar en tu armario. La firma de Boston rinde tributo a los jugadores profesionales de los años 90 y la ropa urbana que definió a toda una generación del baloncesto a través de esta nueva zapatilla. Una silueta de estética clásica que te brindará la posibilidad de añadir un toque deportivo a tus looks diarios más informales ¡descúbrelas!';
        $articulo->genero = 'M';
        $articulo->save();
    }
}
