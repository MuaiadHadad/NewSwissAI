<?php

namespace App\Http\Controllers;
use App\Models\subscribes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


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
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid email'], 422);
        }

        subscribes::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Your request has been submitted successfully.');
    }

}
