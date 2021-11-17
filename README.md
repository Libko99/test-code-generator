Zadanie:
Priecinok obsahuje dva PHP skripty, ktore zabezpecuju generovanie unikatnych sutaznych kodov a nasledne kontrolu ci zadany kod existuje.
Subor generate-codes.php po jeho zavolani vygeneruje sutazne kody a ulozi ich do textoveho suboru. Zavolanim suboru check-code.php sa nam zobrazi formular s moznostou zadania kodu. Po odoslani formulara sa v rovnakom subore skontroluje ci zadany kod je platny alebo nie.
Potrebujeme prerobit tuto kniznicu tak, aby islo o OOP kniznicu, pri zachovani existujucej funkcnosti.
Riesenie je potrebne umiestnit ako samostatny repozitar na GitHub/Gitlab/Bitbucket (podla vlastneho vyberu) s pristupom pre nas.
Upravy existujuceho kodu musia byt v samostnanom commite/commitoch, oddelene od inicializacneho commitu, ktory obsahuje kod v povodnom stave.

Funkcnost chceme rozsirit o nasledovne funkcionality:
1. Po skontrolovani existencie kodu sa kod, ktory existoval v zozname vygenerovanych kodov uz nebude moct znovu pouzit/vyhladat.
2. Pregenerovat zoznam kodov je mozne iba ak neexistuje subor s kodmi alebo su vsetky kody vypouzivane.
3. Kniznica obsahuje jeden bug, ktory sposobuje, ze kody nemaju jednotny tvar.

Obmedzenia:
Pre vyriesenie tohto zadania nechceme pouzit ziadny framework.
Nechceme vyuzit ziadne JS kniznice ani cisty JS.
Cas na vypracovanie zadania by nemal prekrocit 60 minut.