<?php
	// Estado CERO: Esperamos un ( -> UNO
	// Estado UNO: Esperamos un ) -> CERO y considerar "()"

	class ClearPar
	{
		private $state;

		static function build($input)
		{
			$estado = 0;
			$salida = '';

			for ($i=0; $i<strlen($input); ++$i) {
				if ($estado == 0 && $input[$i]=='(') {
                    $estado = 1;
				} else if ($estado == 1 && $input[$i]==')') {
                    $salida .= '()';
					$state = 0;
				}
			}

			return $salida;
		}
	}

	echo ClearPar::build("()())()"); // salida : "()()()"

	echo '<br>';

	echo ClearPar::build("()(()"); // salida : "()()"

	echo '<br>';

	echo ClearPar::build(")("); // salida : ""

	echo '<br>';

	echo ClearPar::build("((()"); // salida : "()"
