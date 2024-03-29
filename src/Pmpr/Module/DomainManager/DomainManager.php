<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             660694576f6c9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\157\x6d\x61\x69\x6e\x20\x4d\141\x6e\x61\x67\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\156\145\154")) { goto ieumumsgyguceusy; } Panel::symcgieuakksimmu(); ieumumsgyguceusy: if (!$this->omseesogaocascyo("\x63\157\x6d\160\157\156\145\156\164\x2d\155\141\x6e\x61\147\145\x72")) { goto coywmiyqgsweuiic; } Model::symcgieuakksimmu(); coywmiyqgsweuiic: } }
