<?php

namespace Itworks\src\model;
use Itworks\core\Model;

/** 
 * Classe responsavel por gerenciar a conexão com a tabela conta. 
 */

class contaModel {
    //Instancia da classe model
    private $pdo;

    /**
     * Método construtor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->pdo = new Model();
    }


    public function insert(object $params){
        $sql = "INSERT INTO extrato (valor, movimentacao, dataRegistro)
                VALUES (:valor, :movimentacao, :dataRegistro)";

        $params = [
            ':valor'       => $params->valor,
            ':movimentacao'=> $params->movimentacao,
            ':dataRegistro'=> date('Y-m-d h:i:s')
        ];
        $handle = $this->pdo->executeNonQuery($sql, $params);

        if(!$handle){
            return -1; //codigo de erro
        }
        else{
            return $this->pdo->GetLastID();
        }   
    }

        public function getAll(){

            $sql = 'SELECT * FROM extrato ORDER BY dataRegistro ASC';

            $dt = $this->pdo->executeQuery($sql);

            $ListaExtrato = null;

            foreach ($dt as $dr){
                $ListaExtrato[] = $this->collection($dr);
            }

            return $ListaExtrato;
        }

        private function collection($params){
            return (object)[
            'id'          => $params['id']             ?? null,
            'valor'       => $params['valor']          ?? null,
            'movimentacao'=> $params['movimentacao']   ?? null,
            'dataRegistro'=> $params['dataRegistro']   ?? null
            ];
        }


}