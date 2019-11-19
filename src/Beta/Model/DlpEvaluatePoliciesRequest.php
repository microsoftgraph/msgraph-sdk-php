<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpEvaluatePoliciesRequest File
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
* DlpEvaluatePoliciesRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DlpEvaluatePoliciesRequest extends Entity
{
    /**
    * Gets the target
    *
    * @return string The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return DlpEvaluatePoliciesRequest
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

    /**
    * Gets the evaluationInput
    *
    * @return DlpEvaluationInput The evaluationInput
    */
    public function getEvaluationInput()
    {
        if (array_key_exists("evaluationInput", $this->_propDict)) {
            if (is_a($this->_propDict["evaluationInput"], "Microsoft\Graph\Beta\Model\DlpEvaluationInput")) {
                return $this->_propDict["evaluationInput"];
            } else {
                $this->_propDict["evaluationInput"] = new DlpEvaluationInput($this->_propDict["evaluationInput"]);
                return $this->_propDict["evaluationInput"];
            }
        }
        return null;
    }

    /**
    * Sets the evaluationInput
    *
    * @param DlpEvaluationInput $val The value to assign to the evaluationInput
    *
    * @return DlpEvaluatePoliciesRequest The DlpEvaluatePoliciesRequest
    */
    public function setEvaluationInput($val)
    {
        $this->_propDict["evaluationInput"] = $val;
         return $this;
    }

    /**
    * Gets the notificationInfo
    *
    * @return DlpNotification The notificationInfo
    */
    public function getNotificationInfo()
    {
        if (array_key_exists("notificationInfo", $this->_propDict)) {
            if (is_a($this->_propDict["notificationInfo"], "Microsoft\Graph\Beta\Model\DlpNotification")) {
                return $this->_propDict["notificationInfo"];
            } else {
                $this->_propDict["notificationInfo"] = new DlpNotification($this->_propDict["notificationInfo"]);
                return $this->_propDict["notificationInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the notificationInfo
    *
    * @param DlpNotification $val The value to assign to the notificationInfo
    *
    * @return DlpEvaluatePoliciesRequest The DlpEvaluatePoliciesRequest
    */
    public function setNotificationInfo($val)
    {
        $this->_propDict["notificationInfo"] = $val;
         return $this;
    }
}
