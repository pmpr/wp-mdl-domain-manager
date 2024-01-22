<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3a86c5a83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\157\155\x61\x69\156\40\x4d\141\156\141\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\x6e\145\154")) { goto cgyakcqgugqgkqiw; } Panel::symcgieuakksimmu(); cgyakcqgugqgkqiw: if (!$this->omseesogaocascyo("\143\x6f\155\x70\x6f\156\x65\156\164\55\x6d\141\156\141\x67\145\x72")) { goto eeyyskqsmquyquqw; } Model::symcgieuakksimmu(); eeyyskqsmquyquqw: } }
