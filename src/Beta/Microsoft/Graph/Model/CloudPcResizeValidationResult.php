<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcResizeValidationResult File
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
* CloudPcResizeValidationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcResizeValidationResult extends Entity
{
    /**
    * Gets the cloudPcId
    * The cloudPC ID that corresponds to its unique identifier.
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
    * The cloudPC ID that corresponds to its unique identifier.
    *
    * @param string $val The value of the cloudPcId
    *
    * @return CloudPcResizeValidationResult
    */
    public function setCloudPcId($val)
    {
        $this->_propDict["cloudPcId"] = $val;
        return $this;
    }

    /**
    * Gets the validationResult
    * Describes a list of the validation result for the Cloud PC resize action. The possible values are: success, cloudPcNotFound, operationCnflict, operationNotSupported, targetLicenseHasAssigned, internalServerError, and unknownFutureValue.
    *
    * @return CloudPcResizeValidationCode|null The validationResult
    */
    public function getValidationResult()
    {
        if (array_key_exists("validationResult", $this->_propDict)) {
            if (is_a($this->_propDict["validationResult"], "\Beta\Microsoft\Graph\Model\CloudPcResizeValidationCode") || is_null($this->_propDict["validationResult"])) {
                return $this->_propDict["validationResult"];
            } else {
                $this->_propDict["validationResult"] = new CloudPcResizeValidationCode($this->_propDict["validationResult"]);
                return $this->_propDict["validationResult"];
            }
        }
        return null;
    }

    /**
    * Sets the validationResult
    * Describes a list of the validation result for the Cloud PC resize action. The possible values are: success, cloudPcNotFound, operationCnflict, operationNotSupported, targetLicenseHasAssigned, internalServerError, and unknownFutureValue.
    *
    * @param CloudPcResizeValidationCode $val The value to assign to the validationResult
    *
    * @return CloudPcResizeValidationResult The CloudPcResizeValidationResult
    */
    public function setValidationResult($val)
    {
        $this->_propDict["validationResult"] = $val;
         return $this;
    }
}
