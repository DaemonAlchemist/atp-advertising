<?php

namespace ATPAdvertising\View\Helper;

class Adsense extends \ATP\View\Helper
{
	public function __invoke($id)
	{
		$ad = new \ATPAdvertising\Model\AdsenseAd();
		$ad->loadByIdentifier($id);
		
		return "
			<ins class=\"adsbygoogle\"
				 style=\"display:inline-block;\"
				 data-format=\"auto\"
				 data-ad-client=\"{$ad->publisher}\"
				 data-ad-slot=\"{$ad->adId}\"></ins>
			<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		";
	}
}
