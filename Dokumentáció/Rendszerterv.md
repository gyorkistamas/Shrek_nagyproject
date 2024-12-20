## 1. A rendszer célja

Egy olyan webes alkalmazás készítése(a Laravel és az Angular keretrendszer használatával), ahol diákként tudod kezelni az adataid, oktatóként tudsz létrehozni vizsgákat és órákat, látogatóként pedig az oktatók és járművek adatait lehet megtekinteni.
Az a felhasználó aki nincs felvéve csak általános információkat érhet el az iskoláról. Az adminisztrátoroknak tudnak új felhasználót regisztrálni, a meglévő felhasználóknak különböző jogosultságokkal rendelkeznek, az egyszerű diákok bejelentkezhetnek, megtekinthetik az adataikat meg tudják változtatni azokat és megtekinthetik az eddig vezetett óráikat is. Ezeken felül az oktatók tudnak egy külön bejelentkezési felületen adminisztrátori módban belépni, vezetési időpontokat létrehozni, illetve vizsgaidőpontokat kiírni.

## 2. Projektterv
   
   PHP, HTML, CSS, JavaScript használatával, Laravel és Angular keretrendszerben webalkalmazás létrehozása.
### 2.1 Projektszerepkörök, felelőségek
* Scrum master:
	-   Kovács Bence
* Product owner:
	-   Kovács Bence
* Üzleti szereplő:
	-   Kovács Bence
   
### 2.2 Projektmunkások és felelőségek
   		
* Frontend:
	-   Kökény Kristóf
	-   Török Bálint
* Backend:  
	-   Kadlót Levente
	-   Gál Szabolcs
* Tesztelés:   
	-   Kadlót Levente
	-   Gál Szabolcs
	-   Kökény Kristóf
	-   Török Bálint
  
### 2.3 Ütemterv
|Funkció                  | Feladat                   | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Határidő (nap) |
|-------------------------|---------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                    |         1 |             1 |                     20 |               19 |                   2 |             
|Funkcionális specifikáció|Megírás                    |         1 |             1 |                     20 |               19 |                   2 |
|Rendszerterv             |Megírás                    |         1 |             1 |                     20 |               19 |                   2 |
|Program                  |Vizuális tervek elkészítése|         2 |            10 |                     20 |               19 |                  14 |
|Program                  |Prototípus elkészítése     |         3 |            14 |                     21 |               19 |                  20 |
|Program                  |Alapfunkciók elkészítése   |         3 |            14 |                     21 |               19 |                  20 |
|Program                  |Extra funkciók elkészítése |         3 |            28 |                     28 |               19 |                  32 |
|Program                  |Tesztelés                  |         4 |            40 |                     40 |               19 |                  49 |

   
### 2.4 Mérföldkövek

   
## 3. Üzleti folyamatok modellje

![tanuló hozzáadó felület](../Dokumentáció/Képek/uzletifolyamatok_modelje.png)

### 3.1 Üzleti szereplők
- [ ] Felhasználó (Tanuló)
- [ ] Adminisztrátor (Oktató)
   
### 3.2 Üzleti folyamatok
- [ ] Regisztráció
- [ ] Bejelentkezés
- [ ] Saját profil megtekintése
- [ ] Saját profil szerkesztése
- [ ] Levezetett órák megtekintése
- [ ] Jelentkezés vizsgákra
- [ ] Adminisztrátori bejelentkezés
- [ ] Vezetési időpontok létrehozása
- [ ] Profilok adatainak szerkesztése
- [ ] Vizsgaidőpontok létrehozása
   
## 4. Követelmények

 ### Követelménytáblázat

 | ID | Modul | Név | Kifejtés |
 | :---: | --- | --- | --- |

### Funkcionális
  | Id | Modul | Név | Leírás |
  | :---: | --- | --- | --- |
  | F1 | Főoldal| Főoldal| Kezdő oldal, információkal és az összes gomb elérhető rajta bejelentkezés után |
  | F1 | Bejelentkeztető | Bejelentkeztető | bejelentkezést végrehajtó kód |
  | F2 | Bejelentkeztető | Bejelentkezési lap | oldal amin keresztül a bejelentkezés történik |
  | F3 | Bejelentkeztető | Bejelentkezés ellenörző | felhasználó oldali bejelenkezási form ellenörző |
  | F4 | Regisztrációs | Regisztrálás kezelő | regisztrációt végrehajtó kód |
  | F5 | Regisztrációs | Regisztálási lap | oldal amin keresztül a regisztrálás történik |
  | F6 | Regisztrációs | Regisztálás ellenörző | felhasználó oldali adat ellenörző |
  | F7 | Felhasználó | Felhasználó | felhasználói profil, a felhasználó szerkesztheti |
  | F8 | Vezetés | Vezetés Lista Kezelő | Vezetési listát megjelenítő kód és szerkesztő és jelentkezési tanulók számára kód |
  | F9 | Vezetés | Vezetés Lista lap| Oldal amin keresztűl elérhető a vezetési időpontok listája és tanuló és oktató számára más funkcionális gombok |
  | F10 | Vizsga | Vizsga Lista Kezelő | Vizsga listát megjelenítő kód és szerkesztő és jelentkezési tanulók számára kód |
  | F11 | Vizsga | Vizsga Lista lap| Vizsga amin keresztűl elérhető a vizsga időpontok listája és tanuló és oktató számára más funkcionális gombok |
  | F12 | Tanulók | Tanulók Lista Kezelő | minden regisztrált felhasználót megjelenítő kód, felhasználó kezelő kód |
  | F13 | Tanulók | Tanulók Lista lap | Oldal amin keresztűl elérhető a regisztrált felhasználók listája és szerkeszthetők az adataik |

