<?php

namespace ATPAdvertising\Model;

class AdsenseAd extends \ATP\ActiveRecord
{
	public function displayName()
	{
		return $this->name;
	}
}
AdsenseAd::init();