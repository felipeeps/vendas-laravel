<div id="wrapper">
    <!-- Operações Menu Lateral -->
    <ul class="sidebar navbar-nav">
        <!-- Ínicio -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- FIM Ínicio -->

        <!-- CRUD Produtos -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Produtos</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Seleciona a operação:</h6>
                <a class="dropdown-item" href="{{route('products.create')}}">Novo Produto</a>
                <a class="dropdown-item" href="#">Editar Produto</a>
                <a class="dropdown-item" href="{{route('products.index')}}">Listar Produtos</a>
            </div>
        </li>
        <!-- FIM CRUD Produtos -->

        <!-- Relatórios -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Relatórios</span>
            </a>
        </li>
        <!-- FIM Relatórios -->
        
        <!-- Vendas -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-table"></i>
                <span>Vendas</span>
            </a>
        </li>
        <!-- FIM Vendas -->
    </ul>
    <!-- FIM Operações Menu Lateral -->
</div>
