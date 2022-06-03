<?php

class Cliente
{
    protected  $nome;
    protected  $cpf;
    protected  $data_nascimento;
    protected  $endereco;
    protected  $telefone;
    protected  $email;
    
    public function setNome($d){
        $this -> nome =$d;
}
        public function getNome(){
        return $this -> nome;
    }
        public function setCpf($d){
        $this -> cpf =$d;
    }
        public function getCpf(){
        return $this -> cpf;
    }
        public function setData_nascimento($d){
        $this -> $data_nascimento =$d;
    }
        public function getData_nascimento(){
        return $this -> data_nascimento;
    }
        public function setEndereco($d){
        $this -> endereco =$d;
    }
        public function getEndereco(){
        return $this -> endereco;
    }
        public function setTelefone($d){
        $this -> telefone = $d;
    }
        public function getTelefone(){
        return $this -> telefone;
    }
        public function setEmail($d){
        $this -> email = $d;
    }
       public function getEmail(){
        return $this -> email;
    }
   
   
            public function cliente_in($quantidade){
            $this -> aceitos = $this -> aceitos + $quantidade;
        }
            public function cliente_out($quantidade){
            $this -> retirados = $this -> retirados + $quantidade;
        }

                public function adicionar(){
                $sql  = "INSERT INTO cliente
                (nome, cpf, data_nascimento, endereco, telefone, email)
                VALUES(?,?,?,?,?,?)";
                
                try{
                $con  = DB::conexao();
                $stmt = $conexao -> prepare($sql);

                $stmt.bindParam(1, $this -> getNome());
                $stmt.bindParam(2, $this -> getCpf());
                $stmt.bindParam(3, $this -> getData_nascimento());
                $stmt.bindParam(4, $this -> getEndereco());
                $stmt.bindParam(5, $this -> getTelefone());
                $stmt.bindParam(6, $this -> getEmail());
                $stmt.execute  ()
                }catch(PDOExeption $e){
                    echo "Erro no adcionar Cliente". $e -> getMessage();
                }
            }
            public function listar(){
                $sql = "SELECT*FROM cliente";
                $cliente = array();
                try{
                    $con = DB::conexao();
                    $stmt = $conexao->prepare($sql);
                    $stmt->execute();
                   $registros = $stmt->fetchAll();
                    
                   foreach($registros as $registro){
                    $temp = new Cliente();
                    $temp->setNome($registro[“nome”]);
                    $temp->setId($registro[“cpf”]);
                    $temp->setDescricao($registro[“data_nascimento”]);
                    $temp->setTamanho($registro[“endereco”]);
                    $temp->setCor($registro[“telefone”]);
                    $temp->setEstoque($registro[“email”]);
                    $cliente[]=$temp;
                    }
                    
                    }catch(PDOException $e){
                    echo "Erro no Listar cliente: "
                    . $e->getMessage();
                    }
                    return $cliente;
                    
            }
            public function atualizar(){

            }
            public function excluir(){
                
            }
}
?>