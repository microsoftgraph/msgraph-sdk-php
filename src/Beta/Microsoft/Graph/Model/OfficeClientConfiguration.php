<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeClientConfiguration File
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
* OfficeClientConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeClientConfiguration extends Entity
{

     /** 
     * Gets the checkinStatuses
     *
     * @return array The checkinStatuses
     */
    public function getCheckinStatuses()
    {
        if (array_key_exists("checkinStatuses", $this->_propDict)) {
           return $this->_propDict["checkinStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the checkinStatuses
    *
    * @param OfficeClientCheckinStatus $val The checkinStatuses
    *
    * @return OfficeClientConfiguration
    */
    public function setCheckinStatuses($val)
    {
		$this->_propDict["checkinStatuses"] = $val;
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
    * @return OfficeClientConfiguration
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
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
    * @return OfficeClientConfiguration
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the policyPayload
    *
    * @return \GuzzleHttp\Psr7\Stream The policyPayload
    */
    public function getPolicyPayload()
    {
        if (array_key_exists("policyPayload", $this->_propDict)) {
            if (is_a($this->_propDict["policyPayload"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["policyPayload"];
            } else {
                $this->_propDict["policyPayload"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["policyPayload"]);
                return $this->_propDict["policyPayload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the policyPayload
    *
    * @param \GuzzleHttp\Psr7\Stream $val The policyPayload
    *
    * @return OfficeClientConfiguration
    */
    public function setPolicyPayload($val)
    {
        $this->_propDict["policyPayload"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    *
    * @param int $val The priority
    *
    * @return OfficeClientConfiguration
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userCheckinSummary
    *
    * @return OfficeUserCheckinSummary The userCheckinSummary
    */
    public function getUserCheckinSummary()
    {
        if (array_key_exists("userCheckinSummary", $this->_propDict)) {
            if (is_a($this->_propDict["userCheckinSummary"], "Beta\Microsoft\Graph\Model\OfficeUserCheckinSummary")) {
                return $this->_propDict["userCheckinSummary"];
            } else {
                $this->_propDict["userCheckinSummary"] = new OfficeUserCheckinSummary($this->_propDict["userCheckinSummary"]);
                return $this->_propDict["userCheckinSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userCheckinSummary
    *
    * @param OfficeUserCheckinSummary $val The userCheckinSummary
    *
    * @return OfficeClientConfiguration
    */
    public function setUserCheckinSummary($val)
    {
        $this->_propDict["userCheckinSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPreferencePayload
    *
    * @return \GuzzleHttp\Psr7\Stream The userPreferencePayload
    */
    public function getUserPreferencePayload()
    {
        if (array_key_exists("userPreferencePayload", $this->_propDict)) {
            if (is_a($this->_propDict["userPreferencePayload"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["userPreferencePayload"];
            } else {
                $this->_propDict["userPreferencePayload"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["userPreferencePayload"]);
                return $this->_propDict["userPreferencePayload"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userPreferencePayload
    *
    * @param \GuzzleHttp\Psr7\Stream $val The userPreferencePayload
    *
    * @return OfficeClientConfiguration
    */
    public function setUserPreferencePayload($val)
    {
        $this->_propDict["userPreferencePayload"] = $val;
        return $this;
    }
    

     /** 
     * Gets the assignments
     *
     * @return array The assignments
     */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
           return $this->_propDict["assignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the assignments
    *
    * @param OfficeClientConfigurationAssignment $val The assignments
    *
    * @return OfficeClientConfiguration
    */
    public function setAssignments($val)
    {
		$this->_propDict["assignments"] = $val;
        return $this;
    }
    
}