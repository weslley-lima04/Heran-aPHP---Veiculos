<?php 


class Automovel extends veiculoRodoviario
{
	private $tipo;

	private function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	private function getTipo()
	{
		return $tipoCarro;
	}

	public function __construct($rodas, $passageiros, $tipo)
	{
		
		parent:: __construct($rodas, $passageiros);
		$this->tipo = $tipo;
	}


	public function Mostra()
	{
	
		echo "Automovel:";
		echo $this->npassageiros."</br>";
		echo $this->nrodas."</br>";
		echo $this->tipo."</br>";

	}


}





 ?>