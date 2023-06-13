<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcBulkAction File
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
* CloudPcBulkAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcBulkAction extends Entity
{
    /**
    * Gets the actionSummary
    *
    * @return CloudPcBulkActionSummary|null The actionSummary
    */
    public function getActionSummary()
    {
        if (array_key_exists("actionSummary", $this->_propDict)) {
            if (is_a($this->_propDict["actionSummary"], "\Beta\Microsoft\Graph\Model\CloudPcBulkActionSummary") || is_null($this->_propDict["actionSummary"])) {
                return $this->_propDict["actionSummary"];
            } else {
                $this->_propDict["actionSummary"] = new CloudPcBulkActionSummary($this->_propDict["actionSummary"]);
                return $this->_propDict["actionSummary"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSummary
    *
    * @param CloudPcBulkActionSummary $val The actionSummary
    *
    * @return CloudPcBulkAction
    */
    public function setActionSummary($val)
    {
        $this->_propDict["actionSummary"] = $val;
        return $this;
    }

    /**
    * Gets the cloudPcIds
    *
    * @return array|null The cloudPcIds
    */
    public function getCloudPcIds()
    {
        if (array_key_exists("cloudPcIds", $this->_propDict)) {
            return $this->_propDict["cloudPcIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cloudPcIds
    *
    * @param string[] $val The cloudPcIds
    *
    * @return CloudPcBulkAction
    */
    public function setCloudPcIds($val)
    {
        $this->_propDict["cloudPcIds"] = $val;
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
    * @return CloudPcBulkAction
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return CloudPcBulkAction
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

}
