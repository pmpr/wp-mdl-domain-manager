<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6c20c2e59             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\157\x6d\x61\x69\156\x2d\x6d\141\156\141\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\x63\x68\x65\x63\x6b\x2d\x61\x70\151\x6b\x65\171", ["\x63\x61\154\x6c\x62\x61\143\153" => [$this, "\x6b\145\x71\167\x79\x61\x6b\x61\167\143\141\141\x6f\x67\x69\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); kqgcyoscsusgoaqi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
