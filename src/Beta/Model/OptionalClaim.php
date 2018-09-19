<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OptionalClaim File
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
* OptionalClaim class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OptionalClaim extends Entity
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
    * @return OptionalClaim
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the source
    *
    * @return string The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }

    /**
    * Sets the source
    *
    * @param string $val The value of the source
    *
    * @return OptionalClaim
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
    /**
    * Gets the essential
    *
    * @return bool The essential
    */
    public function getEssential()
    {
        if (array_key_exists("essential", $this->_propDict)) {
            return $this->_propDict["essential"];
        } else {
            return null;
        }
    }

    /**
    * Sets the essential
    *
    * @param bool $val The value of the essential
    *
    * @return OptionalClaim
    */
    public function setEssential($val)
    {
        $this->_propDict["essential"] = $val;
        return $this;
    }
    /**
    * Gets the additionalProperties
    *
    * @return string The additionalProperties
    */
    public function getAdditionalProperties()
    {
        if (array_key_exists("additionalProperties", $this->_propDict)) {
            return $this->_propDict["additionalProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalProperties
    *
    * @param string $val The value of the additionalProperties
    *
    * @return OptionalClaim
    */
    public function setAdditionalProperties($val)
    {
        $this->_propDict["additionalProperties"] = $val;
        return $this;
    }
}
