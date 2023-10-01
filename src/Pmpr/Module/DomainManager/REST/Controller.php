<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65195c98ab9a9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\144\x6f\x6d\x61\151\156\55\155\141\156\x61\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\143\x68\145\x63\x6b\55\x61\x70\151\x6b\145\171", [self::wwgusigoaksqmwsm => [$this, "\153\x65\161\167\x79\x61\153\x61\x77\143\x61\x61\x6f\x67\x69\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto ewscugeuicukkycc; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); ewscugeuicukkycc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
