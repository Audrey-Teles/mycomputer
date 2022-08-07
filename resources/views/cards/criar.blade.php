<x-yummy title="Mycomputer">
    <section id="book-a-table" class="book-a-table">
        <div class="container" style="max-width: 40rem;">
            <div class="justify-content-center">
                <div class="mb-4">
                    <!--<img src="https://rafandroid.com/wp-content/uploads/2020/08/como-testar-a-sua-memoria-ram.jpg"
                         class="img-fluid img-thumbnail" alt="...">-->
                </div>

                <form action="{{ route('salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <input name="cover" type="file" class="form-control" id="inputGroupFile01" accept="image/jpeg" required>
                    </div>

                    <div class="mb-4">
                        <input name='nome' type="text" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="mb-4">
                        <select name="categoria" class="form-select" aria-label="Default select example" required>
                            <option selected>Escolha uma categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->idcategorias}}">{{$categoria->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <textarea name='comentario' class="form-control" rows="3"
                                  placeholder="Comente aqui sobre o seu componente" required></textarea>
                    </div>

                    <button style="width: 100%" type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>

        </div>
    </section>
</x-yummy>
