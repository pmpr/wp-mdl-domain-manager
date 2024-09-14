<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec59efdcc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\x61\x69\x6e\40\115\141\156\x61\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\156\x65\154")) { goto iqcogmsguwoikame; } Panel::symcgieuakksimmu(); iqcogmsguwoikame: if (!$this->omseesogaocascyo("\x63\157\155\160\x6f\156\145\156\164\55\155\141\x6e\141\x67\145\162")) { goto gimmuoqwckiseaik; } Model::symcgieuakksimmu(); gimmuoqwckiseaik: } }
