## Tesztelés célja: hibák megelőzése, a rendszer minőségének biztosítása.
**Ezt a dokumentumot azért hoztam létre, hogy dokumentáljam a projekt tesztelésének folyamatát.**
**Tesztelő: Kökény Kristóf**
**Tesztelés dátuma:** 2024.12.09


**Teszt esetek:**



1. **Regisztráció helyes adatokkal**  
   - **Eredmény**: Az új felhasználó sikeresen hozzáadódik az adatbázishoz.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

2. **Felhasználói adatok módosítása már meglévő felhasználó adataira**  
   - **Eredmény**: Az oldal figyelmeztet, hogy az adat már létezik.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

3. **Felhasználói adatok módosítása hibás formátumú adattal**  
   - **Eredmény**: Az oldal jelzi, hogy az adat formátuma nem megfelelő.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

4. **Csak a név módosítása**  
   - **Eredmény**: Az email mező hibát jelez.  
   - **Várt eredmény**: A rendszernek csak a nevet kellett volna módosítania.  
   - **Megjegyzés**: Hibát találtam, javítandó.  

5. **Csak a név módosítása, az email változatlan**  
   - **Eredmény**: Az email mező hibát jelez.  
   - **Várt eredmény**: A rendszernek csak a nevet kellett volna módosítania.  
   - **Megjegyzés**: Hibát találtam, javítandó.  

6. **Minden adat módosítása**  
   - **Eredmény**: Az űrlap sikeresen elmenti az adatokat, a változások érvényesülnek.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

7. **Regisztráció helytelen formátumú adatokkal**  
   - **Eredmény**: Az oldal figyelmeztet, hogy az adat formátuma nem megfelelő.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

8. **Kijelentkezés gombra kattintás**  
   - **Eredmény**: A rendszer kijelentkezteti a felhasználót, majd visszairányítja a bejelentkezési oldalra.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

9. **Regisztráció már létező adatokkal**  
   - **Eredmény**: Az oldal jelzi, hogy a megadott adatok már léteznek.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.
  
   - 11. **Bejelentkezés hiányosan kitöltött mezőkkel**  
   - **Eredmény**: Az oldal jelzi, hogy a megadott adatok hibásak vagy hiányosak.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

12. **Nem létező felhasználó bejelentkezése**  
   - **Eredmény**: Az oldal figyelmeztet, hogy az adatbázisban nincs egyező felhasználó.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

13. **Bejelentkezés adminisztrátorként **  
   - **Eredmény**: Az oldal a megfelelő adminisztrátori nézetet tölti be.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

14. **Bejelentkezés egyszerű felhasználóként**  
   - **Eredmény**: Az oldal a felhasználói nézetet tölti be.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  

15. **Saját adatok megtekintése felhasználóként**  
   - **Eredmény**: Az oldal helyesen jeleníti meg a felhasználó soron következő és már elvégzett óráit, illetve vizsgáit.  
   - **Várt eredmény**: Egyezik a várttal.  
   - **Megjegyzés**: Hibát nem találtam.  
