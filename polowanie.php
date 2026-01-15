<html>

<head>
    <title>Pomocnik polowania</title>
    {$headerinclude}
</head>

<body>
    {$header}

    <h1>Pomocnik polowania</h1>

	<res>
		<table>
            <tr>
                <td style="width: 150px;">Rzut na tropienie:</td>
                <td style="width: auto;"><span id="trop">1d20</span></td>
                <td style="width: 150px;">Wynik z rzutu:</td>
                <td style="width: 70px;"><input type="number" id="wtropienie" min=0 value=0></td>
                <td><span id="wtropienietxt">brak</span></td>
            </tr>
            <tr>
                <td style="width: 150px;">Rzut na schwytanie:</td>
                <td style="width: auto;"><span id="chwyt">1d20</span></td>
                <td style="width: 150px;">Wynik z rzutu:</td>
                <td style="width: 70px;"><input type="number" id="wchwyt" min=0 value=0></td>
                <td><span id="wchwyttxt">brak</span></td>
            </tr>
            <tr>
                <td>Rzut na zwierzynę</td>
                <td><span id="zwierz">1dx</span></td>
            </tr>
            <tr>
                <td>Rzut na drapieżnika</td>
                <td><span id="drap">1dx</span></td>
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
                    <td><input type="number" id="lvl" min=1 value="1"></input></td>
                    <td><input type="number" id="s" min=1 value="1"></input></td>
                    <td><input type="number" id="zr" min=1 value="1"></input></td>
                    <td><input type="number" id="sz" min=1 value="1"></input></td>
                    <td><input type="number" id="o" min=1 value="1"></input></td>
                    <td><input type="number" id="hp" min=1 value="1"></input></td>
                    <td><input type="number" id="w" min=1 value="1"></input></td>
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
			<br><br><h3>Cechy mieszane</h3>
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
			<br><br><h3>Cechy negatywne</h3>
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
				<label><input type="checkbox" name="cechy" value="Słaby słuch jednostronny">Słaby słuch jednostronny</label>
				<label><input type="checkbox" name="cechy" value="Słaby słuch obustronny">Słaby słuch obustronny</label>
				<label><input type="checkbox" name="cechy" value="Słaby wzrok jednostronny">Słaby wzrok jednostronny</label>
				<label><input type="checkbox" name="cechy" value="Słaby wzrok obustronny">Słaby wzrok obustronny</label>
				<label><input type="checkbox" name="cechy" value="Stępiony węch">Stępiony węch</label>
				<label><input type="checkbox" name="cechy" value="Tępe kły">Tępe kły</label>
				<label><input type="checkbox" name="cechy" value="Tępe pazury">Tępe pazury</label>
				<label><input type="checkbox" name="cechy" value="Wątłe zdrowie">Wątłe zdrowie</label>
				<label><input type="checkbox" name="cechy" value="Wrażliwa skóra">Wrażliwa skóra</label>
				<label><input type="checkbox" name="cechy" value="Wrażliwy brzuch">Wrażliwy brzuch</label>
				</container>
				<br><br><h3>Cechy negatywne ciężkie</h3>
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

let modTrop = "";
let modSchw = "";

const rzuty = [["1d30", "1d15"], ["1d15", "1d10"], ["1d12", "1d10"], ["1d20", "1d4"], ["1d30", "1d10"], ["1d25", "1d10"], ["1d30", "1d16"], ["1d35", "1d20"], ["1d30", "1d15"], ["1d20", "1d10"], ["1d15", "1d6"]];
const tereny = ["orij", "rzeki", "jeziora", "suche", "gorskie", "domy", "glebia", "brzeg", "pola", "murawy", "zbocze"];
const wynikitrop = ["nic", "niespodzianka", "przeciwnik", "przeciwnik", "nic", "zwierzyna", "nic", "przeciwnik", "nic", "zwierzyna", "nic", "przeciwnik", "nic", "zwierzyna", "nic", "niespodzianka", "zwierzyna", "zwierzyna", "nic", "przeciwnki", "zwierzyna", "nic", "zwierzyna", "zwierzyna", "zwierzyna", "zwierzyna", "niespodzianka", "zwierzyna", "zwierzyna", "niespodziewanka", "zwierzyna"];

let get_cechy = () => {
    const checkboxes = document.querySelectorAll('input[name="cechy"]:checked');
    return Array.from(checkboxes).map(cb => cb.value);
}

