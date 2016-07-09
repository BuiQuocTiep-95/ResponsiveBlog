# BI-WT2 - Semestrální úloha - Blog

## Zadání

Cílem semestrální práce je vytvořit webovou aplikaci Blog složenou ze dvou částí

  1. javascriptový frontend pro blog za pomoci frameworku Angular JS 1.x,
  1. backend za pomoci Symfony 2.x nebo 3.x.
  
Předpokládá se využití služeb vytvořených v rámci semestrální práce pro BI-WT1.

Implementujte webovou aplikaci podle následujících požadavků:
  * komunikace mezi front-endem a back-endem bude zajištěna pomocí API respektující architekturu REST (Restful State Transfer)
  * Při implementaci back-endu použijte model "Repository - Functionality - Operation".
    * Kód bude vhodně členěn do tříd. Controllery např. nesmí obsahovat použití entity manageru nebo repository tříd, k tomu slouží služby (operace, funkcionality).
    * Metody nebudou nadbytečně dlouhé, znovupoužitelný kód (např. pro původní UI a API) se nebude opakovat a bude vyčleněn do vhodné třídy.
  * Při implementaci back-endu i front-endu zohledněte funkční i nefunkční [požadavky](pozadavky.md).
  * Při implementaci datového modelu zohledněte [diagram](object_model.png).

## Termín a způsob hodnocení

Semestrální práce bude hodnocena automatizovanými testy. Kontrola práce proběhne v termích vypsaných v KOSu.

Práce bude hodnocena 0 body v případě, že:
  * nejsou splněny nefunkční požadavky uvedené v zadání nebo kód obsahuje neošetřené chyby.
  * byla odevzdána po termínu (neplatí v odůvodněných případech - např. nemoc).
  * z logu nástroje Git není patrná průběžná práce (tj. log bude obsahovat minimum záznamů) - posouzení přísluší osobě vyučujícího!
  * z logu nástroje Git není možné jasně identifikovat osobu, která prováděla většinu změn - za vhodnou identifikaci jsou považovány jméno, příjmení a fakultní e-mailová adresa.