<?php

class Banda
{
    public $id;
    public $descBanda;
    public $estilo_id;

    public function __construct($id = false)
	{
    
		if ($id){
    
            $this->id = $id;                

            $this->carregar();
        }
	}

    public function inserir(){
      


   
        $sql = "INSERT INTO tb_bandas (descBanda, estilo_id) VALUES (
             '".$this->descBanda."',
             '".$this->estilo_id."'
             )"; 

           
             include "Conexao.php";

             
             $conexao->exec($sql);

             echo "Registro gravado com sucesso";
           
             header("refresh:3; URL=bandas-listar.php");



    }
    
    public function listar()
    {

        $sql = "SELECT a.id, a.descBanda, t.nomeEstilo
        FROM tb_bandas a
        INNER JOIN tb_estilos t
        ON a.estilo_id = t.id";

        include "Conexao.php";

        $resultado = $conexao->query($sql);

        $lista = $resultado->fetchAll();

        return $lista;

    }
    
    public function excluir(){
        
        $sql = "DELETE FROM tb_bandas WHERE id=".$this->id;
    

        include "Conexao.php";

        $conexao->exec($sql);
    }

    
    public function carregar()
    {
      
        $sql = "SELECT * FROM tb_bandas WHERE id=" . $this->id;
        include "Conexao.php";

      
        $resultado = $conexao->query($sql);
        
        $linha = $resultado->fetch();


        $this->descBanda = $linha['descBanda'];
        $this->estilo_id = $linha['estilo_id'];
    }
    
    public function atualizar(){
        

       
        $sql = "UPDATE tb_bandas SET 
                    descBanda = '$this->descBanda' ,
                    estilo_id = '$this->estilo_id'                   
                WHERE id = $this->id ";

include "Conexao.php";
        $conexao->exec($sql);
    }


    


}








?>