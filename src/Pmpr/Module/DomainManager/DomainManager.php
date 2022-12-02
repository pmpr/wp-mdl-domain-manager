<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6c20c2e59             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\x6f\155\141\151\x6e\40\x4d\x61\156\x61\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cgyakcqgugqgkqiw; } parent::__construct(); $this->iemaakgqgqosiecm(); cgyakcqgugqgkqiw: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\156\x65\154")) { goto eeyyskqsmquyquqw; } Panel::symcgieuakksimmu(); eeyyskqsmquyquqw: if (!$this->omseesogaocascyo("\x63\x6f\155\160\157\156\x65\x6e\x74\55\155\x61\156\141\147\145\x72")) { goto ewscugeuicukkycc; } Model::symcgieuakksimmu(); ewscugeuicukkycc: } }
