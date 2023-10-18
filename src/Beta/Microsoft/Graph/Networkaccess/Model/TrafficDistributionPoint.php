<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TrafficDistributionPoint File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;
/**
* TrafficDistributionPoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TrafficDistributionPoint extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the internetAccessTrafficCount
    *
    * @return int|null The internetAccessTrafficCount
    */
    public function getInternetAccessTrafficCount()
    {
        if (array_key_exists("internetAccessTrafficCount", $this->_propDict)) {
            return $this->_propDict["internetAccessTrafficCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the internetAccessTrafficCount
    *
    * @param int $val The value of the internetAccessTrafficCount
    *
    * @return TrafficDistributionPoint
    */
    public function setInternetAccessTrafficCount($val)
    {
        $this->_propDict["internetAccessTrafficCount"] = $val;
        return $this;
    }
    /**
    * Gets the microsoft365AccessTrafficCount
    *
    * @return int|null The microsoft365AccessTrafficCount
    */
    public function getMicrosoft365AccessTrafficCount()
    {
        if (array_key_exists("microsoft365AccessTrafficCount", $this->_propDict)) {
            return $this->_propDict["microsoft365AccessTrafficCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the microsoft365AccessTrafficCount
    *
    * @param int $val The value of the microsoft365AccessTrafficCount
    *
    * @return TrafficDistributionPoint
    */
    public function setMicrosoft365AccessTrafficCount($val)
    {
        $this->_propDict["microsoft365AccessTrafficCount"] = $val;
        return $this;
    }
    /**
    * Gets the privateAccessTrafficCount
    *
    * @return int|null The privateAccessTrafficCount
    */
    public function getPrivateAccessTrafficCount()
    {
        if (array_key_exists("privateAccessTrafficCount", $this->_propDict)) {
            return $this->_propDict["privateAccessTrafficCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privateAccessTrafficCount
    *
    * @param int $val The value of the privateAccessTrafficCount
    *
    * @return TrafficDistributionPoint
    */
    public function setPrivateAccessTrafficCount($val)
    {
        $this->_propDict["privateAccessTrafficCount"] = $val;
        return $this;
    }

    /**
    * Gets the timeStampDateTime
    *
    * @return \DateTime|null The timeStampDateTime
    */
    public function getTimeStampDateTime()
    {
        if (array_key_exists("timeStampDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["timeStampDateTime"], "\DateTime") || is_null($this->_propDict["timeStampDateTime"])) {
                return $this->_propDict["timeStampDateTime"];
            } else {
                $this->_propDict["timeStampDateTime"] = new \DateTime($this->_propDict["timeStampDateTime"]);
                return $this->_propDict["timeStampDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the timeStampDateTime
    *
    * @param \DateTime $val The value to assign to the timeStampDateTime
    *
    * @return TrafficDistributionPoint The TrafficDistributionPoint
    */
    public function setTimeStampDateTime($val)
    {
        $this->_propDict["timeStampDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the totalTrafficCount
    *
    * @return int|null The totalTrafficCount
    */
    public function getTotalTrafficCount()
    {
        if (array_key_exists("totalTrafficCount", $this->_propDict)) {
            return $this->_propDict["totalTrafficCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalTrafficCount
    *
    * @param int $val The value of the totalTrafficCount
    *
    * @return TrafficDistributionPoint
    */
    public function setTotalTrafficCount($val)
    {
        $this->_propDict["totalTrafficCount"] = $val;
        return $this;
    }
}
