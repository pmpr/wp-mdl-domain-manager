<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ccf2a811524             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\157\x6d\x61\x69\156\40\115\x61\156\141\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cgyakcqgugqgkqiw; } parent::__construct(); $this->iemaakgqgqosiecm(); cgyakcqgugqgkqiw: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\x6e\145\154")) { goto eeyyskqsmquyquqw; } Panel::symcgieuakksimmu(); eeyyskqsmquyquqw: if (!$this->omseesogaocascyo("\x63\157\155\160\157\156\x65\156\x74\55\155\141\x6e\141\x67\145\162")) { goto ewscugeuicukkycc; } Model::symcgieuakksimmu(); ewscugeuicukkycc: } }
