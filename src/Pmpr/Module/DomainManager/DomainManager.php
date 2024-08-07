<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9d330c6c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\157\x6d\x61\x69\x6e\40\115\x61\x6e\x61\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\145\x6c")) { goto eogwckcymuugikuy; } Panel::symcgieuakksimmu(); eogwckcymuugikuy: if (!$this->omseesogaocascyo("\143\157\x6d\x70\x6f\x6e\145\156\x74\x2d\x6d\141\x6e\x61\x67\145\162")) { goto msemumccgceyugmg; } Model::symcgieuakksimmu(); msemumccgceyugmg: } }
