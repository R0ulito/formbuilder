<?php

use PHPUnit\Framework\TestCase;


class FormBuilderTest extends TestCase
{
	public function testIfClassIsCorrect()
	{
		$test = new Roulito\Formbuilder\FormBuilder;
		$this->assertTrue(is_object($test));
		unset($test);
	}

}
