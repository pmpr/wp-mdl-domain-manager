<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027b8b58b8             |
    |_______________________________________|
*/
 namespace Pmpr\Package\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Backlink\Model as Backlink; use WP_Error; class Domain extends Common { const BACKLINK_ID = "\x62\141\x63\153\154\x69\x6e\153" . self::_ID; const OWNERSHIP_ID = "\157\x77\156\x65\162\x73\150\151\x70" . self::_ID; const PURCHASE_ID = "\160\165\162\x63\150\x61\163\x65" . self::_ID; const API_KEY_LENGTH = 32; const yqkomaiikewyeges = "\142\x6c\157\x63\153\145\144"; const ycaauyuekyyiuosk = "\x76\151\157\154\141\x74\145\x64"; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->guiaswksukmgageq(__("\x44\157\155\x61\151\x6e", PR__PKG__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\x44\157\155\141\151\x6e\x73", PR__PKG__DOMAIN_MANAGER))->yioesawwewqaigow(IconFontawesomeInterface::ICON_LINK)->aseucqksocwomwos()->wkesqcmiekqoykag(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->qcyqgwuuymykkcke(self::NAME)->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\x44\157\155\x61\x69\x6e\x20\x4e\141\155\145", PR__PKG__DOMAIN_MANAGER)), $this->qcyqgwuuymykkcke(self::API_KEY)->acceqyqygswoecwe(self::API_KEY_LENGTH)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\101\x50\x49\x20\x4b\145\171", PR__PKG__DOMAIN_MANAGER))->acokiqqgsmoqaeyu(), $this->qcyqgwuuymykkcke(self::ciywsqoeiymemsys)->acceqyqygswoecwe(10)->eyygsasuqmommkua(self::eqewsqmqmsiocaeg)->gswweykyogmsyawy(__("\123\x74\141\x74\x75\x73", PR__PKG__DOMAIN_MANAGER))->qkwyekmiceaogwci(false), $this->qcyqgwuuymykkcke(self::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\x44\x6f\155\x61\151\x6e\x20\x41\144\144\162\145\x73\163", PR__PKG__DOMAIN_MANAGER))->acokiqqgsmoqaeyu()->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false), $this->ggiieomioscuigco(self::OWNERSHIP_ID)->gswweykyogmsyawy(__("\x4f\167\156\x65\x72\163\x68\x69\x70\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class), $this->ggiieomioscuigco(self::BACKLINK_ID)->gswweykyogmsyawy(__("\102\x61\x63\153\154\x69\x6e\x6b\163", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class), $this->ggiieomioscuigco(self::PURCHASE_ID)->gswweykyogmsyawy(__("\120\x75\x72\143\x68\141\163\x65\x73", PR__PKG__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class)]); parent::ewaqwooqoqmcoomi(); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $iwywmkygwewiamwm = ManipulateArray::get($mksyucucyswaukig, self::ciyoccqkiamemcmm); return sprintf("\x25\163\x20\50\45\x73\51", ManipulateArray::get($mksyucucyswaukig, self::NAME), $iwywmkygwewiamwm); } private function mqwogqieoumeoocw() : string { return ManipulateString::ycwmswocisskwuwg(self::API_KEY_LENGTH); } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::eqewsqmqmsiocaeg => __("\x41\143\x74\151\166\x65", PR__PKG__DOMAIN_MANAGER), self::ycaauyuekyyiuosk => __("\126\151\x6f\154\141\x74\x65\x64", PR__PKG__DOMAIN_MANAGER), self::yqkomaiikewyeges => __("\102\154\157\143\x6b\x65\x64", PR__PKG__DOMAIN_MANAGER)]; return ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq, $oqseeekuqisekiwy); } public function aakiaoueckoiyoew() : ?string { return self::ciywsqoeiymemsys; } public function qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $oqseeekuqisekiwy = $this->agausceiyceikeag(); foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $meqocwsecsywiiqs) { $umwgoasiowmqcumw[$iueymcwwscwqkiyq] = [self::qescuiwgsyuikume => $meqocwsecsywiiqs, self::qiyqwyiiwykeccmo => $this->ieieyoeqmmeysauc(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, "\x3d", clone $siykeiywomwwuoiw)]; qqewoyookaskiuek: } iggyqogweyosuikc: return parent::qeowcucuoaqyqwuw($umwgoasiowmqcumw, $siykeiywomwwuoiw); } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo) { $ymqmyyeuycgmigyo = ManipulateArray::get($icwicymcioeyeyek, self::NAME); $eqgoocgaqwqcimie = ManipulateArray::get($icwicymcioeyeyek, self::ciyoccqkiamemcmm); if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo && $miowmmgaiagcuyoo) { goto foeeqckqsyockkak; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x52\x65\161\165\151\162\145\144\x20\x66\x69\x65\154\x64\x73\40\156\157\164\x20\160\x61\x73\163\x65\144\56", PR__PKG__DOMAIN_MANAGER), 400); goto iekumemscwieugqw; foeeqckqsyockkak: $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($miowmmgaiagcuyoo); if (preg_match("\43\136\150\x74\x74\160\x28\x73\51\77\x3a\x2f\57\x23", $eqgoocgaqwqcimie)) { goto ssoucoucsgccekwe; } $eqgoocgaqwqcimie = "\150\164\x74\x70\163\72\57\57{$eqgoocgaqwqcimie}"; ssoucoucsgccekwe: if (ManipulateValidation::wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto eeqesooyqagwawae; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x45\156\x74\x65\162\x65\x64\40\144\157\155\x61\x69\156\40\151\163\40\156\157\x74\x20\x76\x61\x6c\151\144\56", PR__PKG__DOMAIN_MANAGER), 400); goto oqugqwcyomiaaoqu; eeqesooyqagwawae: $gmqiuuqqkwakoiiu = true; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $eqgoocgaqwqcimie = untrailingslashit(preg_replace("\57\x5e\167\77\x77\77\x77\x3f\x5c\x2e\x2f", '', ManipulateFormat::gokuyqsimauyacke($eqgoocgaqwqcimie))); $mokawwccycoiqeka = $swgwkyqkakceqeia->akkkoiiymmamsauc($eqgoocgaqwqcimie, self::ciyoccqkiamemcmm); if (!$mokawwccycoiqeka) { goto qkcyqocqqwmqgqww; } $gmqiuuqqkwakoiiu = false; $kigowwqauiumummw = true; goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $mokawwccycoiqeka = $swgwkyqkakceqeia->gscuuyuyauokoyuo([self::NAME => $ymqmyyeuycgmigyo, self::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, self::API_KEY => $this->mqwogqieoumeoocw()]); $kigowwqauiumummw = $mokawwccycoiqeka[self::ckcawaoawwioqecq]; miyqyeiwquwsacsm: if ($kigowwqauiumummw) { goto acaqummmoyiemqss; } $sogksuscggsicmac = $this->oemauiimmycumcsk($mokawwccycoiqeka[self::iwyueouqaqegmcas], 400); goto suswcqoyyqkkquuo; acaqummmoyiemqss: $ceiwsaacewygcsqg = $swgwkyqkakceqeia->kumuygiiqswoyasy(); $akyiigeggqowmqqq = ManipulateArray::get($mokawwccycoiqeka, $ceiwsaacewygcsqg); $ukamowomoeiweqky = null; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if ($gmqiuuqqkwakoiiu) { goto eegqyykygiccaoeo; } $ukamowomoeiweqky = $ueomouiqmosykioc->oqomcmyuuakigusk([$ueomouiqmosykioc::meksegaoamowuwoq => $ycoeoaakqyskgykq, $ueomouiqmosykioc::DOMAIN_ID => $akyiigeggqowmqqq]); eegqyykygiccaoeo: if (!$ukamowomoeiweqky) { goto wmmggowmigekyoso; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\124\150\x69\x73\x20\144\157\x6d\x61\151\156\40\141\x6c\162\145\x61\x64\171\40\x65\x78\x69\163\164\x20\151\156\40\x79\x6f\x75\162\40\144\x6f\x6d\x61\x69\156\x73\x2e", PR__PKG__DOMAIN_MANAGER), 401); goto soqqemyioggmoakg; wmmggowmigekyoso: $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($akyiigeggqowmqqq, $ycoeoaakqyskgykq); if (is_wp_error($sogksuscggsicmac)) { goto ywqgcegomwaiuquc; } $sogksuscggsicmac = [self::vswoiouoaykswgym => "\144\157\x6d\141\x69\156\137\x61\x64\144\145\144", $ceiwsaacewygcsqg => $akyiigeggqowmqqq, self::ciywsqoeiymemsys => 200, self::eoskkkieowogacws => sprintf("\45\163\x3c\x62\x72\x2f\x3e\x25\x73", __("\104\x6f\155\x61\x69\x6e\40\163\x75\143\x63\145\x73\163\146\x75\x6c\x6c\171\x20\141\144\x64\145\144\x2e", PR__PKG__DOMAIN_MANAGER), __("\x50\154\x65\x61\163\145\x20\166\145\162\x69\146\171\40\x64\x6f\155\x61\x69\156\56", PR__PKG__DOMAIN_MANAGER))]; ywqgcegomwaiuquc: soqqemyioggmoakg: suswcqoyyqkkquuo: oqugqwcyomiaaoqu: iekumemscwieugqw: return $sogksuscggsicmac; } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { $aokagokqyuysuksm = $this->keeuqgyooycqoygw($mokawwccycoiqeka); $ymqmyyeuycgmigyo = ManipulateArray::get($mokawwccycoiqeka, self::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { goto gaomwagkcciesyqy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\122\145\161\x75\x69\x72\x65\x64\40\146\x69\145\x6c\x64\x73\40\x6e\157\x74\40\160\x61\x73\163\145\144\x2e", PR__PKG__DOMAIN_MANAGER), 400); goto aegysmeecgcgayyw; gaomwagkcciesyqy: if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto uqqaiagaeqgqgaiy; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\131\x6f\165\x20\x64\x6f\x6e\164\40\x68\141\166\145\x20\x70\x65\162\155\151\163\x73\151\157\x6e\40\164\157\40\145\144\151\x74\x20\x74\150\151\x73\x20\x64\x6f\x6d\x61\151\156\56", PR__PKG__DOMAIN_MANAGER), 401); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, self::NAME => $ymqmyyeuycgmigyo, self::ciywsqoeiymemsys => self::eqewsqmqmsiocaeg]; $ysyswymameciiyce = false; $eeamcawaiqocomwy = ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm); if (!$eeamcawaiqocomwy) { goto hoeeyiowekaeemko; } $icwicymcioeyeyek[self::ciyoccqkiamemcmm] = $eeamcawaiqocomwy; $ysyswymameciiyce = true; hoeeyiowekaeemko: if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto qicwaskssogcokgm; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto kymkucucyeoeikim; } $sogksuscggsicmac = $this->oemauiimmycumcsk(implode("\40", $sogksuscggsicmac[self::iwyueouqaqegmcas])); goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $sogksuscggsicmac = $icwicymcioeyeyek; usquiuuyiyqaeyiu: goto uguigkcmukuouway; qicwaskssogcokgm: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x53\x6f\x72\162\x79\x20\x79\x6f\x75\x20\143\141\x6e\x20\x6e\157\x74\x20\x75\x70\144\x61\164\x65\40\x79\x6f\x75\162\40\x64\157\x6d\141\151\156\40\141\x64\144\162\x65\x73\163\56", PR__PKG__DOMAIN_MANAGER), 400); uguigkcmukuouway: esuiysskoweawsue: aegysmeecgcgayyw: return $sogksuscggsicmac; } public function wmyyiowksyygqesq($mokawwccycoiqeka, $wksoawcgagcgoask) : bool { if (!is_numeric($mokawwccycoiqeka)) { goto suqkuqygkkgwyaie; } $mokawwccycoiqeka = $this->akkkoiiymmamsauc($mokawwccycoiqeka); suqkuqygkkgwyaie: $qcioqakuekamgwkw = $this->iscemaoqqckmkago(self::BACKLINK_ID, $mokawwccycoiqeka, "\52", [Backlink::COMPONENT_ID => $wksoawcgagcgoask]); return empty($qcioqakuekamgwkw); } public function qkmaaeieyisccgia($mokawwccycoiqeka, $wksoawcgagcgoask) { $sogksuscggsicmac = false; if (!$this->wmyyiowksyygqesq($mokawwccycoiqeka, $wksoawcgagcgoask)) { goto soaccwqimeksgwiw; } $sogksuscggsicmac = Backlink::symcgieuakksimmu()->wqssmeicqigigsym($mokawwccycoiqeka, $wksoawcgagcgoask); soaccwqimeksgwiw: return $sogksuscggsicmac; } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { $yciaosuiyeieceug = false; if (!($mokawwccycoiqeka && $mkucggyaiaukqoce)) { goto cgiscsqwwgqqaeqi; } $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Ownership::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), Ownership::DOMAIN_ID => $mokawwccycoiqeka, Ownership::ucmueuwwcmocgmig => Ownership::CAP_OWNER]); if ($ukamowomoeiweqky) { goto skkamseieeusycye; } $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Ownership::meksegaoamowuwoq => ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce), Ownership::DOMAIN_ID => $mokawwccycoiqeka, Ownership::ucmueuwwcmocgmig => Ownership::CAP_UNVERIFIED]); if (!$ukamowomoeiweqky) { goto wiysogeqqwgioyka; } $yciaosuiyeieceug = true; wiysogeqqwgioyka: skkamseieeusycye: cgiscsqwwgqqaeqi: return $yciaosuiyeieceug; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, ManipulateSetting::yoaaussmackoisuw(), null, $mksyucucyswaukig); goto syiqkaasoueowwui; case self::ciywsqoeiymemsys: $eqgoocgaqwqcimie = $this->agausceiyceikeag($eqgoocgaqwqcimie); goto syiqkaasoueowwui; default: $eqgoocgaqwqcimie = parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto syiqkaasoueowwui; } giaacoqqqsekcayy: syiqkaasoueowwui: return $eqgoocgaqwqcimie; } public function ogkgcwiskmoiweki($esuksqieigiqcaie, $gwgucoaaqcwwciqq) { if (strlen($esuksqieigiqcaie) == self::API_KEY_LENGTH) { goto ewymsmkkiksgwysk; } $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\x59\x6f\165\162\x20\x41\120\x49\40\x4b\145\x79\40\151\x73\40\x6e\157\x74\x20\166\x61\x6c\x69\x64\56", PR__PKG__DOMAIN_MANAGER), 400); goto cmegwsegsosyqcai; ewymsmkkiksgwysk: $sogksuscggsicmac = $this->oqomcmyuuakigusk([self::ciyoccqkiamemcmm => $gwgucoaaqcwwciqq, self::API_KEY => $esuksqieigiqcaie]); cmegwsegsosyqcai: return $sogksuscggsicmac; } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { if ($mokawwccycoiqeka) { goto egyyiccaeeiooaua; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\161\x75\x65\163\x74\40\157\162\151\x67\x69\156\40\156\x6f\164\40\x64\x65\164\x65\x63\x74\x65\144\56", PR__PKG__DOMAIN_MANAGER), 400); goto scisgsyemmsekgos; egyyiccaeeiooaua: $keccaugmemegoimu = $this->ogkgcwiskmoiweki($esuksqieigiqcaie, $mokawwccycoiqeka); if (is_wp_error($keccaugmemegoimu)) { goto ooeausyowguqicuo; } if ($keccaugmemegoimu) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x43\141\x6e\40\x6e\157\164\x20\146\157\165\x6e\144\x20\144\x6f\x6d\141\x69\x6e\x2c\x20\160\x6c\145\x61\163\x65\x20\147\145\x74\40\x61\156\144\40\141\160\151\x20\x6b\145\171\x20\142\171\x20\x67\165\x69\144\x65\56", PR__PKG__DOMAIN_MANAGER), 404); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $keccaugmemegoimu = __("\x41\120\111\x20\113\145\171\40\151\163\40\x76\141\x6c\151\144\56", PR__PKG__DOMAIN_MANAGER); gkyawqqcmigqgaiq: ooeausyowguqicuo: scisgsyemmsekgos: return $keccaugmemegoimu; } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { $ycoeoaakqyskgykq = ManipulateUser::mwikyscisascoeea($mkucggyaiaukqoce); try { $wkkweuacukumqmya = [self::meksegaoamowuwoq => $ycoeoaakqyskgykq]; if (!$kqwygogeauwwyoca) { goto cewmoqyysgsmuiya; } $wkkweuacukumqmya[Ownership::ucmueuwwcmocgmig] = [self::ciyoccqkiamemcmm => [Ownership::CAP_OWNER, Ownership::CAP_RESTRICT], self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]; cewmoqyysgsmuiya: $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->ykuqokgcaymcskiw($wkkweuacukumqmya, Ownership::DOMAIN_ID); $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->kumuygiiqswoyasy() => [self::ciyoccqkiamemcmm => $oysoyeaucuawyaky, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); if ($goocueskqsmqagii) { goto igooksugieceoege; } $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iiqauwkoiguyeawu($siykeiywomwwuoiw)); goto omqiayeucoioqoao; igooksugieceoege: $wqogggcaamgeiwew = $this->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::imywcsggckkcywgk => $suaemuyiacqyugsm, self::PER_PAGE => $weyoqgcesqgeusiu]); omqiayeucoioqoao: } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } return $wqogggcaamgeiwew; } }
