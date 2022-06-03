<?php

class Produto
{
    protected  $nome;
    protected  $id;
    protected  $descricao;
    protected  $tamanho;
    protected  $cor;
    protected  $estoque;
    protected  $preço;
    private $fk_categoria;
    
                public function setNome($d){
                $this -> nome =$d;
    }
                public function getNome(){
                return $this -> nome;
            }
                public function setId($d){
                $this -> id =$d;
            }
                public function getId(){
                return $this -> id;
            }
                public function setTamanho($d){
                $this -> $tamanho =$d;
            }
                public function getTamanho(){
                return $this -> tamanho;
            }
                public function setCor($d){
                $this -> cor =$d;
            }
                public function getCor(){
                return $this -> cor;
            }
                public function setEstoque($d){
                $this -> estoque = $d;
            }
                public function getEstoque(){
                return $this -> estoque;
            }
                public function setPreco($d){
                $this -> preco = $d;
            }
               public function getPreco(){
                return $this -> preco;
            }
            Public function setDescricao($d){
                $this-> descricao = $d;
            }
            public function getDescricao(){
                return $this ->descricao;
            }
            public function setFk_categoria($d){
                $this -> fk_categoria = $d;
            }
            public function getFk_categoria(){
                return $this -> Fk_categoria;
            }
                    public function entrada_estoque($quantidade){
                    $this -> estoque = $this -> estoque + $quantidade;
                }
                    public function saida_estoque($quantidade){
                    $this -> estoque = $this -> estoque + $quantidade;
                }
    
                        public function adicionar(){
                        $sql  = "INSERT INTO produto
                        (nome, id, tescricao, tamanho, cor, estoque, preco, fk_categoria)
                        VALUES(?,?,?,?,?,?,?,?)";
                        
                        try{
                        $con  = DB::conexao();
                        $stmt = $conexao -> prepare($sql);

                        $stmt.bindParam(1, $this -> getNome());
                        $stmt.bindParam(2, $this -> getId());
                        $stmt.bindParam(3, $this -> getDescricao());
                        $stmt.bindParam(4, $this -> getTamanho());
                        $stmt.bindParam(5, $this -> getCor());
                        $stmt.bindParam(6, $this -> getEstoque());
                        $stmt.bindParam(7, $this -> getPreco());
                        $stmt.bindParam(8, $this -> getFk_categoria());
                        $stmt.execute  ()
                        }catch(PDOExeption $e){
                            echo "Erro no adcionar produto". $e -> getMessage();
                        }
                    }
                    public function listar(){
                        $sql = "SELECT*FROM produto";
                        $produto = array();
                        try{
                            $con = DB::conexao();
                            $stmt = $conexao->prepare($sql);
                            $stmt->execute();
                           $registros = $stmt->fetchAll();
                            
                           foreach($registros as $registro){
                            $temp = new Produto();
                            $temp->setNome($registro[“nome”]);
                            $temp->setId($registro[“id”]);
                            $temp->setDescricao($registro[“descricao”]);
                            $temp->setTamanho($registro[“tamanho”]);
                            $temp->setCor($registro[“cor”]);
                            $temp->setEstoque($registro[“estoque”]);
                            $temp->setPreco($registro[“preco”]);
                            $temp->setFk_categoria($registro[“fk_categoria”]);
                            $produto[]=$temp;
                            }
                            
                            }catch(PDOException $e){
                            echo "Erro no Listar Produto: "
                            . $e->getMessage();
                            }
                            return $produto;
                            
                    }
                    public function atualizar(){
                        $sql = "UPDATE* produto
                        SET descricao = ?, preco= ?, quantidade=? WHERE id=?"

                            try{
                                $con = DB::conexao();
                                $stmt = $conexao->prepare($sql);
                                $stmt->bindParam(1, $this->getDescricao());
                                $stmt->bindParam(2, $this->getPreco());
                                $stmt->bindParam(3, $this->getEstoque());
                                $stmt->bindParam(4, $this->getId());
                                $stmt->execute();
                                }catch(PDOException $e){
                                echo "Erro no Atualizar: ". $e->getMessage();
                                }
                    }
                    public function excluir(){
                        $sql = "DELETE FROM produto WHERE id=?";

                        try{
                            $con = DB::conexao();
                            $stmt = $conexao->prepare($sql);
                            $stmt->bindParam(1, $this->getId());
                            $stmt->execute();
                        }catch(PDOException $e){
                            echo "Erro no excluir: ". $e -> getMessage();
                        }
                        
                    }
                    public function__construct($id=false){
                        if($id)
                        $sql="SELECT*FROM produto WHERE id = ?";
        
                        try{
                            $con = DB :: conexao();
                            $stmt = $con->prepare($sql);
                            $stmt ->bindParam(1, $id);
                            $stmt ->execute();
                        }catch(PDOException $e){
                            echo "Erro na consulta do produto:"
                           
                        } 
                        return $produto;
                }
            }
?>