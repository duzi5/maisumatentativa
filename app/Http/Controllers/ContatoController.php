<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use Illuminate\Http\Request;
use App\Models\MotivoContato;
class ContatoController extends Controller
{

    public function __construct(){
        $this->middleware(LogAcessoMiddleware::class);
    }




    public function contato(Request $request){
       $motivo_contatos = MotivoContato::all();


        // $contato1 = new SiteContato();
        // $contato1->nome = $request->input('nome');
        // $contato1->telefone = $request->input('telefone');
        // $contato1->email = $request->input('email');
        // $contato1->motivo_contato = $request->input('motivo_contato');
        // $contato1->mensagem = $request->input('mensagem');

        // $contato1->save();

        // $contato = new SiteContato();
        // $contato->fill($request->all());
        // $contato->save();
        return view('site.contato' ,['titulo'=>'contato', 'motivo_contatos' => $motivo_contatos]);


    }
    public function salvar(Request $request){

        $request->validate([
            'nome'=>'required|min:3|max:40|unique:site_contatos',
            'telefone'=>'required',
            'email'=>'email',
            'motivo_contatos_id'=>'required',
            'mensagem'=>'required|max:2000'
        ],
        [
            'nome.required' => 'O campo nome precisa ser preenchido',
            'nome.min' => 'O campo nome precisa ter ao menos 3 caracteres',
            'nome.max' => 'O campo nome precisa ter menos de 40 caracteres',
            'nome.unique'=>'Nome já cadastrado',
            'telefone.required'=>'O campo telefone precisa estar preenchido',
            'motivo_contatos_id.required'=>'O campo motivo de contato precisa estar preenchido',
            'email.email'=>'Insira um email válido',
            'mensagem.required'=>'O campo mensagem precisa estar preenchido',
            'mensagem.max'=> 'A mensagem não pode ter mais de 2000 caracteres'

        ]





    );




        SiteContato::create($request->all());
        return redirect()->route('principal');
    }



}
