<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62138a3c1d8a9             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Backlink; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; class Model extends BaseClass { const qkmqmaeuyokqgemg = "\x64\x6f\155\141\151\156" . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = "\143\157\x6d\160\157\156\145\156\x74" . self::mswocgcucqoaesaa; public function ckgmycmaukqgkosk() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->usuqmwksoeaayaig("\142\x61\x63\153\154\151\156\153")->wiskakymeaywyeuw($wksoawcgagcgoask)->muuwuqssqkaieqge(__("\102\x61\x63\x6b\154\x69\x6e\x6b\x73", PR__PKG__DOMAIN_MANAGER))->guiaswksukmgageq(__("\102\x61\143\153\154\x69\x6e\153", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::yakumqwueukksgcm)->aseucqksocwomwos(); parent::ckgmycmaukqgkosk(); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $aaokuekaimigoyue = ManipulateArray::get($mksyucucyswaukig, self::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs = ManipulateArray::get($mksyucucyswaukig, self::ogigqueukwysusii, ''); return sprintf("\45\x73\40\50\45\x73\x29", $meqocwsecsywiiqs, $aaokuekaimigoyue); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\x74\154\145", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ouywiegeiyuaaawo)->gswweykyogmsyawy(__("\123\154\165\147", PR__PKG__DOMAIN_MANAGER)), $this->ymuegqgyuagyucws(self::ssmskyqgcmeiayco)->gswweykyogmsyawy(__("\103\157\x6e\x74\x65\x6e\164", PR__PKG__DOMAIN_MANAGER)), $this->geqyygqiwiqusekc(self::iuqumwggccmcuyem)->acceqyqygswoecwe(4)->gswweykyogmsyawy(__("\x50\x72\151\x6f\162\x69\x74\171", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Domain::class)->gswweykyogmsyawy(__("\104\157\155\x61\151\x6e", PR__PKG__DOMAIN_MANAGER)), $this->ggiieomioscuigco(self::ogqcgemayqiaucag)->wuuqgaekqeymecag()->uwmyqckcyamwaiww(Component::class)->gswweykyogmsyawy(__("\103\157\155\x70\x6f\156\145\156\164", PR__PKG__DOMAIN_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask) { $suaemuyiacqyugsm = []; $eaekkwggowaaogiu = Generator::symcgieuakksimmu(); $qeqooyuoiasweuck = $eaekkwggowaaogiu->moyiakuigiusagwo($wksoawcgagcgoask); if (!$qeqooyuoiasweuck) { goto iwsuawwqomaowuii; } $suaemuyiacqyugsm = $eaekkwggowaaogiu->cqykmuguekuoyuwy($qeqooyuoiasweuck); if (!$suaemuyiacqyugsm) { goto qoqskyuuwueqkquk; } if (is_numeric($mokawwccycoiqeka)) { goto eogwckcymuugikuy; } $mokawwccycoiqeka = ManipulateArray::get($mokawwccycoiqeka, self::gouqcwikiiygyasc, 0); eogwckcymuugikuy: if (!$mokawwccycoiqeka) { goto wagqgeqymeqoeuyi; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo(array_merge($suaemuyiacqyugsm, [self::qkmqmaeuyokqgemg => $mokawwccycoiqeka, self::ogqcgemayqiaucag => $wksoawcgagcgoask])); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto msemumccgceyugmg; } return $this->oemauiimmycumcsk($sogksuscggsicmac[self::iwyueouqaqegmcas], 500); msemumccgceyugmg: wagqgeqymeqoeuyi: qoqskyuuwueqkquk: iwsuawwqomaowuii: return $suaemuyiacqyugsm; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto wcugqegqsuuuwqao; } asiqwuoswmigcaki: wcugqegqsuuuwqao: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
