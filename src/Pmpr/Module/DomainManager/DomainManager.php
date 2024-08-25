<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb56d231d4f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\157\155\141\x69\156\40\x4d\x61\x6e\141\147\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\156\x65\154")) { goto msemumccgceyugmg; } Panel::symcgieuakksimmu(); msemumccgceyugmg: if (!$this->omseesogaocascyo("\x63\157\155\x70\x6f\x6e\x65\x6e\164\x2d\155\141\x6e\x61\147\145\162")) { goto wagqgeqymeqoeuyi; } Model::symcgieuakksimmu(); wagqgeqymeqoeuyi: } }
