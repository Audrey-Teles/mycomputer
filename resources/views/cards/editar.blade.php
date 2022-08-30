<x-yummy title="Mycomputer">
    <section id="book-a-table" class="book-a-table">
        <div class="container" style="max-width: 40rem;">
            <div class="justify-content-center">
                <div class="mb-4">
                    <img src="{{asset("storage/cards_cover/$cards->idcards.jpg")}}"
                         class="img-fluid img-thumbnail" alt="...">
                </div>
                <div class="mb-4">
                    <form action="{{ route("atualizar", $cards->idcards) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <input value="../storage/cards_cover/$cards->idcards.jpg" name="cover" type="file" class="form-control" id="inputGroupFile01"
                                   accept="image/jpeg">
                        </div>

                        <div class="mb-4">
                            <input name='nome' value="{{$cards->nome}}" type="text" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="mb-4">
                            <label for="customRange2" class="form-label">Avaliação do dispositivo</label>
                            <input name='avaliacao' type="range" class="form-range" min="0" max="5" id="customRange2">
                        </div>
                        <div class="mb-4">
                            <select value="{{$cards->idcategorias}}" name="categoria" class="form-select" aria-label="Default select example" required>
                                <option selected>Escolha uma categoria</option>
                                @foreach ($categorias as $categoria)
                                    @if($categoria->idcategorias == $cards->idcategorias)
                                        <option selected value="{{$categoria->idcategorias}}">{{$categoria->nome}}</option>
                                    @else
                                        <option value="{{$categoria->idcategorias}}">{{$categoria->nome}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                        <textarea name='comentario' class="form-control" rows="3"
                                  placeholder="Comente aqui sobre o seu componente" required>{{$cards->comentario}}</textarea>
                        </div>

                        <button style="width: 100%" type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
                <form action="{{route("deletar", $cards->idcards)}}" method="post">
                    @csrf
                    @method('delete')
                    <button style="width: 100%" type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>

        </div>
    </section>
</x-yummy>
