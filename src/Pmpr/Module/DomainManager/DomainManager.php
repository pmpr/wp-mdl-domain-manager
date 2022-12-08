<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639210dfbe2d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\157\x6d\141\x69\x6e\40\x4d\141\156\x61\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cgyakcqgugqgkqiw; } parent::__construct(); $this->iemaakgqgqosiecm(); cgyakcqgugqgkqiw: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\156\x65\x6c")) { goto eeyyskqsmquyquqw; } Panel::symcgieuakksimmu(); eeyyskqsmquyquqw: if (!$this->omseesogaocascyo("\143\157\x6d\x70\x6f\156\145\x6e\164\55\155\141\x6e\141\x67\145\162")) { goto ewscugeuicukkycc; } Model::symcgieuakksimmu(); ewscugeuicukkycc: } }
