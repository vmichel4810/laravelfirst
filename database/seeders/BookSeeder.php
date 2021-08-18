<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert(
            [
                [

                    'title' => "Harry Poter à l'école des sociers",
                    'author' => "J.K ROWLING",
                    'publication_year' => 1997,
                    'genre'=>"Fantasy",
                    'synopsis'=>"Orphelin, le jeune Harry Potter peut enfin quitter ses tyranniques oncle et tante Dursley lorsqu'un curieux messager lui révèle qu'il est un sorcier. À 11 ans, Harry va enfin pouvoir intégrer la légendaire école de sorcellerie de Poudlard, y trouver une famille digne de ce nom et des amis, développer ses dons, et préparer son glorieux avenir.",
                ],
                [

                    'title' =>"Harry Potter et la Chambre des secrets",
                    'author' =>"J.K ROWLING",
                    'publication_year' =>"1998",
                    'genre'=>"Fantasy",
                    'synopsis'=>"L'elfe Dobby a bien tenté d'empêcher Harry de retourner à l'École des Sorciers, frappée d'une terrible malédiction, mais Harry n'est pas près de laisser choir ses amis. Après une fugue et une rentrée scolaire plutôt chaotique, voici notre valeureux sorcier intégré à Poudlard. Les forces maléfiques n'ont qu'à bien se tenir.",
                ],
                [

                    'title' =>"Harry Potter et le Prisonnier d'Azkaban",
                    'author' =>"J.K ROWLING",
                    'publication_year' =>"1999",
                    'genre'=>"Fantasy",
                    'synopsis'=>"Sirius Black, un dangereux sorcier criminel, s'échappe de la sombre prison d'Azkaban avec un seul et unique but : se venger d'Harry Potter, entré avec ses amis Ron et Hermione en troisième année à l'école de sorcellerie de Poudlard, où ils auront aussi à faire avec les terrifiants Détraqueurs."

                ],
                [

                    'title' =>"Harry Potter et la Coupe de feu",
                    'author' =>"J.K ROWLING",
                    'publication_year' =>"2000",
                    'genre'=>"Fantasy",
                    'synopsis'=>"La quatrième année à l'école de Poudlard est marquée par le Tournoi des trois sorciers. Les participants sont choisis par la fameuse coupe de feu qui est à l'origine d'un scandale. Elle sélectionne Harry Potter alors qu'il n'a pas l'âge légal requis !"
                ]
            ],
        );
    }
}
