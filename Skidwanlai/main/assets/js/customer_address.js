function populate(c,b){
	var c = document.getElementById(c);
	var b = document.getElementById(b);
	b.disabled = false;
	b.innerHTML = "";
	document.getElementById("cityadd").value = document.getElementById("city").value;
	if (c.value=="Alfonso"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Amuyong|Amuyong",
			"Barangay I (Pob)|Barangay I (Pob)",
			"Barangay II (Pob)|Barangay II (Pob)",
			"Barangay III (Pob)|Barangay III (Pob)",
			"Barangay IV (Pob)|Barangay IV (Pob)",
			"Barangay V (Pob)|Barangay V (Pob)",
			"Bilog|Bilog",
			"Buck Estate|Buck Estate",
			"Esperanza Ibaba|Esperanza Ibaba",
			"Esperanza Ilaya|Esperanza Ilaya",
			"Kaysuyo|Kaysuyo",
			"Kaytitinga I|Kaytitinga I",
			"Kaytitinga II|Kaytitinga II",
			"Kaytitinga III|Kaytitinga III",
			"Luksuhin|Luksuhin",
			"Luksuhin Ilaya|Luksuhin Ilaya",
			"Mangas I|Mangas I",
			"Mangas II|Mangas II",
			"Marahan I|Marahan I",
			"Marahan II|Marahan II",
			"Matagbak I|Matagbak I",
			"Matagbak II|Matagbak II",
			"Pajo|Pajo",
			"Palumlum|Palumlum",
			"Santa Teresa|Santa Teresa",
			"Sikat|Sikat",
			"Sinaliw Malaki|Sinaliw Malaki",
			"Sinaliw Na Munti|Sinaliw Na Munti",
			"Sulsugin|Sulsugin",
			"Taywanak Ibaba|Taywanak Ibaba",
			"Taywanak Ilaya|Taywanak Ilaya",
			"Upli|Upli"
		];
	}

	if (c.value=="Amadeo"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Banaybanay|Banaybanay",
			"Barangay I|Barangay I",
			"Barangay II|Barangay II",
			"Barangay III|Barangay III",
			"Barangay IV|Barangay IV",
			"Barangay V|Barangay V",
			"Barangay VI|Barangay VI",
			"Barangay VII|Barangay VII",
			"Barangay VIII|Barangay VIII",
			"Barangay IX|Barangay IX",
			"Barangay X|Barangay X",
			"Barangay XI|Barangay XI",
			"Barangay XII|Barangay XII",
			"Bucal|Bucal",
			"Buho|Buho",
			"Dagatan|Dagatan",
			"Halang|Halang",
			"Loma|Loma",
			"Maitim I|Maitim I",
			"Maymangga|Maymangga",
			"Minantok Kanluran|Minantok Kanluran",
			"Minantok Silangan|Minantok Silangan",
			"Pangil|Pangil",
			"Salaban|Salaban",
			"Talon|Talon",
			"Tamacan|Tamacan"
		];
	}

	if (c.value=="Bacoor"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Alima|Alima",
			"Aniban I|Aniban I",
			"Aniban II|Aniban II",
			"Aniban III|Aniban III",
			"Aniban IV|Aniban IV",
			"Aniban V|Aniban V",
			"Banalo|Banalo",
			"Bayanan|Bayanan",
			"Campo Santo|Campo Santo",
			"Daang Bukid|Daang Bukid",
			"Digman|Digman",
			"Dulong Bayan|Dulong Bayan",
			"Habay I|Habay I",
			"Habay II|Habay II",
			"Kaingin (Pob)|Kaingin (Pob)",
			"Ligas I|Ligas I",
			"Ligas II|Ligas II",
			"Ligas III|Ligas III",
			"Mabolo I|Mabolo I",
			"Mabolo II|Mabolo II",
			"Mabolo III|Mabolo III",
			"Maliksi I|Maliksi I",
			"Maliksi II|Maliksi II",
			"Maliksi III|Maliksi III",
			"Mambog I|Mambog I",
			"Mambog II|Mambog II",
			"Mambog III|Mambog III",
			"Mambog IV|Mambog IV",
			"Mambog V|Mambog V",
			"Molino I|Molino I",
			"Molino II|Molino II",
			"Molino III|Molino III",
			"Molino IV|Molino IV",
			"Molino V|Molino V",
			"Molino VI|Molino VI",
			"Molino VII|Molino VII",
			"Niog I|Niog I",
			"Niog II|Niog II",
			"Niog III|Niog III",
			"P.f. Espiritu I (Panapaan)|P.f. Espiritu I (Panapaan)",
			"P.f. Espiritu II|P.f. Espiritu II",
			"P.f. Espiritu III|P.f. Espiritu III",
			"P.f. Espiritu IV|P.f. Espiritu IV",
			"P.f. Espiritu V|P.f. Espiritu V",
			"P.f. Espiritu VI|P.f. Espiritu VI",
			"P.f. Espiritu VII|P.f. Espiritu VII",
			"P.f. Espiritu VIII|P.f. Espiritu VIII",
			"Queens Row Central|Queens Row Central",
			"Queens Row East|Queens Row East",
			"Queens Row West|Queens Row West",
			"Real I|Real I",
			"Real II|Real II",
			"Salinas I|Salinas I",
			"Salinas II|Salinas II",
			"Salinas III|Salinas III",
			"Salinas IV|Salinas IV",
			"San Nicolas I|San Nicolas I",
			"San Nicolas II|San Nicolas II",
			"San Nicolas III|San Nicolas III",
			"Sineguelasan|Sineguelasan",
			"Tabing Dagat|Tabing Dagat",
			"Talaba I|Talaba I",
			"Talaba II|Talaba II",
			"Talaba III|Talaba III",
			"Talaba IV|Talaba IV",
			"Talaba V|Talaba V",
			"Talaba VI|Talaba VI",
			"Talaba VII|Talaba VII",
			"Zapote I|Zapote I",
			"Zapote II|Zapote II",
			"Zapote III|Zapote III",
			"Zapote IV|Zapote IV",
			"Zapote V|Zapote V"
		];
	}

	if (c.value=="Carmona"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Bancal|Bancal",
			"Barangay 1 (Pob)|Barangay 1 (Pob)",
			"Barangay 2 (Pob)|Barangay 2 (Pob)",
			"Barangay 3 (Pob)|Barangay 3 (Pob)",
			"Barangay 4 (Pob)|Barangay 4 (Pob)",
			"Barangay 5 (Pob)|Barangay 5 (Pob)",
			"Barangay 6 (Pob)|Barangay 6 (Pob)",
			"Barangay 7 (Pob)|Barangay 7 (Pob)",
			"Barangay 8 (Pob)|Barangay 8 (Pob)",
			"Cabilang Baybay|Cabilang Baybay",
			"Lantic|Lantic",
			"Mabuhay|Mabuhay",
			"Maduya|Maduya",
			"Milagrosa|Milagrosa"
		];
	}

	if (c.value=="Cavite City"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Barangay 1 (Hen. M. Alvarez)|Barangay 1 (Hen. M. Alvarez)",
			"Barangay 2 (C. Tirona)|Barangay 2 (C. Tirona)",
			"Barangay 3 (Hen. E. Aguinaldo)|Barangay 3 (Hen. E. Aguinaldo)",
			"Barangay 4 (Hen. M. Trias)|Barangay 4 (Hen. M. Trias)",
			"Barangay 5 (Hen. E. Evangelista)|Barangay 5 (Hen. E. Evangelista)",
			"Barangay 6 (Diego Silang)|Barangay 6 (Diego Silang)",
			"Barangay 7 (Kapitan Kong)|Barangay 7 (Kapitan Kong)",
			"Barangay 8 (Manuel S. Rojas)|Barangay 8 (Manuel S. Rojas)",
			"Barangay 9 (Kanaway)|Barangay 9 (Kanaway)",
			"Barangay 10 (Kingfisher)|Barangay 10 (Kingfisher)",
			"Barangay 10~A (Kingfisher~A)|Barangay 10~A (Kingfisher~A)",
			"Barangay 10~B (Kingfisher~B)|Barangay 10~B (Kingfisher~B)",
			"Barangay 11 (Lawin)|Barangay 11 (Lawin)",
			"Barangay 12 (Love Bird)|Barangay 12 (Love Bird)",
			"Barangay 13 (Aguila)|Barangay 13 (Aguila)",
			"Barangay 14 (Loro)|Barangay 14 (Loro)",
			"Barangay 15 (Kilyawan)|Barangay 15 (Kilyawan)",
			"Barangay 16 (Martines)|Barangay 16 (Martines)",
			"Barangay 17 (Kalapati)|Barangay 17 (Kalapati)",
			"Barangay 18 (Maya)|Barangay 18 (Maya)",
			"Barangay 19 (Gemini)|Barangay 19 (Gemini)",
			"Barangay 20 (Virgo)|Barangay 20 (Virgo)",
			"Barangay 21 (Scorpio)|Barangay 21 (Scorpio)",
			"Barangay 22 (Leo)|Barangay 22 (Leo)",
			"Barangay 22~A (Leo A)|Barangay 22~A (Leo A)",
			"Barangay 23 (Aquarius)|Barangay 23 (Aquarius)",
			"Barangay 24 (Libra)|Barangay 24 (Libra)",
			"Barangay 25 (Capricorn)|Barangay 25 (Capricorn)",
			"Barangay 26 (Cancer)|Barangay 26 (Cancer)",
			"Barangay 27 (Sagitarius)|Barangay 27 (Sagitarius)",
			"Barangay 28 (Taurus)|Barangay 28 (Taurus)",
			"Barangay 29 (Lao~Lao)|Barangay 29 (Lao~Lao)",
			"Barangay 29~A (Lao~Lao A)|Barangay 29~A (Lao~Lao A)",
			"Barangay 30 (Bid~Bid)|Barangay 30 (Bid~Bid)",
			"Barangay 31 (Maya~Maya)|Barangay 31 (Maya~Maya)",
			"Barangay 32 (Salay~Salay)|Barangay 32 (Salay~Salay)",
			"Barangay 33 (Buwan~Buwan)|Barangay 33 (Buwan~Buwan)",
			"Barangay 34 (Lapu~Lapu)|Barangay 34 (Lapu~Lapu)",
			"Barangay 35 (Hasa~Hasa)|Barangay 35 (Hasa~Hasa)",
			"Barangay 36 (Sap~Sap)|Barangay 36 (Sap~Sap)",
			"Barangay 36~A (Sap~Sap A)|Barangay 36~A (Sap~Sap A)",
			"Barangay 37 (Cadena De Amor)|Barangay 37 (Cadena De Amor)",
			"Barangay 37~A (Cadena De Amor A)|Barangay 37~A (Cadena De Amor A)",
			"Barangay 38 (Sampaguita)|Barangay 38 (Sampaguita)",
			"Barangay 38~A (Sampaguita A)|Barangay 38~A (Sampaguita A)",
			"Barangay 39 (Jasmin)|Barangay 39 (Jasmin)",
			"Barangay 40 (Gumamela)|Barangay 40 (Gumamela)",
			"Barangay 41 (Rosal)|Barangay 41 (Rosal)",
			"Barangay 42 (Pinagbuklod)|Barangay 42 (Pinagbuklod)",
			"Barangay 42~A (Pinagbuklod A)|Barangay 42~A (Pinagbuklod A)",
			"Barangay 42~B (Pinagbuklod B)|Barangay 42~B (Pinagbuklod B)",
			"Barangay 42~C (Pinagbuklod C)|Barangay 42~C (Pinagbuklod C)",
			"Barangay 43 (Pinagpala)|Barangay 43 (Pinagpala)",
			"Barangay 44 (Maligaya)|Barangay 44 (Maligaya)",
			"Barangay 45 (Kaunlaran)|Barangay 45 (Kaunlaran)",
			"Barangay 45~A (Kaunlaran A)|Barangay 45~A (Kaunlaran A)",
			"Barangay 46 (Sinagtala)|Barangay 46 (Sinagtala)",
			"Barangay 47 (Pagkakaisa)|Barangay 47 (Pagkakaisa)",
			"Barangay 47~A (Pagkakaisa A)|Barangay 47~A (Pagkakaisa A)",
			"Barangay 47~B (Pagkakaisa B)|Barangay 47~B (Pagkakaisa B)",
			"Barangay 48 (Narra)|Barangay 48 (Narra)",
			"Barangay 48~A (Narra A)|Barangay 48~A (Narra A)",
			"Barangay 49 (Akasya)|Barangay 49 (Akasya)",
			"Barangay 49~A (Akasya A)|Barangay 49~A (Akasya A)",
			"Barangay 50 (Kabalyero)|Barangay 50 (Kabalyero)",
			"Barangay 51 (Kamagong)|Barangay 51 (Kamagong)",
			"Barangay 52 (Ipil)|Barangay 52 (Ipil)",
			"Barangay 53 (Yakal)|Barangay 53 (Yakal)",
			"Barangay 53~A (Yakal A)|Barangay 53~A (Yakal A)",
			"Barangay 53~B (Yakal B)|Barangay 53~B (Yakal B)",
			"Barangay 54 (Pechay)|Barangay 54 (Pechay)",
			"Barangay 54~A (Pechay A)|Barangay 54~A (Pechay A)",
			"Barangay 55 (Ampalaya)|Barangay 55 (Ampalaya)",
			"Barangay 56 (Labanos)|Barangay 56 (Labanos)",
			"Barangay 57 (Repolyo)|Barangay 57 (Repolyo)",
			"Barangay 58 (Patola)|Barangay 58 (Patola)",
			"Barangay 58~A (Patola A)|Barangay 58~A (Patola A)",
			"Barangay 59 (Sitaw)|Barangay 59 (Sitaw)",
			"Barangay 60 (Letsugas)|Barangay 60 (Letsugas)",
			"Barangay 61 (Talong)|Barangay 61 (Talong)",
			"Barangay 61~A (Talong A)|Barangay 61~A (Talong A)",
			"Barangay 62 (Kangkong)|Barangay 62 (Kangkong)",
			"Barangay 62~A (Kangkong A)|Barangay 62~A (Kangkong A)",
			"Barangay 62~B (Kangkong B)|Barangay 62~B (Kangkong B)"
		];
	}

	if (c.value=="Dasmarinas City"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Burol|Burol",
			"Burol I|Burol I",
			"Burol II|Burol II",
			"Burol III|Burol III",
			"Datu Esmael (Bago~A~Ingud)|Datu Esmael (Bago~A~Ingud)",
			"Emmanuel Bergado I|Emmanuel Bergado I",
			"Emmanuel Bergado II|Emmanuel Bergado II",
			"Fatima I|Fatima I",
			"Fatima II|Fatima II",
			"Fatima III|Fatima III",
			"H~2|H~2",
			"Langkaan I|Langkaan I",
			"Langkaan II|Langkaan II",
			"Luzviminda I|Luzviminda I",
			"Luzviminda II|Luzviminda II",
			"Paliparan I|Paliparan I",
			"Paliparan II|Paliparan II",
			"Paliparan III|Paliparan III",
			"Sabang|Sabang",
			"Saint Peter I|Saint Peter I",
			"Saint Peter II|Saint Peter II",
			"Salawag|Salawag",
			"Salitran I|Salitran I",
			"Salitran II|Salitran II",
			"Salitran III|Salitran III",
			"Salitran IV|Salitran IV",
			"Sampaloc I|Sampaloc I",
			"Sampaloc II|Sampaloc II",
			"Sampaloc III|Sampaloc III",
			"Sampaloc IV|Sampaloc IV",
			"Sampaloc V|Sampaloc V",
			"San Agustin I|San Agustin I",
			"San Agustin II|San Agustin II",
			"San Agustin III|San Agustin III",
			"San Andres I|San Andres I",
			"San Andres II|San Andres II",
			"San Antonio De Padua I|San Antonio De Padua I",
			"San Antonio De Padua II|San Antonio De Padua II",
			"San Dionisio (Barangay 1)|San Dionisio (Barangay 1)",
			"San Esteban (Barangay 4)|San Esteban (Barangay 4)",
			"San Francisco I|San Francisco I",
			"San Francisco II|San Francisco II",
			"San Isidro Labrador I|San Isidro Labrador I",
			"San Isidro Labrador II|San Isidro Labrador II",
			"San Jose|San Jose",
			"San Juan (San Juan I)|San Juan (San Juan I)",
			"San Lorenzo Ruiz I|San Lorenzo Ruiz I",
			"San Lorenzo Ruiz II|San Lorenzo Ruiz II",
			"San Luis I|San Luis I",
			"San Luis II|San Luis II",
			"San Manuel I|San Manuel I",
			"San Manuel II|San Manuel II",
			"San Mateo|San Mateo",
			"San Miguel|San Miguel",
			"San Miguel II|San Miguel II",
			"San Nicolas I|San Nicolas I",
			"San Nicolas II|San Nicolas II",
			"San Roque (Sta. Cristina II)|San Roque (Sta. Cristina II)",
			"San Simon (Barangay 7)|San Simon (Barangay 7)",
			"Santa Cristina I|Santa Cristina I",
			"Santa Cristina II|Santa Cristina II",
			"Santa Cruz I|Santa Cruz I",
			"Santa Cruz II|Santa Cruz II",
			"Santa Fe|Santa Fe",
			"Santa Lucia (San Juan II)|Santa Lucia (San Juan II)",
			"Santa Maria (Barangay 20)|Santa Maria (Barangay 20)",
			"Santo Cristo (Barangay 3)|Santo Cristo (Barangay 3)",
			"Santo Nino I|Santo Nino I",
			"Santo Nino II|Santo Nino II",
			"Victoria Reyes|Victoria Reyes",
			"Zone I (Pob.)|Zone I (Pob.)",
			"Zone I~B|Zone I~B",
			"Zone II (Pob.)|Zone II (Pob.)",
			"Zone III (Pob.)|Zone III (Pob.)",
			"Zone IV (Pob.)|Zone IV (Pob.)"
		];
	}

	if (c.value=="General Mariano Alvarez"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Aldiano Olaes|Aldiano Olaes",
			"Barangay 1 Poblacion (Area I)|Barangay 1 Poblacion (Area I)",
			"Barangay 2 Poblacion|Barangay 2 Poblacion",
			"Barangay 3 Poblacion|Barangay 3 Poblacion",
			"Barangay 4 Poblacion|Barangay 4 Poblacion",
			"Barangay 5 Poblacion|Barangay 5 Poblacion",
			"Benjamin Tirona (Area D)|Benjamin Tirona (Area D)",
			"Bernardo Pulido (Area H)|Bernardo Pulido (Area H)",
			"Epifanio Malia|Epifanio Malia",
			"Fiorello Carimag (Area C)|Fiorello Carimag (Area C)",
			"Francisco De Castro (Sunshine Vill.)|Francisco De Castro (Sunshine Vill.)",
			"Francisco Reyes|Francisco Reyes",
			"Gavino Maderan|Gavino Maderan",
			"Gregoria De Jesus|Gregoria De Jesus",
			"Inocencio Salud|Inocencio Salud",
			"Jacinto Lumbreras|Jacinto Lumbreras",
			"Kapitan Kua (Area F)|Kapitan Kua (Area F)",
			"Koronel Jose P. Elises (Area E)|Koronel Jose P. Elises (Area E)",
			"Macario Dacon|Macario Dacon",
			"Marcelino Memije|Marcelino Memije",
			"Nicolasa Virata (San Jose)|Nicolasa Virata (San Jose)",
			"Pantaleon Granados (Area G)|Pantaleon Granados (Area G)",
			"Ramon Cruz (Area J)|Ramon Cruz (Area J)",
			"San Gabriel (Area K)|San Gabriel (Area K)",
			"San Jose|San Jose",
			"Severino De Las Alas|Severino De Las Alas",
			"Tiniente Tiago|Tiniente Tiago"
		];
	}

	if (c.value=="General Emilio Aguinaldo"){
		var optionArray = [
			"-- Select --|-- Select --",
			"A. Dalusag|A. Dalusag",
			"Batas Dao|Batas Dao",
			"Castanos Cerca|Castanos Cerca",
			"Castanos Lejos|Castanos Lejos",
			"Kabulusan|Kabulusan",
			"Kaymisas|Kaymisas",
			"Kaypaaba|Kaypaaba",
			"Lumipa|Lumipa",
			"Narvaez|Narvaez",
			"Poblacion I|Poblacion I",
			"Poblacion II|Poblacion II",
			"Poblacion III|Poblacion III",
			"Poblacion IV|Poblacion IV",
			"Tabora|Tabora"
		];
	}

	if (c.value=="General Trias"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Alingaro|Alingaro",
			"Arnaldo Pob. (Bgy. 7)|Arnaldo Pob. (Bgy. 7)",
			"Bacao I|Bacao I",
			"Bacao II|Bacao II",
			"Bagumbayan Pob. (Bgy. 5)|Bagumbayan Pob. (Bgy. 5)",
			"Biclatan|Biclatan",
			"Buenavista I|Buenavista I",
			"Buenavista II|Buenavista II",
			"Buenavista III|Buenavista III",
			"Corregidor Pob. (Bgy. 10)|Corregidor Pob. (Bgy. 10)",
			"Dulong Bayan Pob. (Bgy. 3)|Dulong Bayan Pob. (Bgy. 3)",
			"Gov. Ferrer Pob. (Bgy. 1)|Gov. Ferrer Pob. (Bgy. 1)",
			"Javalera|Javalera",
			"Manggahan|Manggahan",
			"Navarro|Navarro",
			"Ninety Sixth Pob. (Bgy. 8)|Ninety Sixth Pob. (Bgy. 8)",
			"Panungyanan|Panungyanan",
			"Pasong Camachile I|Pasong Camachile I",
			"Pasong Camachile II|Pasong Camachile II",
			"Pasong Kawayan I|Pasong Kawayan I",
			"Pasong Kawayan II|Pasong Kawayan II",
			"Pinagtipunan|Pinagtipunan",
			"Prinza Pob. (Bgy. 9)|Prinza Pob. (Bgy. 9)",
			"Sampalucan Pob. (Bgy. 2)|Sampalucan Pob. (Bgy. 2)",
			"San Francisco|San Francisco",
			"San Gabriel Pob. (Bgy. 4)|San Gabriel Pob. (Bgy. 4)",
			"San Juan I|San Juan I",
			"San Juan II|San Juan II",
			"Santa Clara|Santa Clara",
			"Santiago|Santiago",
			"Tapia|Tapia",
			"Tejero|Tejero",
			"Vibora Pob. (Bgy. 6)|Vibora Pob. (Bgy. 6)"
		];
	}

	if (c.value=="Imus"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Alapan I~A|Alapan I~A",
			"Alapan I~B|Alapan I~B",
			"Alapan I~C|Alapan I~C",
			"Alapan II~A|Alapan II~A",
			"Alapan II~B|Alapan II~B",
			"Anabu I~A|Anabu I~A",
			"Anabu I~B|Anabu I~B",
			"Anabu I~C|Anabu I~C",
			"Anabu I~D|Anabu I~D",
			"Anabu I~E|Anabu I~E",
			"Anabu I~F|Anabu I~F",
			"Anabu I~G|Anabu I~G",
			"Anabu II~A|Anabu II~A",
			"Anabu II~B|Anabu II~B",
			"Anabu II~C|Anabu II~C",
			"Anabu II~D|Anabu II~D",
			"Anabu II~E|Anabu II~E",
			"Anabu II~F|Anabu II~F",
			"Bagong Silang (Bahayang Pag~Asa)|Bagong Silang (Bahayang Pag~Asa)",
			"Bayan Luma I|Bayan Luma I",
			"Bayan Luma II|Bayan Luma II",
			"Bayan Luma III|Bayan Luma III",
			"Bayan Luma IV|Bayan Luma IV",
			"Bayan Luma V|Bayan Luma V",
			"Bayan Luma VI|Bayan Luma VI",
			"Bayan Luma VII|Bayan Luma VII",
			"Bayan Luma VIII|Bayan Luma VIII",
			"Bayan Luma IX|Bayan Luma IX",
			"Bucandala I|Bucandala I",
			"Bucandala II|Bucandala II",
			"Bucandala III|Bucandala III",
			"Bucandala IV|Bucandala IV",
			"Bucandala V|Bucandala V",
			"Buhay Na Tubig|Buhay Na Tubig",
			"Carsadang Bago I|Carsadang Bago I",
			"Carsadang Bago II|Carsadang Bago II",
			"Magdalo|Magdalo",
			"Maharlika|Maharlika",
			"Malagasang I~A|Malagasang I~A",
			"Malagasang I~B|Malagasang I~B",
			"Malagasang I~C|Malagasang I~C",
			"Malagasang I~D|Malagasang I~D",
			"Malagasang I~E|Malagasang I~E",
			"Malagasang I~F|Malagasang I~F",
			"Malagasang I~G|Malagasang I~G",
			"Malagasang II~A|Malagasang II~A",
			"Malagasang II~B|Malagasang II~B",
			"Malagasang II~C|Malagasang II~C",
			"Malagasang II~D|Malagasang II~D",
			"Malagasang II~E|Malagasang II~E",
			"Malagasang II~F|Malagasang II~F",
			"Malagasang II~G|Malagasang II~G",
			"Mariano Espeleta I|Mariano Espeleta I",
			"Mariano Espeleta II|Mariano Espeleta II",
			"Mariano Espeleta III|Mariano Espeleta III",
			"Medicion I~A|Medicion I~A",
			"Medicion I~B|Medicion I~B",
			"Medicion I~C|Medicion I~C",
			"Medicion I~D|Medicion I~D",
			"Medicion II~A|Medicion II~A",
			"Medicion II~B|Medicion II~B",
			"Medicion II~C|Medicion II~C",
			"Medicion II~D|Medicion II~D",
			"Medicion II~E|Medicion II~E",
			"Medicion II~F|Medicion II~F",
			"Pag~Asa I|Pag~Asa I",
			"Pag~Asa II|Pag~Asa II",
			"Pag~Asa III|Pag~Asa III",
			"Palico I|Palico I",
			"Palico II|Palico II",
			"Palico III|Palico III",
			"Palico IV|Palico IV",
			"Pasong Buaya I|Pasong Buaya I",
			"Pasong Buaya II|Pasong Buaya II",
			"Pinagbuklod|Pinagbuklod",
			"Poblacion I~A (Pob.)|Poblacion I~A (Pob.)",
			"Poblacion I~B|Poblacion I~B",
			"Poblacion I~C|Poblacion I~C",
			"Poblacion II~A (Pob.)|Poblacion II~A (Pob.)",
			"Poblacion II~B|Poblacion II~B",
			"Poblacion III~A (Pob.)|Poblacion III~A (Pob.)",
			"Poblacion III~B|Poblacion III~B",
			"Poblacion IV~A (Pob.)|Poblacion IV~A (Pob.)",
			"Poblacion IV~B|Poblacion IV~B",
			"Poblacion IV~C|Poblacion IV~C",
			"Poblacion IV~D|Poblacion IV~D",
			"Tanzang Luma I|Tanzang Luma I",
			"Tanzang Luma II|Tanzang Luma II",
			"Tanzang Luma III|Tanzang Luma III",
			"Tanzang Luma IV (Southern City)|Tanzang Luma IV (Southern City)",
			"Tanzang Luma V|Tanzang Luma V",
			"Tanzang Luma VI|Tanzang Luma VI",
			"Toclong I~A|Toclong I~A",
			"Toclong I~B|Toclong I~B",
			"Toclong I~C|Toclong I~C",
			"Toclong II~A|Toclong II~A",
			"Toclong II~B|Toclong II~B"
		];
	}

	if (c.value=="Indang"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Agus~Us|Agus~Us",
			"Alulod|Alulod",
			"Banaba Cerca|Banaba Cerca",
			"Banaba Lejos|Banaba Lejos",
			"Bancod|Bancod",
			"Barangay 1 (Pob.)|Barangay 1 (Pob.)",
			"Barangay 2 (Pob.)|Barangay 2 (Pob.)",
			"Barangay 3 (Pob.)|Barangay 3 (Pob.)",
			"Barangay 4 (Pob.)|Barangay 4 (Pob.)",
			"Buna Cerca|Buna Cerca",
			"Buna Lejos I|Buna Lejos I",
			"Buna Lejos II|Buna Lejos II",
			"Calumpang Cerca|Calumpang Cerca",
			"Calumpang Lejos I|Calumpang Lejos I",
			"Carasuchi|Carasuchi",
			"Daine I|Daine I",
			"Daine II|Daine II",
			"Guyam Malaki|Guyam Malaki",
			"Guyam Munti|Guyam Munti",
			"Harasan|Harasan",
			"Kayquit I|Kayquit I",
			"Kayquit II|Kayquit II",
			"Kayquit III|Kayquit III",
			"Kaytambog|Kaytambog",
			"Kaytapos|Kaytapos",
			"Limbon|Limbon",
			"Lumampong Balagbag|Lumampong Balagbag",
			"Lumampong Halayhay|Lumampong Halayhay",
			"Mahabangkahoy Cerca|Mahabangkahoy Cerca",
			"Mahabangkahoy Lejos|Mahabangkahoy Lejos",
			"Mataas Na Lupa (Checkpoint)|Mataas Na Lupa (Checkpoint)",
			"Pulo|Pulo",
			"Tambo Balagbag|Tambo Balagbag",
			"Tambo Ilaya|Tambo Ilaya",
			"Tambo Kulit|Tambo Kulit",
			"Tambo Malaki|Tambo Malaki"
		];
	}

	if (c.value=="Kawit"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Balsahan~Bisita|Balsahan~Bisita",
			"Batong Dalig|Batong Dalig",
			"Binakayan~Aplaya|Binakayan~Aplaya",
			"Binakayan~Kanluran|Binakayan~Kanluran",
			"Congbalay~Legaspi|Congbalay~Legaspi",
			"Gahak|Gahak",
			"Kaingen|Kaingen",
			"Magdalo (Putol)|Magdalo (Putol)",
			"Manggahan~Lawin|Manggahan~Lawin",
			"Marulas|Marulas",
			"Panamitan|Panamitan",
			"Poblacion|Poblacion",
			"Pulvorista|Pulvorista",
			"Samala~Marquez|Samala~Marquez",
			"San Sebastian|San Sebastian",
			"Santa Isabel|Santa Isabel",
			"Tabon I|Tabon I",
			"Tabon II|Tabon II",
			"Tabon III|Tabon III",
			"Toclong|Toclong",
			"Tramo~Bantayan|Tramo~Bantayan",
			"Wakas I|Wakas I",
			"Wakas II|Wakas II"
		];
	}

	if (c.value=="Magallanes"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Baliwag|Baliwag",
			"Barangay 1 (Pob.)|Barangay 1 (Pob.)",
			"Barangay 2 (Pob.)|Barangay 2 (Pob.)",
			"Barangay 3 (Pob.)|Barangay 3 (Pob.)",
			"Barangay 4 (Pob.)|Barangay 4 (Pob.)",
			"Barangay 5 (Pob.)|Barangay 5 (Pob.)",
			"Bendita I|Bendita I",
			"Bendita II|Bendita II",
			"Caluangan|Caluangan",
			"Kabulusan|Kabulusan",
			"Medina|Medina",
			"Pacheco|Pacheco",
			"Ramirez|Ramirez",
			"San Agustin|San Agustin",
			"Tua|Tua",
			"Urdaneta|Urdaneta"
		];
	}

	if (c.value=="Maragondon"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Bucal I|Bucal I",
			"Bucal II|Bucal II",
			"Bucal III A|Bucal III A",
			"Bucal III B|Bucal III B",
			"Bucal IV A|Bucal IV A",
			"Bucal IV B|Bucal IV B",
			"Caingin Pob. (Barangay 3)|Caingin Pob. (Barangay 3)",
			"Garita I A|Garita I A",
			"Garita I B|Garita I B",
			"Layong Mabilog|Layong Mabilog",
			"Mabato|Mabato",
			"Pantihan I (Balayungan)|Pantihan I (Balayungan)",
			"Pantihan II (Sagbat)|Pantihan II (Sagbat)",
			"Pantihan III (Pook Na Munti)|Pantihan III (Pook Na Munti)",
			"Pantihan IV (Pook Ni Sara)|Pantihan IV (Pook Ni Sara)",
			"Patungan|Patungan",
			"Pinagsanhan I A|Pinagsanhan I A",
			"Pinagsanhan I B|Pinagsanhan I B",
			"Poblacion I A|Poblacion I A",
			"Poblacion I B|Poblacion I B",
			"Poblacion II A|Poblacion II A",
			"Poblacion II B|Poblacion II B",
			"San Miguel I A (Caputatan)|San Miguel I A (Caputatan)",
			"San Miguel I B|San Miguel I B",
			"Talipusngo|Talipusngo",
			"Tulay Kanluran|Tulay Kanluran",
			"Tulay Silangan|Tulay Silangan"
		];
	}

	if (c.value=="Mendez"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Anuling Cerca I|Anuling Cerca I",
			"Anuling Cerca II|Anuling Cerca II",
			"Anuling Lejos I (Anuling)|Anuling Lejos I (Anuling)",
			"Anuling Lejos II|Anuling Lejos II",
			"Asis I|Asis I",
			"Asis II|Asis II",
			"Asis III|Asis III",
			"Banayad|Banayad",
			"Bukal|Bukal",
			"Galicia I|Galicia I",
			"Galicia II|Galicia II",
			"Galicia III|Galicia III",
			"Miguel Mojica|Miguel Mojica",
			"Palocpoc I|Palocpoc I",
			"Palocpoc II|Palocpoc II",
			"Panungyan I|Panungyan I",
			"Panungyan II|Panungyan II",
			"Poblacion I (Barangay I)|Poblacion I (Barangay I)",
			"Poblacion II (Barangay II)|Poblacion II (Barangay II)",
			"Poblacion III (Barangay III)|Poblacion III (Barangay III)",
			"Poblacion IV (Barangay IV)|Poblacion IV (Barangay IV)",
			"Poblacion V (Barangay V)|Poblacion V (Barangay V)",
			"Poblacion VI (Barangay VI)|Poblacion VI (Barangay VI)",
			"Poblacion VII (Barangay VII)|Poblacion VII (Barangay VII)"
		];
	}

	if (c.value=="Naic"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Bagong Karsada|Bagong Karsada",
			"Balsahan|Balsahan",
			"Bancaan|Bancaan",
			"Bucana Malaki|Bucana Malaki",
			"Bucana Sasahan|Bucana Sasahan",
			"Calubcob|Calubcob",
			"Capt. C. Nazareno (Pob.)|Capt. C. Nazareno (Pob.)",
			"Gomez~Zamora (Pob.)|Gomez~Zamora (Pob.)",
			"Halang|Halang",
			"Humbac|Humbac",
			"Ibayo Estacion|Ibayo Estacion",
			"Ibayo Silangan|Ibayo Silangan",
			"Kanluran|Kanluran",
			"Labac|Labac",
			"Latoria|Latoria",
			"Mabolo|Mabolo",
			"Makina|Makina",
			"Malainen Bago|Malainen Bago",
			"Malainen Luma|Malainen Luma",
			"Molino|Molino",
			"Munting Mapino|Munting Mapino",
			"Muzon|Muzon",
			"Palangue 1|Palangue 1",
			"Palangue 2 & 3|Palangue 2 & 3",
			"Sabang|Sabang",
			"San Roque|San Roque",
			"Santulan|Santulan",
			"Sapa|Sapa",
			"Timalan Balsahan|Timalan Balsahan",
			"Timalan Concepcion|Timalan Concepcion"
		];
	}

	if (c.value=="Noveleta"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Magdiwang|Magdiwang",
			"Poblacion|Poblacion",
			"Salcedo I|Salcedo I",
			"Salcedo II|Salcedo II",
			"San Antonio I|San Antonio I",
			"San Antonio II|San Antonio II",
			"San Jose I|San Jose I",
			"San Jose II|San Jose II",
			"San Juan I|San Juan I",
			"San Juan II|San Juan II",
			"San Rafael I|San Rafael I",
			"San Rafael II|San Rafael II",
			"San Rafael III|San Rafael III",
			"San Rafael IV|San Rafael IV",
			"Santa Rosa I|Santa Rosa I",
			"Santa Rosa II|Santa Rosa II"
		];
	}

	if (c.value=="Rosario"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Bagbag I|Bagbag I",
			"Bagbag II|Bagbag II",
			"Kanluran|Kanluran",
			"Ligtong I|Ligtong I",
			"Ligtong II|Ligtong II",
			"Ligtong III|Ligtong III",
			"Ligtong IV|Ligtong IV",
			"Muzon I|Muzon I",
			"Muzon II|Muzon II",
			"Poblacion|Poblacion",
			"Sapa I|Sapa I",
			"Sapa II|Sapa II",
			"Sapa III|Sapa III",
			"Sapa IV|Sapa IV",
			"Silangan I|Silangan I",
			"Silangan II|Silangan II",
			"Tejeros Convention|Tejeros Convention",
			"Wawa I|Wawa I",
			"Wawa II|Wawa II",
			"Wawa III|Wawa III"
		];
	}

	if (c.value=="Silang"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Acacia|Acacia",
			"Adlas|Adlas",
			"Anahaw I|Anahaw I",
			"Anahaw II|Anahaw II",
			"Balite I|Balite I",
			"Balite II|Balite II",
			"Balubad|Balubad",
			"Banaba|Banaba",
			"Barangay I (Pob.)|Barangay I (Pob.)",
			"Barangay II (Pob.)|Barangay II (Pob.)",
			"Barangay III (Pob.)|Barangay III (Pob.)",
			"Barangay IV (Pob.)|Barangay IV (Pob.)",
			"Barangay V (Pob.)|Barangay V (Pob.)",
			"Batas|Batas",
			"Biga I|Biga I",
			"Biga II|Biga II",
			"Biluso|Biluso",
			"Bucal|Bucal",
			"Buho|Buho",
			"Bulihan|Bulihan",
			"Cabangaan|Cabangaan",
			"Carmen|Carmen",
			"Hoyo|Hoyo",
			"Hukay|Hukay",
			"Iba|Iba",
			"Inchican|Inchican",
			"Ipil I|Ipil I",
			"Ipil II|Ipil II",
			"Kalubkob|Kalubkob",
			"Kaong|Kaong",
			"Lalaan I|Lalaan I",
			"Lalaan II|Lalaan II",
			"Litlit|Litlit",
			"Lucsuhin|Lucsuhin",
			"Lumil|Lumil",
			"Maguyam|Maguyam",
			"Malabag|Malabag",
			"Malaking Tatyao|Malaking Tatyao",
			"Mataas Na Burol|Mataas Na Burol",
			"Munting Ilog|Munting Ilog",
			"Narra I|Narra I",
			"Narra II|Narra II",
			"Narra III|Narra III",
			"Paligawan|Paligawan",
			"Pasong Langka|Pasong Langka",
			"Pooc I|Pooc I",
			"Pooc II|Pooc II",
			"Pulong Bunga|Pulong Bunga",
			"Pulong Saging|Pulong Saging",
			"Puting Kahoy|Puting Kahoy",
			"Sabutan|Sabutan",
			"San Miguel I|San Miguel I",
			"San Miguel II|San Miguel II",
			"San Vicente I|San Vicente I",
			"San Vicente II|San Vicente II",
			"Santol|Santol",
			"Tartaria|Tartaria",
			"Tibig|Tibig",
			"Toledo|Toledo",
			"Tubuan I|Tubuan I",
			"Tubuan II|Tubuan II",
			"Tubuan III|Tubuan III",
			"Ulat|Ulat",
			"Yakal|Yakal"
		];
	}

	if (c.value=="Tagaytay City"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Asisan|Asisan",
			"Bagong Tubig|Bagong Tubig",
			"Calabuso (Calabuso South & North)|Calabuso (Calabuso South & North)",
			"Dapdap East|Dapdap East",
			"Dapdap West|Dapdap West",
			"Francisco (San Francisco)|Francisco (San Francisco)",
			"Guinhawa North|Guinhawa North",
			"Guinhawa South|Guinhawa South",
			"Iruhin East|Iruhin East",
			"Iruhin South|Iruhin South",
			"Iruhin West|Iruhin West",
			"Kaybagal East|Kaybagal East",
			"Kaybagal North|Kaybagal North",
			"Kaybagal South (Pob.)|Kaybagal South (Pob.)",
			"Mag~Asawang Ilat|Mag~Asawang Ilat",
			"Maharlika East|Maharlika East",
			"Maharlika West|Maharlika West",
			"Maitim 2Nd Central|Maitim 2Nd Central",
			"Maitim 2Nd East|Maitim 2Nd East",
			"Maitim 2Nd West|Maitim 2Nd West",
			"Mendez Crossing East|Mendez Crossing East",
			"Mendez Crossing West|Mendez Crossing West",
			"Neogan|Neogan",
			"Patutong Malaki North|Patutong Malaki North",
			"Patutong Malaki South|Patutong Malaki South",
			"Sambong|Sambong",
			"San Jose|San Jose",
			"Silang Junction North|Silang Junction North",
			"Silang Junction South|Silang Junction South",
			"Sungay North|Sungay North",
			"Sungay South|Sungay South",
			"Tolentino East|Tolentino East",
			"Tolentino West|Tolentino West",
			"Zambal|Zambal"
		];
	}

	if (c.value=="Tanza"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Amaya I|Amaya I",
			"Amaya II|Amaya II",
			"Amaya III|Amaya III",
			"Amaya IV|Amaya IV",
			"Amaya V|Amaya V",
			"Amaya VI|Amaya VI",
			"Amaya VII|Amaya VII",
			"Bagtas|Bagtas",
			"Barangay I (Pob.)|Barangay I (Pob.)",
			"Barangay II (Pob.)|Barangay II (Pob.)",
			"Barangay III (Pob.)|Barangay III (Pob.)",
			"Barangay IV (Pob.)|Barangay IV (Pob.)",
			"Biga|Biga",
			"Biwas|Biwas",
			"Bucal|Bucal",
			"Bunga|Bunga",
			"Calibuyo|Calibuyo",
			"Capipisa|Capipisa",
			"Daang Amaya I|Daang Amaya I",
			"Daang Amaya II|Daang Amaya II",
			"Daang Amaya III|Daang Amaya III",
			"Halayhay|Halayhay",
			"Julugan I|Julugan I",
			"Julugan II|Julugan II",
			"Julugan III|Julugan III",
			"Julugan IV|Julugan IV",
			"Julugan V|Julugan V",
			"Julugan VI|Julugan VI",
			"Julugan VII|Julugan VII",
			"Julugan VIII|Julugan VIII",
			"Lambingan|Lambingan",
			"Mulawin|Mulawin",
			"Paradahan I|Paradahan I",
			"Paradahan II|Paradahan II",
			"Punta I|Punta I",
			"Punta II|Punta II",
			"Sahud Ulan|Sahud Ulan",
			"Sanja Mayor|Sanja Mayor",
			"Santol|Santol",
			"Tanauan|Tanauan",
			"Tres Cruses|Tres Cruses"
		];
	}

	if (c.value=="Ternate"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Bucana|Bucana",
			"Poblacion I (Barangay I)|Poblacion I (Barangay I)",
			"Poblacion I A|Poblacion I A",
			"Poblacion II (Barangay II)|Poblacion II (Barangay II)",
			"Poblacion III (Barangay III)|Poblacion III (Barangay III)",
			"San Jose|San Jose",
			"San Juan I|San Juan I",
			"San Juan II|San Juan II",
			"Sapang I|Sapang I",
			"Sapang II|Sapang II"
		];
	}

	if (c.value=="Trece Martires City"){
		var optionArray = [
			"-- Select --|-- Select --",
			"Aguado (Piscal Mundo)|Aguado (Piscal Mundo)",
			"Cabezas|Cabezas",
			"Cabuco|Cabuco",
			"Conchu (Lagundian)|Conchu (Lagundian)",
			"De Ocampo|De Ocampo",
			"Gregorio (Aliang)|Gregorio (Aliang)",
			"Inocencio (B. Pook)|Inocencio (B. Pook)",
			"Lallana|Lallana",
			"Lapidario (Bayog)|Lapidario (Bayog)",
			"Luciano (Bitangan)|Luciano (Bitangan)",
			"Osorio|Osorio",
			"Perez (Lucbanan)|Perez (Lucbanan)",
			"San Agustin (Pob.)|San Agustin (Pob.)"
		];
	}

	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newoption = document.createElement("option");
		newoption.value = pair[0];
		newoption.innerHTML = pair[1];
		b.options.add(newoption);
	}
}
		