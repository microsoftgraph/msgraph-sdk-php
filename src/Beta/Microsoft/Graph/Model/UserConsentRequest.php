<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserConsentRequest File
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
* UserConsentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserConsentRequest extends Request
{
    /**
    * Gets the createdBy
    *
    * @return UserIdentity The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "Beta\Microsoft\Graph\Model\UserIdentity")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new UserIdentity($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    *
    * @param UserIdentity $val The createdBy
    *
    * @return UserConsentRequest
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return UserConsentRequest
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the reason
    *
    * @return string The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            return $this->_propDict["reason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reason
    *
    * @param string $val The reason
    *
    * @return UserConsentRequest
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }
    
}