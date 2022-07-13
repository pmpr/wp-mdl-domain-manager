<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf259a42bab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\104\x6f\155\x61\151\x6e\x20\115\141\156\141\x67\x65\x72", PR__MDL__DOMAIN_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto yqykqysmiquwoasu; } parent::__construct(); $this->iemaakgqgqosiecm(); yqykqysmiquwoasu: } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\156\x65\x6c")) { goto ayyweymyuuiauamo; } Panel::symcgieuakksimmu(); ayyweymyuuiauamo: if (!$this->omseesogaocascyo("\143\157\155\x70\157\156\145\156\x74\x2d\x6d\141\x6e\141\x67\x65\162")) { goto mosqsmqimqgqoase; } Model::symcgieuakksimmu(); mosqsmqimqgqoase: } }
