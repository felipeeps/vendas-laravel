<div class="container">
        <h2>Novo Produto</h2>
        <form action="{{ route('products.update', $products->id) }}" method="post">

            <p class="form-group">
                <label for="name">Nome:</label>
                <input name="name" class="form-control" type="text" value={{ $products->name }}>
            </p>

            <p class="form-group">
                <label for="amount">Quantidade:</label>
            <input name="amount" class="form-control" type="text" value={{ $products->quantity }}>
            </p>
            
            <p class="form-group">
                <input class="btn btn-primary" type="submit" value="Alterar">
            </p>
        </form>
    </div>

