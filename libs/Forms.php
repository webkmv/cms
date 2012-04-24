<?php

require_once "config.php";

class Forms
{
	public function __construct()
	{
		
	}
	
	/**
	 * Провека всех данных формы
	 * @param associative array $arrayData массив данных формы
	 * @return bool Возвращает true если все поля заполненны
	 */
	public function CheckByEmptyAllInputs($arrayData)
	{
		foreach($arrayData as $key => $value)
		{
			if(empty($value))
			{
				return false;
			}
		}
		
		return true;
	}
} 