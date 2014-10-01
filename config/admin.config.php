<?php

return array(
	'admin' => array(
		'models' =>array(
			'atpadvertising_adsense_ad' => array(
				'displayName' => 'Adsense Ad',
				'class' => 'ATPAdvertising\Model\AdsenseAd',
				'category' => 'Advertising',
				'displayColumns' => array('Identifier', 'Publisher', 'AdId'),
				'defaultOrder' => 'name ASC',
			),
		),
		'parameters' => array(
		),
	),
);
