<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionLabel File
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
* InformationProtectionLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class InformationProtectionLabel extends Entity
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
    * @param string $val The name
    *
    * @return InformationProtectionLabel
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return InformationProtectionLabel
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the color
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the color
    *
    * @param string $val The color
    *
    * @return InformationProtectionLabel
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the sensitivity
    *
    * @return int The sensitivity
    */
    public function getSensitivity()
    {
        if (array_key_exists("sensitivity", $this->_propDict)) {
            return $this->_propDict["sensitivity"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sensitivity
    *
    * @param int $val The sensitivity
    *
    * @return InformationProtectionLabel
    */
    public function setSensitivity($val)
    {
        $this->_propDict["sensitivity"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tooltip
    *
    * @return string The tooltip
    */
    public function getTooltip()
    {
        if (array_key_exists("tooltip", $this->_propDict)) {
            return $this->_propDict["tooltip"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tooltip
    *
    * @param string $val The tooltip
    *
    * @return InformationProtectionLabel
    */
    public function setTooltip($val)
    {
        $this->_propDict["tooltip"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    *
    * @param bool $val The isActive
    *
    * @return InformationProtectionLabel
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
}