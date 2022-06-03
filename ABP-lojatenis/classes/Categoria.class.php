<?php
 class Categoria{
    private $id;
    private $nome;

        public function setId($d){
            $this-> id = $d;
        }

        public function getId(){
            return $this -> id;
        }

        public function setNome($d){
            $this-> nome = $d;
        }

        public function getNome(){
            return $this -> nome;
        }
        public function entrada_estoque($quantidade){
            $this -> estoque = $this -> estoque + $quantidade;
        }
        public function saida_estoque($quantidade){
            $this -> estoque = $this -> estoque + $quantidade;
        }
            public function adicionar(){
                $sql  = "INSERT INTO categoria
                (id, nome)
                VALUES(?,?)";
                
                try{
                $con  = DB::conexao();
                $stmt = $conexao -> prepare($sql);
                
                $stmt.bindParam(1, $this -> getId());
                $stmt.bindParam(2, $this -> getNome());
                $stmt.execute  ()
                }catch(PDOExeption $e){
                    echo "Erro no adcionar categoria". $e -> getMessage();
                }
            }
            public function listar(){
                $sql = "SELECT*FROM categoria";
                $categoria = array();
                try{
                    $con = DB::conexao();
                    $stmt = $conexao->prepare($sql);
                    $stmt->execute();
                $registros = $stmt->fetchAll();
                    
                foreach($registros as $registro){
                    $temp = new Categoria();
                    $temp->setId($registro[“id”]);
                    $temp->setNome($registro[“nome”]);
                    
                    $teniseregatas[]=$temp;
                    }
                    
                    }catch(PDOException $e){
                    echo "Erro no Listar Categoria: "
                    . $e->getMessage();
                    }
                    return $categoria;
                    
            }
            public function atualizar(){

            }
            public function excluir(){
                
            }
           
            }
}

?>