### Nem Funkcionális
  | ID | Megnevezés | Leírás |
  | --- | --- | --- |
  | K9 | Jogosultság kezelés | Látogató, felhasználó és adminisztrátor megkülönböztetése |
  | K10 | Felhasználó kezelés | Felhasználói fiók létrehozása, adatok tárolása |
  | K11 | Modern felület | Könnyen navigálható felület |

   
## 5. Funkcionális terv

    
### 5.1 Rendszerszereplők
- Látogató
  - Korlátozott hozzáférés.
- Tanuló/Felhasználó
   - Szerkeszti a profilját, viszgát/vezetési időpontot vehet fel.
- Oktató/Adminisztrátor
  - Rendelkezik a felhasználó jogaival, és új viszgát/vezetési időpontot vesz fel vagy szerkeszt, felhasználókat szerkeszt.

   
### 5.2 Menü-hierarchia:
 1. Főoldal
 2. Bejelentkezés
 3. Regisztráció
 4. Profil megtekintése
    *  Profil szerkesztése
 5. Vezetés
 6. Vizsga
 7. Tanulók kezelése 
 8. Kijelentkezés
   
## 6. Fizikai környezet

Laravel által szolgáltatott fejlesztői webszerver fejlesztés során, a kész projekt esetén tényleges webszerver.

### 6.1 Fejlesztő eszközök

Kódszerkesztés:

- [ ] Visual Studio Code használata, népszerű és ingyenes kód szerkesztő, sok bővítménnyel, mint például a Laravel Blade, PHP Intelephense, Angular Language Service + leírónyelvek és keretrendszerek: pl. Laravel, Angular, PHP, HTML, CSS, JavaScript, BootStrap.

Verziókezelő rendszerek:

- [ ] A kód változásainak nyomonkövetésére a GitHub használható, ez segít a távoli repository-kat kezelni és elérni.

Csomagkezelők:

- [ ] Composer (PHP csomagkezelő), amely lehetővé teszi a Laravel és egyéb PHP csomagok egyszerű telepítését és kezelését.
- [ ] npm/yarn: Node.js csomagkezelők, amelyek Angular csomagok és függőségek kezelésére szolgálnak.

Adatbáziskezelők:

- [ ] MySQL Workbench: Grafikus felület az adatbázisok kezelésére és a lekérdezések írására.
- [ ] phpMyAdmin: Webalapú adatbázis-kezelő eszköz, amely segít az adatbázisok adminisztrálásában.

Dokumentációk és kommunikáció: 

- [ ] Trello: Projektmenedzsment eszközök a feladatok nyomon követésére és a csapatmunkára.
- [ ] Discord és Messenger használata a csoportos kommunikációhoz.

### 6.2 Hardver topológia

Egy szerver, weboldal kiszolgáló funkciókkal és szerver adatbázis kiszolgálóval.

    
## 7. Architekturális terv

### 7.1 Webszerver

Apache webszerver, IIS webszerver, Laravel által nyújtott fejelsztői webszerver

### 7.2 Adatbázis rendszer

MySql relációs adatbázis

    
## 8. Adatbázis terv
![Image](Képek/Adatbázis_Terv.png)

## 9. Implementációs terv
A weboldal elkészítéséhez Laravel keretrendszert használunk. Az adatbázist Oracle-ben készítjük el. Az alkalmazás egyes elemei (képek, publikus fájlok, modellek, stb.) külön mappákban találhatóak. A dokumentáció, illetve a weboldalon megjelenő szövegektől eltekintve törekszünk a Magyar nyelv használatára.


## 10. Tesztterv

A tesztelést a fejlesztői csapat minden tagja elvégzi. Az kapott eredményeket mindenki külön fájlban tárolja, pl. markdown fájlokban, excelben vagy wordben. Ezeket külön ID-val, rövid leírással, várt eredménnyel, kapott eredménnyel és megjegyzéssel látjuk el. 

