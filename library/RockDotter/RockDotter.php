<?php

/**
 * RöckDötter
 *
 * Put Metal Ümlauts where they belong!
 *
 * LICENSE
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/TeamOneTickets/rock-dotter/blob/master/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@teamonetickets.com so we can send you a copy immediately.
 *
 * @category    RöckDötter
 * @author      J Cobb <j@teamonetickets.com>
 * @copyright   Copyright (c) 2013 Team One Tickets & Sports Tours, Inc. (http://www.teamonetickets.com)
 * @license     https://github.com/TeamOneTickets/rock-dotter/blob/master/LICENSE.txt     MIT License
 */


namespace RockDotter;


/**
 * @category    RöckDötter
 * @author      J Cobb <j@teamonetickets.com>
 * @copyright   Copyright (c) 2013 Team One Tickets & Sports Tours, Inc. (http://www.teamonetickets.com)
 * @license     https://github.com/TeamOneTickets/rock-dotter/blob/master/LICENSE.txt     MIT License
 */
class RockDotter
{
    /**
     * The original, lame string
     *
     * @var string
     */
    protected $_original = null;


    /**
     * The new string that now looks pretty sweet
     *
     * @var string
     */
    protected $_rockDotted = null;


    /**
     * Associative array of replacements to make
     *
     * NOTE: Some of these are fairly common and are therefore commented out.
     *
     * @var array
     */
    protected $_replacements = array(
        '/Blue Oyster Cult/iu'                  => 'Blue Öyster Cult',
        '/Motorhead/ui'                         => 'Motörhead',
        '/Motley Crue/ui'                       => 'Mötley Crüe',
        '/Mötley Crue/ui'                       => 'Mötley Crüe',
        '/Motley Crüe/ui'                       => 'Mötley Crüe',
        '/Destroyer 666/ui'                     => 'Deströyer 666',
        '/Maximo Park/ui'                       => 'Maxïmo Park',
        '/Spın̈al Tap/ui'                       => 'Spın̈al Tap',
        '/Spınal Tap/ui'                        => 'Spın̈al Tap',
        '/Queensryche/ui'                       => 'Queensrÿche',
        '/Dalek/ui'                             => 'Dälek',
        '/Mago de Oz/ui'                        => 'Mägo de Oz',
        '/Crashdiet/ui'                         => 'Crashdïet',
        '/Green Jelly/ui'                       => 'Green Jellÿ',
        '/Green Jello/ui'                       => 'Green Jellö',
        '/Beowulf/ui'                           => 'Beowülf',
        //'/Lather/ui'                          => 'Läther',
        '/Mutiilation/ui'                       => 'Mütiilation',
        '/Unloco/ui'                            => 'Ünloco',
        '/Infernal Majesty/ui'                  => 'Infernäl Mäjesty',
        '/Moxy Fruvous/ui'                      => 'Moxy Früvous',
        '/Dethklok/ui'                          => 'Dëthkløk',
        '/Dethkløk/ui'                          => 'Dëthkløk',
        '/Dëthklok/ui'                          => 'Dëthkløk',
        '/ZnoWhite/ui'                          => 'ZnöWhite',
        '/Laaz Rockit/ui'                       => 'Lääz Rockit',
        '/Husker Du/ui'                         => 'Hüsker Dü',
        '/Husker Dü/ui'                         => 'Hüsker Dü',
        '/Hüsker Du/ui'                         => 'Hüsker Dü',
        '/Leftover Crack/ui'                    => 'Leftöver Crack',
        '/Uberzone/ui'                          => 'Überzone',
        '/Assuck/ui'                            => 'Assück',
        '/Kozi/ui'                              => 'Közi',
        '/girugamesh/ui'                        => 'girugämesh',
        '/Insidious Torment/ui'                 => 'Insidiöus Törment',
        '/The Accused/ui'                       => 'The Accüsed',
        '/The Cruxshadows/ui'                   => 'The Crüxshadows',
        '/Fleur/ui'                             => 'Flëur',
        '/НАИВ/ui'                              => 'Наӥв',
        '/Hanb/ui'                              => 'Наӥв',
        //'/Bomber/ui'                          => 'Bömber',
        '/Toilet Boys/ui'                       => 'Toilet Böys',
        '/Kill Cheerleader/ui'                  => 'Kïll Cheerleadër',
        '/Jason Derulo/ui'                      => 'Jason Derülo',
        '/Night on Brocken/ui'                  => 'Night on Bröcken',
        '/Lorihen/ui'                           => 'Lörihen',
        '/Royksopp/ui'                          => 'Röyksopp',
        '/Moottorin Jyrina/ui'                  => 'Moottörin Jyrinä',
        '/Terasbetoni/ui'                       => 'Teräsbetoni',
        '/Rrroooaaarrr/ui'                      => 'Rrröööaaarrr',
        '/Dimension Hatross/ui'                 => 'Dimension Hatröss',
        '/Korgull the Exterminator/ui'          => 'Korgüll the Exterminator',
        '/Chaosmongers/ui'                      => 'Chaosmöngers',
        '/Motor Militia/ui'                     => 'Motör Militia',
        '/Habliche Luftmasken/ui'               => 'Häßliche Luftmasken',
        '/Haszliche Luftmasken/ui'              => 'Häßliche Luftmasken',

        '/Die Arzte/ui'                         => 'Die Ärzte',
        '/Gerausch/ui'                          => 'Geräusch',
        '/DAATH/ui'                             => 'DÅÅTH',
        '/Rinocerose/ui'                        => 'Rinôçérôse',
        '/Mediaeval Baebes/ui'                  => 'Mediæval Bæbes',
        '/The World That Summer/ui'             => 'The Wörld Thät Sümmer',
        '/The Wall Of Sacrifice/ui'             => 'Thé Wäll Öf Säcrificé',
        '/Death In June/ui'                     => 'Deäth In Jüne',
        //'/Death In June/ui'                   => 'Déäth In Jüné',
        '/Boowy/ui'                             => 'Boøwy',
        '/Aenima/ui'                            => 'Ænima',
        '/Deathmole/ui'                         => 'Deathmøle',
        '/M-Ziq/ui'                             => 'µ-Ziq',
        '/Underoath/ui'                         => 'Underøath',
        '/Blof/ui'                              => 'Bløf',
        //'/CLIENT/ui'                          => 'CLIEИT',
        '/Leaether Strip/ui'                    => 'Leæther Strip',
        '/Heimataerde/ui'                       => 'Heimatærde',

        '/Celine Dion/ui'                       => 'Céline Dion',
    );


    /**
     * Constructor
     *
     * @param string $original    An array of field default values
     * @param array  $replacements    An array that is used for the preg_replace() PHP-function in the slug generation process
     */
    public function __construct($original, $replacements = null)
    {
        $this->_original = $original;

        if (!is_null($replacements)) {
            $this->_replacements = $replacements;
        }
    }


    /**
     * Add the RöckDöts.
     */
    public function rockDotIt()
    {
        // Apply all the replacements
        $this->_rockDotted = preg_replace(array_keys($this->_replacements), $this->_replacements, $this->_original);
    }


    /**
     * Returns the RöckDötted string
     *
     * @return string The RöckDötted string
     * @see rockDotIt()
     */
    public function getRockDotted()
    {
        if (is_null($this->_rockDotted)) {
            $this->rockDotIt();
        }
        return $this->_rockDotted;
    }


    /**
     * Returns the RöckDötted string
     *
     * @return string The RöckDötted string
     * @see getRockDotted()
     */
    public function __toString()
    {
        return $this->getRockDotted();
    }


    /**
     * Sets the replacements array that is used for the preg_replace() in the RöckDötting process
     *
     * @param string $replacements
     */
    public function setReplacements($replacements)
    {
        $this->_replacements = $replacements;
    }


}
