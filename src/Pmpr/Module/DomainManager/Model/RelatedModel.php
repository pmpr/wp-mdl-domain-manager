<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ac630d19b7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class RelatedModel extends Common { const qkmqmaeuyokqgemg = "\x64\157\x6d\x61\151\x6e\x5f\151\x64"; const ymamoeqaciwakwue = "\160\x72\x69\x76\151\154\145\x67\x65\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::emuwacasoaaageiq)->guiaswksukmgageq(__("\x44\x6f\x6d\x61\151\156", PR__MDL__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\104\x6f\155\x61\x69\x6e\x73", PR__MDL__DOMAIN_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\x70\x6f\163\x69\164\151\x6f\156" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\x44\157\x6d\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER)), $this->omkueasmegecueyk(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\104\157\155\x61\151\x6e\40\120\x72\151\166\x69\154\x65\x67\x65", PR__MDL__DOMAIN_MANAGER))->qcssowoqeqysosca()]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::qkmqmaeuyokqgemg => ["\143\157\154" => "\155\144\x2d\x34"], self::ymamoeqaciwakwue => ["\x63\x6f\x6c" => "\x6d\x64\55\x34", self::squoamkioomemiyi => "\143\150\x65\x63\153\142\157\x78", "\141\163\x2d\x69\x6e\154\151\x6e\x65", "\x70\141\162\145\x6e\164\55\143\154\141\163\x73" => "\40\x6d\x74\x2d\x6d\144\55\x61\x75\164\157"]]; } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { if (!($ukamowomoeiweqky = Ownership::symcgieuakksimmu())) { goto wagqgeqymeqoeuyi; } $ywoucyskcquysiwc["\x6f\167\156\145\x72\x73\150\151\160\x73"] = [self::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), self::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), self::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; wagqgeqymeqoeuyi: return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto mqicocmqegwukkwg; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto asiqwuoswmigcaki; } $ewgwqamkygiqaawc = ManipulateHTML::ciuuiyckmsygceis(__("\x4e\x6f\x20\157\167\x6e\145\162\163\150\x69\160\x20\150\x61\163\40\142\x65\145\x6e\x20\x72\145\147\151\163\164\145\162\x65\x64\40\146\x6f\162\x20\x74\150\151\x73\x20\x64\157\x6d\141\x69\156\40\171\x65\164\56", PR__MDL__DOMAIN_MANAGER), ["\x63\154\141\163\x73" => "\146\x6f\156\x74\x2d\61\65"]); goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->yomgsemomcmgekyi(self::ucmueuwwcmocgmig, ManipulateArray::get($ukamowomoeiweqky, self::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = ManipulateArray::get($ukamowomoeiweqky, self::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto wcugqegqsuuuwqao; } $ymqmyyeuycgmigyo = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce); $migiiksoiymissge = ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce); $essikcmqiyqaqoaq[] = [self::meksegaoamowuwoq => $this->geyuyukmwaoksywa($migiiksoiymissge, $ymqmyyeuycgmigyo), self::ucmueuwwcmocgmig => $gkswkiicccswksiq]; wcugqegqsuuuwqao: iwsuawwqomaowuii: } qoqskyuuwueqkquk: $ewgwqamkygiqaawc = ManipulateHTML::kuumcaywkqiasisk($essikcmqiyqaqoaq, [self::meksegaoamowuwoq => __("\x55\163\x65\x72", PR__MDL__DOMAIN_MANAGER), self::ucmueuwwcmocgmig => __("\x43\141\160\x61\142\151\x6c\151\164\171", PR__MDL__DOMAIN_MANAGER)], ["\143\x6c\x61\x73\x73" => "\x66\x6f\156\x74\55\x31\65\40\164\x61\x62\x6c\x65\55\x73\164\x72\x69\x70\x65\144\x20\x74\141\x62\x6c\145\55\x62\157\162\x64\x65\x72\x6c\145\163\163"]); ciykoyeioqgyaeqo: mqicocmqegwukkwg: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::qkmqmaeuyokqgemg, 0); if (!(is_numeric($pkyyagewkiyckmwy) && ($mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig)))) { goto emmsycooskoqmgeg; } $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto qgeugwymkkiacwoc; } $iwywmkygwewiamwm = ManipulateFormat::gokuyqsimauyacke(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->geyuyukmwaoksywa("\x68\164\164\160\x73\x3a\57\57{$iwywmkygwewiamwm}", $pkyyagewkiyckmwy); qgeugwymkkiacwoc: emmsycooskoqmgeg: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (!($mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto ouamogymawucwswu; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::qkmqmaeuyokqgemg); ouamogymawucwswu: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto mugqyyeayeyggqqk; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto oomguqikqokqwgku; } $wkaqekwwgqsqwcoi = IconInterface::ucomcyskmkiqysee; $sqeykgyoooqysmca = self::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x50\x72\151\166\x69\154\x65\147\x65\x64\x20\x44\x6f\x6d\x61\x69\156", PR__MDL__DOMAIN_MANAGER); goto samwkqgwouggsguc; oomguqikqokqwgku: $wkaqekwwgqsqwcoi = IconInterface::ggokgkyiweugsokc; $sqeykgyoooqysmca = self::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4e\157\x74\x20\120\162\x69\x76\151\154\x65\x67\x65\144\x20\104\157\155\x61\151\156", PR__MDL__DOMAIN_MANAGER); samwkqgwouggsguc: $eqgoocgaqwqcimie = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\x61\x73\163" => "\x66\x75\154\154\x2d\x6f\160\x61\143\151\164\171\x20\x69\143\x6f\x6e\x2d\163\155\40\x69\x63\157\156\x2d{$sqeykgyoooqysmca}", "\164\x69\x74\154\145" => $meqocwsecsywiiqs]); goto mugqyyeayeyggqqk; } acsqgiuageaasiyy: mugqyyeayeyggqqk: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
