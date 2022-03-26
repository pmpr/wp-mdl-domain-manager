<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623eb92681b81             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\155\141\151\156\x2d\155\x61\x6e\141\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\143\150\145\143\153\55\x61\160\x69\153\145\171", ["\143\141\154\x6c\x62\141\143\153" => [$this, "\x6b\x65\161\x77\x79\x61\153\141\x77\143\x61\x61\157\147\151\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cecuyayqoioasumi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
