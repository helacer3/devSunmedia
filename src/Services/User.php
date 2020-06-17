<?php
namespace SunMedia\Services;

use SunMedia\Interfaces\UserInterface;

/**
* clase para el manejo de los usuarios
*/
class User implements UserInterface {
	
	// class Vars
	protected String $gender;
	protected String $device;
	protected Int    $age;

	/**
	* Obtener el Género del usuario
	* @return String Género del usuario
	*/
    public function gender(): string {
    	return $this->gender;
    }

    /**
	* Obtener el Device deo usuario
	* @return String Género del usuario
	*/
    public function Device(): string {
    	return $this->device;
    }

    /**
	* Obtener el Género del usuario
	* @return Int Edad del Usuario
	*/
    public function age(): int {
    	return $this->age;
    }
}