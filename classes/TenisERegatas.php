<?php

class TenisERegatas
{
    protected  $nome;
    protected  $id;
    protected  $tamanho;
    protected  $cor;
    protected  $estoque;
    protected  $preço;
    
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
                    public function entrada_estoque($quantidade){
                    $this -> estoque = $this -> estoque + $quantidade;
                }
                    public function saida_estoque($quantidade){
                    $this -> estoque = $this -> estoque + $quantidade;
                }
    
                        public function adicionar(){
                        $sql  = "INSERT INTO regatas
                        (nome, id, Tamanho, cor, estoque, preco)
                        VALUES(?,?,?,?,?,?)";
                        try{
                        $con  = DB::conexao();
                        $stmt = $conexao -> prepare($sql)

                        $stmt.bindParam(1 $this -> getNome());
                        $stmt.bindParam(1 $this -> getId());
                        $stmt.bindParam(1 $this -> getTamanho());
                        $stmt.bindParam(1 $this -> getCor());
                        $stmt.bindParam(1 $this -> getEstoque());
                        $stmt.bindParam(1 $this -> getPreco());
                        }catch(PDOExeption $e){
                            echo "Erro no adcionar produto". $e -> getMessage();
                        }
                    }
                    public function listar(){

                    }
                    public function atualizar(){

                    }
                    public function excluir(){
                        
                    }
                }
?>