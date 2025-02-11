<?php
  
  class cachorro{

    public $shitzu;
    public $peludo;
    public $olhoescuro;
    public $nome;
    public $carinhoso;

    public function shitzu(){
        retourn "A raça do cachorro é:".$this->shitzu;
    }
    public function peludo(){
        return "O cachorro é:".$this->peludo;
    }
    public function olhoescuro(){
        return "O olho do cachorro é:".$this->olhoescuro;
    }
    public function nome(){
      return "O seu nome é:".$this->nome;
    }
    public function carinhoso(){
      return "O cachorro é:".$this->carinhoso;
    }
  }

  $cachorro = new cachorro();
  $cachorro->shitzu = "shitzu";
  echo $cachorro->shitzu();
  echo"<br>";

  $cachorro = new cachorro();
  $cachorro->peludo = "peludo";
  echo $cachorro->pekudo();
  echo"<br>";

  $cachorro = new cachorro();
  $cachorro->olhoescuro = "escuro";
  echo $cachorro->olhoescuro();
  echo"<br>";

  $cachorro = new cachorro();
  $cachorro->nome = "Baruk";
  echo $cachorro->nome();
  echo"<br>";

  $cachorro = new cachorro();
  $cachorro->carinhoso = "carinhoso";
  echo $cachorro->carinhoso();
  echo"<br>";

  class maquiagem{

    public $cobertura;
    public $acabamento;
    public $pigmentação;
    public $textura;
    public $durabilidade;

    public function cobertura(){
        retourn " A maguiagem tem uma boa:".$this->cobertura;
    }
    public function acabamento(){
        return "O pó da um ótimo:".$this->acabamento;
    }
    public function pimentação(){
        return "Essa sombra tem uma ótima:".$this->pigmentação;
    }
    public function textura(){
      return "A maguiagem tem:".$this->textura;
    }
    public function durabilidade(){
      return "O fixador faz co  que a maquiagem tenha:".$this->durabilidade;
    }
  }

  $maquiagem = new maquiagem();
  $maquiagem->cobertura = "cobertura";
  echo $maquiagem->corbertura();
  echo"<br>";

  $maquiagem = new maquiagem();
  $maquiagem->acabamento = "acabamento";
  echo $maquiagem->acabamento();
  echo"<br>";

  $maquiagem = new maquiagem();
  $maquiagem->pigmentação = "pigmentação";
  echo $maquiagem->pigmentação();
  echo"<br>";

  $maquiagem = new maquiagem();
  $maquiagem->textura = "textura";
  echo $maquiagem->textura();
  echo"<br>";

  $maquiagem = new maquiagem();
  $maquiagem->durabilidade = "durabilidade";
  echo $maquiagem->durabilidade();
  echo"<br>";

  class jogos{

    public $multijogador;
    public $trilhasonora;
    public $gráficos;
    public $historia;

    public function multijogador(){
        retourn "Esse jogo é:".$this->multijogador;
    }
    public function trilhasonora(){
        return "Esse jogo tem uma ótima:".$this->trilhasonora;
    }
    public function gráficos(){
        return "Esse jogo tem:".$this->gráficos;
    }
    public function historia(){
      return "O jogo tem uma boa:".$this->historia;
    }
  
    
  }

  $jogo = new jogo();
  $jogo->multijogador = "multijogador";
  echo $jogo->multijogador();
  echo"<br>";

  $jogo = new jogo();
  $jogo->trilhasonora = "trilha sonora";
  echo $jogo->trilhasonora();
  echo"<br>";

  $jogo = new jogo();
  $jogo->gráficos = "gráficos";
  echo $jogo->gráficos();
  echo"<br>";

  $jogo = new jogo();
  $jogo->historia = "historia";
  echo $jogo->historia();
  echo"<br>";


  class garrafinha{

    public $capacidade;
    public $material;
    public $desing;
    public $isolamentotermico;

    public function capacidade(){
        retourn "Minha garrafa tem uma boa:".$this->capacidade;
    }
    public function material(){
        return "Essa garrafinha tem um ótimo:".$this->material;
    }
    public function desing(){
        return "Minha garrafinha tem um lindo:".$this->desing;
    }
    public function isolamentotermico(){
      return "Algumas garrafas tem:".$this->isolamentotermico;
    }
  
    
  }

  $garrafinha = new garrafinha();
  $garrafinha->capacidade = "capacidade";
  echo $garrafinha->capacidade();
  echo"<br>";

  
  $garrafinha = new garrafinha();
  $garrafinha->material = "material";
  echo $garrafinha->material();
  echo"<br>";

  $garrafinha = new garrafinha();
  $garrafinha->desing = "desing";
  echo $garrafinha->desing();
  echo"<br>";

  $garrafinha = new garrafinha();
  $garrafinha->isolamentotermico = "isolamento térmico";
  echo $garrafinha->isolamentotermico();
  echo"<br>";

  class escola{

    public $ambientesocial;
    public $professores;
    public $alunos;
    public $gradecurricular;
    public $metodologiadeensino;

    public function ambientesocial(){
        retourn "A escola é ótimo:".$this->ambientesocial;
    }
    public function professores(){
        return "Essa escola tem diversos:".$this->professores;
    }
    public function alunos(){
        return "Aqui nesta escola tem poucos:".$this->alunos;
    }
    public function gradecurricular(){
      return "Nesta escola tem:".$this->isolamentotermico;
    }
    public function metodologiadeensino(){
      return "Essa escola pe rica na:".$this->metodologiadeensino;
    }
    
  }

  $escola = new escola();
  $escola->ambientesocial = "ambiente social";
  echo $escola->ambientesocial();
  echo"<br>";

  $escola = new escola();
  $escola->professores = " professores";
  echo $escola->professores();
  echo"<br>";

  $escola = new escola();
  $escola->alunos = "alunos";
  echo $escola->alunos();
  echo"<br>";

  $escola = new escola();
  $escola->gradecurricular = "grade curricular";
  echo $escola->gradecurricular();
  echo"<br>";

  $escola = new escola();
  $escola->metodologiadeensino = "metodologia de ensino";
  echo $escola->metodologiadeensino();
  echo"<br>";

  class contabancaria{

    public $nomedotitular;
    public $saldo;
    public $armazenanumerodaconta;
  
    public function nomedotitular(){
        retourn "Nome do titular:".$this->nomedotitular;
    }
    public function exibirsaldo(){
        return "Saldo da conta é:".$this->saldo ",00";
    }
    public function armazenanumerodaconta(){
        return "Número da conta:".$this->armazenanumerodaconta;
    }
  }

  $contamaria = new contamaria();
  $contamaria->saldo = "100.000.000.0000";
  $contamaria->armazenanumerodaconta = 98765432;
  $contamaria->nomedotitular  = "Maria Eduarda Sena De Moraes."

  echo $contamaria->exibirsaldo();
  echo"<br>";
  
  $contabruno = new contabruno();
  $contabruno->saldo = "300.0099.8865.000";
  $contabruno->armazenanumerodaconta = 56898953;
  $contamaria->nomedotitular  = "Bruno Attina."

  echo $contabruno->exibirsaldo();
  echo"<br>";

  $contamarina = new contamarina();
  $contabruno->saldo = "0.20";
  $contabruno->armazenanumerodaconta = 257654908;
  $contamaria->nomedotitular  = "Marina Lucatto Silva."

  echo $contabruno->exibirsaldo();
  echo"<br>";