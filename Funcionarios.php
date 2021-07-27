<?php
 
  class Funcionarios 
  {
    private $funcionarios;

    public function __construct()
    {
      $this->funcionarios = [
         ['id' => '123', 'nome' => 'João', 'CPF' => '12345678900'],
         ['id' => '321', 'nome' => 'Maria', 'CPF' => '14725836912'],
         ['id' => '452', 'nome' => 'Cássio', 'CPF' => '36985214712']
      ];
    }

    public function all()
    {
      return $this->funcionarios;
    }

    public function find($id)
    {
      foreach ($this->funcionarios as $func) {
        if ($func['id'] == $id) {
          return $func;
        }
      }

      return null;
    }
    
  }

?>