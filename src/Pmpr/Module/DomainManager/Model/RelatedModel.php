<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             632819d5e8722             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; abstract class RelatedModel extends Common { const qkmqmaeuyokqgemg = "\144\x6f\x6d\141\151\156\137\151\x64"; const ymamoeqaciwakwue = "\x70\162\151\x76\151\x6c\x65\x67\x65\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::yakumqwueukksgcm)->guiaswksukmgageq(__("\x44\x6f\155\x61\151\156", PR__MDL__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\157\x6d\141\151\156\163", PR__MDL__DOMAIN_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\160\157\163\x69\164\151\157\x6e" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\104\157\x6d\141\151\156", PR__MDL__DOMAIN_MANAGER)), $this->kwwgyikigsyesgoo(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\104\157\155\141\x69\x6e\40\x50\x72\151\x76\151\154\145\x67\x65", PR__MDL__DOMAIN_MANAGER))->qcssowoqeqysosca()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qkmqmaeuyokqgemg => ["\x63\x6f\154" => "\155\x64\x2d\64"], self::ymamoeqaciwakwue => ["\143\157\154" => "\155\x64\x2d\x34", self::squoamkioomemiyi => "\143\150\x65\x63\x6b\142\x6f\170", "\x61\x73\55\151\x6e\x6c\x69\x6e\145", "\160\141\x72\145\156\164\55\x63\154\x61\163\x73" => "\x20\x6d\x74\55\155\144\55\141\x75\x74\157"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { if (!($ukamowomoeiweqky = Ownership::symcgieuakksimmu())) { goto yqykqysmiquwoasu; } $ywoucyskcquysiwc["\x6f\x77\x6e\145\x72\x73\x68\151\x70\x73"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; yqykqysmiquwoasu: return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto iggyqogweyosuikc; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto ygcsmkuycoagwyou; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\116\157\x20\157\x77\x6e\x65\162\x73\x68\x69\160\40\x68\x61\163\x20\x62\145\145\x6e\x20\162\x65\x67\151\x73\164\x65\162\145\x64\x20\x66\157\162\40\x74\150\x69\x73\40\x64\157\x6d\x61\151\x6e\x20\171\x65\x74\x2e", PR__MDL__DOMAIN_MANAGER), ["\143\x6c\x61\x73\x73" => "\146\x6f\156\164\x2d\61\65"]); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->yomgsemomcmgekyi(self::ucmueuwwcmocgmig, ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto omugkkesagcyagmk; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; omugkkesagcyagmk: mosqsmqimqgqoase: } ayyweymyuuiauamo: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\x73\x65\162", PR__MDL__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\x43\141\160\141\142\151\x6c\151\164\x79", PR__MDL__DOMAIN_MANAGER)], ["\143\154\141\163\x73" => "\x66\x6f\x6e\x74\x2d\x31\x35\40\x74\141\142\154\x65\x2d\163\x74\162\151\160\145\144\40\x74\x61\x62\154\x65\x2d\x62\157\x72\144\145\x72\154\145\x73\163"]); kqksuugcgsyeoayy: iggyqogweyosuikc: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::qkmqmaeuyokqgemg, 0); if (!(is_numeric($pkyyagewkiyckmwy) && ($mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig)))) { goto ssoucoucsgccekwe; } $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto qqewoyookaskiuek; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\x68\164\164\x70\163\72\57\57{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); qqewoyookaskiuek: ssoucoucsgccekwe: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (!($mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto qkcyqocqqwmqgqww; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::qkmqmaeuyokqgemg); qkcyqocqqwmqgqww: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto miyqyeiwquwsacsm; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto ywqgcegomwaiuquc; } $wkaqekwwgqsqwcoi = IconFontawesomeInterface::cugwqwigakiwyiuk; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x50\x72\x69\x76\x69\154\145\147\145\x64\x20\x44\157\155\x61\151\156", PR__MDL__DOMAIN_MANAGER); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $wkaqekwwgqsqwcoi = IconFontawesomeInterface::uoyseacicaismmug; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\116\157\x74\40\x50\162\x69\x76\151\154\x65\x67\x65\144\x20\104\157\155\141\x69\156", PR__MDL__DOMAIN_MANAGER); wmmggowmigekyoso: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\x73\x73" => "\x66\x75\x6c\154\x2d\157\x70\x61\143\151\164\x79\x20\151\143\x6f\x6e\55\x73\x6d\40\151\x63\157\156\55{$sqeykgyoooqysmca}", "\164\151\164\154\x65" => $meqocwsecsywiiqs]); goto miyqyeiwquwsacsm; } eegqyykygiccaoeo: miyqyeiwquwsacsm: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
