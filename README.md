# Kasutajaliidese mallid

See repo on minu tööfailide kogum, mis sündis Rahvusarhiivi Virtuaalse Uurimissaali (VAU) kliendivaadete ümberdisainimise käigus.

**Taust / miks nii:**
- Disainer andis Figma kujundused.
- Ma ei kodeerinud kujundusi otse VAU PHP koodi sisse, sest päriskood on jaotatud paljudeks alamvaadeteks, portlettideks ja komponentideks.
- Selle asemel ehitasin esmalt eraldiseisvad HTML-lehed, mis kasutavad Rahvusarhiivi disainisüsteemi (kohandatud TailwindCSS konfiguratsiooni).
- Kui iga leht töötas kindlalt eri ekraanisuurustel, kandsin lahenduse üle VAU PHP koodi.

**Miks need mallid on väärtuslikud:**
- Need on sisuliselt ajutised tööfailid, kuid sisaldavad palju korduvkasutatavaid alam-paigutusi ja mustreid.
- Nende kõige väärtuslikum osa on **kohandumine viie ekraanisuurusega**, mille teostamine ja testimine võtab tavaliselt palju aega.
- `layouts` on eriti kasulik: osa paigutusi on puhtad ja üldotstarbelised, minimaalse lorem-ipsum sisuga, ning neid on lihtne vormida PHP/Yii layout’ideks.
- Kuigi enamik `pages` malle on sisult VAU-spetsiifilised, saab sisu eemaldades või asendades kätte **hästi töötavad responsiivsed “konteinerid”** (küljendused).
- `components` on teadlikult ebaühtlane kogum: osa faile on “päris” komponentide mallid, osa on väiksemad katsed/eksperimendid. See on sisuliselt mänguväljak, kus katsetasin, kuidas kohandada olemasolevaid Yii1 widget’e Tailwind-põhisesse disainisüsteemi.
- Arvesta, et osad mallide interaktsioonid on päriselt toimivad (nt menüü avaneb, paneel vahetub), kuid osa elemente on teadlikult “kohatäited” (nt leheküljejaotus on olemas, kuid ei tööta). Need failid on eelkõige ajutised **töövahendid**, et tõsta Figma lahendus turvaliselt PHP koodi üle, mitte süsteemne “valmisteek”.

## Ekraanisuurused
Mallid on viimistletud kohanduma järgmiste ekraanisuurustega:
- suur monitor (nt HD ja 4K monitor)
- keskmine ekraan (nt kompaktse sülearvuti ekraan)
- suur tahvelarvuti (nt iPad Pro)
- väike tahvelarvuti (nt iPad)
- telefon

## Struktuur
- `index.html`: mallide avaleht (otsing + rühmad)
- `views/layouts`: põhipaigutused
- `views/pages`: lehed (failinime alusel alamrühmitatud)
- `views/components`: komponendid

## Arendus
CSS genereeritakse TailwindCSS-ist faili `style.css`.

Käsud:
```bash
npm install
npm run dev   # watch (arenduseks)
npm run build # ühekorra build
```

## Viited

https://rahvusarhiiv2.github.io/disainisysteem
