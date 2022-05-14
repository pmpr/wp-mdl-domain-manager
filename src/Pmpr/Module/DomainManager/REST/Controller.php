<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             627f4337dfa9b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\157\155\x61\x69\156\x2d\x6d\x61\x6e\x61\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\143\150\145\x63\153\x2d\x61\160\151\x6b\145\x79", ["\x63\141\154\154\x62\x61\143\153" => [$this, "\x6b\145\x71\x77\x79\141\153\141\167\143\141\x61\x6f\147\151\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto gmwykkouysyaqwqm; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); gmwykkouysyaqwqm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
