<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StringKeyLongValuePair File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* StringKeyLongValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class StringKeyLongValuePair extends Entity
{
    /**
    * Gets the key
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    *
    * @param string $val The value of the key
    *
    * @return StringKeyLongValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }
    /**
    * Gets the value
    *
    * @return int The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    *
    * @param int $val The value of the value
    *
    * @return StringKeyLongValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
