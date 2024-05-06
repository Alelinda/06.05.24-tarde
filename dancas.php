<?php
class Danca{ //CLASS= cria objeto fruta
    public $estilo; // PUBLIC=cria variável da interface objeto
    public $ritmo;
    public $pessoas;


    // Método Construtor:
    // Objeto SEM construtor= ABSTRATO/ Objeto COM construtor= FUNCTION_CONSTRUCT

    function __construct($estilo,$ritmo,$pessoas){
        $this->estilo = $estilo; //THIS= "este", chama o objeto dentro dele mesmo, defindo valor para as variáveis
        $this->ritmo = $ritmo; 
        $this->pessoas = $pessoas;
    }

    //get= pegar/alcançar
    function get_estilo(){
        return $this->estilo;
    }

    //get= pegar/alcançar
    function get_ritmo(){
        return $this->ritmo;
    }

    //get= pegar/alcançar
    function get_pessoas(){
        return $this->pessoas;
    }
     
         
}

$valsa = new Danca("Valsa","Lento","2"); //NEW= sendo criado um novo objeto $valsa

//ECHO= console.log
echo "O estilo da dança é: " . $valsa->get_estilo(); //Sendo invocado um nomo objeto $valsa, o qual esta sendo invocado o metodo {function} get_estilo, que, 
//por sua vez, esta renderizando o texto (estilo da dança) "valsa" declarado na linha 31

echo "<br/>"; // Renderizando uma quebra de linha em html

echo "Seu ritmo é: " . $valsa->get_ritmo(); //Sendo invocado um nomo objeto $valsa, o qual esta sendo invocado o metodo {function} get_ritmo, que, 
//por sua vez, esta renderizando o texto (ritmo) "Lento" declarado na linha 31

echo "<br/>"; // Renderizando uma quebra de linha em html

echo "A quantidade de pessoas é: " . $valsa->get_pessoas();

//Sendo invocado um nomo objeto $valsa, o qual esta sendo invocado o metodo {function} get_pessoas, que, 
//por sua vez, esta renderizando o texto (é composto) "2 Pessoas" declarado na linha 31

//objeto: dança parametros: estilo/ritmos/n de pessoas

?>

