<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b618610974f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\x6d\141\x69\x6e\x20\115\141\156\x61\x67\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\145\x6c")) { goto msemumccgceyugmg; } Panel::symcgieuakksimmu(); msemumccgceyugmg: if (!$this->omseesogaocascyo("\143\157\155\160\157\x6e\x65\156\x74\55\x6d\x61\156\141\147\145\162")) { goto wagqgeqymeqoeuyi; } Model::symcgieuakksimmu(); wagqgeqymeqoeuyi: } }
