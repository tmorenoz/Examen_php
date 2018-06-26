<?php
	/**
	* 
	*/
	class ChangeString
	{
		private $alfabeto;

		function __construct($alfabeto)
		{
			$this->alfabeto = $alfabeto;
		}

		function build($input)
		{
			for ($i=0; $i<strlen($input); ++$i) {
				$input[$i] = $this->buildCharacter($input[$i]);
			}

			return $input;
		}

		function buildCharacter($c)
		{
			$isUpper = ($c == strtoupper($c));

			$pos = array_search(strtolower($c), $this->alfabeto);

			if ($pos === false)
				return $c;

			if ($pos == count($this->alfabeto)-1)
				$pos = 0;
			else
				$pos = $pos+1;

			if ($isUpper)
				return strtoupper($this->alfabeto[$pos]);
			return $this->alfabeto[$pos];
		}
	}

	$changeString = new ChangeString([ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r',
								's', 't', 'u', 'v', 'w', 'x', 'y', 'z' ]);
	echo $changeString->build("123 abcd*3");
	echo '<br>';
	echo $changeString->build("**Casa 52");
	echo '<br>';
	echo $changeString->build("**Casa 52Z");
