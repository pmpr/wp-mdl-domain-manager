<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebd4cdd24de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use WP_Error; use WP_REST_Request; class Domain extends Common { const aemeeukyaaokioui = "\160\x65\162\155\151\x73\163\x69\157\x6e"; const wygegsqueakqiccy = "\x62\141\x63\x6b\154\x69\156\153" . Constants::mswocgcucqoaesaa; const kwouyaaaeiuuquis = "\x70\x75\x72\143\x68\141\x73\145" . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const geseccqgwqkukyuk = "\157\x77\x6e\145\x72\163\x68\151\160" . Constants::mswocgcucqoaesaa; const muckogockysqwceq = 32; const yqkomaiikewyeges = "\x62\154\x6f\x63\153\x65\144"; const ycaauyuekyyiuosk = "\x76\x69\157\x6c\x61\164\145\x64"; const wyeieyscswyiskcw = "\x61\154\154\x6f\x77\145\x64"; const qyywsyikosmsacgu = "\x6e\x6f\164\x5f\141\154\154\157\167\x65\x64"; const NOT_SPECIFIED = "\156\x6f\x74\x5f\163\x70\145\x63\151\146\x69\x65\144"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->ckaeqgiaiqwsccke(0)->muuwuqssqkaieqge(__("\x44\x6f\155\141\x69\156\163", PR__MDL__DOMAIN_MANAGER))->guiaswksukmgageq(__("\104\x6f\155\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER))->yioesawwewqaigow(IconInterface::emuwacasoaaageiq)->gemkqqguesukeocw()->aseucqksocwomwos()->wkesqcmiekqoykag()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->usqseiuaeauwuwus(Constants::NAME)->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\104\x6f\x6d\x61\x69\156\40\116\x61\x6d\145", PR__MDL__DOMAIN_MANAGER)), $this->usqseiuaeauwuwus(Constants::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\104\x6f\x6d\141\x69\156\x20\x41\144\x64\162\x65\x73\x73", PR__MDL__DOMAIN_MANAGER))->eccqsggkcosmqumc()->acceqyqygswoecwe(256)->qkwyekmiceaogwci(false), $this->usqseiuaeauwuwus(Constants::igswcauwsgmeougs)->acceqyqygswoecwe(self::muckogockysqwceq)->qkwyekmiceaogwci(false)->gswweykyogmsyawy(__("\x41\x50\111\x20\113\145\171", PR__MDL__DOMAIN_MANAGER))->acokiqqgsmoqaeyu(), $this->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->kesomeowemmyygey(1, Constants::eqewsqmqmsiocaeg, __("\101\x63\x74\x69\166\x65", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::ycaauyuekyyiuosk, __("\x56\151\x6f\154\141\164\x65\x64", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::yqkomaiikewyeges, __("\x42\154\157\143\x6b\145\144", PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__("\x53\x74\141\x74\165\x73", PR__MDL__DOMAIN_MANAGER)), $this->yyuiuwgokmwioomq(self::aemeeukyaaokioui)->kesomeowemmyygey(1, self::NOT_SPECIFIED, __("\116\157\x74\x20\x53\x70\x65\x63\x69\146\x69\145\x64", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(2, self::qyywsyikosmsacgu, __("\116\157\x74\x20\101\x6c\154\x6f\167\145\x64", PR__MDL__DOMAIN_MANAGER))->kesomeowemmyygey(3, self::wyeieyscswyiskcw, __("\x41\154\x6c\157\167\x65\x64", PR__MDL__DOMAIN_MANAGER))->gswweykyogmsyawy(__("\x50\x65\x72\155\x69\x73\163\x69\x6f\156", PR__MDL__DOMAIN_MANAGER)), $this->eoaomaokwkwqyqiq(self::geseccqgwqkukyuk)->gswweykyogmsyawy(__("\x4f\x77\x6e\145\x72\x73\150\x69\160\163", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Ownership::class), $this->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->gswweykyogmsyawy(__("\102\x61\x63\153\x6c\151\x6e\x6b\163", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class), $this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->ckmqkgwcusyaegmm()->uwmyqckcyamwaiww(Component::class)->kkeymosoimmgsaug()->gswweykyogmsyawy(__("\x41\x73\163\151\x67\156\x65\144\x20\x43\x6f\155\x70\157\156\145\156\x74\163", PR__MDL__DOMAIN_MANAGER)), $this->eoaomaokwkwqyqiq(self::kwouyaaaeiuuquis)->gswweykyogmsyawy(__("\120\165\x72\x63\150\141\163\x65\163", PR__MDL__DOMAIN_MANAGER))->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Purchase::class)]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::NAME))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::aemeeukyaaokioui)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::ogqcgemayqiaucag)->oikgogcweiiaocka()->ugquamoakekwyiqg(Component::class)); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { if (!is_numeric($mksyucucyswaukig)) { goto skkamseieeusycye; } $mksyucucyswaukig = $this->akkkoiiymmamsauc($mksyucucyswaukig); skkamseieeusycye: $mokawwccycoiqeka = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); return sprintf("\45\x73\x20\x28\45\x73\x29", $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::NAME), $mokawwccycoiqeka); } private function mqwogqieoumeoocw() : string { return $this->caokeucsksukesyo()->owgcciayoweymuws()->ycwmswocisskwuwg(self::muckogockysqwceq); } public function ukcqkkgyogwoiccm() : array { return [Constants::ciywsqoeiymemsys]; } public function kmuykuaakicwsocs($icwicymcioeyeyek, $miowmmgaiagcuyoo = null) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciyoccqkiamemcmm); if ($eqgoocgaqwqcimie && $ymqmyyeuycgmigyo) { goto igooksugieceoege; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto omqiayeucoioqoao; igooksugieceoege: if (preg_match("\x23\136\150\x74\164\160\50\163\x29\x3f\72\x2f\x2f\43", $eqgoocgaqwqcimie)) { goto cgiscsqwwgqqaeqi; } $eqgoocgaqwqcimie = "\x68\164\164\160\163\72\57\x2f{$eqgoocgaqwqcimie}"; cgiscsqwwgqqaeqi: if ($cwaqscoiqkokyase->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { goto scisgsyemmsekgos; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x45\156\164\x65\x72\145\144\40\x64\x6f\155\x61\x69\156\40\151\x73\x20\x6e\157\164\40\166\x61\154\x69\144\56", PR__MDL__DOMAIN_MANAGER), 400); goto cewmoqyysgsmuiya; scisgsyemmsekgos: $gmqiuuqqkwakoiiu = true; $eqgoocgaqwqcimie = untrailingslashit(preg_replace("\x2f\x5e\x77\x3f\x77\x3f\x77\x3f\134\x2e\x2f", '', $cwaqscoiqkokyase->mkcmkkskeeaskowy($eqgoocgaqwqcimie))); $mokawwccycoiqeka = $this->akkkoiiymmamsauc($eqgoocgaqwqcimie, Constants::ciyoccqkiamemcmm); if (!$mokawwccycoiqeka) { goto syiqkaasoueowwui; } $gmqiuuqqkwakoiiu = false; $kigowwqauiumummw = true; goto giaacoqqqsekcayy; syiqkaasoueowwui: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $kigowwqauiumummw = $sogksuscggsicmac[Constants::ckcawaoawwioqecq]; $mokawwccycoiqeka = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; giaacoqqqsekcayy: if ($kigowwqauiumummw) { goto ooeausyowguqicuo; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($mokawwccycoiqeka[Constants::iwyueouqaqegmcas], 400); goto egyyiccaeeiooaua; ooeausyowguqicuo: $wqykqusigegasqeg = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $this->kumuygiiqswoyasy()); $ukamowomoeiweqky = null; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); if (!$miowmmgaiagcuyoo) { goto wmywuusgukmmaams; } $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($miowmmgaiagcuyoo); if ($gmqiuuqqkwakoiiu) { goto ewymsmkkiksgwysk; } $ukamowomoeiweqky = $ueomouiqmosykioc->oqomcmyuuakigusk([Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq, $ueomouiqmosykioc::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); ewymsmkkiksgwysk: if ($ukamowomoeiweqky) { goto cmegwsegsosyqcai; } $sogksuscggsicmac = $ueomouiqmosykioc->ocsyiyiasyiwmuuc($wqykqusigegasqeg, $ycoeoaakqyskgykq); cmegwsegsosyqcai: wmywuusgukmmaams: if (!(!isset($sogksuscggsicmac) || !is_wp_error($sogksuscggsicmac))) { goto gkyawqqcmigqgaiq; } $sogksuscggsicmac = [Constants::gouqcwikiiygyasc => $wqykqusigegasqeg, Constants::vswoiouoaykswgym => "\x64\157\x6d\x61\x69\156\x5f\x61\144\144\145\x64", Constants::ckmqoekmugkggeym => $mokawwccycoiqeka, Constants::ciywsqoeiymemsys => 200, Constants::eoskkkieowogacws => sprintf("\45\x73\x3c\142\162\57\x3e\45\163", __("\104\x6f\155\141\x69\x6e\40\x73\x75\143\x63\x65\x73\163\x66\165\154\x6c\x79\40\141\x64\x64\x65\x64\x2e", PR__MDL__DOMAIN_MANAGER), __("\x50\154\145\x61\x73\145\40\x76\x65\x72\151\146\x79\x20\x64\x6f\x6d\x61\151\156\x2e", PR__MDL__DOMAIN_MANAGER))]; gkyawqqcmigqgaiq: egyyiccaeeiooaua: cewmoqyysgsmuiya: omqiayeucoioqoao: return $sogksuscggsicmac; } public function qmqogusoaqeygewm($mksyucucyswaukig) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $esuksqieigiqcaie = $gkyciwoiiisgywcs->get($mksyucucyswaukig, Constants::igswcauwsgmeougs); if ($esuksqieigiqcaie) { goto ugqaaewwmkocwwgy; } $mksyucucyswaukig = $gkyciwoiiisgywcs->set($mksyucucyswaukig, [Constants::igswcauwsgmeougs => $this->mqwogqieoumeoocw()]); ugqaaewwmkocwwgy: return parent::qmqogusoaqeygewm($mksyucucyswaukig); } public function gwkkkwyoomgsiaou($gwgucoaaqcwwciqq) { return $this->akkkoiiymmamsauc($gwgucoaaqcwwciqq, Constants::ciyoccqkiamemcmm); } public function amogqycocouwaico($mokawwccycoiqeka, $mkucggyaiaukqoce) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $aokagokqyuysuksm = $this->keeuqgyooycqoygw($mokawwccycoiqeka); $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::NAME); if ($aokagokqyuysuksm && $ymqmyyeuycgmigyo && $mkucggyaiaukqoce) { goto owmuceyswmgueasi; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\145\161\x75\151\162\145\x64\40\146\x69\145\154\144\x73\40\x6e\157\164\40\160\141\x73\x73\145\x64\56", PR__MDL__DOMAIN_MANAGER), 400); goto mwsmsguqqkcwiiuk; owmuceyswmgueasi: if ($this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto wakmayaoqoskekqy; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\x75\40\144\157\156\x74\40\150\x61\166\x65\x20\160\x65\x72\x6d\151\163\163\x69\x6f\x6e\40\x74\157\40\145\x64\x69\164\x20\x74\x68\151\163\x20\x64\x6f\155\141\151\156\x2e", PR__MDL__DOMAIN_MANAGER), 401); goto qmuwoecuacmkwgem; wakmayaoqoskekqy: $icwicymcioeyeyek = [$this->kumuygiiqswoyasy() => $aokagokqyuysuksm, Constants::NAME => $ymqmyyeuycgmigyo, Constants::ciywsqoeiymemsys => Constants::eqewsqmqmsiocaeg]; $ysyswymameciiyce = false; $eeamcawaiqocomwy = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if (!$eeamcawaiqocomwy) { goto wgewmqieuamsoayy; } $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm] = $eeamcawaiqocomwy; $ysyswymameciiyce = true; wgewmqieuamsoayy: if ($ysyswymameciiyce && !$this->smqueiqomceqaeka($aokagokqyuysuksm, $mkucggyaiaukqoce)) { goto sggawugoykqcmsug; } $sogksuscggsicmac = $this->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[Constants::ckcawaoawwioqecq]) { goto kqgcyoscsusgoaqi; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(implode("\x20", $sogksuscggsicmac[Constants::iwyueouqaqegmcas])); goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $sogksuscggsicmac = $icwicymcioeyeyek; ueigkucgaucgeimc: goto wkeuuycukmuqiaom; sggawugoykqcmsug: $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\162\162\171\40\x79\157\165\x20\x63\141\156\40\156\x6f\164\x20\x75\160\144\141\164\145\x20\x79\x6f\x75\x72\40\x64\157\155\x61\151\x6e\40\x61\x64\144\x72\145\x73\x73\x2e", PR__MDL__DOMAIN_MANAGER), 400); wkeuuycukmuqiaom: qmuwoecuacmkwgem: mwsmsguqqkcwiiuk: return $sogksuscggsicmac; } public function smqueiqomceqaeka($mokawwccycoiqeka, $mkucggyaiaukqoce) : bool { $yciaosuiyeieceug = false; if (!($mokawwccycoiqeka && $mkucggyaiaukqoce)) { goto msemumccgceyugmg; } $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), Ownership::qkmqmaeuyokqgemg => $mokawwccycoiqeka, Constants::ucmueuwwcmocgmig => Ownership::myiiuekcoeksaasm]); if ($ukamowomoeiweqky) { goto eogwckcymuugikuy; } $ukamowomoeiweqky = Ownership::symcgieuakksimmu()->cwkywyqksyucoyia([Constants::meksegaoamowuwoq => $yoiguusocukqeayg->iooowgsqoyqseyuu($mkucggyaiaukqoce), Ownership::qkmqmaeuyokqgemg => $mokawwccycoiqeka, Constants::ucmueuwwcmocgmig => Ownership::cymeeiwqgosaoaia]); if (!$ukamowomoeiweqky) { goto eeauyscekuckoues; } $yciaosuiyeieceug = true; eeauyscekuckoues: eogwckcymuugikuy: msemumccgceyugmg: return $yciaosuiyeieceug; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::CREATED_AT: $eqgoocgaqwqcimie = $this->ooeucgsymeocguuu($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $this->caokeucsksukesyo()->eiwcuqigayigimak()->yoaaussmackoisuw(), null, $mksyucucyswaukig); goto wagqgeqymeqoeuyi; case Constants::ciyoccqkiamemcmm: if (!($this->wmwguecgowcscues() || $this->wkcuasmkgoscaiay())) { goto iwsuawwqomaowuii; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($eqgoocgaqwqcimie, "\150\164\x74\160\x73\x3a\x2f\57{$eqgoocgaqwqcimie}"); iwsuawwqomaowuii: goto wagqgeqymeqoeuyi; default: $eqgoocgaqwqcimie = parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto wagqgeqymeqoeuyi; } qoqskyuuwueqkquk: wagqgeqymeqoeuyi: return $eqgoocgaqwqcimie; } public function aqiwcawmimkygoau($esuksqieigiqcaie, $gwgucoaaqcwwciqq = false) { if (self::muckogockysqwceq === strlen($esuksqieigiqcaie)) { goto asiqwuoswmigcaki; } $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x59\x6f\x75\162\40\101\120\111\40\x4b\145\171\x20\x69\163\x20\156\x6f\164\x20\166\x61\154\151\144\56", PR__MDL__DOMAIN_MANAGER), 400); goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $gqgemcmoicmgaqie[Constants::igswcauwsgmeougs] = $esuksqieigiqcaie; if (!($gwgucoaaqcwwciqq !== false)) { goto wcugqegqsuuuwqao; } $gqgemcmoicmgaqie[Constants::ciyoccqkiamemcmm] = $gwgucoaaqcwwciqq; wcugqegqsuuuwqao: $sogksuscggsicmac = $this->oqomcmyuuakigusk($gqgemcmoicmgaqie); ciykoyeioqgyaeqo: return $sogksuscggsicmac; } public function mwiwqcqqeoiygwia($esuksqieigiqcaie, $mokawwccycoiqeka) { if ($mokawwccycoiqeka) { goto ouamogymawucwswu; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\161\165\145\163\x74\x20\x6f\162\x69\x67\x69\x6e\x20\x6e\x6f\164\40\x64\145\x74\145\143\164\145\144\56", PR__MDL__DOMAIN_MANAGER), 400); goto mugqyyeayeyggqqk; ouamogymawucwswu: $keccaugmemegoimu = $this->aqiwcawmimkygoau($esuksqieigiqcaie, $mokawwccycoiqeka); if (is_wp_error($keccaugmemegoimu)) { goto emmsycooskoqmgeg; } if ($keccaugmemegoimu) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\x6e\40\x6e\157\x74\40\146\x6f\165\x6e\x64\40\x64\157\155\141\151\156\x2c\x20\x70\154\145\141\163\145\x20\x67\145\x74\x20\x61\x6e\144\40\x61\160\151\40\x6b\x65\171\x20\142\x79\x20\x67\x75\x69\144\145\x2e", PR__MDL__DOMAIN_MANAGER), 404); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $keccaugmemegoimu = __("\x41\120\x49\40\113\x65\171\x20\151\163\x20\x76\x61\x6c\x69\x64\56", PR__MDL__DOMAIN_MANAGER); qgeugwymkkiacwoc: emmsycooskoqmgeg: mugqyyeayeyggqqk: return $keccaugmemegoimu; } public function eqqmweomwciucoci($mkucggyaiaukqoce, $kqwygogeauwwyoca = false, $goocueskqsmqagii = true, $suaemuyiacqyugsm = 1, $weyoqgcesqgeusiu = 10) : array { $ycoeoaakqyskgykq = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($mkucggyaiaukqoce); try { $wkkweuacukumqmya = [Constants::meksegaoamowuwoq => $ycoeoaakqyskgykq]; if (!$kqwygogeauwwyoca) { goto acsqgiuageaasiyy; } $wkkweuacukumqmya[Constants::ucmueuwwcmocgmig] = [Constants::ciyoccqkiamemcmm => [Ownership::myiiuekcoeksaasm, Ownership::gogsqoacoimiocqg], Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]; acsqgiuageaasiyy: $oysoyeaucuawyaky = Ownership::symcgieuakksimmu()->ssiyoimagsskwsoi($wkkweuacukumqmya, Ownership::qkmqmaeuyokqgemg); $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou([$this->kumuygiiqswoyasy() => [Constants::ciyoccqkiamemcmm => $oysoyeaucuawyaky, Constants::euoaaiqkqcqcgeco => Constants::wuwqeigceueyqmsc]]); if ($goocueskqsmqagii) { goto oomguqikqokqwgku; } $wqogggcaamgeiwew = $this->cwgkcyyaymmsomqa($this->iiqauwkoiguyeawu($siykeiywomwwuoiw)); goto samwkqgwouggsguc; oomguqikqokqwgku: $wqogggcaamgeiwew = $this->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $suaemuyiacqyugsm, Constants::ausqeuugegoygouq => $weyoqgcesqgeusiu]); samwkqgwouggsguc: } catch (Exception $wgaoewqkwgomoaai) { $wqogggcaamgeiwew = []; } return $wqogggcaamgeiwew; } public function aokkqqekiykiikki(WP_REST_Request $aqmwamyiwgeeymqa, bool $mwiwqcqqeoiygwia = true) : bool { $iakkeikwceeomgyq = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mwiwqcqqeoiygwia) { goto wyuemgggaqogsmsq; } $mokawwccycoiqeka = $this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::ciyoccqkiamemcmm); goto guykyqecgswcsmws; wyuemgggaqogsmsq: $mokawwccycoiqeka = $this->aqiwcawmimkygoau($aqmwamyiwgeeymqa->get_param(Constants::igswcauwsgmeougs), $iakkeikwceeomgyq); guykyqecgswcsmws: $ksaameoqigiaoigg = false; if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto kkumywowcoycymeo; } $ksaameoqigiaoigg = $this->koeimwecyiiqgesk($mokawwccycoiqeka); kkumywowcoycymeo: return $ksaameoqigiaoigg; } public function koeimwecyiiqgesk($mokawwccycoiqeka, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; switch ($this->ogegcqqcukiaqscy(self::aemeeukyaaokioui, $mokawwccycoiqeka, self::NOT_SPECIFIED)) { case self::wyeieyscswyiskcw: $ksaameoqigiaoigg = true; goto miweggwqeiaeweia; case self::NOT_SPECIFIED: default: $gwgucoaaqcwwciqq = $this->qogaqkcsogcqiaic($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm); if ($gwgucoaaqcwwciqq && $this->isgemoumsseimwio($mokawwccycoiqeka) && $this->ucegqiqcwyqmsuwm($gwgucoaaqcwwciqq, $aqmwamyiwgeeymqa)) { goto ousiuuwgwkiyikyq; } $qoowakyqgwcscuss = self::qyywsyikosmsacgu; goto ogsaaqsaogcqiouy; ousiuuwgwkiyikyq: $qoowakyqgwcscuss = self::wyeieyscswyiskcw; ogsaaqsaogcqiouy: $this->wqikesawekycweoi($mokawwccycoiqeka, [self::aemeeukyaaokioui => $qoowakyqgwcscuss], true); goto miweggwqeiaeweia; } kqqiegkuqagcqsya: miweggwqeiaeweia: return $ksaameoqigiaoigg; } public function isgemoumsseimwio($mokawwccycoiqeka) : bool { return $this->mgacegaoeamymmya(self::kwouyaaaeiuuquis, $mokawwccycoiqeka)->exists(); } public function ucegqiqcwyqmsuwm($iakkeikwceeomgyq, ?WP_REST_Request $aqmwamyiwgeeymqa = null) : bool { $ksaameoqigiaoigg = false; $yywmssikcykmsiqi = ["\x69\x72"]; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), $yywmssikcykmsiqi)) { goto ikqqskkqqwmwssoo; } if (!$aqmwamyiwgeeymqa) { goto iwekmyyccgiyuecc; } $ksaameoqigiaoigg = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ssamkiocukucqkwg($aqmwamyiwgeeymqa->get_param("\151\160\163"), $yywmssikcykmsiqi); iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: $ksaameoqigiaoigg = true; aomysykcgikegiau: return $ksaameoqigiaoigg; } }
