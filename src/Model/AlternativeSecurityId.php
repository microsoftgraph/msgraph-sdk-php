<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlternativeSecurityId File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* AlternativeSecurityId class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class AlternativeSecurityId extends Entity
{
    /**
    * Gets the identityProvider
    *
    * @return string The identityProvider
    */
    public function getIdentityProvider()
    {
        if (array_key_exists("identityProvider", $this->_propDict)) {
            return $this->_propDict["identityProvider"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identityProvider
    *
    * @param string $val The value of the identityProvider
    *
    * @return AlternativeSecurityId
    */
    public function setIdentityProvider($val)
    {
        $this->_propDict["identityProvider"] = $val;
        return $this;
    }

    /**
    * Gets the key
    *
    * @return \GuzzleHttp\Psr7\Stream The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            if (is_a($this->_propDict["key"], "Microsoft\Graph\Model\\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["key"];
            } else {
                $this->_propDict["key"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["key"]);
                return $this->_propDict["key"];
            }
        }
        return null;
    }

    /**
    * Sets the key
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the key
    *
    * @return AlternativeSecurityId The AlternativeSecurityId
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
         return $this;
    }
    /**
    * Gets the type
    *
    * @return int The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param int $val The value of the type
    *
    * @return AlternativeSecurityId
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
}
