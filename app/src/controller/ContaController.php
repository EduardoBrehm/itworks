<?php
namespace Itworks\src\controller;


use Itworks\core\Controller;
use Itworks\src\model\contaModel;

class ContaController extends Controller{

    private $contaModel;

    public function __construct(){
        $this->contaModel = new contaModel();
    }

    public function index(){
        $ListaExtrato = $this->contaModel->getAll();

        $this->load('conta/main', ['ListaExtrato' => $ListaExtrato] );
    }

    public function extrato(){
        echo "extrato da conta";

        $obj = new \stdClass();
        $obj->valor = 8.99;
        $obj->movimentacao = 'CRÉDITO';
        $obj->dataRegistro = date('Y-m-d H:i:s');

        $result = $this->contaModel->insert($obj);
        if($result <= 0 ){
            echo 'Erro';
        }else{
            echo 'Sucesso';
        }
    }
}