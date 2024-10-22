<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;


class FilmesController extends Controller
{
    public readonly Filme $filme;

    public function __construct() {
        $this->filme = new Filme();
    }
    public function index(){    
        $filme = $this->filme->all();
        return view('filmes', ['filmes' => $filme]);
    }

    public function create()
    {
        return view('filmes_create');
    }

    public function store(Request $request)
    {
        $created = $this->filme->create([
            'nome' => $request->input('nome'),
            'genero' => $request->input('genero'),
            'classificacao' => $request->input('classificacao'),
            'ano' => $request->input('ano')
        ]);

        if($created) {
            return redirect()->back()->with('message', 'deu tudo certo!');
        }

        return redirect()->back()->with('message', 'deu tudo errado');
    

    }

    public function show(Filme $filme)
    {
        return view('filmes_show', ['filme' => $filme]);
    }

    public function edit(Filme $filme)
    {
        return view('filmes_edit', ['filme' => $filme]);
    }

    public function update(Request $request, string $id)
    {
        $updated = $this->filme->where('id', $id)->update($request->except(['_token', '_method']));

        if($updated) {
            return redirect()->back()->with('message', 'deu tudo certo!');
        }

        return redirect()->back()->with('message', 'deu tudo errado');
    }

    public function destroy(string $id)
    {
        $this->filme->where('id', $id)->delete();

        return redirect()->route('filmes.index');
    }
}
