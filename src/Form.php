<?php

namespace Roulito\Formbuilder;

class Form
{
	/**
	 *
	 * Method of the form 
	 * Accepted values : "GET" || "POST"
	 *
	 * @var String
	 *
	 * */
	protected $method;

	/**
	 *
	 * Target url
	 *
	 * @var String
	 *
	 * */
	protected $url;

	/**
	 *
	 * Options
	 *
	 * @var Array
	 *
	 * */
	protected $options;


	/**
	 *
	 * Inputs contained in the form
	 *
	 * @var Array
	 *
	 * */
	protected $inputs;


    /**
     * @var bool
     */
    protected $bootstrap = false;

    /**
     * @var bool
     */
    protected $materialize = false;


	public function __construct(string $method, string $url)
	{
		$this->method = $method;
		$this->url = $url;
	}


	public function addElement(Input $input)
    {
        $this->inputs[] = $input;

    }


	public function build(string $framework = '')
	{
        switch ($framework) {
            case "bootstrap":
                $this->bootstrap = true;
                break;
            case "materialize":
                $this->materialize = true;
                break;
            default:
                break;
        }

        $form = $this->open();
        $this->materialize ? $form .= '<div class="row">': '';

        foreach ($this->inputs as $key => $value) {
//            echo '<pre>'; var_dump($value);
            $form .= '<div class="' . $value->wrapperClasses . '">';
            $form .= $value;
            $form .= '</div>';
        }

        $form .= $this->close();



        echo $form;
	}



	public function open()
	{
		echo '<form action="' . $this->url . '" method="' . $this->method . '">';
	}

	public function close()
	{
		echo '</form>';
	}


}
