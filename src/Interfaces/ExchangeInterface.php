<?php

namespace SunMedia\Interfaces;

use SunMedia\CampaignInterface;


interface ExchangeInterface
{
    public function match(UserInterface $user): ?CampaignInterface;

    public function addCampaign(CampaignInterface $campaign): void;

    public function removeCampaign(CampaignInterface $campaign): void;

    public function campaigns(): array;

    public function getCampaignById(int $id): ?CampaignInterface;
}
