<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eaeba80a83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto ycakugokkqkuqyiu; } parent::__construct(); $this->iemaakgqgqosiecm(); ycakugokkqkuqyiu: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\155\145\x6e\x75", [$this, "\x65\x75\161\x67\x77\x69\163\x63\167\x67\x71\153\161\153\x65\x63"]); } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x50\x61\156\145\154")) { goto oouoqimaaqcmccay; } Panel::symcgieuakksimmu(); oouoqimaaqcmccay: if (!$this->omseesogaocascyo("\x43\157\155\160\x6f\x6e\145\156\x74\x2d\115\141\156\141\x67\145\x72")) { goto sycygoiaiqqageym; } Model::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); sycygoiaiqqageym: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\141\x67\x65\x5f\164\151\x74\154\145" => __("\104\x6f\x6d\141\x69\x6e\40\x4d\x61\156\x61\147\x65\162", PR__MDL__DOMAIN_MANAGER), "\155\x65\156\165\x5f\163\154\165\147" => $this->akuociswqmoigkas(), "\x70\157\163\x69\x74\x69\157\x6e" => 1]); } }