### 10.1 Tesztelési dokumentáció vezetése

| ID | Rövid leírás | Várt eredmény | Kapott eredmény | Megjegyzés |
| :---: | --- | --- | --- | --- |
| TB_001 | Felhasználó bejelentkezés | A felhasználó hiba nélkül be tud jelentkezni | Sikeres bejelentkezés | Mindent rendben találtam |
| TB_002 | Adminisztrátor bejelentkezés | Az adminisztrátor hiba nélkül be tud jelentkezni | Sikeres bejelentkezés | Mindent rendben találtam |

### 10.2 Tesztesetek

| Teszt megnevezése | Elvárt eredmény |
| :---: | --- |
| Regisztráció tesztelése nem megfelelő email címmel. | A webes felület felhívja a figyelmet az email cím helytelenségére, megjelenítve a hibaüzenetet: "Kérjük, adjon meg egy érvényes email címet." |
| Regisztráció tesztelése már létező email címmel. | Az oldal értesíti a felhasználót, hogy az email cím már regisztrálva van, megjelenítve a hibaüzenetet: "Ez az email cím már regisztrálva van." |
| Regisztráció tesztelése kötelező mezők nélkül. | Az oldal értesíti a felhasználót, hogy a kötelező mezők kitöltése szükséges, megjelenítve a hibaüzenetet: "A név, email, jelszó mező kitöltése kötelező." |
| Regisztráció tesztelése gyenge jelszóval. | Az oldal tájékoztat arról, hogy a jelszó gyenge, és megjelenít egy hibaüzenetet: "A jelszónak legalább 8 karakterből kell állnia, és tartalmaznia kell egy számot és egy speciális karaktert." |
| Sikeres regisztráció érvényes adatokkal. | A weboldal sikeres regisztrációs üzenetet jelenít meg, és a felhasználó átirányításra kerül a bejelentkezési oldalra. |
| Bejelentkezés érvényes adatokkal. | A rendszer sikeresen bejelentkezteti a felhasználót, és átirányítja a felhasználói főoldalra, ahol a profil és minden más egyéb elérhető. |
| Bejelentkezés helytelen email címmel. | Az oldal értesíti a felhasználót, hogy a bejelentkezés sikertelen volt, és megjelenít egy hibaüzenetet: "Hibás email cím vagy jelszó." |
| Bejelentkezés helytelen jelszóval. | Az oldal értesíti a felhasználót, hogy a bejelentkezés sikertelen volt, és megjelenít egy hibaüzenetet: "Hibás email cím vagy jelszó." |
| Bejelentkezés üres mezőkkel. | A weboldal értesíti a felhasználót, hogy a kötelező mezők kitöltése szükséges, megjelenítve a hibaüzenetet: "Kérjük, adja meg a/az felhasználónevet / email címet és a jelszót." |

További tesztelések folytatása egységesen a tesztelések dokumentációban...

## 11. Telepítési terv

A projekt szerkesztéséhez a Visual Studio Code-t használjuk:

VS Code:  https://code.visualstudio.com/

Először is telepítened kell a PHP-t (8.0+), a Composer-t, a Node.js-t (LTS), az Angular CLI-t és a MySQL-t.
---
Itt található egy pár link a tökéletes működéshez:

PHP:  https://www.php.net/downloads

Composer:  https://getcomposer.org/

Node.js:  https://nodejs.org/en/download/package-manager

Angular CLI:  https://v17.angular.io/cli

MySQL:  https://dev.mysql.com/downloads/installer/

(Laravel mappa)
Projekt letöltése, aztán Laravel telepítése:
---
Nyisd meg a projektet terminálban (Visual Studio Code - Integrated Terminal), azután írd be ezeket:
```bash
  composer install
```
```bash
  copy .env.example .env
```
```bash
  php artisan key:generate
```

Ezután futtassuk a migrációkat:
```bash
  php artisan migrate
```

(Angular mappa)
Angular telepítése:
---
Node.js csomagok telepítése:
```bash
  npm install
```

Projektek futtatása:

Laravel:
```bash
  php artisan serve
```

Angular:
```bash
  ng serve
```

A Laravel API az http://localhost:8000, az Angular alkalmazás pedig a http://localhost:4200 címen érhető el.

## 12. Karbantartási terv

A karbantartási terv célja, hogy a weboldal folyamatosan megbízhatóan és biztonságosan működjön. Rendszeres frissítések, biztonsági ellenőrzések, teljesítmény optimalizálás és felhasználói visszajelzések figyelembevételével biztosítható a projekt hosszú távú fenntarthatósága és sikeressége.
