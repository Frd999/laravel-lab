<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            ['nombre' => 'Teclado mecánico',  'descripcion' => 'Switches rojos',     'precio' => 899.90,  'stock' => 15],
            ['nombre' => 'Mouse inalámbrico', 'descripcion' => 'Ergonómico',         'precio' => 349.50,  'stock' => 30],
            ['nombre' => 'Monitor 24"',       'descripcion' => 'Full HD',            'precio' => 2899.00, 'stock' => 8],
            ['nombre' => 'Audífonos',         'descripcion' => 'Con micrófono',      'precio' => 499.00,  'stock' => 20],
            ['nombre' => 'Webcam HD',         'descripcion' => '1080p',              'precio' => 599.00,  'stock' => 12],
            ['nombre' => 'USB 64GB',          'descripcion' => 'USB 3.0',            'precio' => 129.00,  'stock' => 50],
            ['nombre' => 'Disco duro 1TB',    'descripcion' => 'Externo',            'precio' => 1199.00, 'stock' => 10],
            ['nombre' => 'Hub USB',           'descripcion' => '4 puertos',          'precio' => 199.00,  'stock' => 25],
            ['nombre' => 'Mousepad XL',       'descripcion' => 'Antiderrapante',     'precio' => 179.00,  'stock' => 40],
            ['nombre' => 'Bocina Bluetooth',  'descripcion' => 'Resistente al agua', 'precio' => 749.00,  'stock' => 18],
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}