<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExtendedKeyUsage File
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
* ExtendedKeyUsage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ExtendedKeyUsage extends Entity
{
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return ExtendedKeyUsage
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the objectIdentifier
    *
    * @return string The objectIdentifier
    */
    public function getObjectIdentifier()
    {
        if (array_key_exists("objectIdentifier", $this->_propDict)) {
            return $this->_propDict["objectIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the objectIdentifier
    *
    * @param string $val The value of the objectIdentifier
    *
    * @return ExtendedKeyUsage
    */
    public function setObjectIdentifier($val)
    {
        $this->_propDict["objectIdentifier"] = $val;
        return $this;
    }
}
