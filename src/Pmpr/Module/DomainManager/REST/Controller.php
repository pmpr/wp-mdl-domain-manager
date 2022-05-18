<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284dafcc48ef             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\x6f\x6d\x61\151\x6e\55\155\141\156\x61\x67\145\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x63\150\145\x63\x6b\x2d\x61\160\151\153\x65\x79", ["\x63\x61\x6c\x6c\142\x61\143\153" => [$this, "\x6b\145\161\x77\171\x61\153\141\x77\143\x61\141\157\x67\151\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto isgwkwacoyimiauk; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); isgwkwacoyimiauk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
