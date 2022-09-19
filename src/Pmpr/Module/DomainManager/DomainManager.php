<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             632819d5e8722             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\157\155\x61\151\x6e\x20\x4d\x61\156\x61\x67\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto cecuyayqoioasumi; } parent::__construct(); $this->iemaakgqgqosiecm(); cecuyayqoioasumi: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x70\141\x6e\145\154")) { goto qiaqsassksqiuyae; } Panel::symcgieuakksimmu(); qiaqsassksqiuyae: if (!$this->omseesogaocascyo("\x63\x6f\x6d\160\x6f\156\145\156\164\55\155\x61\156\141\x67\x65\x72")) { goto qogqewiwmwiwskgm; } Model::symcgieuakksimmu(); qogqewiwmwiwskgm: } }
