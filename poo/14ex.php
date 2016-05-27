<p>Confeccionar una clase Persona que tenga como atributos el nombre y la edad. El constructor recibe los datos para inicializar dichos atributos. Otro método imprime los datos.

Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo. El constructor recibe los tres atributos de la clase Empleado. Llamar al constructor de la clase padre para inicializar los atributos nombre y edad del Empleado.

Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la clase Empleado y llamar a sus métodos.</p>
<?php

class Persona {
	protected $nom;
	protected $edat;

	public function __construct($nom, $edat){
		$this->nom = $nom;
		$this->edat = $edat;
	}

	public function imprimir(){
		echo ($this->nom." ".$this->edat."<br>");
	}
}

class Empleat extends Persona{
	private $sou;

	public function __construct($nom, $edat, $sou){
		parent::__construct($nom, $edat);
		$this->sou = $sou;
	}

	public function imprimir(){
		echo $this->sou."-";
		parent::imprimir();
	}
}

$pers = new Persona("David", 33);
$pers->imprimir();

$empl = new Empleat("Pere", 21, 3000);
echo "<br>";
$empl->imprimir();
?>