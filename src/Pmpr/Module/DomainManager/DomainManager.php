<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63208fe375709             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\x6d\x61\x69\x6e\x20\x4d\x61\156\x61\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cecuyayqoioasumi; } parent::__construct(); $this->iemaakgqgqosiecm(); cecuyayqoioasumi: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\156\x65\154")) { goto qiaqsassksqiuyae; } Panel::symcgieuakksimmu(); qiaqsassksqiuyae: if (!$this->omseesogaocascyo("\x63\x6f\155\x70\x6f\x6e\145\x6e\164\55\x6d\x61\156\141\147\x65\x72")) { goto qogqewiwmwiwskgm; } Model::symcgieuakksimmu(); qogqewiwmwiwskgm: } }
