<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c213240531             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\157\155\141\151\x6e\x2d\155\141\156\x61\147\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\143\x68\145\143\x6b\x2d\x61\160\151\153\145\171", ["\143\141\154\154\x62\x61\143\x6b" => [$this, "\x6b\145\x71\x77\171\141\153\x61\x77\x63\141\141\157\x67\151\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cecuyayqoioasumi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
