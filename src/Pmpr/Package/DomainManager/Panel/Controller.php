<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b655fb23b9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Panel; use DateTime; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\Domain; use Pmpr\Package\DomainManager\Model\Ownership; use Pmpr\Package\Panel\REST\AbstractREST; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends AbstractREST { public function __construct() { $this->rest_base = "\144\x6f\155\141\x69\156\x2d\x6d\x61\x6e\x61\x67\x65\162"; parent::__construct(); } public function register_routes() { goto qwigomakwmyiwkgo; eqkauqciwewmgeoi: $this->register("\x2f\x76\x65\x72\151\146\171\x2d\144\157\x6d\141\x69\x6e", ["\141\162\x67\x73" => [], "\x6d\x65\x74\150\x6f\x64\x73" => self::CREATABLE, "\143\x61\154\154\x62\x61\x63\x6b" => [$this, "\x65\171\155\145\163\x73\x77\x6f\x73\153\x75\163\153\x6d\171\x77"]]); goto kwagwqyusyiyoaqs; cuykwgmswkskqkyi: $this->register("\57\x75\160\x64\141\x74\x65\x2d\x64\x6f\x6d\141\x69\x6e", ["\x61\x72\x67\163" => [], "\155\x65\x74\x68\x6f\144\163" => self::CREATABLE, "\x63\141\x6c\154\142\x61\x63\153" => [$this, "\141\x6d\157\147\161\x79\x63\157\143\157\x75\x77\141\151\x63\157"]]); goto kuicqywysciceggs; kwagwqyusyiyoaqs: $this->register("\57\x63\x68\145\x63\x6b\x2d\141\x70\x69\x6b\145\x79", ["\141\x72\147\x73" => [], "\155\x65\x74\x68\157\x64\163" => self::READABLE, "\x63\x61\x6c\x6c\142\141\x63\153" => [$this, "\153\x65\161\x77\x79\141\x6b\x61\167\143\141\x61\x6f\147\151\x65"], "\x70\145\162\155\151\x73\163\151\157\x6e\137\x63\x61\154\154\x62\x61\143\x6b" => "\x5f\137\162\145\x74\165\x72\x6e\x5f\x74\162\x75\x65"]); goto yowsmsiyimmimemc; qwigomakwmyiwkgo: $this->register("\57\x67\x65\x74\x2d\x64\x6f\155\141\151\x6e", ["\x61\162\x67\x73" => [], "\x6d\x65\x74\x68\157\144\x73" => self::READABLE, "\143\x61\154\x6c\142\x61\143\153" => [$this, "\x77\x77\141\x77\151\163\143\153\151\x71\145\165\x65\157\165\141"]]); goto myoicgcuugciueis; kuicqywysciceggs: $this->register("\x2f\147\x65\164\x2d\x64\x6f\155\x61\x69\x6e\55\164\x61\142\163", ["\141\162\x67\163" => [], "\x6d\145\164\x68\157\x64\163" => self::READABLE, "\143\x61\154\154\x62\x61\143\153" => [$this, "\153\143\163\161\x65\161\155\x63\x67\x6b\x77\x6b\143\x79\157\165"]]); goto mkwskuycuyguqqok; csscmcacoikwsecs: $this->register("\x2f\163\x61\x76\x65\x2d\144\x6f\x6d\141\x69\x6e", ["\x61\x72\147\163" => [], "\x6d\x65\x74\150\x6f\x64\163" => self::CREATABLE, "\x63\x61\154\x6c\x62\141\143\x6b" => [$this, "\155\x71\x6b\x63\x61\165\145\x6b\x79\x6d\x65\x6b\x71\x61\153\151"]]); goto cuykwgmswkskqkyi; myoicgcuugciueis: $this->register("\57\147\145\164\x2d\144\157\x6d\x61\151\x6e\163", ["\x61\x72\x67\163" => [], "\x6d\x65\x74\x68\x6f\144\x73" => self::READABLE, "\143\141\154\x6c\x62\141\143\153" => [$this, "\x77\x69\x71\x75\155\153\155\x71\x6b\161\157\171\143\161\x79\x69"]]); goto asmecuqiyyswueqe; mkwskuycuyguqqok: $this->register("\x2f\x67\x65\164\x2d\x6f\x77\156\145\x72\x73\x68\151\160\163", ["\141\x72\x67\x73" => [], "\155\x65\x74\x68\x6f\x64\163" => self::READABLE, "\x63\141\154\154\x62\141\x63\x6b" => [$this, "\x6d\x63\x6f\x6b\x77\155\145\x75\x75\143\x71\x67\157\165\157\x73"]]); goto sciwggaeogcoesiu; asmecuqiyyswueqe: $this->register("\57\x67\145\164\55\144\x6f\x6d\141\x69\x6e\x2d\146\x69\x65\154\144\163", ["\x61\162\x67\163" => [], "\155\145\x74\x68\157\144\163" => self::READABLE, "\143\x61\154\x6c\142\141\x63\x6b" => [$this, "\165\x67\x6d\143\x65\x63\x63\147\x77\141\141\141\151\x67\x69\171"]]); goto csscmcacoikwsecs; sciwggaeogcoesiu: $this->register("\57\x67\145\x74\x2d\157\x77\x6e\x65\x72\x73\150\x69\x70", ["\141\162\x67\163" => [], "\155\145\x74\150\x6f\x64\x73" => self::READABLE, "\x63\141\x6c\x6c\x62\141\x63\153" => [$this, "\151\x63\151\155\157\x63\171\155\x77\143\157\x71\145\145\x6d\157"]]); goto eqkauqciwewmgeoi; yowsmsiyimmimemc: } public function keqwyakawcaaogie(WP_REST_Request $aqmwamyiwgeeymqa) { goto iomcaiwewsawiamu; uukumskkeggaowck: if (!(!is_wp_error($keccaugmemegoimu) && is_string($keccaugmemegoimu))) { goto kiqogmwcgcamwiig; } goto cggowoquuiwqkyew; ocokwuuquaokmasc: kiqogmwcgcamwiig: goto yiwiqaqmwiogawym; eequksumcoogyoem: $keccaugmemegoimu = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); goto uukumskkeggaowck; cggowoquuiwqkyew: $keccaugmemegoimu = $this->qasywwyamoesisyi($keccaugmemegoimu); goto ocokwuuquaokmasc; iomcaiwewsawiamu: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\x70\151\137\153\145\x79"); goto sqiciiuwmykocycc; yiwiqaqmwiogawym: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto goacqqsgaaigyuaw; sqiciiuwmykocycc: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); goto eequksumcoogyoem; goacqqsgaaigyuaw: } public function mcokwmeuucqgouos(WP_REST_Request $aqmwamyiwgeeymqa) { goto kecwuwwcwokuksyq; goeoymmqqqeeoime: $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param("\144\x6f\x6d\141\151\156"); goto eiawsoasmscmqswa; qmeoaqmsuseueqiy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\157\x20\x61\x63\143\x65\x73\x73\40\x74\x6f\40\x74\x68\151\163\40\x73\x65\x67\155\145\x6e\x74", PR__PKG__DOMAIN_MANAGER), 401); goto ygkcacsyyckescqs; igymseewwyiocoug: goto wcesymwqykqoyuqk; goto mqccmesakuemceqi; ieumumsgyguceusy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto coywmiyqgsweuiic; qgegkeomwscwwiuw: if (is_wp_error($keccaugmemegoimu)) { goto egasokooagakisiy; } goto qmiwsequckckoaei; cuoqqgaygogsmmic: usqgaogkqgemuima: goto cgewcsueoyaeikgm; sukskmcwsoysiuqu: $keccaugmemegoimu = $ueomouiqmosykioc->oosqweumiyeayasy($ueomouiqmosykioc->cwgkcyyaymmsomqa([$ukamowomoeiweqky])); goto igymseewwyiocoug; cgewcsueoyaeikgm: if ($ueomouiqmosykioc->sqwcgyyocucsouyy($ukamowomoeiweqky) === $ueomouiqmosykioc::CAP_OWNER) { goto meawswgwagoqgkye; } goto sukskmcwsoysiuqu; yssscwioiyygssec: egasokooagakisiy: goto ieumumsgyguceusy; kooskuwkuayiuose: $keccaugmemegoimu = $ueomouiqmosykioc->bikiqakeqgekegsk($mokawwccycoiqeka, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); goto qwcegcuowwgiccos; qwcegcuowwgiccos: wcesymwqykqoyuqk: goto qcessicwuikwqsis; qmiwsequckckoaei: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto goeoymmqqqeeoime; eyiamcekkgkiawqy: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE); goto twkmiuomimomscew; qcessicwuikwqsis: mswsoaimesegiiic: goto yssscwioiyygssec; mqccmesakuemceqi: meawswgwagoqgkye: goto eyiamcekkgkiawqy; kecwuwwcwokuksyq: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto qgegkeomwscwwiuw; eiawsoasmscmqswa: $ukamowomoeiweqky = $ueomouiqmosykioc->ksesieiwkmougeue($mokawwccycoiqeka, $keccaugmemegoimu); goto ickcmqoiosquugwe; ygkcacsyyckescqs: goto mswsoaimesegiiic; goto cuoqqgaygogsmmic; ickcmqoiosquugwe: if ($ukamowomoeiweqky) { goto usqgaogkqgemuima; } goto qmeoaqmsuseueqiy; twkmiuomimomscew: $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE); goto kooskuwkuayiuose; coywmiyqgsweuiic: } public function icimocymwcoqeemo(WP_REST_Request $aqmwamyiwgeeymqa) { goto sycygoiaiqqageym; kciouyuaqkyqomam: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto wwkgkaecgiwggcck; sycygoiaiqqageym: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto gygawoqywkukmqee; gimmuoqwckiseaik: ycakugokkqkuqyiu: goto cmqucgoewuyieoyk; quwcqmyokicssyew: siqagquguiemuoku: goto iqcogmsguwoikame; cmqucgoewuyieoyk: oouoqimaaqcmccay: goto yqykqysmiquwoasu; gygawoqywkukmqee: if (is_wp_error($keccaugmemegoimu)) { goto oouoqimaaqcmccay; } goto kciouyuaqkyqomam; iqcogmsguwoikame: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\167\x6e\x65\162\163\150\151\x70\x20\x6e\157\164\40\x66\x6f\165\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto gimmuoqwckiseaik; wwkgkaecgiwggcck: $keccaugmemegoimu = $ueomouiqmosykioc->ksesieiwkmougeue($aqmwamyiwgeeymqa->get_param("\x64\157\x6d\x61\x69\156"), $keccaugmemegoimu); goto umgaesggesswoaqe; kiwqkcaekqqyuegq: goto ycakugokkqkuqyiu; goto quwcqmyokicssyew; qsygcycwieukkgwc: $keccaugmemegoimu = $ueomouiqmosykioc->scqakcemaqsqkema($keccaugmemegoimu, [$ueomouiqmosykioc::USER, $ueomouiqmosykioc::VERIFY_DATE]); goto kiwqkcaekqqyuegq; yqykqysmiquwoasu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ayyweymyuuiauamo; umgaesggesswoaqe: if (!$keccaugmemegoimu) { goto siqagquguiemuoku; } goto qsygcycwieukkgwc; ayyweymyuuiauamo: } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa) { goto ssoucoucsgccekwe; ywqgcegomwaiuquc: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($keccaugmemegoimu); goto wmmggowmigekyoso; suqkuqygkkgwyaie: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto soaccwqimeksgwiw; hoeeyiowekaeemko: omugkkesagcyagmk: goto kymkucucyeoeikim; qicwaskssogcokgm: $keccaugmemegoimu = $mokawwccycoiqeka; goto uguigkcmukuouway; eeqesooyqagwawae: $ukamowomoeiweqky = $swgwkyqkakceqeia->iscemaoqqckmkago(Domain::OWNERSHIP_ID, $mokawwccycoiqeka, ["\52"], [self::USER => $ycoeoaakqyskgykq]); goto oqugqwcyomiaaoqu; wmmggowmigekyoso: if (!$aokagokqyuysuksm) { goto ygcsmkuycoagwyou; } goto soqqemyioggmoakg; qkcyqocqqwmqgqww: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto miyqyeiwquwsacsm; uguigkcmukuouway: goto iggyqogweyosuikc; goto uqqaiagaeqgqgaiy; iekumemscwieugqw: mosqsmqimqgqoase: goto hoeeyiowekaeemko; suswcqoyyqkkquuo: if (!$mokawwccycoiqeka) { goto omugkkesagcyagmk; } goto eeqesooyqagwawae; ssoucoucsgccekwe: $mokawwccycoiqeka = null; goto qkcyqocqqwmqgqww; usquiuuyiyqaeyiu: if (!$mokawwccycoiqeka) { goto kqksuugcgsyeoayy; } goto qicwaskssogcokgm; gaomwagkcciesyqy: iggyqogweyosuikc: goto aegysmeecgcgayyw; foeeqckqsyockkak: $mokawwccycoiqeka = null; goto iekumemscwieugqw; oqugqwcyomiaaoqu: if ($ukamowomoeiweqky) { goto mosqsmqimqgqoase; } goto foeeqckqsyockkak; eegqyykygiccaoeo: $aokagokqyuysuksm = $aqmwamyiwgeeymqa->get_param(self::ID); goto ywqgcegomwaiuquc; miyqyeiwquwsacsm: if (is_wp_error($keccaugmemegoimu)) { goto qqewoyookaskiuek; } goto eegqyykygiccaoeo; kymkucucyeoeikim: ygcsmkuycoagwyou: goto usquiuuyiyqaeyiu; acaqummmoyiemqss: $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($aokagokqyuysuksm, $swgwkyqkakceqeia->kumuygiiqswoyasy(), [$swgwkyqkakceqeia::ID, $swgwkyqkakceqeia::NAME, $swgwkyqkakceqeia::VALUE, $swgwkyqkakceqeia::API_KEY, $swgwkyqkakceqeia::CREATED_AT]); goto suswcqoyyqkkquuo; soqqemyioggmoakg: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); goto acaqummmoyiemqss; uqqaiagaeqgqgaiy: kqksuugcgsyeoayy: goto esuiysskoweawsue; esuiysskoweawsue: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\x65\x73\164\x65\144\x20\144\x6f\155\141\x69\156\40\156\157\x74\40\x66\x6f\x75\x6e\x64\56", PR__PKG__DOMAIN_MANAGER), 404); goto gaomwagkcciesyqy; aegysmeecgcgayyw: qqewoyookaskiuek: goto suqkuqygkkgwyaie; soaccwqimeksgwiw: } public function mqkcauekymekqaki(WP_REST_Request $aqmwamyiwgeeymqa) { goto skkamseieeusycye; giaacoqqqsekcayy: wiysogeqqwgioyka: goto ewymsmkkiksgwysk; ewymsmkkiksgwysk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto cmegwsegsosyqcai; cgiscsqwwgqqaeqi: if (is_wp_error($keccaugmemegoimu)) { goto wiysogeqqwgioyka; } goto syiqkaasoueowwui; syiqkaasoueowwui: $keccaugmemegoimu = Domain::symcgieuakksimmu()->kmuykuaakicwsocs($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); goto giaacoqqqsekcayy; skkamseieeusycye: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto cgiscsqwwgqqaeqi; cmegwsegsosyqcai: } public function eymesswoskuskmyw(WP_REST_Request $aqmwamyiwgeeymqa) { goto qmuwoecuacmkwgem; mkwkkmkgiqiamacc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto uaqackioaiqwcocy; kqqiegkuqagcqsya: $uamcoiueqaamsqma = __("\x43\141\156\x20\x6e\x6f\x74\x20\x66\x69\x6e\x64\x20\146\151\154\145", PR__PKG__DOMAIN_MANAGER); goto ousiuuwgwkiyikyq; ousiuuwgwkiyikyq: goto cewmoqyysgsmuiya; goto ogsaaqsaogcqiouy; iwsuawwqomaowuii: sggawugoykqcmsug: goto wcugqegqsuuuwqao; samwkqgwouggsguc: ugqaaewwmkocwwgy: goto wyuemgggaqogsmsq; sockeswygwcskeuq: wakmayaoqoskekqy: goto mkwkkmkgiqiamacc; wyuemgggaqogsmsq: $iwywmkygwewiamwm = "\x68\164\x74\x70\x3a\57\57{$eeamcawaiqocomwy}\x2f{$uusmaiomayssaecw}\56\150\x74\x6d\154"; goto guykyqecgswcsmws; ogqmesokykywseys: $kuukgsmqkagwaciu = rtrim($sogksuscggsicmac["\x62\x6f\x64\171"] ?? ''); goto ykomgumacooyomsk; ykomgumacooyomsk: if ($kuukgsmqkagwaciu && $kuukgsmqkagwaciu === ManipulateArray::get($ukamowomoeiweqky, Ownership::VERIFY_KEY)) { goto ooeausyowguqicuo; } goto mqkmcysgoiaouiwm; gcckqucukawcasgk: goto gkyawqqcmigqgaiq; goto qmkaeeomgkwggoyo; uiosisocuwokwkie: if ($sogksuscggsicmac[self::SUCCESS]) { goto wmywuusgukmmaams; } goto cuumeogeomowqisc; cuumeogeomowqisc: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\145\x72\x69\x66\x79\40\106\x61\x69\x6c\145\144\72\40\45\x73", PR__PKG__DOMAIN_MANAGER), __("\x50\x6c\145\x61\163\x65\x20\x74\x72\x79\40\x61\x67\141\x69\x6e", PR__PKG__DOMAIN_MANAGER)), 500); goto gcckqucukawcasgk; ikqqskkqqwmwssoo: cewmoqyysgsmuiya: goto aomysykcgikegiau; awoaooyoeoyeeqee: igooksugieceoege: goto ogqmesokykywseys; emmsycooskoqmgeg: $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::VALUE); goto ouamogymawucwswu; qmkaeeomgkwggoyo: wmywuusgukmmaams: goto csammceowmqwaamq; iikiiioqiyegyaak: $sogksuscggsicmac = $ueomouiqmosykioc->gscuuyuyauokoyuo([self::CAPABILITY => Ownership::CAP_OWNER, $ueomouiqmosykioc::VERIFY_DATE => (new Datetime("\156\157\x77"))->format("\131\55\x6d\55\144\x20\x48\x3a\x69\x3a\x73"), $ueomouiqmosykioc->kumuygiiqswoyasy() => $iecimaigkkceeska]); goto uiosisocuwokwkie; eekcoeikaeaaeyii: egyyiccaeeiooaua: goto cogywoqcqummsyus; cogywoqcqummsyus: omqiayeucoioqoao: goto gmwykkouysyaqwqm; eogwckcymuugikuy: $ukamowomoeiweqky = $ueomouiqmosykioc->akkkoiiymmamsauc($iecimaigkkceeska); goto msemumccgceyugmg; kkumywowcoycymeo: if (!is_wp_error($sogksuscggsicmac) && isset($sogksuscggsicmac["\162\145\x73\160\x6f\156\163\x65"]["\143\157\144\x65"]) && $sogksuscggsicmac["\x72\145\163\160\157\x6e\x73\x65"]["\143\x6f\x64\x65"] == 200) { goto igooksugieceoege; } goto miweggwqeiaeweia; csammceowmqwaamq: $keccaugmemegoimu = ["\143\x6f\x64\x65" => 200, "\155\x65\x73\163\141\147\145" => __("\x44\x6f\155\141\151\156\x20\126\x65\x72\151\146\x69\x65\144\40\163\165\x63\143\x65\163\163\146\x75\x6c\x6c\x79\x2e")]; goto ocaguquugeamqckq; acsqgiuageaasiyy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\151\x72\145\x20\x70\141\162\x61\155\x65\x74\145\x72\163\x20\156\157\164\x20\146\x6f\x75\156\144", PR__PKG__DOMAIN_MANAGER), 400); goto oomguqikqokqwgku; aomysykcgikegiau: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\x72\x69\146\171\40\106\141\151\154\145\x64\x3a\x20\x25\x73", PR__PKG__DOMAIN_MANAGER), $uamcoiueqaamsqma), 404); goto cwwmimggaaecmucw; kosaqwikueyksqmw: goto egyyiccaeeiooaua; goto gicyayswqyuoekcq; guykyqecgswcsmws: $sogksuscggsicmac = wp_remote_get($iwywmkygwewiamwm); goto kkumywowcoycymeo; mqkmcysgoiaouiwm: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\126\x65\162\x69\x66\171\x20\x46\141\x69\154\x65\144\x3a\x20\x25\x73", PR__PKG__DOMAIN_MANAGER), __("\106\151\x6c\x65\40\143\157\x6e\164\x65\x6e\x74\x20\156\157\x74\x20\x76\x61\x6c\151\144", PR__PKG__DOMAIN_MANAGER))); goto kosaqwikueyksqmw; wcugqegqsuuuwqao: $mokawwccycoiqeka = Domain::symcgieuakksimmu()->akkkoiiymmamsauc($aqmwamyiwgeeymqa->get_param("\x64\x6f\x6d\141\151\x6e")); goto asiqwuoswmigcaki; owmuceyswmgueasi: if (is_wp_error($keccaugmemegoimu)) { goto wakmayaoqoskekqy; } goto mwsmsguqqkcwiiuk; ciykoyeioqgyaeqo: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\104\x6f\155\x61\151\156\40\156\x6f\x74\x20\x66\157\165\x6e\144", PR__PKG__DOMAIN_MANAGER), 404); goto mqicocmqegwukkwg; iwekmyyccgiyuecc: $uamcoiueqaamsqma = print_r($this->wsmkmgikcacikiwe($sogksuscggsicmac), true); goto ikqqskkqqwmwssoo; gmwykkouysyaqwqm: wgewmqieuamsoayy: goto ugqwuugsweqgmywk; qmuwoecuacmkwgem: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto owmuceyswmgueasi; wagqgeqymeqoeuyi: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\117\x77\156\x65\x72\163\x68\151\x70\40\156\x6f\x74\40\x66\x6f\165\x6e\x64", PR__PKG__DOMAIN_MANAGER), 404); goto qoqskyuuwueqkquk; mqicocmqegwukkwg: goto ueigkucgaucgeimc; goto qgeugwymkkiacwoc; cwwmimggaaecmucw: goto omqiayeucoioqoao; goto awoaooyoeoyeeqee; asiqwuoswmigcaki: if ($mokawwccycoiqeka) { goto kqgcyoscsusgoaqi; } goto ciykoyeioqgyaeqo; qgeugwymkkiacwoc: kqgcyoscsusgoaqi: goto emmsycooskoqmgeg; ouamogymawucwswu: $uusmaiomayssaecw = ManipulateArray::get($ukamowomoeiweqky, Ownership::VERIFY_KEY); goto mugqyyeayeyggqqk; oomguqikqokqwgku: goto wgewmqieuamsoayy; goto samwkqgwouggsguc; gicyayswqyuoekcq: ooeausyowguqicuo: goto iikiiioqiyegyaak; miweggwqeiaeweia: if (is_wp_error($sogksuscggsicmac)) { goto scisgsyemmsekgos; } goto kqqiegkuqagcqsya; ocaguquugeamqckq: gkyawqqcmigqgaiq: goto eekcoeikaeaaeyii; msemumccgceyugmg: if ($ukamowomoeiweqky) { goto sggawugoykqcmsug; } goto wagqgeqymeqoeuyi; mwsmsguqqkcwiiuk: $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); goto eeauyscekuckoues; ugqwuugsweqgmywk: ueigkucgaucgeimc: goto uaukmuiwskcemcsw; ogsaaqsaogcqiouy: scisgsyemmsekgos: goto iwekmyyccgiyuecc; eeauyscekuckoues: $iecimaigkkceeska = $aqmwamyiwgeeymqa->get_param(self::ID); goto eogwckcymuugikuy; uaukmuiwskcemcsw: wkeuuycukmuqiaom: goto sockeswygwcskeuq; mugqyyeayeyggqqk: if ($uusmaiomayssaecw && $eeamcawaiqocomwy) { goto ugqaaewwmkocwwgy; } goto acsqgiuageaasiyy; qoqskyuuwueqkquk: goto wkeuuycukmuqiaom; goto iwsuawwqomaowuii; uaqackioaiqwcocy: } public function amogqycocouwaico(WP_REST_Request $aqmwamyiwgeeymqa) { goto isgwkwacoyimiauk; eeyyskqsmquyquqw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ewscugeuicukkycc; uegouoiuyoqkcscg: $keccaugmemegoimu = Domain::symcgieuakksimmu()->amogqycocouwaico($aqmwamyiwgeeymqa->get_params(), $keccaugmemegoimu); goto cgyakcqgugqgkqiw; isgwkwacoyimiauk: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto mggeqkcksyaymcsa; mggeqkcksyaymcsa: if (is_wp_error($keccaugmemegoimu)) { goto cscusseysqygsoiy; } goto uegouoiuyoqkcscg; cgyakcqgugqgkqiw: cscusseysqygsoiy: goto eeyyskqsmquyquqw; ewscugeuicukkycc: } public function ugmceccgwaaaigiy(WP_REST_Request $aqmwamyiwgeeymqa) { goto wusciwkkckmqigms; ukqocwewouckikso: $ikgwqyuyckaewsow[] = $eeamcawaiqocomwy; goto ucqmumuygcywwqma; gommacygsykyussk: kqswcsysqawkcgye: goto ukqocwewouckikso; ukkcmocamwgiqayu: $eeamcawaiqocomwy = Form::ymuegqgyuagyucws(self::VALUE, __("\x55\122\x4c", PR__PKG__DOMAIN_MANAGER), __("\105\156\164\145\x72\40\x79\157\x75\x72\x20\x64\157\x6d\x61\151\x6e\40\167\151\x74\x68\x6f\165\164\x20\150\164\164\160\x20\x61\156\144\40\x77\x77\x77", PR__PKG__DOMAIN_MANAGER))->askmmuauqcuuqsea("\x50\x61\x6e\145\x6c\x54\145\170\164\x49\x6e\160\x75\x74")->saemoowcasogykak(IconFontawesomeInterface::ICON_LINK)->eumecwmqmukqgyea()->sqcsseccsaqsoyqy()->xkgcwkwsqysqamic(); goto mwysseaekcsiesmm; amgsueumgaguceaa: $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::ID); goto gygwewcqsmwqismo; iiiccouaaqsyikae: $ikgwqyuyckaewsow[] = Form::ymuegqgyuagyucws(self::NAME, __("\116\141\x6d\145", PR__PKG__DOMAIN_MANAGER))->askmmuauqcuuqsea("\120\x61\x6e\145\x6c\x54\x65\x78\x74\111\x6e\160\165\x74")->eumecwmqmukqgyea(); goto ukkcmocamwgiqayu; ucqmumuygcywwqma: $keccaugmemegoimu = $this->ayssaocauwgssywa($ikgwqyuyckaewsow); goto uykousayyomcaeaa; mwysseaekcsiesmm: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto amgsueumgaguceaa; uykousayyomcaeaa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto uimeeckqksqeekqq; gygwewcqsmwqismo: if (!($kiicsyeqweiekmgc && !Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce))) { goto kqswcsysqawkcgye; } goto uougwgeyiokewkkm; uougwgeyiokewkkm: $eeamcawaiqocomwy->oykaosmaegqwmoga(); goto gommacygsykyussk; wusciwkkckmqigms: $kiicsyeqweiekmgc = $aqmwamyiwgeeymqa->get_param(self::CONTEXT) == "\x65\x64\x69\164"; goto iiiccouaaqsyikae; uimeeckqksqeekqq: } public function wiqumkmqkqoycqyi(WP_REST_Request $aqmwamyiwgeeymqa) { goto kocqqoyymosmuksu; uqokiksoqcwwqgio: if (is_wp_error($keccaugmemegoimu)) { goto iuuuususuuuaieem; } goto qukocuwgakemmyga; kocqqoyymosmuksu: $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto uqokiksoqcwwqgio; yiowgigkkwsoqcci: $keccaugmemegoimu = Domain::symcgieuakksimmu()->eqqmweomwciucoci($keccaugmemegoimu, true, $suaemuyiacqyugsm, $weyoqgcesqgeusiu); goto ieqesiiageaauiuw; sioekkmekwygemyc: $weyoqgcesqgeusiu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE); goto yiowgigkkwsoqcci; gamqcwuwkikwqoay: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto mscyggqcesgqqksu; ieqesiiageaauiuw: iuuuususuuuaieem: goto gamqcwuwkikwqoay; qukocuwgakemmyga: $suaemuyiacqyugsm = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE); goto sioekkmekwygemyc; mscyggqcesgqqksu: } public function kcsqeqmcgkwkcyou(WP_REST_Request $aqmwamyiwgeeymqa) { goto wsesqmcqoiyyqkqi; wkwamkgkwykeqkec: if (is_wp_error($mkucggyaiaukqoce)) { goto iesekaeqeomeuaui; } goto oimkeqocuguqqsqk; suqceasgacskcmkc: if (!Domain::symcgieuakksimmu()->smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce)) { goto oyeyomcgkmgymogq; } goto yykqaowwsqgqysmq; mogkoocsoeuyoqqa: $keccaugmemegoimu = []; goto wkwamkgkwykeqkec; yykqaowwsqgqysmq: $keccaugmemegoimu[] = "\x64\x6f\155\x61\151\156\55\x6f\167\x6e\x65\x72\163\x68\151\160"; goto kwiggogcgciwuwqk; wsesqmcqoiyyqkqi: $mkucggyaiaukqoce = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); goto mogkoocsoeuyoqqa; yoqakewookqoqacm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto gswcoeiisamakwii; ikuuiauwouuqawuw: iesekaeqeomeuaui: goto yoqakewookqoqacm; uckewycoogsogwiy: oyeyomcgkmgymogq: goto ikuuiauwouuqawuw; oimkeqocuguqqsqk: $keccaugmemegoimu[] = "\x64\x6f\x6d\x61\x69\x6e\55\145\x64\x69\164"; goto oeocukauoyosicso; oeocukauoyosicso: $mokawwccycoiqeka = $aqmwamyiwgeeymqa->get_param(self::ID); goto suqceasgacskcmkc; kwiggogcgciwuwqk: $keccaugmemegoimu[] = "\x64\157\155\x61\151\156\x2d\166\x65\x72\x69\x66\x69\x63\141\164\151\x6f\156"; goto uckewycoogsogwiy; gswcoeiisamakwii: } }
