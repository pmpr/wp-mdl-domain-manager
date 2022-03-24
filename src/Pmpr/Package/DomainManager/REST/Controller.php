<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bba595949c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\155\141\x69\x6e\55\155\141\x6e\141\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x63\150\145\x63\x6b\55\141\160\x69\153\x65\171", ["\143\x61\154\x6c\x62\x61\143\153" => [$this, "\x6b\x65\161\x77\171\141\x6b\x61\x77\143\141\x61\x6f\147\x69\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cecuyayqoioasumi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
