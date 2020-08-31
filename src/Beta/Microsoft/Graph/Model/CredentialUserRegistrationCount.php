<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CredentialUserRegistrationCount File
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
* CredentialUserRegistrationCount class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CredentialUserRegistrationCount extends Entity
{
    /**
    * Gets the totalUserCount
    *
    * @return int The totalUserCount
    */
    public function getTotalUserCount()
    {
        if (array_key_exists("totalUserCount", $this->_propDict)) {
            return $this->_propDict["totalUserCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalUserCount
    *
    * @param int $val The totalUserCount
    *
    * @return CredentialUserRegistrationCount
    */
    public function setTotalUserCount($val)
    {
        $this->_propDict["totalUserCount"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the userRegistrationCounts
     *
     * @return array The userRegistrationCounts
     */
    public function getUserRegistrationCounts()
    {
        if (array_key_exists("userRegistrationCounts", $this->_propDict)) {
           return $this->_propDict["userRegistrationCounts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userRegistrationCounts
    *
    * @param UserRegistrationCount $val The userRegistrationCounts
    *
    * @return CredentialUserRegistrationCount
    */
    public function setUserRegistrationCounts($val)
    {
		$this->_propDict["userRegistrationCounts"] = $val;
        return $this;
    }
    
}