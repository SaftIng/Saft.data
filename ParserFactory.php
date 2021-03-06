<?php

/*
 * This file is part of Saft.
 *
 * (c) Konrad Abicht <hi@inspirito.de>
 * (c) Natanael Arndt <arndt@informatik.uni-leipzig.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Saft\Data;

/**
 * The ParserFactory interface abstract the creation of Parser instances. It helps you to create a suitable parser
 * for a given serialization, if available. It also provides a list of supported serializations.
 *
 * @api
 *
 * @since 0.1
 */
interface ParserFactory
{
    /**
     * Creates a Parser instance for a given format, if available.
     *
     * @param string $serialization the serialization you need a parser for
     *
     * @return Parser suitable parser for the requested format
     *
     * @throws \Exception if a parser for requested serialization is not available
     *
     * @api
     *
     * @since 0.1
     */
    public function createParserFor($serialization);

    /**
     * Returns an array which contains supported serializations.
     *
     * @return array array of supported serializations which are understood by this parser
     *
     * @api
     *
     * @since 0.1
     */
    public function getSupportedSerializations();
}
