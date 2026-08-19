<?php

namespace App\Models;

class Lugar
{
    // Método para obtener todos los lugares localmente con tus imágenes jfif
    public static function all()
    {
        return collect([
            [
                "id" => 1,
                "titulo" => "El Boquerón",
                "departamento" => "San Salvador",
                "categoria" => "Naturaleza",
                "precio" => 2.00,
                "descripcion" => "Cráter principal del volcán de San Salvador con clima fresco y senderos rodeados de flora.",
                "imagen" => "/imagenes/boqueron.jfif"
            ],
            [
                "id" => 2,
                "titulo" => "El Tunco",
                "departamento" => "La Libertad",
                "categoria" => "Playa",
                "precio" => 0.00,
                "descripcion" => "Famosa playa ideal para el surf, con vida nocturna activa, restaurantes e impresionantes atardeceres.",
                "imagen" => "/imagenes/tunco.jfif"
            ],
            [
                "id" => 3,
                "titulo" => "Ruta de las Flores",
                "departamento" => "Ahuachapán / Sonsonate",
                "categoria" => "Cultura y Gastronomía",
                "precio" => 0.00,
                "descripcion" => "Recorrido colonial que conecta pueblos pintorescos, festivales gastronómicos y plantaciones de café.",
                "imagen" => "/imagenes/flores.jfif"
            ]
        ]);
    }

    // Método para buscar un lugar por su ID
    public static function find($id)
    {
        $lugares = self::all();
        return $lugares->firstWhere('id', (int)$id);
    }
}