let get_wynik_schwytanie = (n) => {
    if (n <= 8) document.getElementById("wchwyttxt").innerText = "nieudane";
    else if (n <= 15) document.getElementById("wchwyttxt").innerText = "pogoń";
    else document.getElementById("wchwyttxt").innerText = "udane";
}

let get_wynik_tropienia = (n) => {
    if (n < 0) n = 0;
    if (n > 30) n = 30;
    const el = document.getElementById("wtropienietxt");
    if (el) el.innerHTML = wynikitrop[n];
}

let cechy_na_schwytanie = (cechy, pora, teren) => {
    if (cechy.includes("Brak ogona")) modSchw += "-2";
    if (cechy.includes("Kulawa noga")) modSchw += "-3";
    if (cechy.includes("Brak łapy")) modSchw += "-5";
    if (cechy.includes("Cichy krok")) modSchw += "+3";
    if (cechy.includes("Ciężki krok")) modSchw += "-3";
    if (cechy.includes("Wpinacz")) modSchw += "+4";
    if (cechy.includes("Ciamajda")) modSchw += "-2";
    
    if (cechy.includes("Nocny łowca")) {
        if (pora === "noc") modTrop += "+2";
        else if (pora === "dzien") modTrop += "-2";
    }
    if (cechy.includes("Światłowidzenie")) {
        if (pora === "dzien") {
            modTrop += "+2";
            modSchw += "+2";}
        else if (pora === "noc") {
            modTrop += "-2";
            modSchw += "-2";
        }
    }
    if (cechy.includes("Leśny cień")) {
        if (["glebia", "brzeg"].includes(teren)) {
            modTrop += "+1";
            modSchw += "+1";
        }
        else if (["pola", "suche"].includes(teren)) {
            modTrop += "-1";
            modSchw += "-1";
        }
    }
    if (cechy.includes("Dziecko wiatru")) {
        if (["pola", "suche"].includes(teren)) {
            modTrop += "+1";
            modSchw += "+1";
        }
        else if (["glebia", "brzeg"].includes(teren)) {
            modTrop += "-1";
            modSchw += "-1";
        }
    }
    if (cechy.includes("Duch gór")) {
        if (["gorskie", "murawy"].includes(teren)) {
            modTrop += "+1";
            modSchw += "+1";
        }
        else if (["pola", "suche", "domy"].includes(teren)) {
            modTrop += "-1";
            modSchw += "-1";
        }
    }
    if (cechy.includes("Strażnik doliny")) {
        if (["gorskie", "murawy"].includes(teren)) {
            modTrop += "-1";
            modSchw += "-1";
        }
        else if (["pola", "suche", "domy"].includes(teren)) {
            modTrop += "+1";
            modSchw += "+1";
        }
    }
    if (cechy.includes("Suche łapy")) {
        if (["suche", "gorskie"].includes(teren)) {
            modTrop += "+1";
            modSchw += "+1";
        }
        else if (["pola", "orij"].includes(teren)) {
            modTrop += "-1";
            modSchw += "-1";
        }
    }
    if (cechy.includes("Ryba w wodzie")) {
        if (["suche", "gorskie"].includes(teren)) {
            modTrop += "-1";
            modSchw += "-1";
        }
        else if (["pola", "orij"].includes(teren)) {
            modTrop += "+1";
            modSchw += "+1";
        }
    }
}

let mod_na_schwytanie = (zr, umiej) => {
    if (umiej === 1) modSchw += "+1";
    else if (umiej === 2) modSchw += "+3";
    else if (umiej === 3) modSchw += "+5";
    if (zr >= 5 && zr <= 8) modSchw += "+1";
    else if (zr >= 9 && zr <= 12) modSchw += "+2";
    else if (zr >= 13 && zr <= 17) modSchw += "+3";
    else if (zr >= 18 && zr <= 22) modSchw += "+4";
    else if (zr >= 23 && zr <= 27) modSchw += "+5";
    else if (zr >= 28 && zr <= 33) modSchw += "+6";
    else if (zr >= 34 && zr <= 40) modSchw += "+7";
    else if (zr >= 41 && zr <= 47) modSchw += "+8";
    else if (zr >= 48 && zr <= 54) modSchw += "+9";
    else if (zr >= 55 && zr <= 62) modSchw += "+10";
    else if (zr >= 63 && zr <= 70) modSchw += "+11";
}

