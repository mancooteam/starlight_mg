<html>

<head>
    <title>Pomocnik walki</title>
    {$headerinclude}
</head>

<body>
    {$header}

    <h1>Pomocnik walki</h1>

    <res style="display: flex; justify-content: center; align-items: center; gap: 15px;">
        <label for="p1">Postać atakująca:</label><input type="text" id="p1">
        <label for="p2">Przeciwnik:</label><input type="text" id="p2">
    </res>

    <res>
        <titl>Skradanie się do przeciwnika</titl>
        <table>
            <tr>
                <td style="width: 205px !important;">Skradanie się do przeciwnika:</td>
                <td style="width:70px;"><em id="skradaniep">1d14</em></td>
                <td style="width: 100px !important;">Wynik z kości:</td>
                <td style="width:70px;"><input type="number" value="1" min="1" id="wyniksp"></td>
            </tr>
            <tr>
                <td colspan="4">Normalny drapieżnik: <em id="nspi">-</em> || Śpiący drapieżnik: <em id="spi">-</em></td>
            </tr>
            <tr>
                <td colspan="4"><textarea id="wyniksptxt">[b]Próba skradania się [POSTAĆ][/b]:
1-9: próba nie udana | 10+: próba udana
[b]Wypada:[/b] - → skradanie (nie) udane</textarea></td>
            </tr>
        </table> <br><br>
        <titl>Skradanie się do innej postaci</titl>

        <table>
            <tr>
                <td style="width: 205px !important;">Skradanie się do innej postaci:</td>
                <td style="width: 70px !important;"><em id="skradanieip">1d12</em></td>
                <td style="width: 100px !important;">Wynik z kości:</td>
                <td style="width:70px;"><input type="number" value="1" min="1" id="wyniksip"></td>
            </tr>
            <tr>
                <td style="width: 205px !important;">Wykrycie skradającej się postaci:</td>
                <td style="width: 70px !important;"><em id="wykrycieip">1d14</em></td>
                <td style="width: 100px !important;">Wynik z kości:</td>
                <td><input type="number" value="1" min="1" id="wynikwip"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <p id="wynikip2">Skradanie się (nie) powiodło</p>
                </td>
            </tr>
            <tr>
                <td colspan="4"><textarea id="wyniksptxt2">[b]Próba skradania się [POSTAĆ 1] do [POSTAĆ 2][/b]: 
