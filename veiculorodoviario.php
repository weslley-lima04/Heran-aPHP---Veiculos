<?php 

class veiculoRodoviario
{

	protected $nrodas;
	protected $npassageiros;

	protected function setRodas($qtdRodas)
	{
		$this->nrodas = $qtdRodas;
	}

	protected function getRodas()
	{
		return $nrodas;
	}

	protected function setPassageiros($qtdPassageiros)
	{
		$this->npassageiros = $qtdPassageiros;
	}

	protected function getPassageiros($qtdRodas)
	{
		return $npassageiros;
	}


	public function __construct($rodas, $passageiros)
	{
		$this->nrodas = $rodas;
		$this->npassageiros = $passageiros;
	}





}







 ?>