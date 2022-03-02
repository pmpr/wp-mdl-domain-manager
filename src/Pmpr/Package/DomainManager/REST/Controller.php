<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f2607d8abc             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\157\x6d\x61\x69\x6e\x2d\155\x61\x6e\x61\147\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\143\x68\x65\143\153\55\141\x70\x69\x6b\145\x79", ["\x63\x61\154\x6c\142\141\x63\153" => [$this, "\x6b\x65\x71\167\x79\x61\153\141\167\143\x61\x61\157\147\x69\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cecuyayqoioasumi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
