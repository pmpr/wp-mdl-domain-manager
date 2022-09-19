<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             632819d5e8722             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\REST; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = "\x64\x6f\x6d\141\151\x6e\55\x6d\141\x6e\141\147\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x63\x68\145\x63\x6b\55\x61\160\151\x6b\x65\171", ["\x63\141\x6c\154\x62\x61\x63\x6b" => [$this, "\x6b\145\161\x77\x79\x61\x6b\x61\167\x63\x61\141\157\147\151\145"]]); } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($keccaugmemegoimu && is_string($keccaugmemegoimu))) { goto qgoiooayqmqqsiok; } $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); qgoiooayqmqqsiok: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
