<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Acl File
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
* Acl class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Acl extends Entity
{
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
    * @return Acl
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    /**
    * Gets the identitySource
    *
    * @return string The identitySource
    */
    public function getIdentitySource()
    {
        if (array_key_exists("identitySource", $this->_propDict)) {
            return $this->_propDict["identitySource"];
        } else {
            return null;
        }
    }

    /**
    * Sets the identitySource
    *
    * @param string $val The value of the identitySource
    *
    * @return Acl
    */
    public function setIdentitySource($val)
    {
        $this->_propDict["identitySource"] = $val;
        return $this;
    }
}
