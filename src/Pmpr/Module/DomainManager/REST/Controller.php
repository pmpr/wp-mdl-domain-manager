<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63978be87ea82             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\155\141\x69\x6e\x2d\155\x61\x6e\141\147\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\143\150\x65\x63\153\x2d\x61\160\x69\153\x65\171", [self::wwgusigoaksqmwsm => [$this, "\153\145\161\x77\171\141\153\x61\167\143\x61\141\157\147\151\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); kqgcyoscsusgoaqi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
