<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingStaffMember File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* BookingStaffMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingStaffMember extends BookingPerson
{
    /**
    * Gets the availabilityIsAffectedByPersonalCalendar
    *
    * @return bool The availabilityIsAffectedByPersonalCalendar
    */
    public function getAvailabilityIsAffectedByPersonalCalendar()
    {
        if (array_key_exists("availabilityIsAffectedByPersonalCalendar", $this->_propDict)) {
            return $this->_propDict["availabilityIsAffectedByPersonalCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the availabilityIsAffectedByPersonalCalendar
    *
    * @param bool $val The availabilityIsAffectedByPersonalCalendar
    *
    * @return BookingStaffMember
    */
    public function setAvailabilityIsAffectedByPersonalCalendar($val)
    {
        $this->_propDict["availabilityIsAffectedByPersonalCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the colorIndex
    *
    * @return int The colorIndex
    */
    public function getColorIndex()
    {
        if (array_key_exists("colorIndex", $this->_propDict)) {
            return $this->_propDict["colorIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the colorIndex
    *
    * @param int $val The colorIndex
    *
    * @return BookingStaffMember
    */
    public function setColorIndex($val)
    {
        $this->_propDict["colorIndex"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the role
    *
    * @return BookingStaffRole The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "Beta\Microsoft\Graph\Model\BookingStaffRole")) {
                return $this->_propDict["role"];
            } else {
                $this->_propDict["role"] = new BookingStaffRole($this->_propDict["role"]);
                return $this->_propDict["role"];
            }
        }
        return null;
    }
    
    /**
    * Sets the role
    *
    * @param BookingStaffRole $val The role
    *
    * @return BookingStaffMember
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    
    /**
    * Gets the useBusinessHours
    *
    * @return bool The useBusinessHours
    */
    public function getUseBusinessHours()
    {
        if (array_key_exists("useBusinessHours", $this->_propDict)) {
            return $this->_propDict["useBusinessHours"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the useBusinessHours
    *
    * @param bool $val The useBusinessHours
    *
    * @return BookingStaffMember
    */
    public function setUseBusinessHours($val)
    {
        $this->_propDict["useBusinessHours"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the workingHours
     *
     * @return array The workingHours
     */
    public function getWorkingHours()
    {
        if (array_key_exists("workingHours", $this->_propDict)) {
           return $this->_propDict["workingHours"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the workingHours
    *
    * @param BookingWorkHours $val The workingHours
    *
    * @return BookingStaffMember
    */
    public function setWorkingHours($val)
    {
		$this->_propDict["workingHours"] = $val;
        return $this;
    }
    
}