<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6646a8833c72d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\157\x6d\141\x69\156\x20\115\x61\x6e\141\x67\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\x65\x6c")) { goto scisgsyemmsekgos; } Panel::symcgieuakksimmu(); scisgsyemmsekgos: if (!$this->omseesogaocascyo("\143\x6f\x6d\x70\157\x6e\x65\x6e\164\55\155\x61\156\141\147\x65\162")) { goto cewmoqyysgsmuiya; } Model::symcgieuakksimmu(); cewmoqyysgsmuiya: } }
