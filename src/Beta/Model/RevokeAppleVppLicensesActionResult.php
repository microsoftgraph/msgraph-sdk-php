<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RevokeAppleVppLicensesActionResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* RevokeAppleVppLicensesActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RevokeAppleVppLicensesActionResult extends DeviceActionResult
{
    /**
    * Gets the totalLicensesCount
    * Total number of Apple Vpp licenses associated
    *
    * @return int The totalLicensesCount
    */
    public function getTotalLicensesCount()
    {
        if (array_key_exists("totalLicensesCount", $this->_propDict)) {
            return $this->_propDict["totalLicensesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalLicensesCount
    * Total number of Apple Vpp licenses associated
    *
    * @param int $val The value of the totalLicensesCount
    *
    * @return RevokeAppleVppLicensesActionResult
    */
    public function setTotalLicensesCount($val)
    {
        $this->_propDict["totalLicensesCount"] = $val;
        return $this;
    }
    /**
    * Gets the failedLicensesCount
    * Total number of Apple Vpp licenses that failed to revoke
    *
    * @return int The failedLicensesCount
    */
    public function getFailedLicensesCount()
    {
        if (array_key_exists("failedLicensesCount", $this->_propDict)) {
            return $this->_propDict["failedLicensesCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedLicensesCount
    * Total number of Apple Vpp licenses that failed to revoke
    *
    * @param int $val The value of the failedLicensesCount
    *
    * @return RevokeAppleVppLicensesActionResult
    */
    public function setFailedLicensesCount($val)
    {
        $this->_propDict["failedLicensesCount"] = $val;
        return $this;
    }
}
