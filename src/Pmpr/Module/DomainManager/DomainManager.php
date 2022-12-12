<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978be87ea82             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\x6d\141\x69\x6e\40\115\x61\156\141\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cgyakcqgugqgkqiw; } parent::__construct(); $this->iemaakgqgqosiecm(); cgyakcqgugqgkqiw: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\x65\x6c")) { goto eeyyskqsmquyquqw; } Panel::symcgieuakksimmu(); eeyyskqsmquyquqw: if (!$this->omseesogaocascyo("\x63\157\x6d\160\x6f\156\x65\x6e\164\55\x6d\141\x6e\x61\x67\x65\x72")) { goto ewscugeuicukkycc; } Model::symcgieuakksimmu(); ewscugeuicukkycc: } }
