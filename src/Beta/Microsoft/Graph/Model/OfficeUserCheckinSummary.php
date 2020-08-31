<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeUserCheckinSummary File
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
* OfficeUserCheckinSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeUserCheckinSummary extends Entity
{
    /**
    * Gets the succeededUserCount
    *
    * @return int The succeededUserCount
    */
    public function getSucceededUserCount()
    {
        if (array_key_exists("succeededUserCount", $this->_propDict)) {
            return $this->_propDict["succeededUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the succeededUserCount
    *
    * @param int $val The value of the succeededUserCount
    *
    * @return OfficeUserCheckinSummary
    */
    public function setSucceededUserCount($val)
    {
        $this->_propDict["succeededUserCount"] = $val;
        return $this;
    }
    /**
    * Gets the failedUserCount
    *
    * @return int The failedUserCount
    */
    public function getFailedUserCount()
    {
        if (array_key_exists("failedUserCount", $this->_propDict)) {
            return $this->_propDict["failedUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedUserCount
    *
    * @param int $val The value of the failedUserCount
    *
    * @return OfficeUserCheckinSummary
    */
    public function setFailedUserCount($val)
    {
        $this->_propDict["failedUserCount"] = $val;
        return $this;
    }
}
