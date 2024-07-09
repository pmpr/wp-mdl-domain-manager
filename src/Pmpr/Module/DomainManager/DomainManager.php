<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668dab995bd3b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\x6d\141\151\x6e\x20\x4d\141\156\x61\x67\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\x6e\145\154")) { goto qukocuwgakemmyga; } Panel::symcgieuakksimmu(); qukocuwgakemmyga: if (!$this->omseesogaocascyo("\143\157\155\160\x6f\x6e\x65\x6e\x74\55\x6d\x61\156\141\147\145\x72")) { goto sioekkmekwygemyc; } Model::symcgieuakksimmu(); sioekkmekwygemyc: } }
