<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62828f51087fc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\x6f\x6d\141\x69\x6e\55\155\141\156\141\147\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\143\x68\145\143\x6b\x2d\x61\160\151\x6b\145\171", ["\143\x61\154\x6c\142\x61\x63\153" => [$this, "\x6b\145\161\x77\171\141\x6b\x61\167\143\141\141\157\x67\x69\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto uegouoiuyoqkcscg; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); uegouoiuyoqkcscg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
