<?php

	abstract class Calculadora {

		public $resul;

		public function soma($valor1, $valor2){
			if(is_numeric($this->resul = $valor1 + $valor2));

			return $this->resul;
		}

		public function diminuir($valor1, $valor2){
			if(is_numeric($this->resul = $valor1 - $valor2));

			return $this->resul;
		}

		public function multiplicar($valor1, $valor2){
			if(is_numeric($this->resul = $valor1 * $valor2));

			return $this->resul;
		}

		public function dividir($valor1, $valor2){
			if(is_numeric($this->resul = $valor1 / $valor2));

			return $this->resul;
		}
	}