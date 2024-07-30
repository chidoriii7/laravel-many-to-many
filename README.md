Descrizione:
Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto usando laravel breeze per utilizzare il sistema di autenticazione.
Trovate sulla mia repo github il progetto con tutte le indicazioni per creare un vostro template, partendo da un progetto laravel 10 pulito:
Seguite le istruzioni del README:
https://github.com/taniot/laravel-auth-classe126
Iniziamo con il definire il layout, modello, migrazione, controller e rotte necessarie per il sistema portfolio:
1. Autenticazione: si parte con l'autenticazione e la creazione di un layout per back-office
2. Creazione del modello Project con relativa migrazione, seeder, controller e rotte
*Bonus*
Per la parte di back-office creiamo un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti
Implementiamo la validazione dei dati dei Progetti nelle operazioni CRUD che lo richiedono usando due form requests.


Bonus:
provate a modificare il comportamento di default di laravel creando un campo SLUG per ogni progetto e riferendovi a quello per le operazioni di EDIT, SHOW, CREATE, DELETE;
create una versione pubblica dei vostri progetti creando un controller Guest\ProjectController