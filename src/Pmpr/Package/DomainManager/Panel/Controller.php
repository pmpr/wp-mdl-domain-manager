<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623eb92681b81             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Ownership; use Pmpr\Package\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\144\157\155\141\x69\x6e\55\x6d\x61\x6e\141\x67\145\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\164\x2d\144\x6f\x6d\141\x69\156", ["\x61\162\x67\x73" => [], "\x6d\145\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\143\x61\154\x6c\x62\141\143\153" => [$this, "\x77\167\141\167\x69\x73\x63\153\x69\x71\145\x75\x65\157\165\141"]]); $this->register("\x2f\147\145\164\x2d\x64\157\155\141\x69\x6e\163", ["\141\162\x67\163" => [], "\155\x65\164\150\x6f\144\163" => self::uigoseacoukemwqc, "\143\x61\x6c\154\x62\x61\143\x6b" => [$this, "\x77\151\161\x75\x6d\153\x6d\x71\153\x71\157\171\x63\161\x79\151"]]); $this->register("\57\147\x65\164\55\144\x6f\155\x61\151\x6e\55\x66\151\145\x6c\144\163", ["\141\x72\x67\x73" => [], "\x6d\145\x74\150\157\x64\163" => self::uigoseacoukemwqc, "\143\141\x6c\x6c\x62\141\143\x6b" => [$this, "\x75\x67\155\x63\145\143\143\147\167\141\x61\141\x69\x67\151\171"]]); $this->register("\x2f\x73\141\x76\145\55\144\x6f\155\141\151\156", ["\141\162\147\x73" => [], "\x6d\x65\164\150\157\144\163" => self::qucyckeykeuuaquw, "\x63\x61\154\x6c\x62\141\x63\153" => [$this, "\x6d\x71\x6b\143\141\x75\x65\x6b\171\x6d\145\x6b\x71\141\153\x69"]]); $this->register("\57\165\x70\144\x61\164\x65\55\144\x6f\x6d\141\151\x6e", ["\141\162\x67\x73" => [], "\155\x65\x74\x68\x6f\144\163" => self::qucyckeykeuuaquw, "\x63\x61\x6c\x6c\x62\141\x63\x6b" => [$this, "\x61\155\157\x67\161\171\143\x6f\143\157\165\167\141\x69\x63\157"]]); $this->register("\x2f\x67\x65\164\55\144\x6f\x6d\x61\x69\x6e\55\164\x61\x62\x73", ["\x61\x72\147\163" => [], "\155\145\164\x68\157\144\163" => self::uigoseacoukemwqc, "\x63\141\x6c\154\x62\141\x63\x6b" => [$this, "\x6b\143\163\161\145\161\x6d\143\147\153\167\x6b\143\x79\x6f\165"]]); $this->register("\57\x67\x65\164\55\x6f\x77\156\145\x72\x73\x68\x69\160\x73", ["\141\162\147\163" => [], "\155\x65\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\x61\154\154\142\x61\x63\153" => [$this, "\155\x63\x6f\153\167\155\x65\x75\x75\143\161\147\157\165\157\x73"]]); $this->register("\57\147\145\x74\x2d\x6f\167\156\145\162\163\x68\x69\x70", ["\x61\x72\x67\x73" => [], "\x6d\x65\164\150\157\144\x73" => self::uigoseacoukemwqc, "\143\141\154\154\142\141\x63\153" => [$this, "\151\143\x69\x6d\157\x63\171\x6d\x77\143\x6f\x71\x65\x65\155\x6f"]]); $this->register("\57\166\145\x72\x69\146\x79\55\144\157\x6d\x61\151\x6e", ["\x61\162\147\163" => [], "\x6d\145\164\150\x6f\x64\x73" => self::qucyckeykeuuaquw, "\143\x61\154\154\142\x61\143\x6b" => [$this, "\x65\171\155\x65\163\x73\x77\157\x73\153\165\163\x6b\155\x79\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto myoicgcuugciueis; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); qwigomakwmyiwkgo: myoicgcuugciueis: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto csscmcacoikwsecs; } $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto asmecuqiyyswueqe; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\x6f\155\x61\151\x6e\40\x73\x75\143\143\x65\163\x73\146\x75\x6c\154\x79\40\x75\160\x64\x61\164\x65\x64\56", PR__PKG__DOMAIN_MANAGER), $keccaugmemegoimu); asmecuqiyyswueqe: csscmcacoikwsecs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto eqkauqciwewmgeoi; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\144\x6f\x6d\x61\151\x6e"); $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); if ($ukamowomoeiweqky) { goto mkwskuycuyguqqok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\40\x61\143\143\x65\x73\x73\x20\x74\157\40\164\150\x69\163\40\163\145\x67\155\x65\156\164", PR__PKG__DOMAIN_MANAGER), 401); goto sciwggaeogcoesiu; mkwskuycuyguqqok: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto cuykwgmswkskqkyi; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto kuicqywysciceggs; cuykwgmswkskqkyi: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); kuicqywysciceggs: sciwggaeogcoesiu: eqkauqciwewmgeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kiqogmwcgcamwiig; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\x6f\x6d\141\x69\x6e"), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto kwagwqyusyiyoaqs; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto yowsmsiyimmimemc; kwagwqyusyiyoaqs: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\x77\156\x65\x72\163\x68\151\160\x20\x6e\x6f\164\40\x66\x6f\165\x6e\x64", PR__PKG__DOMAIN_MANAGER), 404); yowsmsiyimmimemc: kiqogmwcgcamwiig: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $mokawwccycoiqeka = null; $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ocokwuuquaokmasc; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if (!$aokagokqyuysuksm) { goto eequksumcoogyoem; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto sqiciiuwmykocycc; } $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka, ["\52"], [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]); if ($ukamowomoeiweqky) { goto iomcaiwewsawiamu; } $mokawwccycoiqeka = null; iomcaiwewsawiamu: sqiciiuwmykocycc: eequksumcoogyoem: if (!$mokawwccycoiqeka) { goto uukumskkeggaowck; } $keccaugmemegoimu = $mokawwccycoiqeka; goto cggowoquuiwqkyew; uukumskkeggaowck: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\145\x73\164\145\x64\40\144\x6f\x6d\141\151\156\x20\x6e\157\x74\x20\x66\157\x75\x6e\x64\x2e", PR__PKG__DOMAIN_MANAGER), 404); cggowoquuiwqkyew: ocokwuuquaokmasc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ygkcacsyyckescqs; } $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto ickcmqoiosquugwe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\x6e\x65\162\x73\x68\x69\160\x20\156\157\x74\x20\146\157\x75\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto qmeoaqmsuseueqiy; ickcmqoiosquugwe: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\155\141\x69\156")); if ($mokawwccycoiqeka) { goto goeoymmqqqeeoime; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x44\x6f\x6d\x61\x69\156\x20\x6e\157\164\40\146\x6f\165\156\x64", PR__PKG__DOMAIN_MANAGER), 404); goto eiawsoasmscmqswa; goeoymmqqqeeoime: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto qgegkeomwscwwiuw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\165\151\x72\x65\40\160\x61\162\x61\x6d\x65\x74\x65\162\x73\40\156\157\164\40\x66\x6f\x75\156\x64", PR__PKG__DOMAIN_MANAGER), 400); goto qmiwsequckckoaei; qgegkeomwscwwiuw: $iwywmkygwewiamwm = "\150\164\164\160\x3a\57\57{$eeamcawaiqocomwy}\57{$uusmaiomayssaecw}\56\x68\x74\x6d\x6c"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\x65\163\160\x6f\x6e\x73\x65"]["\x63\x6f\x64\x65"]) && $sogksuscggsicmac["\x72\x65\x73\160\x6f\x6e\163\x65"]["\143\157\144\x65"] == 200) { goto egasokooagakisiy; } if (is_wp_error($sogksuscggsicmac)) { goto usqgaogkqgemuima; } $uamcoiueqaamsqma = __("\103\x61\156\40\156\x6f\164\x20\146\x69\156\144\x20\x66\x69\154\145", PR__PKG__DOMAIN_MANAGER); goto mswsoaimesegiiic; usqgaogkqgemuima: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); mswsoaimesegiiic: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\162\x69\146\171\40\106\141\x69\x6c\145\x64\x3a\40\45\x73", PR__PKG__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto kecwuwwcwokuksyq; egasokooagakisiy: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\x62\157\144\x79"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto meawswgwagoqgkye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\x72\x69\x66\x79\40\x46\141\x69\x6c\x65\144\72\40\45\163", PR__PKG__DOMAIN_MANAGER), __("\106\x69\154\145\40\143\157\x6e\164\145\156\164\40\x6e\157\x74\40\x76\141\x6c\151\x64", PR__PKG__DOMAIN_MANAGER))); goto wcesymwqykqoyuqk; meawswgwagoqgkye: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\156\x6f\x77"))->format("\x59\x2d\x6d\x2d\144\40\x48\72\151\x3a\163"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto yiwiqaqmwiogawym; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\x72\151\x66\x79\x20\x46\x61\151\x6c\x65\x64\x3a\x20\45\x73", PR__PKG__DOMAIN_MANAGER), __("\120\154\x65\x61\x73\x65\x20\164\162\x79\40\141\x67\141\151\156", PR__PKG__DOMAIN_MANAGER)), 500); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\157\x6d\141\x69\156\40\126\x65\162\x69\146\x69\x65\144\x20\163\165\x63\143\145\x73\x73\146\x75\x6c\154\171\56", PR__PKG__DOMAIN_MANAGER)); goacqqsgaaigyuaw: wcesymwqykqoyuqk: kecwuwwcwokuksyq: qmiwsequckckoaei: eiawsoasmscmqswa: qmeoaqmsuseueqiy: ygkcacsyyckescqs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck) == "\145\144\151\x74"; $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\x53\151\x74\145\40\157\x72\x20\x53\164\157\162\x65\40\116\141\x6d\x65", PR__PKG__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\x49\156\x74\145\162\156\145\164\x20\104\157\155\x61\x69\x6e", PR__PKG__DOMAIN_MANAGER), __("\105\156\164\x65\x72\40\x79\x6f\x75\x72\40\144\x6f\x6d\141\x69\156\40\x77\x69\164\150\157\x75\x74\40\150\x74\164\160\x20\141\x6e\144\40\x77\x77\167", PR__PKG__DOMAIN_MANAGER))->kyiucygqsgequoys("\145\x78\141\x6d\160\x6c\145\56\143\x6f\155")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto cuoqqgaygogsmmic; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); cuoqqgaygogsmmic: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cgewcsueoyaeikgm; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); cgewcsueoyaeikgm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto igymseewwyiocoug; } $keccaugmemegoimu[] = "\x64\157\155\x61\x69\x6e\55\x65\144\x69\164"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto sukskmcwsoysiuqu; } $keccaugmemegoimu[] = "\x64\157\x6d\x61\151\x6e\55\157\167\x6e\145\162\163\x68\151\x70"; $keccaugmemegoimu[] = "\144\x6f\x6d\x61\151\x6e\x2d\x76\145\x72\x69\x66\151\143\x61\x74\x69\157\156"; sukskmcwsoysiuqu: igymseewwyiocoug: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
