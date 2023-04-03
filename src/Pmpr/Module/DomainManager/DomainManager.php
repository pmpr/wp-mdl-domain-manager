<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ac630d19b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\155\141\x69\x6e\40\115\x61\156\141\147\x65\162", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto ugqaaewwmkocwwgy; } parent::__construct(); $this->iemaakgqgqosiecm(); ugqaaewwmkocwwgy: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\x61\156\x65\154")) { goto wgewmqieuamsoayy; } Panel::symcgieuakksimmu(); wgewmqieuamsoayy: if (!$this->omseesogaocascyo("\x63\157\x6d\160\157\156\145\x6e\x74\55\x6d\x61\x6e\141\x67\x65\x72")) { goto kqgcyoscsusgoaqi; } Model::symcgieuakksimmu(); kqgcyoscsusgoaqi: } }
