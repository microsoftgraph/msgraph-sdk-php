<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemInsightsSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* ItemInsightsSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemInsightsSettings extends Entity
{
    /**
    * Gets the disabledForGroup
    *
    * @return string The disabledForGroup
    */
    public function getDisabledForGroup()
    {
        if (array_key_exists("disabledForGroup", $this->_propDict)) {
            return $this->_propDict["disabledForGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disabledForGroup
    *
    * @param string $val The disabledForGroup
    *
    * @return ItemInsightsSettings
    */
    public function setDisabledForGroup($val)
    {
        $this->_propDict["disabledForGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the isEnabledInOrganization
    *
    * @return bool The isEnabledInOrganization
    */
    public function getIsEnabledInOrganization()
    {
        if (array_key_exists("isEnabledInOrganization", $this->_propDict)) {
            return $this->_propDict["isEnabledInOrganization"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabledInOrganization
    *
    * @param bool $val The isEnabledInOrganization
    *
    * @return ItemInsightsSettings
    */
    public function setIsEnabledInOrganization($val)
    {
        $this->_propDict["isEnabledInOrganization"] = boolval($val);
        return $this;
    }
    
}