<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3a86c5a83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\x64\157\155\141\x69\156\x2d\155\x61\x6e\x61\x67\145\162"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\x2d\x64\x6f\155\141\151\x6e", [self::wwgusigoaksqmwsm => [$this, "\167\x77\141\x77\151\163\143\153\x69\161\x65\165\x65\x6f\165\x61"]]); $this->register("\x2f\x67\145\x74\55\x64\157\155\x61\x69\156\x73", [self::wwgusigoaksqmwsm => [$this, "\x77\x69\x71\x75\155\153\155\x71\153\x71\x6f\171\143\x71\171\x69"]]); $this->register("\57\147\145\164\x2d\144\x6f\155\141\x69\x6e\55\146\151\x65\154\144\163", [self::wwgusigoaksqmwsm => [$this, "\165\147\x6d\x63\x65\143\143\x67\167\141\x61\141\x69\147\x69\171"]]); $this->register("\x2f\163\x61\x76\x65\x2d\144\x6f\155\141\151\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\155\x71\x6b\143\x61\165\145\153\x79\155\145\x6b\x71\x61\153\x69"]]); $this->register("\x2f\165\x70\x64\x61\x74\x65\x2d\144\157\x6d\141\151\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\141\155\x6f\147\x71\171\x63\157\x63\x6f\x75\167\141\151\x63\157"]]); $this->register("\x2f\147\x65\x74\55\144\x6f\155\x61\x69\x6e\x2d\x74\141\142\x73", [self::wwgusigoaksqmwsm => [$this, "\x6b\143\x73\161\145\161\155\x63\x67\153\167\153\143\171\157\165"]]); $this->register("\x2f\x67\x65\x74\x2d\x6f\167\x6e\x65\162\163\150\x69\160\163", [self::wwgusigoaksqmwsm => [$this, "\155\x63\x6f\x6b\x77\x6d\x65\165\165\x63\161\x67\x6f\x75\x6f\x73"]]); $this->register("\x2f\147\x65\x74\55\x6f\167\x6e\145\x72\163\150\x69\160", [self::wwgusigoaksqmwsm => [$this, "\151\x63\151\155\157\143\171\155\167\143\157\161\145\x65\x6d\157"]]); $this->register("\x2f\166\x65\162\151\x66\171\55\x64\157\x6d\x61\151\156", [self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\145\171\155\145\x73\163\167\x6f\163\153\165\x73\153\x6d\171\167"]]); } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto omugkkesagcyagmk; } if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto ayyweymyuuiauamo; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto mosqsmqimqgqoase; ayyweymyuuiauamo: $keccaugmemegoimu = $swgwkyqkakceqeia->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto yqykqysmiquwoasu; } $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu[self::eoskkkieowogacws], [$ceiwsaacewygcsqg => $keccaugmemegoimu[$ceiwsaacewygcsqg]]); yqykqysmiquwoasu: mosqsmqimqgqoase: omugkkesagcyagmk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto qqewoyookaskiuek; } if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto kqksuugcgsyeoayy; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto iggyqogweyosuikc; kqksuugcgsyeoayy: $keccaugmemegoimu = $swgwkyqkakceqeia->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); if (is_wp_error($keccaugmemegoimu)) { goto ygcsmkuycoagwyou; } $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\104\x6f\155\141\x69\x6e\x20\x73\165\143\x63\x65\x73\163\146\x75\154\154\171\40\165\x70\x64\x61\164\145\144\x2e", PR__MDL__DOMAIN_MANAGER), $keccaugmemegoimu); ygcsmkuycoagwyou: iggyqogweyosuikc: qqewoyookaskiuek: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto soqqemyioggmoakg; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto ywqgcegomwaiuquc; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko); if ($ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu)) { goto miyqyeiwquwsacsm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\40\x61\143\x63\145\163\x73\40\x74\157\x20\x74\x68\151\163\x20\x73\x65\147\155\145\156\164", PR__MDL__DOMAIN_MANAGER), 401); goto eegqyykygiccaoeo; miyqyeiwquwsacsm: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::myiiuekcoeksaasm) { goto ssoucoucsgccekwe; } $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy([$ueomouiqmosykioc->scqakcemaqsqkema($ukamowomoeiweqky)]); goto qkcyqocqqwmqgqww; ssoucoucsgccekwe: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); qkcyqocqqwmqgqww: eegqyykygiccaoeo: wmmggowmigekyoso: soqqemyioggmoakg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto foeeqckqsyockkak; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto eeqesooyqagwawae; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::weayyoewessosyko), $keccaugmemegoimu); if (!$keccaugmemegoimu) { goto acaqummmoyiemqss; } $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc->kumuygiiqswoyasy(), $ueomouiqmosykioc::meksegaoamowuwoq, $ueomouiqmosykioc::awqaawasiusmysgc, $ueomouiqmosykioc::ucmueuwwcmocgmig, $ueomouiqmosykioc::komqcwuqaguwweiw]); goto suswcqoyyqkkquuo; acaqummmoyiemqss: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\167\156\x65\162\163\x68\151\x70\x20\156\157\x74\x20\x66\x6f\165\156\144", PR__MDL__DOMAIN_MANAGER), 404); suswcqoyyqkkquuo: oqugqwcyomiaaoqu: foeeqckqsyockkak: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto gaomwagkcciesyqy; } $aokagokqyuysuksm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); if ($aokagokqyuysuksm) { goto uqqaiagaeqgqgaiy; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\111\104", PR__MDL__PANEL)); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if ($swgwkyqkakceqeia && $ueomouiqmosykioc) { goto qicwaskssogcokgm; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto uguigkcmukuouway; qicwaskssogcokgm: $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::gouqcwikiiygyasc, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::ciyoccqkiamemcmm, $swgwkyqkakceqeia::igswcauwsgmeougs, $swgwkyqkakceqeia::CREATED_AT]); if (!$mokawwccycoiqeka) { goto kymkucucyeoeikim; } if (!$ueomouiqmosykioc->qumqowkwyaceeqwu([$ueomouiqmosykioc::meksegaoamowuwoq => $ycoeoaakqyskgykq, $ueomouiqmosykioc::qkmqmaeuyokqgemg => $aokagokqyuysuksm])) { goto iekumemscwieugqw; } $keccaugmemegoimu = $mokawwccycoiqeka; goto hoeeyiowekaeemko; iekumemscwieugqw: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\124\x68\x69\x73\40\x64\x6f\155\x61\151\x6e\x20\x6e\x6f\x74\x20\x62\145\x6c\157\156\x67\x73\40\164\157\40\171\x6f\x75\56", PR__MDL__DOMAIN_MANAGER), 400); hoeeyiowekaeemko: goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\165\x65\163\x74\145\x64\x20\144\x6f\155\141\151\156\40\156\157\x74\40\146\x6f\x75\156\144\56", PR__MDL__DOMAIN_MANAGER), 404); usquiuuyiyqaeyiu: uguigkcmukuouway: esuiysskoweawsue: gaomwagkcciesyqy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto igooksugieceoege; } if ($ueomouiqmosykioc = Ownership::symcgieuakksimmu()) { goto scisgsyemmsekgos; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto cewmoqyysgsmuiya; scisgsyemmsekgos: $iecimaigkkceeska = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); if ($ukamowomoeiweqky) { goto ooeausyowguqicuo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4f\x77\156\x65\162\163\x68\151\x70\40\156\x6f\164\40\146\x6f\x75\156\x64", PR__MDL__DOMAIN_MANAGER), 404); goto egyyiccaeeiooaua; ooeausyowguqicuo: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x64\157\155\141\x69\x6e")); if ($mokawwccycoiqeka) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\157\155\141\151\x6e\x20\x6e\157\164\x20\146\157\165\x6e\x64", PR__MDL__DOMAIN_MANAGER), 404); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc); if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto ewymsmkkiksgwysk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\165\x69\162\145\x20\160\141\x72\141\155\x65\x74\x65\x72\x73\40\x6e\157\x74\40\x66\x6f\x75\156\144", PR__MDL__DOMAIN_MANAGER), 400); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $iwywmkygwewiamwm = "\150\164\x74\160\163\72\57\57{$eeamcawaiqocomwy}\57{$uusmaiomayssaecw}\56\150\x74\155\154"; $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\x72\x65\163\x70\x6f\156\163\145"]["\143\157\x64\x65"]) && $sogksuscggsicmac["\162\145\x73\x70\157\x6e\163\x65"]["\143\157\144\145"] == 200) { goto syiqkaasoueowwui; } if (is_wp_error($sogksuscggsicmac)) { goto skkamseieeusycye; } $uamcoiueqaamsqma = __("\103\141\156\x20\x6e\157\x74\40\146\x69\x6e\x64\40\146\151\154\x65", PR__MDL__DOMAIN_MANAGER); goto cgiscsqwwgqqaeqi; skkamseieeusycye: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); cgiscsqwwgqqaeqi: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x56\145\162\151\146\x79\40\x46\141\x69\x6c\x65\144\x3a\40\x25\x73", PR__MDL__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto giaacoqqqsekcayy; syiqkaasoueowwui: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\x62\x6f\144\x79"] ?? ''); if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::awqaawasiusmysgc)) { goto soaccwqimeksgwiw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\162\151\x66\171\40\x46\141\151\154\145\x64\x3a\x20\45\x73", PR__MDL__DOMAIN_MANAGER), __("\x46\x69\154\145\40\x63\x6f\156\164\145\x6e\164\40\x6e\x6f\x74\x20\x76\x61\154\x69\144", PR__MDL__DOMAIN_MANAGER))); goto wiysogeqqwgioyka; soaccwqimeksgwiw: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm, $ueomouiqmosykioc::komqcwuqaguwweiw => (new Datetime("\x6e\157\x77"))->format("\131\x2d\x6d\55\144\40\110\x3a\x69\72\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto aegysmeecgcgayyw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\x72\x69\146\x79\40\x46\x61\151\154\x65\144\x3a\x20\45\163", PR__MDL__DOMAIN_MANAGER), __("\x50\x6c\x65\x61\163\x65\x20\x74\162\x79\x20\x61\147\x61\151\156", PR__MDL__DOMAIN_MANAGER)), 500); goto suqkuqygkkgwyaie; aegysmeecgcgayyw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x44\x6f\155\x61\151\156\x20\126\145\x72\x69\146\x69\145\x64\x20\x73\x75\x63\x63\x65\x73\x73\146\x75\154\154\171\56", PR__MDL__DOMAIN_MANAGER)); suqkuqygkkgwyaie: wiysogeqqwgioyka: giaacoqqqsekcayy: cmegwsegsosyqcai: gkyawqqcmigqgaiq: egyyiccaeeiooaua: cewmoqyysgsmuiya: igooksugieceoege: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { $kiicsyeqweiekmgc = self::awysmmukegasimmq === $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::osiogououyayqyck); $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\123\151\x74\145\40\x6f\x72\40\x53\x74\157\x72\x65\40\x4e\141\x6d\x65", PR__MDL__DOMAIN_MANAGER))->eumecwmqmukqgyea(); $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\111\156\164\145\162\156\145\164\40\104\x6f\155\141\151\156", PR__MDL__DOMAIN_MANAGER), __("\105\156\x74\x65\x72\40\x79\x6f\x75\162\x20\144\x6f\155\x61\x69\156\x20\x77\151\x74\x68\157\165\164\x20\x68\x74\164\x70\40\x61\156\144\x20\x77\x77\x77", PR__MDL__DOMAIN_MANAGER))->kyiucygqsgequoys("\145\x78\x61\x6d\x70\154\145\56\x63\x6f\x6d")->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->saemoowcasogykak(IconInterface::emuwacasoaaageiq); $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $mokawwccycoiqeka = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto omqiayeucoioqoao; } $eeamcawaiqocomwy->oykaosmaegqwmoga(); omqiayeucoioqoao: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ugqaaewwmkocwwgy; } $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk); $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq); $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, false, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); ugqaaewwmkocwwgy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); $keccaugmemegoimu = []; if (is_wp_error($mkucggyaiaukqoce)) { goto kqgcyoscsusgoaqi; } $keccaugmemegoimu[] = "\x64\x6f\155\x61\x69\x6e\x2d\145\x64\151\x74"; $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::gouqcwikiiygyasc); if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto wgewmqieuamsoayy; } $keccaugmemegoimu[] = "\x64\157\x6d\141\151\x6e\55\x6f\167\x6e\145\x72\x73\x68\151\x70"; $keccaugmemegoimu[] = "\144\x6f\x6d\141\151\x6e\x2d\166\x65\162\x69\x66\x69\x63\x61\x74\151\157\x6e"; wgewmqieuamsoayy: kqgcyoscsusgoaqi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
