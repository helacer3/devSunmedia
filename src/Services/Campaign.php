<?php
namespace SunMedia\Services;

use SunMedia\Interfaces\CampaignInterface;

/**
* clase para el manejo de las campañas
*/
class Campaign implements CampaignInterface {
	
	// class Vars
	protected Int    $id;
	protected String $gender;
	protected String $priority;
	protected String $device;
	protected String $ageSegment;

	/**
	* Obtener el Id de la Campaña
	* @return Int Identificador de la campaña
	*/
    public function id(): int {
    	return $this->id;
    }

	/**
	* Obtener el Género de la Campaña
	* @return String Género de la campaña
	*/
    public function gender(): string {
    	return $this->gender;
    }

	/**
	* Obtener la Prioridad de la Campaña
	* @return String Prioridad de la campaña
	*/
    public function priority(): string {
    	return $this->priority;
    }

	/**
	* Obtener el Dispositivo de la Campaña
	* @return String Dispositivo de la campaña
	*/
    public function device(): string {
    	return $this->device;
    }

	/**
	* Obtener el segmento de edad de la Campaña
	* @return String Segmento de edad de la campaña
	*/
    public function ageSegment(): string {
    	return $this->ageSegment;    	
    }
}