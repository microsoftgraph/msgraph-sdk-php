<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcBulkRestore File
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
* CloudPcBulkRestore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcBulkRestore extends CloudPcBulkAction
{
    /**
    * Gets the restorePointDateTime
    *
    * @return \DateTime|null The restorePointDateTime
    */
    public function getRestorePointDateTime()
    {
        if (array_key_exists("restorePointDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["restorePointDateTime"], "\DateTime") || is_null($this->_propDict["restorePointDateTime"])) {
                return $this->_propDict["restorePointDateTime"];
            } else {
                $this->_propDict["restorePointDateTime"] = new \DateTime($this->_propDict["restorePointDateTime"]);
                return $this->_propDict["restorePointDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the restorePointDateTime
    *
    * @param \DateTime $val The restorePointDateTime
    *
    * @return CloudPcBulkRestore
    */
    public function setRestorePointDateTime($val)
    {
        $this->_propDict["restorePointDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the timeRange
    *
    * @return RestoreTimeRange|null The timeRange
    */
    public function getTimeRange()
    {
        if (array_key_exists("timeRange", $this->_propDict)) {
            if (is_a($this->_propDict["timeRange"], "\Beta\Microsoft\Graph\Model\RestoreTimeRange") || is_null($this->_propDict["timeRange"])) {
                return $this->_propDict["timeRange"];
            } else {
                $this->_propDict["timeRange"] = new RestoreTimeRange($this->_propDict["timeRange"]);
                return $this->_propDict["timeRange"];
            }
        }
        return null;
    }

    /**
    * Sets the timeRange
    *
    * @param RestoreTimeRange $val The timeRange
    *
    * @return CloudPcBulkRestore
    */
    public function setTimeRange($val)
    {
        $this->_propDict["timeRange"] = $val;
        return $this;
    }

}