let cechy_na_polowanie = (cechy, pora, teren) => {
    if (cechy.includes("Psi węch")) modTrop += "+2";
    if (cechy.includes("Stępiony węch")) modTrop += "-2";
    if (cechy.includes("Brak węchu")) modTrop += "-12";
    if (cechy.includes("Sokoli wzrok")) modTrop += "+2";
    if (cechy.includes("Słaby wzrok jednostronny")) modTrop += "-1";
    if (cechy.includes("Słaby wzrok obustronny")) modTrop += "-2";
    if (cechy.includes("Ślepota jednostronna")) modTrop += "-4";
    if (cechy.includes("Ślepota obustronna")) modTrop += "-8";
    if (cechy.includes("Nadwrażliwy wzrok")) modTrop += "-2";
    if (cechy.includes("Króliczy słuch")) modTrop += "+3";
    if (cechy.includes("Słaby słuch jednostronny")) modTrop += "-1";
    if (cechy.includes("Słaby słuch obustronny")) modTrop += "-2";
    if (cechy.includes("Głuchota jednostronna")) modTrop += "-4";
    if (cechy.includes("Głuchota obustronna")) modTrop += "-12";
}

let rzuty_na_polowanie = (teren) => {
    const i = tereny.indexOf(teren);
    if (i !== -1) {
        document.getElementById("zwierz").innerHTML = rzuty[i][0];
        document.getElementById("drap").innerHTML = rzuty[i][1];
    }
}

let modTropyfikator_polowanie = (tropienie) => {
    if (tropienie === 1) modTrop += "+1";
    else if (tropienie === 2) modTrop += "+3";
    else if (tropienie === 3) modTrop += "+5";
}

document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('input', e => {
        modTrop = "";
        modSchw = "";

        const teren = document.getElementById('teren').value;
        const p_dnia = document.getElementById("pora").value;
        const nivel = document.getElementById("lvl")?.valueAsNumber || 0;
        const tropienie = document.getElementById("tropienie")?.valueAsNumber || 0;
        const skradanie = document.getElementById("skradanie")?.valueAsNumber || 0;
        const wyniktop = document.getElementById("wtropienie")?.valueAsNumber || 0;
    	const zr = document.getElementById("zr")?.valueAsNumber || 0;

        const cechy = get_cechy();

        rzuty_na_polowanie(teren);
        cechy_na_polowanie(cechy, p_dnia, teren);
        modTropyfikator_polowanie(tropienie);
        get_wynik_tropienia(wyniktop);
        mod_na_schwytanie(zr, skradanie);
        cechy_na_schwytanie(cechy, p_dnia, teren);
        get_wynik_schwytanie(document.getElementById("wchwyt").value);
        
        modTrop += "+" + nivel;
        
        document.getElementById("trop").innerHTML = "1d20" + modTrop;
        document.getElementById("chwyt").innerHTML = "1d20" + modSchw;
    });
});
</script>

</body>
<style>
    h1 { text-align: center; background: var(--tlo3); border: solid 1px var(--tlo4); padding: 30px; }
    przycisk { display: block; line-height: 20px; width: 82px; background: var(--tlo3); padding: 4px; border: 1px solid var(--tlo4); box-shadow: 0px 0px 3px 2px var(--tlo3); margin-bottom: 8px; text-decoration: none; text-align: center; text-transform: uppercase; font-family: 'Poppins'; font-size: 12px; margin-top: 13px; }
    label { margin-left: 10px; font-size: 12px; }
    res { margin: auto; padding: 20px; background: var(--tlo1); border: solid 1px var(--tlo4); box-shadow: 0px 0px 4px 0px var(--tlo4); display: block; margin-top: 20px; }
    res span { color: var(--em1); font-weight: bold; }
    input[type="number"] { background: var(--tlo3); border: solid 1px var(--tlo4); padding: 5px; width: 40px; margin-left: 5px; margin-right: 15px; color: var(--tekst); }
    titl { font-family: 'Poppins'; color: var(--em2); font-size: 16px; font-weight: bold; border-bottom: 1px solid var(--tlo3); margin: auto; width: 100%; display: block; text-align: center; margin-bottom: 17px; margin-top: 10px; }
    container { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
	table { font-size: 12px; width: fit-content; margin: auto; text-align: center; table-layout: fixed;}
	table {border-collapse: collapse; border: 1px solid var(--tlo4); overflow: hidden; border-style: hidden; box-shadow: 0 0 0 1px var(--tlo4); margin:auto; width:fit-content;}
	th, td { border: 1px solid var(--tlo4);  padding: 8px; height: 35px; width: 110px;}
	h3 {font-family: 'Poppins'; color: var(--em1); font-weight: normal;}
</style>
</html>