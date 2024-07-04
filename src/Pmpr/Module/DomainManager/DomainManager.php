<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668708055e9cc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\141\151\x6e\40\115\x61\x6e\141\147\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\156\145\154")) { goto sioekkmekwygemyc; } Panel::symcgieuakksimmu(); sioekkmekwygemyc: if (!$this->omseesogaocascyo("\x63\x6f\155\x70\x6f\x6e\x65\156\x74\x2d\x6d\141\x6e\141\x67\145\x72")) { goto yiowgigkkwsoqcci; } Model::symcgieuakksimmu(); yiowgigkkwsoqcci: } }
