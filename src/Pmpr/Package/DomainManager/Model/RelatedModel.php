<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027b8b58b8             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; abstract class RelatedModel extends Common { const DOMAIN_ID = "\144\x6f\155\x61\x69\x6e\137\x69\x64"; const ymamoeqaciwakwue = "\x70\x72\x69\x76\x69\154\145\x67\145\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->guiaswksukmgageq(__("\104\157\x6d\141\x69\x6e", PR__PKG__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\157\x6d\141\x69\156\x73", PR__PKG__DOMAIN_MANAGER))->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\160\157\x73\x69\x74\151\x6f\x6e" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::DOMAIN_ID)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\104\157\155\x61\151\156", PR__PKG__DOMAIN_MANAGER)), $this->mwgowkwweqssomgy(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\x44\157\155\141\x69\x6e\40\x50\162\151\x76\x69\154\x65\147\x65", PR__PKG__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ymamoeqaciwakwue => ["\143\x6f\x6c" => "\x6d\144\55\66", self::squoamkioomemiyi => "\x63\x68\145\x63\x6b\x62\x6f\170", "\141\163\55\x69\156\x6c\151\x6e\145", "\160\x61\x72\145\x6e\164\55\143\154\x61\x73\x73" => "\x20\x6d\x74\x2d\155\144\x2d\x61\165\x74\157"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { $ukamowomoeiweqky = Ownership::symcgieuakksimmu(); $ywoucyskcquysiwc["\157\167\x6e\145\162\x73\x68\151\160\x73"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::DOMAIN_ID, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto oouoqimaaqcmccay; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::OWNERSHIP_ID, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto siqagquguiemuoku; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\x4e\x6f\40\157\167\x6e\145\x72\x73\150\151\160\40\150\141\163\40\x62\145\145\x6e\40\162\x65\147\151\163\164\x65\x72\x65\x64\40\x66\x6f\x72\x20\164\150\x69\163\40\144\x6f\155\141\x69\156\40\x79\145\x74\56", PR__PKG__DOMAIN_MANAGER), ["\x63\154\x61\x73\163" => "\x66\157\156\x74\55\x31\65"]); goto ycakugokkqkuqyiu; siqagquguiemuoku: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->ggqekkkocygywmoy(ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto coywmiyqgsweuiic; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; coywmiyqgsweuiic: ieumumsgyguceusy: } yssscwioiyygssec: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\163\145\x72", PR__PKG__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\x43\x61\x70\x61\x62\151\154\x69\164\171", PR__PKG__DOMAIN_MANAGER)], ["\x63\154\141\163\x73" => "\x66\x6f\x6e\164\55\61\x35\40\x74\x61\x62\x6c\x65\55\x73\164\x72\151\x70\145\144\x20\164\x61\x62\154\145\x2d\x62\x6f\x72\x64\x65\162\154\145\x73\x73"]); ycakugokkqkuqyiu: oouoqimaaqcmccay: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::DOMAIN_ID, $mksyucucyswaukig); $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto sycygoiaiqqageym; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\150\x74\164\160\163\72\x2f\57{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); sycygoiaiqqageym: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (is_numeric($mokawwccycoiqeka)) { goto gygawoqywkukmqee; } $mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka); gygawoqywkukmqee: if (!$mokawwccycoiqeka) { goto kciouyuaqkyqomam; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::DOMAIN_ID); kciouyuaqkyqomam: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::DOMAIN_ID: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto wwkgkaecgiwggcck; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto qsygcycwieukkgwc; } $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_XMARK; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x50\162\151\x76\151\154\x65\x67\x65\144\40\x44\157\x6d\141\151\x6e", PR__PKG__DOMAIN_MANAGER); goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_CIRCLE_CHECK; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4e\157\164\40\120\162\151\x76\151\154\145\147\x65\x64\40\104\157\x6d\141\151\x6e", PR__PKG__DOMAIN_MANAGER); kiwqkcaekqqyuegq: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\163\x73" => "\146\165\x6c\154\55\157\x70\x61\143\151\x74\x79\40\x69\x63\157\x6e\55\163\155\40\x69\143\x6f\x6e\x2d{$sqeykgyoooqysmca}", "\164\x69\x74\154\145" => $meqocwsecsywiiqs]); goto wwkgkaecgiwggcck; } umgaesggesswoaqe: wwkgkaecgiwggcck: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
