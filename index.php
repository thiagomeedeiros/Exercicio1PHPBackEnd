<?php

class  Professor {
    private $nome;
    private $matricula;
    private $idade;


    public function getNome() {
        return $this->nome;

    }

    public function getMatricula() {
        return $this->matricula;

    }   

    public function getIdade() {
        return $this->idade;

    }

    public function setNome($nome) {
        $this->nome = $nome;

    }

    public function setIdade($idade) {
        $this->idade = $idade;

    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;      

    }


    public function __construct($nome,$idade,$matricula) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->matricula = $matricula;
       
    }

}

class ProfessorHorista extends Professor {
    private $horaAula;
    private $horaTrabalhada;

    public function __construct($nome,$idade,$matricula,$horaAula, $horaTrabalhada) {
        Professor::setNome($nome);
        Professor::setIdade($idade);
        Professor::setMatricula($matricula);
        //$this->nome = $nome;
        //$this->idade = $idade;
        //$this->matricula = $matricula;
        $this->horaAula = $horaAula;
        $this->horaTrabalhada = $horaTrabalhada;
    }   
    
    public function calcularSalario() {
        return $this->horaAula*4*$this->horaTrabalhada;
    }
    

    public function getHoraAula() {
        return $this->horaAula;
    }
    
    public function getHoraTrabalhada() {
        return $this->horaTrabalhada;
    }

    public function setHoraAula($horaAula) {
        $this->horaAula = $horaAula;
    }  

    public function setHoraTrabalhada($horaTrabalhada) {
        $this->horaTrabalhada = $horaTrabalhada;
    }
}


class ProfessorFixo extends Professor {
    private $salario;

    public function __construct($nome,$idade,$matricula, $salario) {
        Professor::setNome($nome);
        Professor::setIdade($idade);
        Professor::setMatricula($matricula);
        $this->salario = $salario;
       
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }    
}


$professor = new Professor  ("Thiago","20","118117854");
$professorHorista = new ProfessorHorista("Tullio", 22, 13120983,40,1000);
$professorFixo = new ProfessorFixo("Pedro", 42, 2130089,40,20000);

var_dump ($professor);
echo "<br><br><br>"; //SEI QUE É ERRADO, MAS FICA MUITO EMBOLADO
var_dump ($professorFixo);
echo "<br><br><br>"; //SEI QUE É ERRADO, MAS FICA MUITO EMBOLADO
var_dump ($professorHorista);
echo "<br><br><br>"; //SEI QUE É ERRADO, MAS FICA MUITO EMBOLADO

echo "O professor ".$professorHorista->getNome()." recebe ".$professorHorista->calcularSalario(). "reais por mês";
echo "<br><br><br>"; //SEI QUE É ERRADO, MAS FICA MUITO EMBOLADO
echo $professorHorista->calcularSalario();


?>