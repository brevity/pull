<?php

/**
 * Easy Sink for TugStreams in php.
 *
 * PHP version 5.5
 *
 * @package    Tug
 * @subpackage Streams
 * @author     Andrew Toelle <andrew.toelle@wholefoods.com>
 * @category   Streams
 * @license    http://opensource.org/licenses/MIT MIT
 * @link       https://github.com/brevity/pull
 */

namespace Brevity\Tug;

/**
 * Streams: a pullStream Sink helper
 * @package  Tug
 * @category WriteStream
 */
class Streams
{
    public $loop;
    /**
     * Streams Constructor
     * @return void
     * @author Andrew Toelle <andrew.toelle@wholefoods.com>
     **/
    public function __construct()
    {
        \Psy\Shell::debug(get_defined_vars(), $this);
    }

    /**
     * Function: sink
     * @return void
     * @author Andrew Toelle <andrew.toelle@wholefoods.com>
     **/
    public function sink($cb)
    {
        return $sink;
    }
} // END class Sink
