<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6673f43d9ab4b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\155\141\151\x6e\x20\115\x61\156\x61\147\x65\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\x6e\x65\154")) { goto sioekkmekwygemyc; } Panel::symcgieuakksimmu(); sioekkmekwygemyc: if (!$this->omseesogaocascyo("\143\157\155\x70\157\x6e\145\x6e\x74\55\155\x61\x6e\141\x67\x65\x72")) { goto yiowgigkkwsoqcci; } Model::symcgieuakksimmu(); yiowgigkkwsoqcci: } }
