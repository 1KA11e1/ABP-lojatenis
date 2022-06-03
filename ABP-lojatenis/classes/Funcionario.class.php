<?php

class Funcionario
{
    protected  $nome;
    protected  $cpf;
    protected  $data_nascimento;
    protected  $endereco;
    protected  $telefone;
    protected  $email;
    protected  $setor;

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
    Public function setSetor($d){
        $this-> setor = $d;
    }
    public function getSetor(){
        return $this ->setor;
    }
   
            public function funcionario_contrato($quantidade){
            $this -> aceitos = $this -> aceitos + $quantidade;
        }
            public function funcionario_demitido($quantidade){
            $this -> retirados = $this -> retirados + $quantidade;
        }

                public function adicionar(){
                $sql  = "INSERT INTO funcionario
                (nome, cpf, data_nascimento, endereco, telefone, email, setor)
                VALUES(?,?,?,?,?,?,?)";
                
                try{
                $con  = DB::conexao();
                $stmt = $conexao -> prepare($sql);

                $stmt.bindParam(1, $this -> getNome());
                $stmt.bindParam(2, $this -> getCpf());
                $stmt.bindParam(3, $this -> getData_nascimento());
                $stmt.bindParam(4, $this -> getEndereco());
                $stmt.bindParam(5, $this -> getTelefone());
                $stmt.bindParam(6, $this -> getEmail());
                $stmt.bindParam(7, $this -> getSetor());
                $stmt.execute  ()
                }catch(PDOExeption $e){
                    echo "Erro no adcionar funcionario". $e -> getMessage();
                }
            }
            public function listar(){
                $sql = "SELECT*FROM funcionario";
                $funcionario = array();
                try{
                    $con = DB::conexao();
                    $stmt = $conexao->prepare($sql);
                    $stmt->execute();
                   $registros = $stmt->fetchAll();
                    
                   foreach($registros as $registro){
                    $temp = new Funcionario();
                    $temp->setNome($registro[“nome”]);
                    $temp->setId($registro[“cpf”]);
                    $temp->setDescricao($registro[“data_nascimento”]);
                    $temp->setTamanho($registro[“endereco”]);
                    $temp->setCor($registro[“telefone”]);
                    $temp->setEstoque($registro[“email”]);
                    $temp->setPreco($registro[“setor”]);
                    $funcionario[]=$temp;
                    }
                    
                    }catch(PDOException $e){
                    echo "Erro no Listar funcionario: "
                    . $e->getMessage();
                    }
                    return $funcionario;
                    
            }
            public function atualizar(){

            }
            public function excluir(){
                
            }
}
?>