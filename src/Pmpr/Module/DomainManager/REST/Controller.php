<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ac630d19b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\x6f\155\x61\151\x6e\x2d\155\141\156\141\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\143\x68\145\x63\153\x2d\x61\160\x69\153\x65\171", [self::wwgusigoaksqmwsm => [$this, "\153\145\x71\167\171\141\x6b\x61\x77\143\141\x61\x6f\x67\151\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto quwcqmyokicssyew; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); quwcqmyokicssyew: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
