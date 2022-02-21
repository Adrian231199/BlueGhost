# BlueGhost Adresár - Úkol
Jednoduchý adresár vytvorený pomocou PHP a MySQL.

Pred spustením si naimportujeme nastavenia DB pomocou súboru ukolDB.sql 
  - v phpMyAdmin zvolíme Import vyberieme súbor ukolDB.sql a potvrdíme tlačidlom Run.
  - ak DB s názvom ukolDB existuje tak ju script zmaže a nahradí novou prázdnou DB s poľami fullname (Meno a priezvisko), phone (Tel. číslo), email, note (poznámka).
  - následne v súbore db_conn.php upravíme host, username a password podľa toko kde sa nachádza DB z perdchádzajúceho kroku
  - zmeny uložíme a apikáciu spustíme otvorením index.php v prehliadači

Aplikácia slúži ako jednoduchý adresár, v ktorom môžeme pridávať nové kontakty, upravovať existujúce kontakty alebo zmazať existujúce kontakty.
