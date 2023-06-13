<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcBulkActionSummary File
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
* CloudPcBulkActionSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcBulkActionSummary extends Entity
{
    /**
    * Gets the failedCount
    *
    * @return int|null The failedCount
    */
    public function getFailedCount()
    {
        if (array_key_exists("failedCount", $this->_propDict)) {
            return $this->_propDict["failedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedCount
    *
    * @param int $val The value of the failedCount
    *
    * @return CloudPcBulkActionSummary
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = $val;
        return $this;
    }
    /**
    * Gets the inProgressCount
    *
    * @return int|null The inProgressCount
    */
    public function getInProgressCount()
    {
        if (array_key_exists("inProgressCount", $this->_propDict)) {
            return $this->_propDict["inProgressCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inProgressCount
    *
    * @param int $val The value of the inProgressCount
    *
    * @return CloudPcBulkActionSummary
    */
    public function setInProgressCount($val)
    {
        $this->_propDict["inProgressCount"] = $val;
        return $this;
    }
    /**
    * Gets the notSupportedCount
    *
    * @return int|null The notSupportedCount
    */
    public function getNotSupportedCount()
    {
        if (array_key_exists("notSupportedCount", $this->_propDict)) {
            return $this->_propDict["notSupportedCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notSupportedCount
    *
    * @param int $val The value of the notSupportedCount
    *
    * @return CloudPcBulkActionSummary
    */
    public function setNotSupportedCount($val)
    {
        $this->_propDict["notSupportedCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingCount
    *
    * @return int|null The pendingCount
    */
    public function getPendingCount()
    {
        if (array_key_exists("pendingCount", $this->_propDict)) {
            return $this->_propDict["pendingCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingCount
    *
    * @param int $val The value of the pendingCount
    *
    * @return CloudPcBulkActionSummary
    */
    public function setPendingCount($val)
    {
        $this->_propDict["pendingCount"] = $val;
        return $this;
    }
    /**
    * Gets the successfulCount
    *
    * @return int|null The successfulCount
    */
    public function getSuccessfulCount()
    {
        if (array_key_exists("successfulCount", $this->_propDict)) {
            return $this->_propDict["successfulCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the successfulCount
    *
    * @param int $val The value of the successfulCount
    *
    * @return CloudPcBulkActionSummary
    */
    public function setSuccessfulCount($val)
    {
        $this->_propDict["successfulCount"] = $val;
        return $this;
    }
}
