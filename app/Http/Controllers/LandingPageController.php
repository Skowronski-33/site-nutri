<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class LandingPageController extends Controller
{
    public function index()
    {
        $config = config('landing');
        return view('landing.index', compact('config'));
    }

    public function store(ContactFormRequest $request)
    {
        $validated = $request->validated();
        
        $destino = config('landing.contato.email_destino');
        
        try {
            Mail::to($destino)->send(new ContactFormMail($validated));
            return redirect()->back()->with('success', 'Mensagem enviada com sucesso! Entraremos em contato em breve.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.')->withInput();
        }
    }
}
