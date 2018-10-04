<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller{
    public function index(){
        //Mostrar todos os registros do BD
    }

    public function create(){
        //Retorna a view com o Form de criação
    }

    public function store(Request $request) {
        //Ação de criação do formulário
    }

    public function show($id) {
        //Mostrar registros especificos 
    }

    public function edit($id){
        //Formulário de edição
    }

    public function update(Request $request, $id) {
        //Ação de edição do formulário
    }

    public function destroy($id){
        //Deletar registro
        //*Obs: não se apaga registro do banco, pode-se contonar com edição do status para desativado 
    }
}
