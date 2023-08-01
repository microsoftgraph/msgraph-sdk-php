<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProvisioningStatusInfo File
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
* ProvisioningStatusInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ProvisioningStatusInfo extends Entity
{

    /**
    * Gets the errorInformation
    * If status is not success/ skipped details for the error are contained in this.
    *
    * @return ProvisioningErrorInfo|null The errorInformation
    */
    public function getErrorInformation()
    {
        if (array_key_exists("errorInformation", $this->_propDict)) {
            if (is_a($this->_propDict["errorInformation"], "\Beta\Microsoft\Graph\Model\ProvisioningErrorInfo") || is_null($this->_propDict["errorInformation"])) {
                return $this->_propDict["errorInformation"];
            } else {
                $this->_propDict["errorInformation"] = new ProvisioningErrorInfo($this->_propDict["errorInformation"]);
                return $this->_propDict["errorInformation"];
            }
        }
        return null;
    }

    /**
    * Sets the errorInformation
    * If status is not success/ skipped details for the error are contained in this.
    *
    * @param ProvisioningErrorInfo $val The value to assign to the errorInformation
    *
    * @return ProvisioningStatusInfo The ProvisioningStatusInfo
    */
    public function setErrorInformation($val)
    {
        $this->_propDict["errorInformation"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * Possible values are: success, failure, skipped, warning, unknownFutureValue. Supports $filter (eq, contains).
    *
    * @return ProvisioningResult|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ProvisioningResult") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ProvisioningResult($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Possible values are: success, failure, skipped, warning, unknownFutureValue. Supports $filter (eq, contains).
    *
    * @param ProvisioningResult $val The value to assign to the status
    *
    * @return ProvisioningStatusInfo The ProvisioningStatusInfo
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
}
