<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebd4cdd24de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\x6f\x6d\x61\151\x6e\40\115\141\156\x61\x67\x65\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\x65\154")) { goto cwwmimggaaecmucw; } Panel::symcgieuakksimmu(); cwwmimggaaecmucw: if (!$this->omseesogaocascyo("\x63\x6f\155\160\157\x6e\x65\156\164\55\x6d\141\156\141\147\145\x72")) { goto awoaooyoeoyeeqee; } Model::symcgieuakksimmu(); awoaooyoeoyeeqee: } }
