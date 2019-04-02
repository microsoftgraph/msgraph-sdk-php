<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateLabelResult File
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
* EvaluateLabelResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class EvaluateLabelResult extends Entity
{

    /**
    * Gets the sensitivityLabel
    *
    * @return MatchingLabel The sensitivityLabel
    */
    public function getSensitivityLabel()
    {
        if (array_key_exists("sensitivityLabel", $this->_propDict)) {
            if (is_a($this->_propDict["sensitivityLabel"], "Microsoft\Graph\Beta\Model\MatchingLabel")) {
                return $this->_propDict["sensitivityLabel"];
            } else {
                $this->_propDict["sensitivityLabel"] = new MatchingLabel($this->_propDict["sensitivityLabel"]);
                return $this->_propDict["sensitivityLabel"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitivityLabel
    *
    * @param MatchingLabel $val The value to assign to the sensitivityLabel
    *
    * @return EvaluateLabelResult The EvaluateLabelResult
    */
    public function setSensitivityLabel($val)
    {
        $this->_propDict["sensitivityLabel"] = $val;
         return $this;
    }

    /**
    * Gets the responsibleSensitiveTypes
    *
    * @return ResponsibleSensitiveType The responsibleSensitiveTypes
    */
    public function getResponsibleSensitiveTypes()
    {
        if (array_key_exists("responsibleSensitiveTypes", $this->_propDict)) {
            if (is_a($this->_propDict["responsibleSensitiveTypes"], "Microsoft\Graph\Beta\Model\ResponsibleSensitiveType")) {
                return $this->_propDict["responsibleSensitiveTypes"];
            } else {
                $this->_propDict["responsibleSensitiveTypes"] = new ResponsibleSensitiveType($this->_propDict["responsibleSensitiveTypes"]);
                return $this->_propDict["responsibleSensitiveTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the responsibleSensitiveTypes
    *
    * @param ResponsibleSensitiveType $val The value to assign to the responsibleSensitiveTypes
    *
    * @return EvaluateLabelResult The EvaluateLabelResult
    */
    public function setResponsibleSensitiveTypes($val)
    {
        $this->_propDict["responsibleSensitiveTypes"] = $val;
         return $this;
    }

    /**
    * Gets the responsiblePolicy
    *
    * @return ResponsiblePolicy The responsiblePolicy
    */
    public function getResponsiblePolicy()
    {
        if (array_key_exists("responsiblePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["responsiblePolicy"], "Microsoft\Graph\Beta\Model\ResponsiblePolicy")) {
                return $this->_propDict["responsiblePolicy"];
            } else {
                $this->_propDict["responsiblePolicy"] = new ResponsiblePolicy($this->_propDict["responsiblePolicy"]);
                return $this->_propDict["responsiblePolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the responsiblePolicy
    *
    * @param ResponsiblePolicy $val The value to assign to the responsiblePolicy
    *
    * @return EvaluateLabelResult The EvaluateLabelResult
    */
    public function setResponsiblePolicy($val)
    {
        $this->_propDict["responsiblePolicy"] = $val;
         return $this;
    }
}
