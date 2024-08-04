<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66af631561dc2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\x61\x69\156\40\x4d\x61\156\141\x67\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\156\145\x6c")) { goto ieumumsgyguceusy; } Panel::symcgieuakksimmu(); ieumumsgyguceusy: if (!$this->omseesogaocascyo("\143\x6f\x6d\x70\x6f\156\145\x6e\164\x2d\155\141\156\141\x67\x65\x72")) { goto coywmiyqgsweuiic; } Model::symcgieuakksimmu(); coywmiyqgsweuiic: } }
