<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class homeController  extends Controller
{
    public function index(Request $request)
    {
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('index');
    }
    public function about(Request $request){
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('about');
    }
    public function Service(Request $request){
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('service');
    }

    public function blog(Request $request){
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('blog');
    }
    public function contact(Request $request){
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('contact');
    }

    public function careers(Request $request){
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('careers');
    }
    public function apply(Request $request){
        $empresaIp = env('EMPRESA_IP');
        $ipAtual = $request->getClientIp();

        $mostrarLogin = $ipAtual === $empresaIp;

        return view('apply');
    }

}
