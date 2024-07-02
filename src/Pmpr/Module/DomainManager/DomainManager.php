<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400d1e349e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\x61\151\x6e\x20\115\x61\156\141\x67\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\145\154")) { goto sioekkmekwygemyc; } Panel::symcgieuakksimmu(); sioekkmekwygemyc: if (!$this->omseesogaocascyo("\x63\157\155\x70\x6f\156\145\156\x74\55\x6d\141\156\141\147\x65\x72")) { goto yiowgigkkwsoqcci; } Model::symcgieuakksimmu(); yiowgigkkwsoqcci: } }
