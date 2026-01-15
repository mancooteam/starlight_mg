<html>

<head>
    <title>Pomocnik wyprawy po zioła</title>
    {$headerinclude}
</head>

<body>
    {$header}

    <h1>Pomocnik wyprawy po zioła</h1>

    <res style="text-align:left">
        <tytul id="tytul"></tytul>
		<table style="display: block;line-height: 27px;width: max-content;margin: auto;" border=1>
			<tr>
				<td style="width: 150px;"><b>Rzut na szukanie:</b></td><td><span id="szukanie">1d20</span></td><td style="width: 100px;">Wynik z rzutu:</td><td><input type="number" id="wszukanie" value=0></input></td><td><span id="wszukanietxt">nic</span></td>
			</tr>
			<tr>
				<td style="width: 150px;"><b>Rzut na częstość:</b></td><td><span>1d12</span></td><td style="width: 100px;">Wynik z rzutu:</td><td><input type="number" id="wczestosc" value=1 min="1" max="12"></input></td><td><span id="wczestosctxt">-</span></td>
			</tr>
			<tr>
				<td style="width: 150px;"><b>Rzut na zioło:</b></td><td><span id="typziolo">1dx</span></td>
			</tr>
			<tr>
				<td style="width: 150px;"><b>Rzut na zbieranie:</b></td><td><span id="zbieranieziol">1dx</span></td>
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
                    <td style="width: 95px;">Poziom M.</td>
					<td style="width: 95px;">Siła</td>
                    <td style="width: 95px;">Zręczność</td>
                    <td style="width: 95px;">Szybkość</td>
                    <td style="width: 95px;">Odporność</td>
					<td style="width: 95px;">HP</td>
                    <td style="width: 95px;">Wytrzymałość</td>
                </tr>
                <tr>
                    <td><input type="number" id="lvl" min=1 value=1></input></td>
					<td><input type="number" id="mlvl" min=1 value=1></input></td>
                    <td><input type="number" id="s" min=1 value=1></input></td>
                    <td><input type="number" id="z" min=1 value=1></input></td>
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

	let modSzuk = "";

	const rzuty = [["1d12", "1d14","1d6"], ["1d4", "1d4","1d4"], ["1d10", "1d10", "1d6"], ["1d20", "1d14", "1d4"], ["1d10", "1d12", "1d8"], ["1d12", "1d16", "chmiel"], ["1d22", "1d20", "storczyk :D"], ["1d10", "1d12", "1d6"], ["1d12", "1d12", "1d8"]];
	const tereny = ["orij", "suche", "gorskie", "domy", "glebia", "brzeg", "pola", "murawy", "zbocze"];
    const czestosc = ["rzadkie","pospolite","częste","pospolite","częste","pospolite","częste","pospolite","pospolite","częste","rzadkie","pospolite"];
	const czestosc_n = [2,0,1,0,1,0,1,0,0,1,2,0];
    const wynikiszuk = ["nic", "nic", "przeciwnik","nic","nic","zioła","nic","przeciwnik","nic","zioła","nic","przeciwnik","nic","zioła","zioła","zwierzyna","niespodzianka","zioła","zioła","przeciwnik","zioła","zioła","zioła","zwierzyna","zioła","zioła","zioła","niespodzianka","zioła","zwierzyna","zioła"];

	let get_cechy = () => {
		const checkboxes = document.querySelectorAll('input[name="cechy"]:checked');
		return Array.from(checkboxes).map(cb => cb.value);
	}

	let mod_zielarstwo = (ziel) => {
		if (ziel === 1) modSzuk += "+1";
		else if (ziel === 2) modSzuk += "+3";
		else if (ziel === 3) modSzuk += "+5";
	}

    let get_rzut = (n) => {
        if (n < 0) n = 0;
        else if (n > 30) n = 30;
        document.getElementById("wszukanietxt").innerText = wynikiszuk[n];
    }

    let get_czestosc = () => {
        const n = document.getElementById("wczestosc").valueAsNumber - 1;
        document.getElementById("wczestosctxt").innerText = czestosc[n];
        console.log(czestosc_n[n]);
        return czestosc_n[n];
    }

    let bonif = (z) => {
        if (z == 1) return "+1";
        else if (z == 2) return "+3";
        else if (z == 3) return "+5";
        return "";
    }

    let obonif = (z) => {
        if (z == 2) return "+1";
        else if (z == 3) return "+2";
        return "";
    }

    let get_zbieranie = (pora, zielarstwo) => {
        let rzut = "";
        if (pora === "jesien") rzut = "1d6" + bonif(zielarstwo);
        else if (pora == "zima") rzut = "1d4" + obonif(zielarstwo);
        else rzut = "1d8" + bonif(zielarstwo);
        document.getElementById("zbieranieziol").innerText = rzut;
    }

    let cechy_na_zbieranie = (cechy, pora, teren) => {
		if (cechy.includes("Psi węch")) modSzuk += "+3";
		if (cechy.includes("Stępiony węch")) modSzuk += "-2";
		if (cechy.includes("Brak węchu")) modSzuk += "-12";
		if (cechy.includes("Sokoli wzrok")) modSzuk += "+2";
		if (cechy.includes("Słaby wzrok jednostronny")) modSzuk += "-1";
		if (cechy.includes("Słaby wzrok obustronny")) modSzuk += "-2";
		if (cechy.includes("Ślepota jednostronna")) modSzuk += "-4";
		if (cechy.includes("Ślepota obustronna")) modSzuk += "-8";
		if (cechy.includes("Nadwrażliwy wzrok")) modSzuk += "-2 (jeśli w ostrym słońcu)";
		if (cechy.includes("Króliczy słuch")) modSzuk += "+2";
		if (cechy.includes("Słaby słuch jednostronny")) modSzuk += "-1";
		if (cechy.includes("Słaby słuch obustronny")) modSzuk += "-2";
		if (cechy.includes("Głuchota jednostronna")) modSzuk += "-4";
		if (cechy.includes("Głuchota obustronna")) modSzuk += "-12";
	}

    let get_rzuty_ziolo = (n,teren) => {
		const i = tereny.indexOf(teren);
		if (i !== -1) {
			document.getElementById("typziolo").innerText = rzuty[i][n];
		}
	}

	document.addEventListener('DOMContentLoaded', () => {
		document.addEventListener('change', e => {
			modSzuk = "1d20";

			const teren = document.getElementById('teren')?.value || "orij";
			const p_dnia = document.getElementById("pora")?.value || "dzien";
            const sezon = document.getElementById("sezon")?.value || "wiosna";
			const poziom = document.getElementById("lvl")?.valueAsNumber || 0;
            const poziom_m = document.getElementById("mlvl")?.valueAsNumber || 0;
			const zielarstwo = document.getElementById("zielarstwo")?.valueAsNumber || 0;
            const res_rzut = document.getElementById("wszukanie")?.valueAsNumber || 0;

			const cechy = get_cechy();

            cechy_na_zbieranie(cechy,p_dnia,teren);
            mod_zielarstwo(zielarstwo);
            get_rzut(res_rzut)
            const num = get_czestosc();
            get_rzuty_ziolo(num, teren);
            get_zbieranie(sezon,zielarstwo);

            modSzuk += "+" + poziom_m;

            document.getElementById("szukanie").innerText = modSzuk;
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
	td  { width: 70px; font-weight: bold;}
	table {border-collapse: collapse; border: 1px solid var(--tlo4); overflow: hidden; border-style: hidden; box-shadow: 0 0 0 1px var(--tlo4); margin:auto; width:fit-content;}
	th, td { border: 1px solid var(--tlo4);  padding: 8px;}
	h3 {font-family: 'Poppins'; color: var(--em1); font-weight: normal;}
</style>
</html>