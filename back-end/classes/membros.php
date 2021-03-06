<?php
class Membros{
    private $codmembro;
    private $nome;
    private $sobrenome;
    private $cidade;
    private $estado;
    private $email;
    private $usuario;
    private $senha;
    private $datacriacao;
    // False = User | True = Admin
    private $tipopermissao;

    // Colocamos os parametros do JSON para instânciar o objeto
    public function __construct($nome, $sobrenome, $cidade, $estado, $email, $usuario, $senha, $datacriacao, $tipopermissao){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->email = $email;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->datacriacao = $datacriacao;
        $this->tipopermissao = $tipopermissao;        
    }

    // Funções para retornar o valor de uma variável da classe
    public function GetCodMembro(){
        return $this->codmembro;
    }

    public function GetNome(){
        return $this->nome;
    }

    public function GetSobrenome(){
        return $this->sobrenome;
    }    

    public function GetCidade(){
        return $this->cidade;
    }

    public function GetEstado(){
        return $this->estado;
    }

    public function GetEmail(){
        return $this->email;
    }

    public function GetUsuario(){
        return $this->usuario;
    }

    public function GetSenha(){
        return $this->senha;
    }

    public function GetDataCriacao(){
        return $this->datacriacao;
    }

    public function GetTipoPermissao(){
        return $this->tipopermissao;
    }

    // Funções para altera o valor de uma variável da classe
    /* public function SetCodMembro($value){
        $this->codmembro = $value;
    }

    public function SetNome($value){
        $this->nome = $value;
    }

    public function SetSobrenome($value){
        $this->sobrenome = $value;
    }    

    public function SetCidade($value){
        $this->cidade = $value;
    }

    public function SetEstado($value){
        $this->estado = $value;
    }

    public function SetEmail($value){
        $this->email = $value;
    }

    public function SetUsuario($value){
        $this->usuario = $value;
    }

    public function SetSenha($value){
        $this->senha = $value;
    }

    public function SetDataCriacao($value){
        $this->datacriacao = $value;
    }

    public function SetTipoPermissao($value){
        $this->tipopermissao = $value;
    }  */  
}
?>