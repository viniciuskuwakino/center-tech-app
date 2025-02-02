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

        $services = Service::get();

        return Inertia::render('Service/List', [
            'services' => $services,
        ]);

    }
}
