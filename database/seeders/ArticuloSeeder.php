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

        $articulo->marca = 'Adidas';
        $articulo->nombre = 'Zapatillas adidas Hombre Outdoor Tracefinder';
        $articulo->codigo = 'IE5906';
        $articulo->imagen = 'adidas-modelo.webp';
        $articulo->color = 'Negro';
        $articulo->precio = 160;
        $articulo->talla = 37;
        $articulo->descripcion = 'Zapatillas de alta calidad y diseño. Con una amplia gama de estilos y colores, Adidas ofrece una variedad de zapatillas para todos los estilos de deportes. Ofrecemos zapatillas de alta velocidad, resistencia, fuerza y agilidad, así como zapatillas de resistencia y fuerza para aquellos que buscan una zapatilla más robusta.';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->marca = 'Nike';
        $articulo->nombre = 'Zapatillas nike Hombre Outdoor Tracefinder';
        $articulo->codigo = 'IE5907';
        $articulo->imagen = 'adidas-modelo.webp';
        $articulo->color = 'Negro';
        $articulo->precio = 160;
        $articulo->talla = 37;
        $articulo->descripcion = 'Zapatillas de alta calidad y diseño. Con una amplia gama de estilos y colores, Adidas ofrece una variedad de zapatillas para todos los estilos de deportes. Ofrecemos zapatillas de alta velocidad, resistencia, fuerza y agilidad, así como zapatillas de resistencia y fuerza para aquellos que buscan una zapatilla más robusta.';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->marca = 'Puma';
        $articulo->nombre = 'Zapatillas puma Hombre Outdoor Tracefinder';
        $articulo->codigo = 'IE5908';
        $articulo->imagen = 'adidas-modelo.webp';
        $articulo->color = 'Negro';
        $articulo->precio = 160;
        $articulo->talla = 37;
        $articulo->descripcion = 'Zapatillas de alta calidad y diseño. Con una amplia gama de estilos y colores, Adidas ofrece una variedad de zapatillas para todos los estilos de deportes. Ofrecemos zapatillas de alta velocidad, resistencia, fuerza y agilidad, así como zapatillas de resistencia y fuerza para aquellos que buscan una zapatilla más robusta.';
        $articulo->save();

        $articulo = new Articulo();

        $articulo->marca = 'Reebok';
        $articulo->nombre = 'Zapatillas reebok Hombre Outdoor Tracefinder';
        $articulo->codigo = 'IE5909';
        $articulo->imagen = 'adidas-modelo.webp';
        $articulo->color = 'Negro';
        $articulo->precio = 160;
        $articulo->talla = 37;
        $articulo->descripcion = 'Zapatillas de alta calidad y diseño. Con una amplia gama de estilos y colores, Adidas ofrece una variedad de zapatillas para todos los estilos de deportes. Ofrecemos zapatillas de alta velocidad, resistencia, fuerza y agilidad, así como zapatillas de resistencia y fuerza para aquellos que buscan una zapatilla más robusta.';
        $articulo->save();
    }
}
