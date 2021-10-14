<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680ed159d46             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const DOMAIN_ID = "\x64\x6f\155\141\151\156" . self::_ID; const EXPIRE_DATE = "\145\170\160\151\162\145\x5f\144\x61\x74\x65"; const COMPONENT_ID = "\143\157\x6d\160\157\x6e\x65\x6e\164" . self::_ID; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { goto wusciwkkckmqigms; ukkcmocamwgiqayu: parent::ckgmycmaukqgkosk(); goto mwysseaekcsiesmm; iiiccouaaqsyikae: $this->oyeskqayoscwciem()->myysgyqcumekoueo()->okgmqaeuaeymaocm($wksoawcgagcgoask)->usuqmwksoeaayaig("\x62\x61\x63\153\x6c\151\156\x6b")->muuwuqssqkaieqge(__("\x42\141\x63\x6b\x6c\151\x6e\153\x73", PR__PKG__DOMAIN_MANAGER))->guiaswksukmgageq(__("\x42\141\x63\x6b\154\x69\156\153", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->aseucqksocwomwos(); goto ukkcmocamwgiqayu; wusciwkkckmqigms: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto iiiccouaaqsyikae; mwysseaekcsiesmm: } public function kssgsuewkcwgiksa() : array { return [self::EXPIRE_DATE => ["\x63\157\x6c" => "\155\x64\55\64", self::TYPE => "\x64\141\164\145"]]; } public function iysseyicgouwysgk($mksyucucyswaukig) : ?string { goto amgsueumgaguceaa; uougwgeyiokewkkm: return sprintf("\45\163\x20\x28\45\x73\x29", $meqocwsecsywiiqs, $aaokuekaimigoyue); goto gommacygsykyussk; amgsueumgaguceaa: $aaokuekaimigoyue = ManipulateArray::get($mksyucucyswaukig, self::SLUG, ''); goto gygwewcqsmwqismo; gygwewcqsmwqismo: $meqocwsecsywiiqs = ManipulateArray::get($mksyucucyswaukig, self::LINK, ''); goto uougwgeyiokewkkm; gommacygsykyussk: } public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array { return parent::eucukwckumgiyyww([$this->ymuegqgyuagyucws(self::TITLE)->gswweykyogmsyawy(__("\124\151\164\x6c\x65", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::SLUG)->gswweykyogmsyawy(__("\123\x6c\165\x67", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::CONTENT)->gswweykyogmsyawy(__("\x43\x6f\x6e\x74\145\156\164", PR__PKG__DOMAIN_MANAGER)), $this->ceqawoymcymsaeqo(self::EXPIRE_DATE)->gswweykyogmsyawy(__("\105\x78\x70\x69\x72\145\x20\x44\141\164\x65", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::DOMAIN_ID)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\x44\157\155\141\x69\156", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::COMPONENT_ID)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\x43\x6f\x6d\160\157\156\x65\x6e\x74", PR__PKG__DOMAIN_MANAGER))]); } public function wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask, $owiuekcekysskaoe) { goto kocqqoyymosmuksu; oimkeqocuguqqsqk: ucqmumuygcywwqma: goto oeocukauoyosicso; ieqesiiageaauiuw: if (!$suaemuyiacqyugsm) { goto uimeeckqksqeekqq; } goto gamqcwuwkikwqoay; iesekaeqeomeuaui: if (!$mokawwccycoiqeka) { goto uykousayyomcaeaa; } goto wsesqmcqoiyyqkqi; mscyggqcesgqqksu: $mokawwccycoiqeka = ManipulateArray::get($mokawwccycoiqeka, self::ID, 0); goto oyeyomcgkmgymogq; sioekkmekwygemyc: if (!$qeqooyuoiasweuck) { goto iuuuususuuuaieem; } goto yiowgigkkwsoqcci; gamqcwuwkikwqoay: if (is_numeric($mokawwccycoiqeka)) { goto ukqocwewouckikso; } goto mscyggqcesgqqksu; uqokiksoqcwwqgio: $eaekkwggowaaogiu = Generator::symcgieuakksimmu(); goto qukocuwgakemmyga; yykqaowwsqgqysmq: iuuuususuuuaieem: goto kwiggogcgciwuwqk; kwiggogcgciwuwqk: return $suaemuyiacqyugsm; goto uckewycoogsogwiy; oeocukauoyosicso: uykousayyomcaeaa: goto suqceasgacskcmkc; oyeyomcgkmgymogq: ukqocwewouckikso: goto iesekaeqeomeuaui; kocqqoyymosmuksu: $suaemuyiacqyugsm = []; goto uqokiksoqcwwqgio; yiowgigkkwsoqcci: $suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck); goto ieqesiiageaauiuw; suqceasgacskcmkc: uimeeckqksqeekqq: goto yykqaowwsqgqysmq; qukocuwgakemmyga: $qeqooyuoiasweuck = $eaekkwggowaaogiu->moyiakuigiusagwo($wksoawcgagcgoask); goto sioekkmekwygemyc; wkwamkgkwykeqkec: return $this->oemauiimmycumcsk($sogksuscggsicmac[self::ERRORS], 500); goto oimkeqocuguqqsqk; mogkoocsoeuyoqqa: if ($sogksuscggsicmac[self::SUCCESS]) { goto ucqmumuygcywwqma; } goto wkwamkgkwykeqkec; wsesqmcqoiyyqkqi: $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::DOMAIN_ID => $mokawwccycoiqeka, self::EXPIRE_DATE => $owiuekcekysskaoe, self::COMPONENT_ID => $wksoawcgagcgoask])); goto mogkoocsoeuyoqqa; uckewycoogsogwiy: } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto gswcoeiisamakwii; yuimwyoywaiiqacs: yoqakewookqoqacm: goto ocywegekakimmwcq; gswcoeiisamakwii: switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: case self::EXPIRE_DATE: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto ikuuiauwouuqawuw; } goto yuimwyoywaiiqacs; ocywegekakimmwcq: ikuuiauwouuqawuw: goto emqswoaawgeyosmi; emqswoaawgeyosmi: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto iwsmmkqaoksmocok; iwsmmkqaoksmocok: } }
