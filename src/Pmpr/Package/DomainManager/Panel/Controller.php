<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027b8b58b8             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Ownership; use Pmpr\Package\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\144\x6f\x6d\141\151\x6e\x2d\x6d\141\156\x61\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\164\x2d\x64\x6f\x6d\141\x69\x6e", ["\141\x72\x67\163" => [], "\155\145\164\150\157\144\x73" => self::uigoseacoukemwqc, "\143\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\167\x77\141\x77\x69\163\x63\153\151\x71\145\165\145\x6f\x75\x61"]]); $this->register("\x2f\147\145\x74\55\x64\157\155\x61\151\156\163", ["\141\x72\x67\163" => [], "\x6d\x65\164\x68\157\x64\163" => self::uigoseacoukemwqc, "\143\141\154\x6c\142\141\143\x6b" => [$this, "\167\x69\161\165\x6d\153\x6d\x71\x6b\161\157\171\x63\x71\171\151"]]); $this->register("\57\147\145\x74\x2d\144\157\x6d\141\x69\156\55\146\151\x65\154\x64\163", ["\x61\162\147\x73" => [], "\x6d\145\x74\x68\157\x64\163" => self::uigoseacoukemwqc, "\143\x61\154\154\142\141\143\153" => [$this, "\x75\x67\x6d\x63\145\x63\x63\147\x77\141\x61\x61\151\x67\151\x79"]]); $this->register("\57\x73\x61\166\145\x2d\144\x6f\x6d\x61\151\x6e", ["\x61\162\x67\x73" => [], "\x6d\x65\164\150\x6f\144\163" => self::qucyckeykeuuaquw, "\143\x61\x6c\154\x62\141\x63\x6b" => [$this, "\x6d\x71\x6b\143\141\165\x65\x6b\171\155\145\x6b\161\141\153\x69"]]); $this->register("\57\x75\160\x64\x61\164\145\x2d\144\x6f\x6d\141\x69\x6e", ["\141\x72\x67\x73" => [], "\x6d\145\164\150\x6f\x64\163" => self::qucyckeykeuuaquw, "\143\141\x6c\154\x62\x61\x63\153" => [$this, "\141\x6d\x6f\x67\x71\x79\x63\157\143\157\165\x77\141\x69\143\x6f"]]); $this->register("\x2f\x67\145\164\x2d\x64\x6f\155\x61\x69\x6e\55\164\141\x62\x73", ["\x61\x72\x67\x73" => [], "\155\145\164\x68\157\144\163" => self::uigoseacoukemwqc, "\x63\x61\x6c\154\x62\x61\143\153" => [$this, "\x6b\143\x73\x71\x65\x71\155\x63\147\x6b\x77\153\143\x79\157\165"]]); $this->register("\x2f\147\x65\x74\x2d\157\167\x6e\145\x72\x73\150\x69\160\163", ["\141\x72\x67\163" => [], "\155\x65\x74\150\157\144\163" => self::uigoseacoukemwqc, "\143\141\x6c\154\142\x61\x63\153" => [$this, "\x6d\x63\157\153\167\x6d\145\165\x75\143\x71\x67\x6f\x75\x6f\x73"]]); $this->register("\x2f\x67\x65\x74\x2d\157\167\156\x65\162\163\150\151\160", ["\141\x72\x67\x73" => [], "\x6d\x65\x74\150\157\x64\163" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\141\x63\153" => [$this, "\x69\143\151\155\157\143\171\155\x77\x63\157\161\145\145\x6d\157"]]); $this->register("\x2f\166\145\x72\x69\146\171\x2d\x64\157\155\141\x69\156", ["\x61\x72\x67\163" => [], "\x6d\145\x74\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\x62\141\x63\153" => [$this, "\145\171\155\x65\163\163\x77\x6f\163\153\x75\163\153\155\171\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto wgewmqieuamsoayy; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto ugqaaewwmkocwwgy; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); ugqaaewwmkocwwgy: wgewmqieuamsoayy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\157\155\141\x69\156\40\x73\x75\143\x63\x65\x73\x73\146\x75\x6c\x6c\x79\x20\x75\160\144\141\x74\x65\x64\56", PR__PKG__DOMAIN_MANAGER), $keccaugmemegoimu); kqgcyoscsusgoaqi: ueigkucgaucgeimc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto owmuceyswmgueasi; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\x6d\141\151\x6e"); $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); if ($ukamowomoeiweqky) { goto wakmayaoqoskekqy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\40\x61\143\143\145\x73\x73\40\x74\157\40\164\x68\151\x73\40\163\x65\147\155\145\156\164", PR__PKG__DOMAIN_MANAGER), 401); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::CAP_OWNER) { goto sggawugoykqcmsug; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto wkeuuycukmuqiaom; sggawugoykqcmsug: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); wkeuuycukmuqiaom: qmuwoecuacmkwgem: owmuceyswmgueasi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eogwckcymuugikuy; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\144\x6f\x6d\141\151\156"), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto mwsmsguqqkcwiiuk; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::VERIFY_KEY, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::VERIFY_DATE]); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\x77\x6e\x65\162\x73\150\151\x70\x20\156\157\164\40\x66\157\x75\x6e\x64", PR__PKG__DOMAIN_MANAGER), 404); eeauyscekuckoues: eogwckcymuugikuy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $mokawwccycoiqeka = null; $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto asiqwuoswmigcaki; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if (!$aokagokqyuysuksm) { goto qoqskyuuwueqkquk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::API_KEY, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto wagqgeqymeqoeuyi; } $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::OWNERSHIP_ID, $mokawwccycoiqeka, ["\52"], [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]); if ($ukamowomoeiweqky) { goto msemumccgceyugmg; } $mokawwccycoiqeka = null; msemumccgceyugmg: wagqgeqymeqoeuyi: qoqskyuuwueqkquk: if (!$mokawwccycoiqeka) { goto iwsuawwqomaowuii; } $keccaugmemegoimu = $mokawwccycoiqeka; goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x65\x73\x74\145\x64\x20\144\x6f\x6d\x61\x69\156\40\x6e\x6f\x74\x20\x66\x6f\x75\x6e\x64\x2e", PR__PKG__DOMAIN_MANAGER), 404); wcugqegqsuuuwqao: asiqwuoswmigcaki: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ousiuuwgwkiyikyq; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto miweggwqeiaeweia; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\167\156\x65\x72\163\x68\x69\x70\40\156\157\164\40\146\157\165\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto kqqiegkuqagcqsya; miweggwqeiaeweia: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\144\x6f\x6d\141\x69\156")); if ($mokawwccycoiqeka) { goto guykyqecgswcsmws; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\141\x69\x6e\40\156\x6f\x74\x20\146\x6f\x75\156\x64", PR__PKG__DOMAIN_MANAGER), 404); goto kkumywowcoycymeo; guykyqecgswcsmws: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::VERIFY_KEY); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto samwkqgwouggsguc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\165\x69\x72\x65\40\160\x61\162\141\155\145\164\x65\162\163\40\x6e\x6f\x74\x20\146\157\165\x6e\x64", PR__PKG__DOMAIN_MANAGER), 400); goto wyuemgggaqogsmsq; samwkqgwouggsguc: $iwywmkygwewiamwm = "\x68\164\164\160\72\57\57{$eeamcawaiqocomwy}\57{$uusmaiomayssaecw}\x2e\150\164\x6d\x6c"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\x65\x73\x70\x6f\x6e\x73\x65"]["\x63\157\144\x65"]) && $sogksuscggsicmac["\x72\145\163\160\157\x6e\x73\145"]["\x63\157\144\x65"] == 200) { goto acsqgiuageaasiyy; } if (is_wp_error($sogksuscggsicmac)) { goto ouamogymawucwswu; } $uamcoiueqaamsqma = __("\x43\x61\x6e\40\x6e\157\164\x20\x66\x69\x6e\144\x20\x66\151\154\145", PR__PKG__DOMAIN_MANAGER); goto mugqyyeayeyggqqk; ouamogymawucwswu: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); mugqyyeayeyggqqk: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\162\151\x66\171\40\x46\141\151\154\x65\x64\72\40\x25\x73", PR__PKG__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto oomguqikqokqwgku; acsqgiuageaasiyy: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\142\x6f\144\x79"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::VERIFY_KEY)) { goto qgeugwymkkiacwoc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\x72\x69\146\171\x20\x46\141\151\154\x65\144\x3a\40\x25\x73", PR__PKG__DOMAIN_MANAGER), __("\x46\x69\154\x65\40\x63\x6f\156\164\145\x6e\x74\40\x6e\x6f\x74\40\x76\141\154\x69\144", PR__PKG__DOMAIN_MANAGER))); goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::CAP_OWNER, $ueomouiqmosykioc::VERIFY_DATE => (new Datetime("\x6e\157\x77"))->format("\131\55\155\55\144\40\110\72\151\72\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ciykoyeioqgyaeqo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\x65\x72\x69\x66\x79\40\106\x61\151\154\x65\x64\x3a\x20\45\163", PR__PKG__DOMAIN_MANAGER), __("\x50\154\145\141\163\x65\x20\x74\x72\171\40\141\x67\141\151\156", PR__PKG__DOMAIN_MANAGER)), 500); goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\x6f\x6d\141\151\x6e\x20\x56\x65\162\151\x66\x69\x65\x64\x20\x73\x75\x63\x63\x65\163\x73\x66\165\154\154\171\x2e", PR__PKG__DOMAIN_MANAGER)); mqicocmqegwukkwg: emmsycooskoqmgeg: oomguqikqokqwgku: wyuemgggaqogsmsq: kkumywowcoycymeo: kqqiegkuqagcqsya: ousiuuwgwkiyikyq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck) == "\x65\x64\x69\164"; $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\151\164\x65\40\x6f\x72\x20\x53\164\157\162\145\40\116\x61\155\145", PR__PKG__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\x49\x6e\164\145\x72\156\x65\x74\x20\104\x6f\155\x61\151\x6e", PR__PKG__DOMAIN_MANAGER), __("\x45\156\x74\x65\162\40\x79\x6f\x75\162\x20\x64\157\x6d\x61\151\x6e\40\167\x69\x74\150\157\x75\164\x20\150\164\164\160\40\x61\x6e\x64\40\167\x77\x77", PR__PKG__DOMAIN_MANAGER))->kyiucygqsgequoys("\x65\170\x61\x6d\x70\154\145\x2e\x63\157\155")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconFontawesomeInterface::ICON_LINK); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto ogsaaqsaogcqiouy; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); ogsaaqsaogcqiouy: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto iwekmyyccgiyuecc; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); iwekmyyccgiyuecc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto aomysykcgikegiau; } $keccaugmemegoimu[] = "\144\157\x6d\x61\x69\x6e\x2d\x65\x64\151\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto ikqqskkqqwmwssoo; } $keccaugmemegoimu[] = "\x64\x6f\x6d\141\151\x6e\x2d\x6f\x77\x6e\x65\x72\x73\x68\x69\160"; $keccaugmemegoimu[] = "\144\157\155\141\151\156\x2d\166\x65\x72\151\146\x69\143\x61\x74\151\157\x6e"; ikqqskkqqwmwssoo: aomysykcgikegiau: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
