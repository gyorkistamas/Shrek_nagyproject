
**Tesztelő:** Török Bálint

**Tesztelés dátuma:** 2024.12.09

### Sikeres, Sikertelen vizsgák feljegyzése ###
## Ezek a funkciók Adminisztrátori jogosultsággal láthatóak ##

| Teszt szám | Teszt eset | Várt eredmény | Tényleges Eredmény | Megjegyzés |
|------------|------------|---------------|--------------------|------------|
| TB_001 | Vizsga hozzáadása sikeres kimenettel | Új vizsga rekord létrejön az adatbázisban | Megfelel a várt eredménynek | Nem találtam hibát |
| TB_002 | Vizsga hozzáadása érvénytelen dátummal | Az űrlap hibát jelez, és erről a felhasználót tájékoztatja | Hibakezelés megfelelően működik | Nem talátam hibát |
| TB_003 | Vizsga hozzáadása mezők kitöltése nélkül | Kitöltés hiányában nem engedi elküldeni az űrlapot | Az űrlap tájékoztat, hogy vannak kitöltetlen mezők | Nem találtam hibát |
| TB_004 | Sikeres, sikertelen vizsgák listázása | Az oldal kilistázza azon vizsgákat, amik az adatbázisban szereplnek | Megegyzik a várt eredménnyel | Nem találtam hibát |
| TB_005 | Listázásnál mindegyik mező megjelenik, helyes értékkel | Minden mező látszik, a műveleti gombokkal együtt (Szerkesztés, Törlés) | Megegyzik a várt eredménnyel | Nem találtam hibát |
| TB_006 | Vizsgaeredmény törlése | Vizsga sikeres törlése az adatbázisból | 'Biztosan törölni szeretné?' értesítés elfogadása után, a vizsga sikeresen törölve lesz | Nem találtam hibát |
| TB_007 | Adott vizsga szerkesztése | Vizsga adatainak szerkesztése | Átirányítás után a vizsga adatait módosítani lehet, viszont nem maradhat kitöltetlen mező | Nem találtam hibát |
| TB_008 | Vizsga létrehozása gomb az ADMIN funkciókban | Rákattintás után átirányít a kilistázott vizsgákhoz | Megfelel a várt eredménynek | Nem találtam hibát |