[b]Skradanie [POSTAĆ 1][/b]: x  || [b]Wykryzie [POSTAĆ 2][/b]: y
[b]Wypada:[/b] x >= y → Próba skradania nieudana[/b]</textarea></td>
            </tr>
        </table>
    </res>

    <res>
        <titl>Celność</titl>
        <table>
            <tr>
                <td style="width: 205px !important;">Celność ataku:</td>
                <td style="width:70px;"><em id="atak">1d20</em></td>
                <td style="width: 100px !important;">Wynik z kości:</td>
                <td style="width:70px;"><input type="number" value="-1" min="0" id="watak"></td>
            </tr>
            <tr>
                <td colspan="4" id="wynikatak">wynik</td>
            </tr>
            <tr>
                <td style="width: 205px !important;">Celność zablokowania:</td>
                <td><em id="blok">1d20</em></td>
                <td style="width: 100px !important;">Wynik z kości:</td>
                <td><input type="number" value="-1" min="0" id="wblok"></td>
            </tr>
            <tr>
                <td colspan="4" id="wynikblok">wynik</td>
            </tr>
            <tr>
                <td style="width: 205px !important;">Celność uniku:</td>
                <td><em id="unik">1d20</em></td>
                <td style="width: 100px !important;">Wynik z kości:</td>
                <td><input type="number" value="-1" min="0" id="unik"></td>
            </tr>
            <tr>
                <td colspan="4" id="wynikunik">wynik</td>
            </tr>
            <tr>
                <td colspan="4"><textarea id="wyniksptxt3">Jakiś tam fajny text wartości innej niż -1 :)</textarea></td>
            </tr>
        </table>
    </res>

    <res>
        <titl>Obrażenia</titl>

        <table>
            <tr>
                <td style="width: 205px !important;">
                    <b>Siła atakującego:</b>
                </td>
                <td>
                    <input type="number" id="a_c_siła" min=0 value=0 max=70>
                </td>
                <td style="width: 205px !important;">
                    <b>Odporność atakowanego</b>
                </td>
                <td>
                    <input type="number" id="a_c_odp" min=0 value=0 max=70>
                </td>
            </tr>
            <tr>
                <td style="width: 205px !important;">
                    <b>Wynik z kości atakującego:</b> <span>6d6</span>
                </td>
                <td>
                    <input type="number" id="k_a_c_siła" min=0 value=0 max=70>
                </td>
                <td style="width: 205px !important;">
                    <b>Wynik kości atakowanego</b> <span id="kosci_a_c">xd6</span>
                </td>
                <td>
                    <input type="number" id="k_a_c_odp" min=0 value=0 max=70>
                </td>
            </tr>
            <tr>
                <td colspan="4"><textarea id="wyniksptxt">Coś tam coś tam robimy matmę</textarea></td>
            </tr>
        </table>

    </res>

    <res>
        <form id="polowanie">
            <titl>Opis terenu</titl>
            <label for="teren">Typ terenu:</label>
            <select name="teren" id="teren">
                <option value="orij">Okolice rzek i jezior</option>
                <option value="suche">Tereny suche, piaskowe</option>
                <option value="gorskie">Tereny górskie, skaliste</option>
                <option value="domy">Przydroża i okolice domów dwunogów</option>
                <option value="glebia">Głębia lasu</option>
                <option value="brzeg">Brzeg lasu</option>
                <option value="pola">Łąki, pola</option>
                <option value="murawy">Górskie murawy i ziołorośla</option>
                <option value="zbocze">Zbocza gór</option>
            </select>
            <label for="pora">Pora dnia:</label>
            <select name="pora" id="pora">
                <option value="dzien">Dzień</option>
                <option value="noc">Noc</option>
            </select>
            <label for="sezon">Sezon:</label>
            <select name="sezon" id="sezon">
                <option value="wiosna">Pora Nowych Liści</option>
                <option value="lato">Pora Zielonych Liści</option>
                <option value="jesien">Pora Opadających Liści</option>
                <option value="zima">Pora Nagich Drzew</option>
            </select>
            <br><br>
            <titl>Statystyki podstawowe</titl>
            <table>
                <tr>
                    <td style="width: 95px;">Poziom</td>
                    <td style="width: 95px;">Siła</td>
                    <td style="width: 95px;">Zręczność</td>
                    <td style="width: 95px;">Szybkość</td>
                    <td style="width: 95px;">Odporność</td>
                    <td style="width: 95px;">HP</td>
                    <td style="width: 95px;">Wytrzymałość</td>
                </tr>
                <tr>
                    <td><input type="number" id="lvl" min=1 value=1></input></td>
                    <td><input type="number" id="s" min=1 value=1></input></td>
                    <td><input type="number" id="zr" min=1 value=1></input></td>
                    <td><input type="number" id="sz" min=1 value=1></input></td>
                    <td><input type="number" id="o" min=1 value=1></input></td>
                    <td><input type="number" id="hp" min=1 value=1></input></td>
                    <td><input type="number" id="w" min=1 value=1></input></td>
                </tr>
            </table>
            <titl>Umiejętności</titl>
            <label for="plywanie">Pływanie:</label><input type="number" id="plywanie" min=0 value=0 max=3>
            <label for="lowienie">Łowienie:</label><input type="number" id="lowienie" min=0 value=0 max=3>
            <label for="skradanie">Skradanie:</label><input type="number" id="skradanie" min=0 value=0 max=3>
            <label for="tropienie">Tropienie:</label><input type="number" id="tropienie" min=0 value=0 max=3>
            <label for="wspinaczka">Wspinaczka:</label><input type="number" id="wspinaczka" min=0 value=0 max=3>
            <label for="zielarstwo">Zielarstwo:</label><input type="number" id="zielarstwo" min=0 value=0 max=3>
            <br>
            <titl>Cechy</titl>
            <h3>Cechy pozytywne</h3>
            <container>
                <label><input type="checkbox" name="cechy" value="Cichy krok">Cichy krok</label>
                <label><input type="checkbox" name="cechy" value="Końskie zdrowie">Końskie zdrowie</label>
                <label><input type="checkbox" name="cechy" value="Króliczy słuch">Króliczy słuch</label>
                <label><input type="checkbox" name="cechy" value="Ostre Kły">Ostre kły</label>
                <label><input type="checkbox" name="cechy" value="Ostre pazury">Ostre pazury</label>
                <label><input type="checkbox" name="cechy" value="Psi węch">Psi węch</label>
                <label><input type="checkbox" name="cechy" value="Sokoli wzrok">Sokoli wzrok</label>
                <label><input type="checkbox" name="cechy" value="Twarda skóra">Twarda skóra</label>
                <label><input type="checkbox" name="cechy" value="Wspinacz">Wspinacz</label>
            </container>
            <br><br>
            <h3>Cechy mieszane</h3>
            <container>
                <label><input type="checkbox" name="cechy" value="Długodystansowiec">Długodystansowiec</label>
                <label><input type="checkbox" name="cechy" value="Duch gór">Duch gór</label>
                <label><input type="checkbox" name="cechy" value="Dziecko wiatru">Dziecko wiatru</label>
                <label><input type="checkbox" name="cechy" value="Gorąca krew">Gorąca krew</label>
                <label><input type="checkbox" name="cechy" value="Instynkyt przetrwania">Instynkt przetrwania</label>
                <label><input type="checkbox" name="cechy" value="Leśny cień">Leśny cień</label>
                <label><input type="checkbox" name="cechy" value="Nocny łowca">Nocny łowca</label>
                <label><input type="checkbox" name="cechy" value="Reflex">Reflex</label>
                <label><input type="checkbox" name="cechy" value="Ryba w wodzie">Ryba w wodzie</label>
                <label><input type="checkbox" name="cechy" value="Sprinter">Sprinter</label>
                <label><input type="checkbox" name="cechy" value="Strażnik doliny">Strażnik doliny</label>
                <label><input type="checkbox" name="cechy" value="Suche łapy">Suche łapy</label>
                <label><input type="checkbox" name="cechy" value="Śliska sprawa">Śliska sprawa</label>
                <label><input type="checkbox" name="cechy" value="Światłowidzenie">Światłowidzenie</label>
                <label><input type="checkbox" name="cechy" value="Zapaśnik">Zapaśnik</label>
                <label><input type="checkbox" name="cechy" value="Zimna krew">Zimna krew</label>
            </container>
            <br><br>
            <h3>Cechy negatywne</h3>
            <container>
                <label><input type="checkbox" name="cechy" value="Bezpłodność">Bezpłodność</label>
                <label><input type="checkbox" name="cechy" value="Brak ogona">Brak ogona</label>
                <label><input type="checkbox" name="cechy" value="Ciamajda">Ciamajda</label>
                <label><input type="checkbox" name="cechy" value="Ciężki krok">Ciężki krok</label>
                <label><input type="checkbox" name="cechy" value="Kulawa noga">Kulawa noga</label>
                <label><input type="checkbox" name="cechy" value="Nadwrażliwy słuch">Nadwrażliwy słuch</label>
                <label><input type="checkbox" name="cechy" value="Nadwrażliwy węch">Nadwrażliwy węch</label>
                <label><input type="checkbox" name="cechy" value="Nadwrażliwy wzrok">Nadwrażliwy wzrok</label>
                <label><input type="checkbox" name="cechy" value="Słaba głowa">Słaba głowa</label>
                <label><input type="checkbox" name="cechy" value="Słaby słuch jednostronny">Słaby słuch
                    jednostronny</label>
                <label><input type="checkbox" name="cechy" value="Słaby słuch obustronny">Słaby słuch obustronny</label>
                <label><input type="checkbox" name="cechy" value="Słaby wzrok jednostronny">Słaby wzrok
                    jednostronny</label>
                <label><input type="checkbox" name="cechy" value="Słaby wzrok obustronny">Słaby wzrok obustronny</label>
                <label><input type="checkbox" name="cechy" value="Stępiony węch">Stępiony węch</label>
                <label><input type="checkbox" name="cechy" value="Tępe kły">Tępe kły</label>
                <label><input type="checkbox" name="cechy" value="Tępe pazury">Tępe pazury</label>
                <label><input type="checkbox" name="cechy" value="Wątłe zdrowie">Wątłe zdrowie</label>
                <label><input type="checkbox" name="cechy" value="Wrażliwa skóra">Wrażliwa skóra</label>
                <label><input type="checkbox" name="cechy" value="Wrażliwy brzuch">Wrażliwy brzuch</label>
            </container>
            <br><br>
            <h3>Cechy negatywne ciężkie</h3>
            <container>
                <label><input type="checkbox" name="cechy" value="Albinizm">Albinizm</label>
                <label><input type="checkbox" name="cechy" value="Brak łapy">Brak łapy</label>
                <label><input type="checkbox" name="cechy" value="Brak ogona">Brak ogona</label>
                <label><input type="checkbox" name="cechy" value="Brak węchu">Brak węchu</label>
                <label><input type="checkbox" name="cechy" value="Głuchota jednostronna">Głuchota jednostronna</label>
                <label><input type="checkbox" name="cechy" value="Głuchota obustronna">Głuchota obustronna</label>
                <label><input type="checkbox" name="cechy" value="Ślepota jednostronna">Ślepota jednostronna</label>
                <label><input type="checkbox" name="cechy" value="Ślepota obustronna">Ślepota obustronna</label>
            </container>
        </form>
    </res>

    <przycisk><a href="mg.php">Wróć</a></przycisk>

    {$footer}

    <script>
        'use strict';

        let mod_skr_p = "1d14";

        let get_cechy = () => {
            const checkboxes = document.querySelectorAll('input[name="cechy"]:checked');
            return Array.from(checkboxes).map(cb => cb.value);
        }

        let get_mod_cechy = (s) => {
            if (s == 1) return "+1";
            else if (s == 2) return "+3";
            else if (s == 3) return "+5";
            return " ";
        }

        let get_mod_skr = (c) => {
            if (c.includes("Brak ogona")) mod_skr_p += "-2";
            if (c.includes("Kulawa noga")) mod_skr_p += "-3";
            if (c.includes("Brak łapy")) mod_skr_p += "-5";
            if (c.includes("Cichy krok")) mod_skr_p += "+3";
            if (c.includes("Ciężki krok")) mod_skr_p += "-3";
            if (c.includes("Ciamajda")) mod_skr_p += "-2";
            if (c.includes("Leśny cień")) {
                if (["glebia", "brzeg"].includes(teren)) mod_skr_p += "+1";
                else if (["pola", "suche"].includes(teren)) mod_skr_p += "-1";
            }
            if (c.includes("Dziecko wiatru")) {
                if (["pola", "suche"].includes(teren)) mod_skr_p += "+1";
                else if (["glebia", "brzeg"].includes(teren)) mod_skr_p += "-1";
            }
            if (c.includes("Duch gór")) {
                if (["gorskie", "murawy"].includes(teren)) mod_skr_p += "+1";
                else if (["pola", "suche", "domy"].includes(teren)) mod_skr_p += "-1";
            }
            if (c.includes("Strażnik doliny")) {
                if (["gorskie", "murawy"].includes(teren)) mod_skr_p += "-1";
                else if (["pola", "suche", "domy"].includes(teren)) mod_skr_p += "+1";
            }
            if (c.includes("Suche łapy")) {
                if (["suche", "gorskie"].includes(teren)) mod_skr_p += "+1";
                else if (["pola", "orij"].includes(teren)) mod_skr_p += "-1";
            }
            if (c.includes("Ryba w wodzie")) {
                if (["suche", "gorskie"].includes(teren)) mod_skr_p += "-1";
                else if (["pola", "orij"].includes(teren)) mod_skr_p += "+1";
            }
            if (c.includes("Nadwrażliwy wzrok")) mod_skr_p += "-2 (jeżeli w ostrym słońcu)";
        }

        let skradanie_przeciwnik = (c, s, p1, p2) => {
            mod_skr_p += get_mod_cechy(s);
            get_mod_skr(c);
        }

        let wynik_k_sp = (n,p) => {
            let txt = "";
            if (n <= 9) {
                document.getElementById("nspi").innerText = "nie udane";
                txt = "nie udane";
            }
            else {
                document.getElementById("nspi").innerText = "udane!";
                txt = "udane";
            }
            document.getElementById("wyniksptxt").value = `[b]Próba skradania się `+p+`[/b] \n1-9: próba nie udana | 10+: próba udana\n[b]Wypada:[/b] `+n+` → skradanie ` + txt;
        }

        let wynik_k_sp_s = (n) => {
            if (n <= 5) document.getElementById("spi").innerText = "nie udane";
            else document.getElementById("spi").innerText = "udane!"
        }

        let wyniks_sk_ip = (skr, wykr, p1, p2) => {
            let txt = "";
            let comp = "";
            const ans = document.getElementById("wynikip2");
            if (skr > wykr) {
                txt = "udana";
                comp = skr+" > "+wykr;
                ans.innerText = "Skradanie się powiodło";
            } else {
                txt = "nieudana";
                comp = wykr+" >= "+skr;
                ans.innerText = "Skradanie się nie powiodło";
            }
            document.getElementById("wyniksptxt2").value = `[b]Próba skradania się `+p1+` do `+p2+`[/b]: \n[b]Skradanie `+p1+`[/b]: `+skr+`  || [b]Wykryzie `+p2+`[/b]: `+skr+` \n[b]Wypada:[/b] `+comp+` → Próba skradania `+txt+`[/b]`;
        }

        let get_mod = (st) => {
            if (st <= 5) return "";
            if (st <= 8)  return "+1";
            if (st <= 12) return "+2";
            if (st <= 17) return "+3";
            if (st <= 22) return "+4";
            if (st <= 27) return "+5";
            if (st <= 33) return "+6";
            if (st <= 40) return "+7";
            if (st <= 47) return "+8";
            if (st <= 54) return "+9";
            if (st <= 62) return "+10";
            if (st <= 70) return "+11";
            
            return "BŁAD :)";
        }

        let obliczenie_ataku = (cechy, s) => {
            let mod = "1d20" + get_mod(s);
            if (cechy.includes("Kulawa noga")) mod += "-3";
            if (cechy.includes("Brak łapy")) mod += "-5";
            if (cechy.includes("Sokoli wzrok")) mod += "+2";
            if (cechy.includes("Słaby wzrok jednostronny")) mod += "-1";
            if (cechy.includes("Słaby wzrok obustronny")) mod += "-2";
            if (cechy.includes("Ślepota jednostronna")) mod += "-4";
            if (cechy.includes("Ślepota obustronna")) mod += "-8";

            if (cechy.includes("Leśny cień")) {
                if (["glebia", "brzeg"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "suche"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Dziecko wiatru")) {
                if (["pola", "suche"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["glebia", "brzeg"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Duch gór")) {
                if (["gorskie", "murawy"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "suche", "domy"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Strażnik doliny")) {
                if (["gorskie", "murawy"].includes(teren)) {
                    mod += "-1";
                    }
                else if (["pola", "suche", "domy"].includes(teren)) {
                    mod += "+1";
                    }
            }
            if (cechy.includes("Suche łapy")) {
                if (["suche", "gorskie"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "orij"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Ryba w wodzie")) {
                if (["suche", "gorskie"].includes(teren)) {
                    mod += "-1";
                    }
                else if (["pola", "orij"].includes(teren)) {
                    mod += "+1";
                    }
            }

            if (cechy.includes("Reflex")) mod += "-2 celości pierwszego ataku";
            if (cechy.includes("Instynkyt przetrwania")) mod += "-2 (HP < 20%)";
            if (cechy.includes("Nadwrażliwy wzrok")) mod += "-2 (w ostrym słońcu)";
            document.getElementById("atak").innerText = mod;
        } 

        let obliczenie_bloku = (cechy, s) => {
            let mod = "1d20" + get_mod(s);
            if (cechy.includes("Twarda skóra")) mod += "+2";
            if (cechy.includes("Wrażniwa skóra")) mod += "-2";
            if (cechy.includes("Ciamajda")) mod += "-2";
            if (cechy.includes("Zapaśnik")) mod += "+2";
            
            if (cechy.includes("Leśny cień")) {
                if (["glebia", "brzeg"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "suche"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Dziecko wiatru")) {
                if (["pola", "suche"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["glebia", "brzeg"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Duch gór")) {
                if (["gorskie", "murawy"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "suche", "domy"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Strażnik doliny")) {
                if (["gorskie", "murawy"].includes(teren)) {
                    mod += "-1";
                    }
                else if (["pola", "suche", "domy"].includes(teren)) {
                    mod += "+1";
                }
            }
            if (cechy.includes("Suche łapy")) {
                if (["suche", "gorskie"].includes(teren)) {
                    mod += "+1";
                }
                else if (["pola", "orij"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Ryba w wodzie")) {
                if (["suche", "gorskie"].includes(teren)) {
                    mod += "-1";
                    }
                else if (["pola", "orij"].includes(teren)) {
                    mod += "+1";
                    }
            }
            if (cechy.includes("Wrażliwa skóra")) mod += "-2";
            document.getElementById("blok").innerText = mod;
        }

        let obliczenie_uniku = (cechy, s) => {
            let mod = "1d20" + get_mod(s);
            if (cechy.includes("Kulawa noga")) mod += "-3";
            if (cechy.includes("Brak łapy")) mod += "-5";
            if (cechy.includes("Sokoli wzrok")) mod += "+2";
            if (cechy.includes("Słaby wzrok jednostronny")) mod += "-1";
            if (cechy.includes("Słaby wzrok obustronny")) mod += "-2";
            if (cechy.includes("Ślepota jednostronna")) mod += "-4";
            if (cechy.includes("Ślepota obustronna")) mod += "-8";

            if (cechy.includes("Leśny cień")) {
                if (["glebia", "brzeg"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "suche"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Dziecko wiatru")) {
                if (["pola", "suche"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["glebia", "brzeg"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Duch gór")) {
                if (["gorskie", "murawy"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "suche", "domy"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Strażnik doliny")) {
                if (["gorskie", "murawy"].includes(teren)) {
                    mod += "-1";
                    }
                else if (["pola", "suche", "domy"].includes(teren)) {
                    mod += "+1";
                    }
            }
            if (cechy.includes("Suche łapy")) {
                if (["suche", "gorskie"].includes(teren)) {
                    mod += "+1";
                    }
                else if (["pola", "orij"].includes(teren)) {
                    mod += "-1";
                    }
            }
            if (cechy.includes("Ryba w wodzie")) {
                if (["suche", "gorskie"].includes(teren)) {
                    mod += "-1";
                    }
                else if (["pola", "orij"].includes(teren)) {
                    mod += "+1";
                    }
            }
            if (cechy.includes("Nadwrażliwy wzrok")) mod += "-2 (w ostrym słońcu)";

            if (cechy.includes("Reflex")) mod += "+2 celości pierwszego uniku";
            if (cechy.includes("Instynkyt przetrwania")) mod += "+2 (HP < 20%)";

            document.getElementById("unik").innerText = mod;
        }

        let wynik = (n) => {
            if (n <= 8) return "nieudany";
            if (n <= 12) return "słaby";
            if (n <= 18) return "udany";
            if ( n >= 19) return "krytyczny";
        }

        let wynik_ataku = (w,p) => {
            document.getElementById("wynikatak").innerText = wynik(w);
            return "[b]Atak "+ p + " :[/b] " + wynik(w);
        }

        let wynik_blokowania = (w,p) => {
            document.getElementById("wynikblok").innerText = wynik(w);
            return "[b]Blokowanie "+ p + " :[/b] " + wynik(w);
        }

        let wynik_uniku= (w,p) => {
            document.getElementById("wynikunik").innerText = wynik(w);
            return "[b]Unik "+ p + " :[/b] " + wynik(w);
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.addEventListener('change', e => {
                mod_skr_p = "1d14";
                let ans_azu = "";

                const postac1 = document.getElementById("p1")?.value || "[POSTAĆ 1]";
                const postac2 = document.getElementById("p2")?.value || "[POSTAĆ 2]";

                const wynikskr_sp = document.getElementById("wyniksp")?.valueAsNumber || 1;

                const wynikskr_sip = document.getElementById("wyniksip")?.valueAsNumber || 1;
                const wynikskr_wip = document.getElementById("wynikwip")?.valueAsNumber || 1;

                const watak = document.getElementById("watak")?.valueAsNumber || -1;
                ans_azu += wynik_ataku(watak,postac1) + "\n";
                console.log(ans_azu);
                const wblok = document.getElementById("wblok")?.valueAsNumber || -1;
                ans_azu += wynik_blokowania(wblok,postac1) + "\n";
                console.log(ans_azu);
                const wunik = document.getElementById("wunik")?.valueAsNumber || -1;
                ans_azu += wynik_uniku(wunik,postac1) + "\n";
                console.log(ans_azu);
                document.getElementById("wyniksptxt3").value = ans_azu;

                const a_c_sila = document.getElementById("a_c_sila")?.valueAsNumber || 0;
                const a_c_opd = document.getElementById("a_c_opd")?.valueAsNumber || 0;
                const k_a_c_sila = document.getElementById("k_a_c_sila")?.valueAsNumber || 0;
                const k_a_c_odp = document.getElementById("k_a_c_odp")?.valueAsNumber || 0;

                const teren = document.getElementById('teren')?.value || "orij";
                const p_dnia = document.getElementById("pora")?.value || "dzien";
                const sezon = document.getElementById("sezon")?.value || "wiosna";
                const poziom = document.getElementById("lvl")?.valueAsNumber || 0;

                const skradanie = document.getElementById("skradanie")?.valueAsNumber || 0;
                const zr = document.getElementById("zr")?.valueAsNumber || 0;
                const sz = document.getElementById("sz")?.valueAsNumber || 0;
                const o = document.getElementById("o")?.valueAsNumber || 0;


                const cechy = get_cechy();

                skradanie_przeciwnik(cechy, skradanie, postac1, postac2);
                document.getElementById("skradaniep").innerText = mod_skr_p;

                wynik_k_sp(wynikskr_sp,postac1);
                wynik_k_sp_s(wynikskr_sp);
                wyniks_sk_ip(wynikskr_sip,wynikskr_wip, postac1, postac2);

                obliczenie_ataku(cechy,zr);
                obliczenie_bloku(cechy,o);
                obliczenie_uniku(cechy,sz);

            });
        });
    </script>

</body>
<style>
    h1 {
        text-align: center;
        background: var(--tlo3);
        border: solid 1px var(--tlo4);
        padding: 30px;
    }

    przycisk {
        display: block;
        line-height: 20px;
        width: 82px;
        background: var(--tlo3);
        padding: 4px;
        border: 1px solid var(--tlo4);
        box-shadow: 0px 0px 3px 2px var(--tlo3);
        margin-bottom: 8px;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Poppins';
        font-size: 12px;
        margin-top: 13px;
    }

    label {
        margin-left: 10px;
        font-size: 12px;
    }

    res {
        margin: auto;
        padding: 20px;
        background: var(--tlo1);
        border: solid 1px var(--tlo4);
        box-shadow: 0px 0px 4px 0px var(--tlo4);
        display: block;
        margin-top: 20px;
    }

    res span {
        color: var(--em1);
        font-weight: bold;
    }

    input[type="number"] {
        background: var(--tlo3);
        border: solid 1px var(--tlo4);
        padding: 5px;
        width: 40px;
        margin-left: 5px;
        margin-right: 15px;
        color: var(--tekst);
    }

    titl {
        font-family: 'Poppins';
        color: var(--em2);
        font-size: 16px;
        font-weight: bold;
        border-bottom: 1px solid var(--tlo3);
        margin: auto;
        width: 100%;
        display: block;
        text-align: center;
        margin-bottom: 17px;
        margin-top: 10px;
    }

    container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
    }

    table {
        font-size: 12px;
        width: fit-content;
        margin: auto;
        text-align: center;
        table-layout: fixed;
    }

    td {
        width: fit-content;
    }

    table {
        border-collapse: collapse;
        border: 1px solid var(--tlo4);
        overflow: hidden;
        border-style: hidden;
        box-shadow: 0 0 0 1px var(--tlo4);
        margin: auto;
        width: fit-content;
    }

    th,
    td {
        border: 1px solid var(--tlo4);
        padding: 8px;
    }

    h3 {
        font-family: 'Poppins';
        color: var(--em1);
        font-weight: normal;
    }

    textarea {
        background: var(--tlo2);
        color: var(--em1);
        border: var(--border) !important;
        line-height: 1.4;
        font-size: 12px;
        padding: 10px;
        width: 474px;
        height: 81px;
    }

    input[type="text"] {
        background: var(--tlo2);
        color: var(--tekst);
        border: solid 1px var(--tlo4);
        padding: 5px 10px;
        margin-left: 5px;
    }
</style>

</html>