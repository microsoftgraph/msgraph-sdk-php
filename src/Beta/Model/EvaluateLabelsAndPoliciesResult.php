<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateLabelsAndPoliciesResult File
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
* EvaluateLabelsAndPoliciesResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EvaluateLabelsAndPoliciesResult extends Entity
{

    /**
    * Gets the sensitivityLabelsResult
    *
    * @return EvaluateLabelJobResultGroup The sensitivityLabelsResult
    */
    public function getSensitivityLabelsResult()
    {
        if (array_key_exists("sensitivityLabelsResult", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivityLabelsResult"], "Microsoft\Graph\Beta\Model\EvaluateLabelJobResultGroup")) {
                return $this->_propDict["sensitivityLabelsResult"];
            } else {
                $this->_propDict["sensitivityLabelsResult"] = new EvaluateLabelJobResultGroup($this->_propDict["sensitivityLabelsResult"]);
                return $this->_propDict["sensitivityLabelsResult"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitivityLabelsResult
    *
    * @param EvaluateLabelJobResultGroup $val The value to assign to the sensitivityLabelsResult
    *
    * @return EvaluateLabelsAndPoliciesResult The EvaluateLabelsAndPoliciesResult
    */
    public function setSensitivityLabelsResult($val)
    {
        $this->_propDict["sensitivityLabelsResult"] = $val;
         return $this;
    }

    /**
    * Gets the dataLossPreventionPoliciesResult
    *
    * @return DlpPoliciesJobResult The dataLossPreventionPoliciesResult
    */
    public function getDataLossPreventionPoliciesResult()
    {
        if (array_key_exists("dataLossPreventionPoliciesResult", $this->_propDict)) {
            if (is_a($this->_propDict["dataLossPreventionPoliciesResult"], "Microsoft\Graph\Beta\Model\DlpPoliciesJobResult")) {
                return $this->_propDict["dataLossPreventionPoliciesResult"];
            } else {
                $this->_propDict["dataLossPreventionPoliciesResult"] = new DlpPoliciesJobResult($this->_propDict["dataLossPreventionPoliciesResult"]);
                return $this->_propDict["dataLossPreventionPoliciesResult"];
            }
        }
        return null;
    }

    /**
    * Sets the dataLossPreventionPoliciesResult
    *
    * @param DlpPoliciesJobResult $val The value to assign to the dataLossPreventionPoliciesResult
    *
    * @return EvaluateLabelsAndPoliciesResult The EvaluateLabelsAndPoliciesResult
    */
    public function setDataLossPreventionPoliciesResult($val)
    {
        $this->_propDict["dataLossPreventionPoliciesResult"] = $val;
         return $this;
    }

    /**
    * Gets the classificationResult
    *
    * @return DetectedSensitiveContentWrapper The classificationResult
    */
    public function getClassificationResult()
    {
        if (array_key_exists("classificationResult", $this->_propDict)) {
            if (is_a($this->_propDict["classificationResult"], "Microsoft\Graph\Beta\Model\DetectedSensitiveContentWrapper")) {
                return $this->_propDict["classificationResult"];
            } else {
                $this->_propDict["classificationResult"] = new DetectedSensitiveContentWrapper($this->_propDict["classificationResult"]);
                return $this->_propDict["classificationResult"];
            }
        }
        return null;
    }

    /**
    * Sets the classificationResult
    *
    * @param DetectedSensitiveContentWrapper $val The value to assign to the classificationResult
    *
    * @return EvaluateLabelsAndPoliciesResult The EvaluateLabelsAndPoliciesResult
    */
    public function setClassificationResult($val)
    {
        $this->_propDict["classificationResult"] = $val;
         return $this;
    }
}
