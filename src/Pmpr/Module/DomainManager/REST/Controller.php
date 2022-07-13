<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cf259a42bab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\157\x6d\x61\x69\156\55\155\141\x6e\141\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\x63\150\x65\x63\153\x2d\141\160\151\153\x65\x79", ["\143\141\154\154\142\141\143\x6b" => [$this, "\153\145\x71\x77\x79\x61\153\x61\167\x63\x61\141\x6f\147\151\x65"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto cmqucgoewuyieoyk; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); cmqucgoewuyieoyk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
