<?php 

/**
* 
*/
class form {
	
	public $attribute;

	function __construct($argument) {
				
	}

	/**
	 * creating a form
	 *
	 **/
	
	public function create($method="GET") {
		return "<form method=$method>";
	}


	/**
	 * input text
	 *
	 **/
	
	public function text($name=null,$value=null,$classnames=array(),$attributes=array()) {
	
		if (empty($attributes)) return;
		return static::input('text',$name,$value,$classnames,$attributes);
		 
		// need to add exception
	}

	/**
	 * checkbox
	 *
	 */

	public function checkbox($name=null,$value=null,$classnames=array(), $attributes=array()) {
		
		if (empty($attributes)) return;
		return static::input('checkbox',$name,$value,$classnames,$attributes);	
		
		// need to add exception
	}

	/**
	 * textarea function
	 *
	 **/

	public function textarea($name=null,$text=null,$classnames=array(), $attributes =array()) {

		if (empty($attributes)) return;
		return static::input('textarea',$name,$value,$classnames,$attributes,$text);
	}


	/**
	 * anything come up with input attributes
	 *
	 **/
	
	private static function input($type=null,$name=null,$text=null,$classnames=array(),$attributes=array()) {
	
		if ($type=='textarea') {
			$attribute = "<textarea name=$name";
		} else {
			$attribute = "<input type=$type name=$name value=$text";
		}
		

		foreach ($attributes as $key => $value) {
			$attribute .= " $key=$value ";
		}
		
		if (!empty($classnames)) {
			$attribute .= " class='";
			
			foreach ($classnames as $class) {
				$attribute .= "$class ";
			}
			$attribute .= "'";
		}

		 

		return ($type=='textarea') ? " $attribute>$text</textarea>":$attribute." />";

	}


	/**
	 * ending form tag
	 *
	 **/

	public function end() {
		return "</form>";
	}


	

}









 ?>