<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63275709cef73             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\x6d\141\x69\156\x2d\155\x61\x6e\x61\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\x63\150\x65\143\153\55\141\x70\151\x6b\x65\171", ["\143\141\154\154\x62\141\x63\153" => [$this, "\x6b\x65\161\x77\x79\x61\153\141\x77\143\x61\141\x6f\147\x69\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto qgoiooayqmqqsiok; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); qgoiooayqmqqsiok: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
