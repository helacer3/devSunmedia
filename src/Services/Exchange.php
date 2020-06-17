<?php
namespace SunMedia\Services;


use SunMedia\Interfaces\ExchangeInterface;
use SunMedia\Interfaces\UserInterface;
use SunMedia\Services\Campaign;

/**
* clase para el manejo de los exchange
*/
class Exchange implements ExchangeInterface {

	// class Vars
	protected Array         $campaigns = array();
	protected UserInterface $user;

	/**
	* match
	* @param UserInterface $user Usuario a asignar a las campañas
	*/	
    public function match(UserInterface $user): ?CampaignInterface {
    	$this->user = $user;
    }

    /**
	* asigna Campaña al exchange
	* @param CampaignInterface $campaign Campaña a asignar al Exchange
	*/
    public function addCampaign(CampaignInterface $campaign): void {
        // priority Validate
        if ($campaign->priority == "high") {
            // add Item To Array Start
            array_unshift($this->campaigns, $campaign);
        } else {
        	// add Item To Array Finish
            array_push($this->campaigns, $campaign);
        }
    }

    /**
	* Elimina la Campaña
	* @param CampaignInterface $campaign Campaña que se desea eliminar
	*/
    public function removeCampaign(CampaignInterface $campaign): void {
    	// validate Actual Campaigns 
    	if (count($this->campaigns) > 0) {
    		// iterate Campaigns
    		foreach($this->campaigns as $indCampaign => $excCampaign) {
    			// validate Campaign ID
    			if ($campaign->getId() == $excCampaign->getId()) {
    				// removef Campaign Item
    				unset($this->campaigns[$indCampaign]);
    				// break Foreach
    				break;
    			}
			}
    	}
    }

    /**
	* devuelve el listado de campañas
	* @return Array Listado de campañas del Exchange actual
	*/
    public function campaigns(): array {
    	return $this->campaigns;
    }

    /**
	* obtiene la campaña por ID
	* @param  Int $id Identificador de la campaña que se desea obtener
	* @return CampaignInterface $objCampaign Objeto con la información de la campaña solicitada
	*/
    public function getCampaignById(int $id): ?CampaignInterface {
    	// default Empty Campaign
    	$objCampaign = new Campaign();
    	try {
	    	// validate Actual Campaigns 
	    	if (count($this->campaigns) > 0) {
	    		// iterate Campaigns
	    		foreach($this->campaigns as $indCampaign => $excCampaign) {
	    			// validate Campaign ID
	    			if ($excCampaign->getId() == $id) {
	    				// save Campaign
	    				$objCampaign = $excCampaign;
	    				// break Foreach
	    				break;
	    			}
				}
	    	}
    	} catch (\Exception $ex) {
			throw new \Exception("La campaña solicitada no existe en el exchange");
    	}
    	// return
    	return $objCampaign;
    }
}