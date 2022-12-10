<?php
namespace Itworks\src\controller;


use Itworks\core\Controller;
use Itworks\src\model\contaModel;
use Itworks\classes\Input;

class ContaController extends Controller{

    private $contaModel;

    public function __construct(){
        $this->contaModel = new contaModel();
    }

    public function index(){
        $ListaExtrato = $this->contaModel->getAll();

        $this->load('conta/main', ['ListaExtrato' => $ListaExtrato] );
    }

    public function novo(){
        $this->load('conta/novo');
    }

    public function salvar(){
        $registro =$this->getInputPost();

        $result = $this->contaModel->insert($registro);

        if($result <= 0 ) {
            echo 'Erro';
        }
        
        else{
            echo 'Sucesso';
        }

        //if( !$this->validate())
    }

    private function getInputPost(){
        return (object)[
            'valor'         => Input::post(
                                             'txtValor', 
                                             FILTER_SANITIZE_NUMBER_FLOAT, 
                                             FILTER_FLAG_ALLOW_FRACTION
                                            ),
            
            
             'movimentacao'  =>Input::post(
                                            'selMovimentacao', 
                                            FILTER_UNSAFE_RAW
               )
            ];
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
            redirect(BASE . 'conta-editar?id=' . $result);
        }
    }


    public function editar(){
        $id = INPUT::GET('id');

        $conta = $this->contaModel->getById( (int)$id );

        $this->load(
            'conta/editar',
            [
                'conta' => $conta
            ]
            );
    }

    public function getById(int $id){
        $sql = 'SELECT * FROM extrato WHERE id = :id';

        $param = [
            ':id => $id'
        ];

        $dr = $this->pdo->executeQueryOneRow($sql, $param);

        return $this->collection($dr);
    }
}