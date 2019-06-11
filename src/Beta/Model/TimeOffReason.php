<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeOffReason File
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
* TimeOffReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TimeOffReason extends ChangeTrackedEntity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return TimeOffReason
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the iconType
    *
    * @return TimeOffReasonIconType The iconType
    */
    public function getIconType()
    {
        if (array_key_exists("iconType", $this->_propDict)) {
            if (is_a($this->_propDict["iconType"], "Microsoft\Graph\Beta\Model\TimeOffReasonIconType")) {
                return $this->_propDict["iconType"];
            } else {
                $this->_propDict["iconType"] = new TimeOffReasonIconType($this->_propDict["iconType"]);
                return $this->_propDict["iconType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the iconType
    *
    * @param TimeOffReasonIconType $val The iconType
    *
    * @return TimeOffReason
    */
    public function setIconType($val)
    {
        $this->_propDict["iconType"] = $val;
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
    * @return TimeOffReason
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
}