<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.
* Licensed under the MIT License.  See License in the project root
* for license information.
*
* Enum File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Core;

use Microsoft\Graph\Exception\GraphException;

/**
 * Class Enum
 *
 * @category Library
 * @package  Microsoft.Graph
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://graph.microsoft.io/
 */
abstract class Enum
{
    private static $constants = [];
    /**
    * The value of the enum
    *
    * @var string
    */
    private $_value;

    /**
     * Create a new enum
     *
     * @param string $value The value of the enum
     *
     * @throws GraphException if enum value is invalid
     * @throws \ReflectionException
     */
    public function __construct(string $value)
    {
        if (!$this->has($value)) {
            throw new GraphException("Invalid enum value $value");
        }
        $this->_value = $value;
    }

    /**
     * Check if the enum has the given value
     *
     * @param string $value
     * @return bool the enum has the value
     * @throws \ReflectionException
     */
    public function has(string $value): bool
    {
        return in_array($value, $this->toArray(), true);
    }

    /**
    * Check if the enum is defined
    *
    * @param string $value the value of the enum
    *
    * @return bool True if the value is defined
    */
    public function is(string $value): bool
    {
        return $this->_value === $value;
    }

	/**
	 * Create a new class for the enum in question
	 *
	 * @return array
	 * @throws \ReflectionException
	 */
    public function toArray()
    {
        $class = static::class;

        if (!(array_key_exists($class, self::$constants)))
        {
            $reflectionObj = new \ReflectionClass($class);
            self::$constants[$class] = $reflectionObj->getConstants();
        }
        return self::$constants[$class];
    }

    /**
    * Get the value of the enum
    *
    * @return string value of the enum
    */
    public function value(): string
    {
        return $this->_value;
    }
}