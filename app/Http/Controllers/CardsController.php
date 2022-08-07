<?php

namespace App\Http\Controllers;

use App\Models\card;
use App\Models\categoria;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $cards = card::all();
        return view('index')->with('cards', $cards);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function showmy()
    {
        $cards = card::where('idusers', Auth::user()->id)->get();
        return view('cards.meuscards')->with('cards', $cards);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categorias = categoria::all();
        return view('cards.criar')->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function store(Request $request)
    {

        $nome = $request->nome;
        $categoria = $request->categoria;
        $comentario = $request->comentario;

        $card = new card();

        $card->nome = $nome;
        $card->idcategorias = $categoria;
        $card->comentario = $comentario;
        $card->idusers = Auth::user()->id;

        $card->save();

        $cards = card::orderBy('idcards', 'desc')->first();


        $request->file('cover')->storeAs('cards_cover', $cards['idcards'] . '.jpg', 'public');
        return to_route('meuscomponentes');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $cards = card::where('idcards', $id)->first();
        $categorias = categoria::all();
        return view('cards.editar')->with("cards", $cards)->with("categorias", $categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $card = card::find($id);

        $card->nome = $request->nome;
        $card->idcategorias = $request->categoria;
        $card->comentario = $request->comentario;

        $request->file('cover')->storeAs('cards_cover', $card['idcards'] . '.jpg', 'public');

        $card->save();

        return to_route('meuscomponentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        //
        $card = card::find($id);

        $image_path = storage_path("app/public/cards_cover/{$card->idcards}.jpg");

        if (File::exists($image_path)) {
            $card->delete();
            unlink($image_path);
        } else {
            dd("erro");
        }

        return to_route('meuscomponentes');
    }
}
