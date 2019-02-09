<?php

namespace Roulito\Formbuilder;





class Label
{

    /**
     * @var String|null
     */
	public $name;


    /**
     * @var String|null
     */
	protected $classes;

    /**
     * @var String|null
     */
	protected $text;

    /**
     * @var bool|null
     */
	public $isWrapped = false;

	public function __construct(array $options)
	{
		$this->name = $options['name'] ?? null;
		$this->classes = $options['classes'] ?? null;
		$this->text = $options['text'] ?? null;
		$this->isWrapped= $options['isWrapped'] ?? null;
	}



	public function __toString()
	{
		$label = '<label for="' . $this->name . '" class="' . $this->classes . '">' . $this->text . '</label>';
		return $label;
	}






}

