<?php
namespace Roulito\FormBuilder;

use Roulito\Formbuilder\Label;

class Input
{
	/**
	 * Array of html attributes related to the input
	 * 
	 * E.g : if you want a text input, with attributes name & id equals to surname, with "form-control" Bootstrap class
	 * you'll have to pass this array :
	 * 
	 * $options = [
	 * 	"type" => "text",
	 * 	"name" => "surname",
	 * 	"id" => "surname",
	 * 	"classes" => "form-control"
	 * 	];
	 *
	 * E.g : if you want a date input, with attribute name equals to birthday, id equals to bday, and a label with "Birthday: " as text
	 * you'll have to pass this array :
	 *
	 * $options = [
	 * 	"type" => "date",
	 * 	"name" => "birthday",
	 * 	"id" => "bday",
	 * 	"label" => [
	 * 		"name" => "bday",
	 * 		"text" => "Birthday: ",
	 * 		"classes" => "cool classy-classes"
	 * 		]
	 * 	];
	 * 
	 * @var Array
	 *
	 *
	 * */
	protected $options;

    /**
     * @var \Roulito\Formbuilder\Label
     */
	protected $label;


    /**
     * @var String
     */
	protected $id;

    /**
 * @var bool
 */
    protected $bootstrap = false;

    /**
     * @var bool
     */
    protected $materialize = false;


    /**
     * @var string|null
     */
    public $wrapperClasses;


    /**
     * @var string|null
     */
    public $inputClasses;


	public function __construct(array $options, Label $label = null)
	{
		if(isset($options['label']) && is_array($options['label'])) {
			$this->label = new Label($options['label']); 
			//$this->id = $options['label']['name'] !== null ? ' id="' . $options['label']['name'] . '"' : '' ;
			$this->id = ' id="' . $options['label']['name'] . '"' ?? '';
		}

		if(isset($label) && is_object($label)) {
			$this->label = $label;
//			$this->id = $this->label->name !== null ? ' id="' . $this->label->name . '"' : '' ;
			$this->id = ' id="' . $this->label->name . '"' ?? '';
		}

		$this->options = $options;
		$this->wrapperClasses = $options['classes']['wrapper'] ?? null;
		$this->inputClasses = $options['classes']['input'] ?? null;

	}



	public function __toString()
	{
	    $input = '';
	    $this->bootstrap ? $input .= '<div class="' . $this->wrapperClasses . '">' : '';
		$input .= $this->label;
		$input .= '<input type="' . $this->options['type'] . '" name="' . $this->options['name'] . '"' . $this->id . ' class="' .$this->inputClasses . '">';
		$this->bootstrap ? $input .= '</div>' : '';
		return $input;
	}
}
