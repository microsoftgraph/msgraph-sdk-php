<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpEvaluationInput File
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
* DlpEvaluationInput class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DlpEvaluationInput extends Entity
{

    /**
    * Gets the discoveredSensitiveTypes
    *
    * @return DiscoveredSensitiveType The discoveredSensitiveTypes
    */
    public function getDiscoveredSensitiveTypes()
    {
        if (array_key_exists("discoveredSensitiveTypes", $this->_propDict)) {
            if (is_a($this->_propDict["discoveredSensitiveTypes"], "Microsoft\Graph\Beta\Model\DiscoveredSensitiveType")) {
                return $this->_propDict["discoveredSensitiveTypes"];
            } else {
                $this->_propDict["discoveredSensitiveTypes"] = new DiscoveredSensitiveType($this->_propDict["discoveredSensitiveTypes"]);
                return $this->_propDict["discoveredSensitiveTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the discoveredSensitiveTypes
    *
    * @param DiscoveredSensitiveType $val The value to assign to the discoveredSensitiveTypes
    *
    * @return DlpEvaluationInput The DlpEvaluationInput
    */
    public function setDiscoveredSensitiveTypes($val)
    {
        $this->_propDict["discoveredSensitiveTypes"] = $val;
         return $this;
    }

    /**
    * Gets the currentLabel
    *
    * @return CurrentLabel The currentLabel
    */
    public function getCurrentLabel()
    {
        if (array_key_exists("currentLabel", $this->_propDict)) {
            if (is_a($this->_propDict["currentLabel"], "Microsoft\Graph\Beta\Model\CurrentLabel")) {
                return $this->_propDict["currentLabel"];
            } else {
                $this->_propDict["currentLabel"] = new CurrentLabel($this->_propDict["currentLabel"]);
                return $this->_propDict["currentLabel"];
            }
        }
        return null;
    }

    /**
    * Sets the currentLabel
    *
    * @param CurrentLabel $val The value to assign to the currentLabel
    *
    * @return DlpEvaluationInput The DlpEvaluationInput
    */
    public function setCurrentLabel($val)
    {
        $this->_propDict["currentLabel"] = $val;
         return $this;
    }

    /**
    * Gets the accessScope
    *
    * @return AccessScope The accessScope
    */
    public function getAccessScope()
    {
        if (array_key_exists("accessScope", $this->_propDict)) {
            if (is_a($this->_propDict["accessScope"], "Microsoft\Graph\Beta\Model\AccessScope")) {
                return $this->_propDict["accessScope"];
            } else {
                $this->_propDict["accessScope"] = new AccessScope($this->_propDict["accessScope"]);
                return $this->_propDict["accessScope"];
            }
        }
        return null;
    }

    /**
    * Sets the accessScope
    *
    * @param AccessScope $val The value to assign to the accessScope
    *
    * @return DlpEvaluationInput The DlpEvaluationInput
    */
    public function setAccessScope($val)
    {
        $this->_propDict["accessScope"] = $val;
         return $this;
    }
}
