<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f3afcbf009             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\x6f\155\141\x69\x6e\x2d\155\x61\156\141\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x63\x68\x65\143\x6b\55\x61\160\x69\x6b\145\171", ["\143\141\x6c\154\x62\x61\x63\x6b" => [$this, "\x6b\x65\161\167\171\x61\153\141\167\x63\x61\141\x6f\147\x69\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cecuyayqoioasumi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
