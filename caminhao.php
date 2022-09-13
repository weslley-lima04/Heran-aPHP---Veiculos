<?php 

class Caminhao extends veiculoRodoviario
{
	private $carga;

	private function setCarga($qtdCarga)
	{
		$this->carga = $qtdCarga;
	}

	private function getCarga()
	{
		return $carga;
	}

	public function __construct($rodas, $passageiros, $carga)
	{
		
		parent:: __construct($rodas, $passageiros);
		$this->carga = $carga;

	}


	public function Mostra()
	{
		echo "Caminhao:";
		echo $this->npassageiros."</br>";
		echo $this->nrodas."</br>";
		echo $this->carga."</br>";

	}


}






 ?>