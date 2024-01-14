<?php



// co bolo zmenene
//Získanie všetkých aktívnych kurzov:

//$courses = Course::where('active', 1)->get();
//Opravené použitie get() na konci dotazu na získanie kolekcie aktívnych kurzov.

//Filtrácia kurzov pre autora:

//$author_courses = $courses->where('author', $user_id);
//Použitie metódy where na filtrovanie kurzov pre konkrétneho autora ($user_id).

//Získanie PHP certifikátov:

//$phpCertificates = $courses->filter(function ($course) {
//    return strpos($course->certificate, 'php') !== false;
//})->pluck('certificate')->toArray();
//Použitie metódy filter na efektívne získanie kurzov s PHP certifikátmi a potom pluck na získanie hodnôt certifikátov a prevod na pole.

//Získanie všetkých certifikátov:

//$all_certificates = $courses->pluck('certificate')->toArray();
//Použitie metódy pluck na získanie hodnôt všetkých certifikátov a prevod na pole.

//Unikátne certifikáty:

//$unique_certificates = array_unique($all_certificates);
//Ak potrebujete získať iba unikátne certifikáty, použite array_unique.

//Výsledok by mal byť efektívnejší kód, ktorý správne filtrovať a získavať informácie o kurzoch a certifikátoch pre daného používateľa.



