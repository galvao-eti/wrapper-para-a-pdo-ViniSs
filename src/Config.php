<?php
class Config extends PDO { 
    
    private $tipo; 
    private $host; 
    private $porta;
    private $base; 
    private $usuario; 
    private $senha; 
    
    
    public function __construct(){ 
        $this->tipo = 'mysql'; 
        $this->host = 'localhost'; 
        $this->porta = '3306';
        $this->base = 'turma3'; 
        $this->usuario = 'root'; 
        $this->senha = ''; 
        $dns = $this->tipo.':dbname='.$this->base.";host=".$this->host;"port:". $this->porta;
        parent::__construct( $dns, $this->usuario, $this->senha ); 
    } 
}