# Teorija
- Kas ir API?
  - API (Application Programming Interface) nosaka, kā dažādiem datoriem vai programmatūras komponentiem jāsazinās vai jādarbojas vienam ar otru.

- Kā deklarēt mainīgo PHP valodā?
    - PHP mainīgos var deklarēt, izmantojot dollāra simbolu ($) un vēlamo mainīgā nosaukumu. Piemēram:
```
$teksts = "Hello world!";
```

- Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
    - Laravel izmanto MVC (Model-View-Controller) arhitektūras modeli.
Tā strādā šādi:
        - Modelis (Model): Attēlo datu struktūras un operācijas, kas saistītas ar datu saglabāšanu un iegūšanu no datu avota, piemēram, datu bāzes.
        - Skats (View): Atbild par informācijas attēlošanu lietotājam, veidojot HTML saturu un prezentāciju, izmantojot datus no modeļa.
        - Kontrolieris (Controller): Apstrādā pieprasījumus no lietotāja, nosaka, kādi dati jāiegūst no modeļa, un kā jāatgriež skatam. Tas nodrošina saskarni starp lietotāja ievadiem un datu manipulācijām.

- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
    - ORM (Object-Relational Mapping) ir programmēšanas rīks, kas ļauj attēlot datubāzes ierakstus kā objektus programmēšanas valodā.

- Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:

![image](https://github.com/AleksisVejs/CoursesAleksisVejs/assets/103510589/fcc7d37d-37d7-4495-bfcb-c24eb481c4b7)

Kods:
```
use App\Models\User;
$lietotaji = User::where('rating', '>', 4)->get();
```
