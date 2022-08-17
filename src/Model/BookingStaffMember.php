<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingStaffMember File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* BookingStaffMember class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingStaffMember extends BookingStaffMemberBase
{
    /**
    * Gets the availabilityIsAffectedByPersonalCalendar
    * True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
    *
    * @return bool|null The availabilityIsAffectedByPersonalCalendar
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
    * True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
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
    * Gets the displayName
    * The display name is suitable for human-readable interfaces.
    *
    * @return string|null The displayName
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
    * The display name is suitable for human-readable interfaces.
    *
    * @param string $val The displayName
    *
    * @return BookingStaffMember
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the emailAddress
    * The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
    *
    * @return string|null The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            return $this->_propDict["emailAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emailAddress
    * The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
    *
    * @param string $val The emailAddress
    *
    * @return BookingStaffMember
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
        return $this;
    }

    /**
    * Gets the role
    * The role of the staff member in the business. Possible values are: guest, administrator, viewer, externalGuest and unknownFutureValue. Required.
    *
    * @return BookingStaffRole|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            if (is_a($this->_propDict["role"], "\Microsoft\Graph\Model\BookingStaffRole") || is_null($this->_propDict["role"])) {
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
    * The role of the staff member in the business. Possible values are: guest, administrator, viewer, externalGuest and unknownFutureValue. Required.
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
    * Gets the timeZone
    * The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
    *
    * @return string|null The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }

    /**
    * Sets the timeZone
    * The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
    *
    * @param string $val The timeZone
    *
    * @return BookingStaffMember
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }

    /**
    * Gets the useBusinessHours
    * True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
    *
    * @return bool|null The useBusinessHours
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
    * True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
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
    * The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
     *
     * @return array|null The workingHours
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
    * The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
    *
    * @param BookingWorkHours[] $val The workingHours
    *
    * @return BookingStaffMember
    */
    public function setWorkingHours($val)
    {
        $this->_propDict["workingHours"] = $val;
        return $this;
    }

}
