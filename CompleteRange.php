<?php

	class CompleteRange
	{
		
		static function build($list)
		{
			$tamanio = count($list);
			if ($tamanio == 0)
				return [];

			$comenzar = $list[0];
			$terminar = $list[$tamanio-1];
			return range($comenzar, $terminar);
		}
		
	}

	$resultado = CompleteRange::build([1,2,4,5]);
	var_dump($resultado);

    $resultado = CompleteRange::build([2,4,9]);
	var_dump($resultado);

    $resultado = CompleteRange::build([55,58,60]);
	var_dump($resultado);
