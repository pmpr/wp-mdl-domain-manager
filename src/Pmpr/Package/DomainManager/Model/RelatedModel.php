<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fc91cdff6             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; abstract class RelatedModel extends Common { const DOMAIN_ID = "\144\157\x6d\x61\151\x6e\x5f\151\x64"; const ymamoeqaciwakwue = "\160\x72\151\166\151\154\145\x67\x65\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->guiaswksukmgageq(__("\104\157\155\x61\151\156", PR__PKG__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\x6f\x6d\x61\x69\156\163", PR__PKG__DOMAIN_MANAGER))->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\160\157\163\151\164\151\157\x6e" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::DOMAIN_ID)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\104\x6f\x6d\x61\151\156", PR__PKG__DOMAIN_MANAGER)), $this->mwgowkwweqssomgy(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\104\x6f\x6d\x61\x69\156\40\120\162\x69\166\x69\x6c\145\x67\x65", PR__PKG__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::ymamoeqaciwakwue => ["\x63\x6f\154" => "\x6d\x64\55\x36", self::squoamkioomemiyi => "\143\150\145\x63\x6b\x62\157\170", "\141\x73\x2d\151\156\154\151\x6e\145", "\x70\141\x72\x65\156\x74\55\143\x6c\x61\x73\x73" => "\x20\x6d\x74\55\x6d\x64\x2d\x61\x75\x74\x6f"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { $ukamowomoeiweqky = Ownership::symcgieuakksimmu(); $ywoucyskcquysiwc["\157\167\x6e\145\162\163\x68\151\160\163"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::DOMAIN_ID, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto oouoqimaaqcmccay; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::OWNERSHIP_ID, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto siqagquguiemuoku; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\116\x6f\40\x6f\167\x6e\x65\x72\x73\x68\x69\160\x20\x68\141\163\x20\142\145\145\156\40\x72\x65\x67\x69\x73\164\145\162\x65\144\x20\146\157\162\40\x74\x68\151\163\x20\x64\x6f\x6d\141\151\156\40\171\145\x74\x2e", PR__PKG__DOMAIN_MANAGER), ["\143\154\141\x73\x73" => "\146\157\x6e\x74\55\61\65"]); goto ycakugokkqkuqyiu; siqagquguiemuoku: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->ggqekkkocygywmoy(ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto coywmiyqgsweuiic; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; coywmiyqgsweuiic: ieumumsgyguceusy: } yssscwioiyygssec: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\x73\145\162", PR__PKG__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\x43\x61\x70\141\142\151\154\151\164\x79", PR__PKG__DOMAIN_MANAGER)], ["\143\x6c\x61\x73\x73" => "\x66\x6f\x6e\x74\x2d\61\x35\40\x74\141\142\x6c\x65\55\163\164\x72\151\x70\x65\144\40\164\141\142\154\x65\55\142\157\162\x64\x65\x72\154\x65\163\x73"]); ycakugokkqkuqyiu: oouoqimaaqcmccay: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::DOMAIN_ID, $mksyucucyswaukig); $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto sycygoiaiqqageym; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\150\164\164\x70\x73\x3a\57\x2f{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); sycygoiaiqqageym: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (is_numeric($mokawwccycoiqeka)) { goto gygawoqywkukmqee; } $mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka); gygawoqywkukmqee: if (!$mokawwccycoiqeka) { goto kciouyuaqkyqomam; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::DOMAIN_ID); kciouyuaqkyqomam: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::DOMAIN_ID: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto wwkgkaecgiwggcck; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto qsygcycwieukkgwc; } $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_XMARK; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\120\162\x69\166\151\154\145\147\145\144\x20\x44\157\155\141\x69\x6e", PR__PKG__DOMAIN_MANAGER); goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::ICON_CIRCLE_CHECK; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4e\157\x74\40\120\x72\151\x76\x69\x6c\145\x67\145\x64\40\104\x6f\155\141\151\x6e", PR__PKG__DOMAIN_MANAGER); kiwqkcaekqqyuegq: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\163\163" => "\146\x75\x6c\154\x2d\x6f\160\x61\143\151\x74\171\x20\x69\x63\x6f\x6e\55\163\x6d\x20\151\143\157\156\x2d{$sqeykgyoooqysmca}", "\x74\151\164\x6c\x65" => $meqocwsecsywiiqs]); goto wwkgkaecgiwggcck; } umgaesggesswoaqe: wwkgkaecgiwggcck: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
