<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c00eb8976b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto ycakugokkqkuqyiu; } parent::__construct(); $this->iemaakgqgqosiecm(); ycakugokkqkuqyiu: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\x5f\155\145\x6e\165", [$this, "\145\165\x71\x67\167\151\163\x63\x77\x67\x71\153\161\153\145\x63"]); } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\120\x61\x6e\x65\x6c")) { goto oouoqimaaqcmccay; } Panel::symcgieuakksimmu(); oouoqimaaqcmccay: if (!$this->omseesogaocascyo("\103\x6f\x6d\x70\x6f\156\x65\x6e\x74\55\115\141\x6e\141\x67\x65\162")) { goto sycygoiaiqqageym; } Model::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); sycygoiaiqqageym: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\160\x61\147\x65\x5f\164\151\164\154\x65" => __("\104\157\155\x61\151\156\x20\x4d\141\156\141\147\145\162", PR__MDL__DOMAIN_MANAGER), "\155\x65\156\x75\x5f\163\154\x75\x67" => $this->akuociswqmoigkas(), "\160\157\x73\151\164\151\157\x6e" => 1]); } }
