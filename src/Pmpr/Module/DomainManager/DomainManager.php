<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b10bdaadf6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x44\157\155\x61\x69\156\x20\x4d\x61\156\x61\x67\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cecuyayqoioasumi; } parent::__construct(); $this->iemaakgqgqosiecm(); cecuyayqoioasumi: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\x6e\x65\154")) { goto qiaqsassksqiuyae; } Panel::symcgieuakksimmu(); qiaqsassksqiuyae: if (!$this->omseesogaocascyo("\143\x6f\x6d\x70\x6f\156\x65\x6e\x74\x2d\155\141\x6e\141\x67\145\x72")) { goto qogqewiwmwiwskgm; } Model::symcgieuakksimmu(); qogqewiwmwiwskgm: } }
