<?php

/**
 * Easy Sink for PullStreams in php.
 *
 * PHP version 5.5
 *
 * @package    Pull
 * @subpackage Streams
 * @author     Andrew Toelle <andrew.toelle@wholefoods.com>
 * @category   Streams
 * @license    http://opensource.org/licenses/MIT MIT
 * @link       https://github.com/brevity/pull
 */

namespace Brevity\Pull;

/**
 * Streams: a pullStream Sink helper
 * @package  Pull
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
} // END class Sink
