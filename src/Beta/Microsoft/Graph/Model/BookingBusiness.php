<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingBusiness File
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
* BookingBusiness class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingBusiness extends BookingNamedEntity
{
    /**
    * Gets the address
    *
    * @return PhysicalAddress The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            if (is_a($this->_propDict["address"], "Beta\Microsoft\Graph\Model\PhysicalAddress")) {
                return $this->_propDict["address"];
            } else {
                $this->_propDict["address"] = new PhysicalAddress($this->_propDict["address"]);
                return $this->_propDict["address"];
            }
        }
        return null;
    }
    
    /**
    * Sets the address
    *
    * @param PhysicalAddress $val The address
    *
    * @return BookingBusiness
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    

     /** 
     * Gets the businessHours
     *
     * @return array The businessHours
     */
    public function getBusinessHours()
    {
        if (array_key_exists("businessHours", $this->_propDict)) {
           return $this->_propDict["businessHours"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the businessHours
    *
    * @param BookingWorkHours $val The businessHours
    *
    * @return BookingBusiness
    */
    public function setBusinessHours($val)
    {
		$this->_propDict["businessHours"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessType
    *
    * @return string The businessType
    */
    public function getBusinessType()
    {
        if (array_key_exists("businessType", $this->_propDict)) {
            return $this->_propDict["businessType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the businessType
    *
    * @param string $val The businessType
    *
    * @return BookingBusiness
    */
    public function setBusinessType($val)
    {
        $this->_propDict["businessType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultCurrencyIso
    *
    * @return string The defaultCurrencyIso
    */
    public function getDefaultCurrencyIso()
    {
        if (array_key_exists("defaultCurrencyIso", $this->_propDict)) {
            return $this->_propDict["defaultCurrencyIso"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultCurrencyIso
    *
    * @param string $val The defaultCurrencyIso
    *
    * @return BookingBusiness
    */
    public function setDefaultCurrencyIso($val)
    {
        $this->_propDict["defaultCurrencyIso"] = $val;
        return $this;
    }
    
    /**
    * Gets the email
    *
    * @return string The email
    */
    public function getEmail()
    {
        if (array_key_exists("email", $this->_propDict)) {
            return $this->_propDict["email"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the email
    *
    * @param string $val The email
    *
    * @return BookingBusiness
    */
    public function setEmail($val)
    {
        $this->_propDict["email"] = $val;
        return $this;
    }
    
    /**
    * Gets the isPublished
    *
    * @return bool The isPublished
    */
    public function getIsPublished()
    {
        if (array_key_exists("isPublished", $this->_propDict)) {
            return $this->_propDict["isPublished"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isPublished
    *
    * @param bool $val The isPublished
    *
    * @return BookingBusiness
    */
    public function setIsPublished($val)
    {
        $this->_propDict["isPublished"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the phone
    *
    * @return string The phone
    */
    public function getPhone()
    {
        if (array_key_exists("phone", $this->_propDict)) {
            return $this->_propDict["phone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the phone
    *
    * @param string $val The phone
    *
    * @return BookingBusiness
    */
    public function setPhone($val)
    {
        $this->_propDict["phone"] = $val;
        return $this;
    }
    
    /**
    * Gets the publicUrl
    *
    * @return string The publicUrl
    */
    public function getPublicUrl()
    {
        if (array_key_exists("publicUrl", $this->_propDict)) {
            return $this->_propDict["publicUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publicUrl
    *
    * @param string $val The publicUrl
    *
    * @return BookingBusiness
    */
    public function setPublicUrl($val)
    {
        $this->_propDict["publicUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedulingPolicy
    *
    * @return BookingSchedulingPolicy The schedulingPolicy
    */
    public function getSchedulingPolicy()
    {
        if (array_key_exists("schedulingPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["schedulingPolicy"], "Beta\Microsoft\Graph\Model\BookingSchedulingPolicy")) {
                return $this->_propDict["schedulingPolicy"];
            } else {
                $this->_propDict["schedulingPolicy"] = new BookingSchedulingPolicy($this->_propDict["schedulingPolicy"]);
                return $this->_propDict["schedulingPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedulingPolicy
    *
    * @param BookingSchedulingPolicy $val The schedulingPolicy
    *
    * @return BookingBusiness
    */
    public function setSchedulingPolicy($val)
    {
        $this->_propDict["schedulingPolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the webSiteUrl
    * Example: https://www.contoso.com
    *
    * @return string The webSiteUrl
    */
    public function getWebSiteUrl()
    {
        if (array_key_exists("webSiteUrl", $this->_propDict)) {
            return $this->_propDict["webSiteUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webSiteUrl
    * Example: https://www.contoso.com
    *
    * @param string $val The webSiteUrl
    *
    * @return BookingBusiness
    */
    public function setWebSiteUrl($val)
    {
        $this->_propDict["webSiteUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appointments
    * All appointments in this business.
     *
     * @return array The appointments
     */
    public function getAppointments()
    {
        if (array_key_exists("appointments", $this->_propDict)) {
           return $this->_propDict["appointments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appointments
    * All appointments in this business.
    *
    * @param BookingAppointment $val The appointments
    *
    * @return BookingBusiness
    */
    public function setAppointments($val)
    {
		$this->_propDict["appointments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendarView
    * A calendar view of appointments in this business.
     *
     * @return array The calendarView
     */
    public function getCalendarView()
    {
        if (array_key_exists("calendarView", $this->_propDict)) {
           return $this->_propDict["calendarView"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendarView
    * A calendar view of appointments in this business.
    *
    * @param BookingAppointment $val The calendarView
    *
    * @return BookingBusiness
    */
    public function setCalendarView($val)
    {
		$this->_propDict["calendarView"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customers
    * All customers of this business.
     *
     * @return array The customers
     */
    public function getCustomers()
    {
        if (array_key_exists("customers", $this->_propDict)) {
           return $this->_propDict["customers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customers
    * All customers of this business.
    *
    * @param BookingCustomer $val The customers
    *
    * @return BookingBusiness
    */
    public function setCustomers($val)
    {
		$this->_propDict["customers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the services
    * All services offered by this business.
     *
     * @return array The services
     */
    public function getServices()
    {
        if (array_key_exists("services", $this->_propDict)) {
           return $this->_propDict["services"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the services
    * All services offered by this business.
    *
    * @param BookingService $val The services
    *
    * @return BookingBusiness
    */
    public function setServices($val)
    {
		$this->_propDict["services"] = $val;
        return $this;
    }
    

     /** 
     * Gets the staffMembers
    * All staff members that provides services in this business.
     *
     * @return array The staffMembers
     */
    public function getStaffMembers()
    {
        if (array_key_exists("staffMembers", $this->_propDict)) {
           return $this->_propDict["staffMembers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the staffMembers
    * All staff members that provides services in this business.
    *
    * @param BookingStaffMember $val The staffMembers
    *
    * @return BookingBusiness
    */
    public function setStaffMembers($val)
    {
		$this->_propDict["staffMembers"] = $val;
        return $this;
    }
    
}