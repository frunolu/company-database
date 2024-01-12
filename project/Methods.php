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

}
