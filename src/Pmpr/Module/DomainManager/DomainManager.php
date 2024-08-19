<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66c31d4b18621             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\155\x61\x69\x6e\40\x4d\141\156\x61\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\156\x65\x6c")) { goto msemumccgceyugmg; } Panel::symcgieuakksimmu(); msemumccgceyugmg: if (!$this->omseesogaocascyo("\x63\x6f\155\160\157\x6e\x65\156\x74\55\x6d\x61\156\x61\147\145\x72")) { goto wagqgeqymeqoeuyi; } Model::symcgieuakksimmu(); wagqgeqymeqoeuyi: } }
