<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request as Request;


class ContactoController extends Controller
{
    public function listado(){
        $mensajes = Contacto::all();
        return view ('listado-contactos', compact('mensajes'));
        //Formas alternativas:
        //return view ('listado-contactos', ['mensajes'=> $mensajes]);
        //return view ('listado-contactos', ['mensajes'=> Contacto::all()]);
    }
    public function formContacto(){
        return view('contacto');
    }
    public function guardarFormulario(Request $request){
            //Recibir datos: mediante request
    
    //Hola
    //Validar datos:
    $request->validate([
        'nombre' => 'required|min:3|max:255',
        'correo' => 'required|email',
        'mensaje' => ['required', 'min:10'],
    ]); 
    //Guardar datos:
    $contacto = new Contacto();
    $contacto -> nombre = $request -> nombre;
    $contacto -> correo = $request -> correo;
    $contacto -> mensaje = $request -> mensaje;
    $contacto ->save();
    return redirect('/mensajes');
        
    }
}
