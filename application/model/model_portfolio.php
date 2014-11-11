<?php

class Model_Portfolio extends Model
{

    public function get_data()
    {

        return array(

            array(
                'Year' => '40-100',
                'Site' => 'https://en.wikipedia.org/wiki/Kali',
                'Description' => 'Goddess of Time, Change, and Destruction'
            ),

            array(
                'Year' => '20-20',
                'Site' => 'https://en.wikipedia.org/wiki/Freyja',
                'Description' => 'Goddess associated with love, sexuality, beauty, fertility, gold, war, and death.'
            ),

            array(
                'Year' => '0-20',
                'Site' => 'https://en.wikipedia.org/wiki/Perun',
                'Description' => 'The highest god of the pantheon and the god of thunder and lightning'
            ),

        );
    }

}