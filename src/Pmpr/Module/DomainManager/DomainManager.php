<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275709cef73             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\x6f\155\141\x69\x6e\x20\x4d\141\156\x61\x67\145\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cecuyayqoioasumi; } parent::__construct(); $this->iemaakgqgqosiecm(); cecuyayqoioasumi: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\x65\154")) { goto qiaqsassksqiuyae; } Panel::symcgieuakksimmu(); qiaqsassksqiuyae: if (!$this->omseesogaocascyo("\143\157\155\160\157\156\x65\x6e\164\x2d\x6d\x61\156\x61\147\x65\162")) { goto qogqewiwmwiwskgm; } Model::symcgieuakksimmu(); qogqewiwmwiwskgm: } }
