<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnPremisesConditionalAccessSettings File
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
* OnPremisesConditionalAccessSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class OnPremisesConditionalAccessSettings extends Entity
{
    /**
    * Gets the enabled
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    *
    * @param bool $val The enabled
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the includedGroups
    *
    * @return string The includedGroups
    */
    public function getIncludedGroups()
    {
        if (array_key_exists("includedGroups", $this->_propDict)) {
            return $this->_propDict["includedGroups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the includedGroups
    *
    * @param string $val The includedGroups
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setIncludedGroups($val)
    {
        $this->_propDict["includedGroups"] = $val;
        return $this;
    }
    
    /**
    * Gets the excludedGroups
    *
    * @return string The excludedGroups
    */
    public function getExcludedGroups()
    {
        if (array_key_exists("excludedGroups", $this->_propDict)) {
            return $this->_propDict["excludedGroups"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludedGroups
    *
    * @param string $val The excludedGroups
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setExcludedGroups($val)
    {
        $this->_propDict["excludedGroups"] = $val;
        return $this;
    }
    
    /**
    * Gets the overrideDefaultRule
    *
    * @return bool The overrideDefaultRule
    */
    public function getOverrideDefaultRule()
    {
        if (array_key_exists("overrideDefaultRule", $this->_propDict)) {
            return $this->_propDict["overrideDefaultRule"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overrideDefaultRule
    *
    * @param bool $val The overrideDefaultRule
    *
    * @return OnPremisesConditionalAccessSettings
    */
    public function setOverrideDefaultRule($val)
    {
        $this->_propDict["overrideDefaultRule"] = boolval($val);
        return $this;
    }
    
}