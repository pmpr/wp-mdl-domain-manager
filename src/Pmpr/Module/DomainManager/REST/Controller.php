<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             639210dfbe2d0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\155\141\151\156\55\x6d\x61\156\x61\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\143\150\145\143\x6b\55\x61\160\151\153\x65\171", [self::wwgusigoaksqmwsm => [$this, "\153\145\x71\x77\x79\141\x6b\x61\167\x63\141\141\157\x67\151\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); kqgcyoscsusgoaqi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
