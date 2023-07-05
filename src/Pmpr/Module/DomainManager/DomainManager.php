<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a52e2629dc7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\155\141\151\x6e\40\115\141\156\x61\x67\145\162", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto ugqaaewwmkocwwgy; } parent::__construct(); $this->iemaakgqgqosiecm(); ugqaaewwmkocwwgy: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\x6e\145\x6c")) { goto wgewmqieuamsoayy; } Panel::symcgieuakksimmu(); wgewmqieuamsoayy: if (!$this->omseesogaocascyo("\143\x6f\155\160\x6f\156\145\156\x74\55\155\141\156\x61\x67\x65\162")) { goto kqgcyoscsusgoaqi; } Model::symcgieuakksimmu(); kqgcyoscsusgoaqi: } }
