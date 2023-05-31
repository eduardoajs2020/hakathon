<?php

class nomedoarquivoDAO implements nomedoarquivoDAOinterface {
    
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function create($parametro1, $parametro2) {
        // Lógica para criar um registro no banco de dados
    }

    public function read($parametro1) {
        // Lógica para ler um registro do banco de dados
    }

    public function update($parametro1, $parametro2) {
        // Lógica para atualizar um registro no banco de dados
    }

    public function delete($parametro1) {
        // Lógica para deletar um registro do banco de dados
    }

}
