<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624eaeba80a83             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Backlink extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\163\164\x5f\x61\x70\x69\137\151\156\151\164", [$this, "\x74\151\163\x77\x61\x79\x73\x71\x61\167\x75\x63\147\x67\x75\143"])->qcsmikeggeemccuu("\x69\156\x69\x74", [$this, "\x67\x75\165\167\x69\x6f\x6d\157\155\x77\153\163\161\x79\147\151"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x63\157\x6d\160\157\156\145\x6e\164\137\x72\x65\x73\164\x5f\147\145\x74\x5f\151\x74\x65\155\x5f\162\145\x73\160\157\x6e\163\x65"), [$this, "\x65\x67\143\x61\171\x6b\143\171\153\x63\145\151\x61\147\x6b\x79"], 10, 3)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x6c\x69\143\145\x6e\x73\x65\x5f\x63\150\145\143\153\x5f\166\141\x6c\151\x64\x61\164\151\x6f\156\x5f\162\x65\x73\160\x6f\x6e\163\145\137\x64\141\164\141"), [$this, "\145\x67\x63\141\x79\x6b\143\x79\153\143\x65\x69\x61\147\153\171"], 10, 3); parent::kgquecmsgcouyaya(); } public function iemaakgqgqosiecm() { REST::symcgieuakksimmu(); Model::symcgieuakksimmu(); } public function tiswaysqawucgguc() { REST::symcgieuakksimmu()->register_routes(); } public function egcaykcykceiagky($icwicymcioeyeyek, $akyiigeggqowmqqq, $wksoawcgagcgoask) { $uqigicauqkogsuuc = ManipulateArray::get($wksoawcgagcgoask, self::gouqcwikiiygyasc); if ($uqigicauqkogsuuc) { goto cuoqqgaygogsmmic; } $this->saqqeqmcyyoeqici("\x63\157\x6d\x70\157\156\145\156\x74\x20\151\163\x20\x6e\157\164\40\162\145\143\157\x67\x6e\151\x7a\x65\144\x2e"); goto cgewcsueoyaeikgm; cuoqqgaygogsmmic: $okgiqegieoooemuq = $this->moyiakuigiusagwo($uqigicauqkogsuuc, self::igmwackauwsummys); if ($okgiqegieoooemuq) { goto qmeoaqmsuseueqiy; } $this->saqqeqmcyyoeqici("\x62\x61\143\153\154\x69\x6e\153\40\x66\157\x6f\164\145\162\40\x74\x65\170\x74\x20\151\x73\40\x65\155\x70\x74\x79\56", [$uqigicauqkogsuuc]); goto ygkcacsyyckescqs; qmeoaqmsuseueqiy: $ggcusimcgowkewyk = Model::symcgieuakksimmu()->oqomcmyuuakigusk([Model::qkmqmaeuyokqgemg => $akyiigeggqowmqqq, Model::ogqcgemayqiaucag => $uqigicauqkogsuuc], [Model::ouywiegeiyuaaawo, Model::qescuiwgsyuikume, Model::ssmskyqgcmeiayco, Model::iuqumwggccmcuyem]); if ($ggcusimcgowkewyk) { goto eiawsoasmscmqswa; } $this->saqqeqmcyyoeqici("\x63\141\x6e\x20\156\x6f\x74\40\146\151\156\x64\x20\142\141\143\153\x6c\x69\156\153\40\x72\145\x63\x6f\x72\144\40\164\157\x20\141\x64\144\40\x72\x65\163\x75\x6c\164\56"); goto ickcmqoiosquugwe; eiawsoasmscmqswa: $ggcusimcgowkewyk = (array) $ggcusimcgowkewyk; $ggcusimcgowkewyk[self::igmwackauwsummys] = $okgiqegieoooemuq; $ggcusimcgowkewyk[self::ocwsuwyiiasigqaa] = ManipulateArray::get($wksoawcgagcgoask, self::NAME, $wksoawcgagcgoask); $icwicymcioeyeyek = ManipulateArray::set($icwicymcioeyeyek, [self::momcisyewgkeguye => $ggcusimcgowkewyk]); ickcmqoiosquugwe: ygkcacsyyckescqs: cgewcsueoyaeikgm: return $icwicymcioeyeyek; } public function guuwiomomwksqygi() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto eyiamcekkgkiawqy; } $uuskcymsqowqgkyo = $this->yoieqkskckuicoiu(); if (!$uuskcymsqowqgkyo) { goto mqccmesakuemceqi; } foreach ($uuskcymsqowqgkyo as $iiumgusgeekimkya) { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("{$iiumgusgeekimkya}\x5f\x74\x61\x62\x73"), [$this, "\x75\155\165\155\x75\161\x79\171\x77\167\x61\155\x6d\163\165\171"], 10, 2); igymseewwyiocoug: } sukskmcwsoysiuqu: mqccmesakuemceqi: eyiamcekkgkiawqy: } public function umumuqyywwammsuy($ywoucyskcquysiwc, $uqcooyiiyysckskk) { $ymqmyyeuycgmigyo = $uqcooyiiyysckskk->cisyiemkeykgkomc(); $ywoucyskcquysiwc[] = Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\142\x61\x63\x6b\x6c\151\x6e\x6b\137\143\157\156\146\151\147", __("\102\141\x63\153\154\x69\156\153\x20\103\x6f\x6e\x66\151\x67", PR__MDL__DOMAIN_MANAGER))->sikqggwmmykuiymy(Tab::cgygmuguceeosoey($ymqmyyeuycgmigyo . self::iusoecsswgekecks, __("\x47\x65\156\x65\x72\x61\x6c", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ckuwucygcwsiawms(self::momcisyewgkeguye, __("\x42\141\143\x6b\154\151\x6e\x6b", PR__MDL__DOMAIN_MANAGER))->smmismmuuccmscya())->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::sikqccmyeogmuosk, __("\102\141\x63\153\x6c\151\x6e\153\40\120\162\x69\157\x72\x69\164\171", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo())->mkksewyosgeumwsa(Tab::sciaycsmsiekqueg(self::igmwackauwsummys, __("\x46\x6f\x6f\x74\145\x72\40\x54\x65\170\x74", PR__MDL__DOMAIN_MANAGER))->qsecygiycssgacqs(2)->gsomueooycksswcy())->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->sikqggwmmykuiymy(Tab::cgygmuguceeosoey($ymqmyyeuycgmigyo . "\x5f\x63\x6f\x6e\x74\145\156\164\x73", __("\103\157\156\x74\x65\x6e\x74\x73", PR__MDL__DOMAIN_MANAGER))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\164\151\164\x6c\x65\x5f\141\156\144\x5f\163\x6c\165\x67", __("\124\x69\x74\154\x65\40\101\x6e\x64\40\123\x6c\x75\147", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ameuayawimeoysmc, __("\x54\x69\x74\154\x65\x20\141\156\144\x20\123\x6c\x75\147\40\x50\x6c\141\x63\x65\163", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo()->eyygsasuqmommkua(1))->mkksewyosgeumwsa(Tab::wcwmusaouiqaqeww(self::syoumqikoowgswma, __("\x52\x65\x76\145\162\x73\x65\40\x53\x6c\x75\147", PR__MDL__DOMAIN_MANAGER)))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::awweqicqwikkykis, __("\124\151\164\154\145", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\x74\x6c\x65", PR__MDL__DOMAIN_MANAGER)))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ouywiegeiyuaaawo, __("\123\154\x75\147", PR__MDL__DOMAIN_MANAGER))->yskkmqiusguummwa())->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ugqsimokykgqaeiq, __("\x50\154\x61\x63\x65", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ksssumoioemcmcgo, __("\120\154\141\143\x65\40\x4c\x65\156\147\x74\x68", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::wsigcqmysiucgwuo))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\137\141\156\143\150\x6f\x72\163", __("\101\x6e\x63\150\x6f\x72\163", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::mecugimsqkeicksm, __("\101\156\143\x68\157\x72\40\x50\x72\x65\146\151\170", PR__MDL__DOMAIN_MANAGER))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ouauqossmqiwwsui, __("\x41\x6e\x63\150\x6f\x72\x20\x53\165\x66\146\x69\170", PR__MDL__DOMAIN_MANAGER))->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::ogcquccysekeyisc, __("\101\x6e\143\150\157\x72\163", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::kweqeqcagwaiucik, __("\x41\156\x63\x68\157\162", PR__MDL__DOMAIN_MANAGER)))->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::kmiqqoqiyyimiegg))->aucimgwswmgaocae(Tab::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x5f\163\164\141\164\145\155\145\x6e\x74\163", __("\x53\164\x61\x74\x65\155\145\x6e\164\x73", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::qigcuyyegqmimoym, __("\115\151\156\x69\155\x75\155\x20\x43\157\165\156\164", PR__MDL__DOMAIN_MANAGER), __("\x4d\x69\156\151\155\x75\x6d\40\160\x61\162\x61\x67\x72\141\160\x68\40\x63\x6f\x75\x6e\x74", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(5)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::cyukygkewseoqouw, __("\115\141\x78\x69\155\x75\155\x20\x43\157\165\x6e\x74", PR__MDL__DOMAIN_MANAGER), __("\115\141\170\151\155\x75\x6d\x20\x70\x61\162\141\x67\162\141\x70\150\x20\x63\x6f\x75\x6e\164", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(14)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::oecykcwqcimuygkw, __("\x4d\151\156\151\x6d\165\x6d\x20\114\145\x6e\x67\x74\x68", PR__MDL__DOMAIN_MANAGER), __("\x4d\x69\x6e\151\155\165\x6d\x20\163\164\x61\164\x65\x6d\x65\156\164\40\143\x6f\x75\x6e\164\40\x75\x73\x65\144\x20\151\x6e\40\x65\x61\x63\x68\x20\160\x61\x72\141\x67\x72\141\160\150", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::swikuukssgyqwkue, __("\x4d\141\170\151\x6d\165\155\40\x4c\x65\x6e\x67\164\x68", PR__MDL__DOMAIN_MANAGER), __("\115\x61\170\151\155\165\x6d\40\163\x74\141\x74\145\x6d\145\x6e\x74\40\x63\157\x75\156\164\x20\165\163\x65\x64\40\x69\156\40\145\x61\143\150\x20\160\x61\x72\x61\x67\162\x61\x70\150", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(6)->oiwawawcmigageco(6))->mkksewyosgeumwsa(Tab::iseogkiymousogom(self::ooqaewiocugokqco, __("\123\164\141\164\x65\x6d\145\x6e\x74", PR__MDL__DOMAIN_MANAGER))->mkksewyosgeumwsa(Tab::uouyygwcgsmygaee(self::TEXT, __("\124\x65\170\164", PR__MDL__DOMAIN_MANAGER))->qsecygiycssgacqs(3))->mkksewyosgeumwsa(Tab::ymuegqgyuagyucws(self::ugqsimokykgqaeiq, __("\x57\x68\x69\143\x68\x20\120\141\162\141\147\x72\x61\x70\x68", PR__MDL__DOMAIN_MANAGER))->escqqisecooswqgo(1)->eyygsasuqmommkua(1))->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::akamkkecckgyeyck))->saemoowcasogykak(IconFontawesomeInterface::qwwkuisyyscowceo))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm); return $ywoucyskcquysiwc; } }
