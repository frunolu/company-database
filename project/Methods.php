<?php


class Methods
{

// Úloha 2.
// Uprav neefektívne časti PHP metódy a oprav možné chyby.

    public static function inefficientMethod($user_id) {

        $all_certificates = [];
        $courses = Course::where('active', 1)->all();
        $author_courses = [];

        foreach ( $courses as $course ) {

            $user = Person::where('id', $user_id)->get();

            if ( $course->author == $user->id ) {

                $author_courses[] = $course;

            } else {

            }
        }

        $phpCertificates = [];
        foreach ( $courses as $course ) {

            if ( strpos( $course->certificate, 'php' ) != false ) {

                $phpCertificates[] = $course->certificate;
                $all_certificates[] = $course->certificate;
            } else {

                $all_certificates[] = $course->certificate;
            }

        }

        //...

    }


    // identifikoval som laravel eloquent funkcie

    public static function efficientMethod($user_id): array
    {
        $all_certificates = [];

        $courses = Course::where('active', 1)->get();

        $author_courses = $courses->where('author', $user_id);

        $phpCertificates = $courses->filter(function ($course) {
            return strpos($course->certificate, 'php') !== false;
        })->pluck('certificate')->toArray();

        $all_certificates = $courses->pluck('certificate')->toArray();

        $unique_certificates = array_unique($all_certificates);

        return [
            'author_courses' => $author_courses,
            'php_certificates' => $phpCertificates,
            'all_certificates' => $all_certificates,
            'unique_certificates' => $unique_certificates,
        ];
    }

}
