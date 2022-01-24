<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed1fab189c             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\x6f\x6d\141\x69\x6e\55\155\141\156\x61\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\x63\x68\x65\143\x6b\55\141\x70\x69\153\x65\x79", ["\x63\x61\154\154\142\x61\x63\153" => [$this, "\x6b\145\x71\167\x79\x61\x6b\141\167\143\141\x61\x6f\147\151\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto ayyweymyuuiauamo; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); ayyweymyuuiauamo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
