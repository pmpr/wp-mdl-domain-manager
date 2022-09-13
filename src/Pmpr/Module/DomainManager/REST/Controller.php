<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63208fe375709             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\x6d\141\x69\156\x2d\x6d\x61\156\x61\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\143\x68\145\143\153\55\141\160\x69\153\145\x79", ["\x63\141\x6c\154\142\x61\143\x6b" => [$this, "\x6b\x65\161\x77\171\141\x6b\x61\x77\x63\x61\x61\157\147\151\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto qgoiooayqmqqsiok; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); qgoiooayqmqqsiok: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
