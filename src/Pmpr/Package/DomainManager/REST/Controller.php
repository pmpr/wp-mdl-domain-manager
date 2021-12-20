<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c0327d73164             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\x6f\x6d\141\x69\x6e\x2d\x6d\141\156\141\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\x63\150\x65\x63\x6b\x2d\x61\x70\151\x6b\145\x79", ["\x63\x61\x6c\154\x62\141\x63\x6b" => [$this, "\153\145\161\167\171\x61\x6b\x61\x77\x63\x61\141\x6f\147\x69\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::API_KEY); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cecuyayqoioasumi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
