Taxi Penguin od Dominika Pecucha.

Stranka je urcena pre zamestnancov taxi sluzby, ktori budu s danou databazou pracovat.
Je nutne sa prihlasit aby bolo mozne pokracovat na informacie o databaze.

Username:   Boss
Password:   prosimsiA

Na uvodnej stranke su zobrazene google charts (z JOINov nad databazou) pomocou javascript .

Je mozne registrovat dalsieho zamestnanca, ktory sa bude moct prihlasovat do databazy.
Registracny kluc je "secret_key". (je to preto, aby sa zabranilo registracii neopravnenych ludi = spoluziakov, ktori budu chciet pridavat do databazy "vtipne" udaje).
Hesla su hashovane a do databazy sa uklada uz len hash.

Na dalsej casti stranky su tabulky, na ktore sa da dostat cez navbar. Niesu osetrene mysql errory pri pokuse o vymazanie cudzieho kluca
(FK_constraint). Na localhoste sa mi podarilo tieto errory skryt tak, aby sa vratil na predchadzajucu stranku a vypisal chybu, no po uploade
na studentsky server to uz nefungovalo.


