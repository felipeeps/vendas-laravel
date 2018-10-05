<div class="container">
        <h2>Novo Produto</h2>
        <form action="{{route('products.store')}}" method="post">
            {!! csrf_field() !!}

            <p class="form-group">
                <label for="name">Nome:</label>
                <input name="name" class="form-control" type="text">
            </p>

            <p class="form-group">
                <label for="amount">Quantidade:</label>
            <input name="amount" class="form-control" type="text">
            </p>
            
            <p class="form-group">
                <input class="btn btn-default" type="reset" value="Limpar">
                <input class="btn btn-primary" type="submit" value="Cadastrar">
            </p>
        </form>
    </div>

