<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PstnOnlineMeetingDialoutReport File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;
/**
* PstnOnlineMeetingDialoutReport class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PstnOnlineMeetingDialoutReport extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the currency
    *
    * @return string|null The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            return $this->_propDict["currency"];
        } else {
            return null;
        }
    }

    /**
    * Sets the currency
    *
    * @param string $val The value of the currency
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    /**
    * Gets the destinationContext
    *
    * @return string|null The destinationContext
    */
    public function getDestinationContext()
    {
        if (array_key_exists("destinationContext", $this->_propDict)) {
            return $this->_propDict["destinationContext"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationContext
    *
    * @param string $val The value of the destinationContext
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setDestinationContext($val)
    {
        $this->_propDict["destinationContext"] = $val;
        return $this;
    }

    /**
    * Gets the totalCallCharge
    *
    * @return \Beta\Microsoft\Graph\Model\Decimal|null The totalCallCharge
    */
    public function getTotalCallCharge()
    {
        if (array_key_exists("totalCallCharge", $this->_propDict)) {
            if (is_a($this->_propDict["totalCallCharge"], "\Beta\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["totalCallCharge"])) {
                return $this->_propDict["totalCallCharge"];
            } else {
                $this->_propDict["totalCallCharge"] = new \Beta\Microsoft\Graph\Model\Decimal($this->_propDict["totalCallCharge"]);
                return $this->_propDict["totalCallCharge"];
            }
        }
        return null;
    }

    /**
    * Sets the totalCallCharge
    *
    * @param \Beta\Microsoft\Graph\Model\Decimal $val The value to assign to the totalCallCharge
    *
    * @return PstnOnlineMeetingDialoutReport The PstnOnlineMeetingDialoutReport
    */
    public function setTotalCallCharge($val)
    {
        $this->_propDict["totalCallCharge"] = $val;
         return $this;
    }
    /**
    * Gets the totalCalls
    *
    * @return int|null The totalCalls
    */
    public function getTotalCalls()
    {
        if (array_key_exists("totalCalls", $this->_propDict)) {
            return $this->_propDict["totalCalls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCalls
    *
    * @param int $val The value of the totalCalls
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setTotalCalls($val)
    {
        $this->_propDict["totalCalls"] = $val;
        return $this;
    }
    /**
    * Gets the totalCallSeconds
    *
    * @return int|null The totalCallSeconds
    */
    public function getTotalCallSeconds()
    {
        if (array_key_exists("totalCallSeconds", $this->_propDict)) {
            return $this->_propDict["totalCallSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalCallSeconds
    *
    * @param int $val The value of the totalCallSeconds
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setTotalCallSeconds($val)
    {
        $this->_propDict["totalCallSeconds"] = $val;
        return $this;
    }
    /**
    * Gets the usageLocation
    *
    * @return string|null The usageLocation
    */
    public function getUsageLocation()
    {
        if (array_key_exists("usageLocation", $this->_propDict)) {
            return $this->_propDict["usageLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the usageLocation
    *
    * @param string $val The value of the usageLocation
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setUsageLocation($val)
    {
        $this->_propDict["usageLocation"] = $val;
        return $this;
    }
    /**
    * Gets the userDisplayName
    *
    * @return string|null The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userDisplayName
    *
    * @param string $val The value of the userDisplayName
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    *
    * @return string|null The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userId
    *
    * @param string $val The value of the userId
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return PstnOnlineMeetingDialoutReport
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
