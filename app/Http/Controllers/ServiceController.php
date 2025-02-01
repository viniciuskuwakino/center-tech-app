<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServiceController extends Controller
{
    public function index()
    {


        $services = [
            [
                'id' => 1,
                'client_name' => 'Carlos Duar',
                'client_phone' => '17996325600',
                'device' => 'Celular',
                'brand' => 'Apple',
                'model' => 'iPhone 15',
                'serial_number' => '9138fh9hfas13r13gt9asrg13t9880a',
                'description' => 'Tela parou de funcionar',
                'price' => 119.95,
                'status' => false,
                'created_at' => Carbon::now()->subDays(),
                'updated_at' => Carbon::now()->subDays(25)
            ],
            [
                'id' => 2,
                'client_name' => 'Lucas Shinozaki',
                'client_phone' => '17996325601',
                'device' => 'Celular',
                'brand' => 'Samsung',
                'model' => 'S24 Ultra',
                'serial_number' => '91asdfhfajrsjtrj13r13gt9asrg880a',
                'description' => 'Botão de bloquear com defeito',
                'price' => 192.95,
                'status' => false,
                'created_at' => Carbon::now()->subDays(25),
                'updated_at' => Carbon::now()->subDays(25)
            ],
            [
                'id' => 3,
                'client_name' => 'Artur Prata',
                'client_phone' => '17996325602',
                'device' => 'Monitor',
                'brand' => 'BenQ',
                'model' => 'XL2817PPA',
                'serial_number' => '9138gsdi7ghafdsafsinho7880a',
                'description' => 'Tela fica piscando',
                'price' => 249.95,
                'status' => true,
                'created_at' => Carbon::now()->subDays(25),
                'updated_at' => Carbon::now()->subDays(25)
            ],
        ];

        return Inertia::render('Service/List', [
            'services' => $services,
        ]);

    }
}
