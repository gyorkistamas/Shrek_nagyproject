# Követelmény specifikáció
## 1. Áttekintés
A jogosítványszerzés napjainkban szinte elengedhetetlen, hiszen a vezetési képesség nemcsak a mobilitást növeli, hanem lehetőséget ad a mindennapi feladatok könnyebb elvégzésére és a munkaerőpiacon is előnyt jelenthet. Az autósiskolák ebben a folyamatban kulcsszerepet játszanak, hiszen nem csupán a közlekedési szabályok és a vezetés technikai alapjainak megtanításában segítenek, hanem a felelős és biztonságos vezetés szemléletét is közvetítik. Egy jó autósiskola megfelelően felkészít a valós közlekedési helyzetekre, és magabiztos vezetővé tesz, aki képes gyorsan és biztonságosan reagálni a váratlan szituációkra.

## 2. Jelenlegi helyzet
Cégünkkel felvette a kapcsolatot az egyik ügyfelünk, aki egy autósiskolát vezet.
Eddig papír alapon tárolt el mindent, de egy hirtelen ugrás a népszerűségében korszerűsítésre kényszerítette.
A webes felületünk feladata az lenne, hogy segítsük a diákok és oktatók közötti kommunikációt, eltároljuk a megfelelő adatokat és megkönnyítsük az adminisztrációt.
Az a felhasználó, akit az adminisztrátor nem tesz be a rendszerbe, az csak az oktatókat és az iskola járműveit, valamint elérhetőségeket tekinthetnek meg.
A diákok be tud jelentkezni, meg tudja változtatni adatait, megtekintheti azokat, valamint eddig levezetett óráit is megtekintheti
Az oktatók ezen felül beléphetnek mint adminisztrátor és vezetési, valamint vizsgaidőpontot tudnak kiírni

## 3. Vágyálom rendszer
Egy olyan webes alkalmazás készítése(a Laravel és az Angular keretrendszer használatával), ahol diákként tudod kezelni az adataid, oktatóként tudsz létrehozni vizsgákat és órákat, látogatóként pedig az oktatók és járművek adatait lehet megtekinteni.
Az a felhasználó aki nincs felvéve csak általános információkat érhessen el az iskoláról.Lehessen az adminisztrátoroknak új felhasználót regisztrálni, a meglévő felhasználóknak különböző jogosultságokkal rendelkeznek, az egyszerű diákok bejelentkezhetnek egy bejelentkezési oldalon, megtekinthetik az adataikat egy adatlap segítségével, meg tudják változtatni azokat egy űrlap segítségével és megtekinthetik az eddig vezetett óráikat is. Ezeken felül az oktatók tudnak egy külön bejelentkezési felületen adminisztrátori módban belépni, vezetési időpontokat létrehozni egy űrlap segítségével, illetve egy másik űrlap segítségével vizsgaidőpontokat kiírni.

## 4. Jelenlegi üzleti folyamatok modellje
Egy autósiskola számára készülő weboldal modellje kulcsfontosságú szerepet játszik abban, hogy modern és hatékony módon támogassa az iskolába jelentkező tanulókat. A weboldal elsődleges célja, hogy megkönnyítse az információhoz való hozzáférést és a beiratkozási folyamatot. Az oldal felépítése egyszerű és átlátható, hogy a látogatók gyorsan megtalálják az autósiskola szolgáltatásait, az oktatók bemutatkozását, valamint a tanfolyami időpontokat és árakat. Az interaktív funkciók – például a gyors regisztráció, a vizsgafelkészítő tesztek és a konzultációs időpontok foglalása – lehetőséget adnak a diákok számára, hogy könnyedén és rugalmasan intézhessék tanulási folyamataikat. Az oldal továbbá egy központi kommunikációs platformként is szolgál, ahol a tanulók értesítéseket és naprakész információkat kaphatnak a tanfolyam előrehaladásáról és a vizsgaidőpontokról. <!-- nem végleges -->


## 5. Igényelt üzleti folyamatok modellje
![utleti folyamatok](Képek/uzletifolyamatok_modelje.png)

## 6. Követelménylista
| K1 | Főoldal| fő lap | A weboldal fő lapja ahol információk érhetőek el és ide kerül a látogató a weboldal felkeresésekor |
| K2 | Bejelentkezés | Bejelentkezési lap | Bejelentkező felület |
| K3 | Regisztráció | Regisztrációs lap | Regisztrációs felület látogatóknak. |
| K4 | Saját profil megtekintése | Felhasználó lap | A felhasználó megtekintheti a saját adatait ás válzotathat az adatain |
| K5 | Vezetés | Vezetés lap | A felhasználók vezetési órát vehetnek fel és az adminok órákat írhatnak ki és szerkeszthetnek |
| K6 | Vizsga | Vezetés olap | A felhasználók vizsgákat vehetnek fel és az adminok viszgákat írhatnak ki és szerkeszthetnek |
| K7 | Tanulók | Tanulók oldal | Az adminok számára elérhető, szerkeszthetik a tanulók felhasználóját |


## 7. Fogalomtár
Felhasználó aki nincs felvéve: A weblap tartalmának olyan fogyasztója, aki nem rendelkezik felhasználói fiókkal. Csak alapvető információkat érnek el.
