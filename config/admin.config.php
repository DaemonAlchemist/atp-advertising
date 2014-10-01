<?php

return array(
	'admin' => array(
		'models' =>array(
			'atpadvertising_adsense' => array(
				'displayName' => 'Adsense Ad',
				'class' => 'ATPAdvertising\Model\Adsense',
				'category' => 'Advertising',
				'displayColumns' => array('Name', 'Publisher', 'AdId'),
				'defaultOrder' => 'name ASC',
			),
		),
		'parameters' => array(
		),
	),
);
