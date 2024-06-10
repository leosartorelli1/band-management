<?php

class Integrante
{
    public $id;
    public $nome;
    public $foto;
    public $funcao;
    public $banda_id;

    public $nomeFoto;
    public $caminhoFoto;

    public function __construct($id = false)
    {
        // verifica se a variável $id foi definida
        if ($id) {
            // atribui o valor de $id à propriedade $id do objeto
            $this->id = $id;
            // chama o método carregar() para carregar as informações da turma correspondente ao id
            $this->carregar();
        }
    }

    public function inserir()
    {

        // A Função do PHP "preg_match()", pega a extensão da imagem e carrega na variável $ext
        preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $this->foto["name"], $ext);

        /* Esta linha usa as funções PHP md5(), uniqid() e time() 
        para gerar um nome único para a imagem. Depois concatena com a extensão extraida na linha acima */
        $this->nomeFoto = md5(uniqid(time())) . "." . $ext[1];

        //Esta linha concatena o caminho da pasta que guardaremos as imagens com nome da imagem
        $this->caminhoFoto = '../../img/' . $this->nomeFoto;
        /*******MUNDANÇA DE CAMINHO*****/

        //Aqui utilizamos a função PHP move_upload_file() para salvar a imagem na pasta
        move_uploaded_file($this->foto["tmp_name"], $this->caminhoFoto);

        //Define a string SQL de inserção de dados na tabela "tb_integrantes"
        $sql = "INSERT INTO tb_integrantes (nome, foto, funcao, banda_id) VALUES (
             '" . $this->nome . "',
             '" . $this->nomeFoto . "',
             '" . $this->funcao . "',
             '" . $this->banda_id . "'
             )";

        //cria uma nova conexão PDO com o banco de daddos "sis-escolar"
        include "Conexao.php";

        //executa a string SQL na conexão, enserindo os dados na tabela "tb_turmas"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
        //Essa linha retornar para a lista depois de 5 segundos
        header("refresh:3; URL=integrantes-listar.php");
    }

    public function listar()
    {
        //Cria uma string com o  comando SQL para pegar todos os dados da tabela "tb_turmas"
        $sql = "SELECT a.id, a.nome, a.foto, a.funcao, t.descBanda
                FROM tb_integrantes a
                INNER JOIN tb_bandas t
                ON a.banda_id = t.id";

        //cria uma nova conexão PDO com o banco de daddos "sis-escolar"
        include "Conexao.php";

        //Executa a string $sql na conexão retornando um objeto com dados
        $resultado = $conexao->query($sql);

        //Extrai todas as linhas de registros do objeto para um array
        $lista = $resultado->fetchAll();

        //Retorna array contendo os dados da consulta ao banco
        return $lista;
    }


    public function excluir()
    {
        //define a string de consulta SQL para deletar um registro
        //da tabela "tb_turmas" com base no seu ID
        $sql = "DELETE FROM tb_integrantes WHERE id=" . $this->id;
        //echo $sql;
        //die();

        include "Conexao.php";

        $conexao->exec($sql);
    }


    public function carregar()
    {
        // Query SQL para buscar uma turma no banco de dados pelo id
        $sql = "SELECT * FROM tb_integrantes WHERE id=" . $this->id;
        include "Conexao.php";

        // Execução da query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos da turma recuperados do banco às propriedades do objeto
        $this->nome = $linha['nome'];
        $this->foto = $linha['foto'];
        $this->funcao = $linha['funcao'];
        $this->banda_id = $linha['banda_id'];
    }

    public function atualizar()
    {
        if (!empty($_FILES['foto']['name'])){
            // A Função do PHP "preg_match()", pega a extensão da imagem e carrega na variável $ext
            preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $this->foto["name"], $ext);

            /* Esta linha usa as funções PHP md5(), uniqid() e time() 
            para gerar um nome único para a imagem. Depois concatena com a extensão extraida na linha acima */
            $this->nomeFoto = md5(uniqid(time())) . "." . $ext[1];

            //Esta linha concatena o caminho da pasta que guardaremos as imagens com nome da imagem
            $this->caminhoFoto = '../../img/' . $this->nomeFoto;
            /*******MUNDANÇA DE CAMINHO*****/

            //Aqui utilizamos a função PHP move_upload_file() para salvar a imagem na pasta
            move_uploaded_file($this->foto["tmp_name"], $this->caminhoFoto);

            $sql = "UPDATE tb_integrantes SET 
                    nome = '$this->nome' ,
                    foto = '$this->nomeFoto' ,
                    funcao = '$this->funcao' ,
                    banda_id = '$this->banda_id'
                WHERE id = $this->id ";
        } else {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_integrantes SET 
                    nome = '$this->nome' ,
                    funcao = '$this->funcao' ,
                    banda_id = '$this->banda_id'
                WHERE id = $this->id ";
        }
        include "Conexao.php";
        $conexao->exec($sql);
    }
}
