<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationSecretKeyStringValuePair File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SynchronizationSecretKeyStringValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SynchronizationSecretKeyStringValuePair extends Entity
{

    /**
    * Gets the key
    *
    * @return SynchronizationSecret The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            if (is_a($this->_propDict["key"], "Microsoft\Graph\Beta\Model\SynchronizationSecret")) {
                return $this->_propDict["key"];
            } else {
                $this->_propDict["key"] = new SynchronizationSecret($this->_propDict["key"]);
                return $this->_propDict["key"];
            }
        }
        return null;
    }

    /**
    * Sets the key
    *
    * @param SynchronizationSecret $val The value to assign to the key
    *
    * @return SynchronizationSecretKeyStringValuePair The SynchronizationSecretKeyStringValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
         return $this;
    }
    /**
    * Gets the value
    *
    * @return string The value
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
    * @param string $val The value of the value
    *
    * @return SynchronizationSecretKeyStringValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
