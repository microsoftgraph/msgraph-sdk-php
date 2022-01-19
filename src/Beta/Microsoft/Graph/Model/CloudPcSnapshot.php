<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcSnapshot File
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
* CloudPcSnapshot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcSnapshot extends Entity
{
    /**
    * Gets the cloudPcId
    *
    * @return string|null The cloudPcId
    */
    public function getCloudPcId()
    {
        if (array_key_exists("cloudPcId", $this->_propDict)) {
            return $this->_propDict["cloudPcId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcId
    *
    * @param string $val The cloudPcId
    *
    * @return CloudPcSnapshot
    */
    public function setCloudPcId($val)
    {
        $this->_propDict["cloudPcId"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
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
    * @return CloudPcSnapshot
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the lastRestoredDateTime
    *
    * @return \DateTime|null The lastRestoredDateTime
    */
    public function getLastRestoredDateTime()
    {
        if (array_key_exists("lastRestoredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastRestoredDateTime"], "\DateTime") || is_null($this->_propDict["lastRestoredDateTime"])) {
                return $this->_propDict["lastRestoredDateTime"];
            } else {
                $this->_propDict["lastRestoredDateTime"] = new \DateTime($this->_propDict["lastRestoredDateTime"]);
                return $this->_propDict["lastRestoredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRestoredDateTime
    *
    * @param \DateTime $val The lastRestoredDateTime
    *
    * @return CloudPcSnapshot
    */
    public function setLastRestoredDateTime($val)
    {
        $this->_propDict["lastRestoredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return CloudPcSnapshotStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\CloudPcSnapshotStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new CloudPcSnapshotStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param CloudPcSnapshotStatus $val The status
    *
    * @return CloudPcSnapshot
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

}
