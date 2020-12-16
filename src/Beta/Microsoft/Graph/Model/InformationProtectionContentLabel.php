<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InformationProtectionContentLabel File
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
* InformationProtectionContentLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InformationProtectionContentLabel extends Entity
{

    /**
    * Gets the assignmentMethod
    *
    * @return AssignmentMethod The assignmentMethod
    */
    public function getAssignmentMethod()
    {
        if (array_key_exists("assignmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentMethod"], "Beta\Microsoft\Graph\Model\AssignmentMethod")) {
                return $this->_propDict["assignmentMethod"];
            } else {
                $this->_propDict["assignmentMethod"] = new AssignmentMethod($this->_propDict["assignmentMethod"]);
                return $this->_propDict["assignmentMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentMethod
    *
    * @param AssignmentMethod $val The value to assign to the assignmentMethod
    *
    * @return InformationProtectionContentLabel The InformationProtectionContentLabel
    */
    public function setAssignmentMethod($val)
    {
        $this->_propDict["assignmentMethod"] = $val;
         return $this;
    }

    /**
    * Gets the creationDateTime
    *
    * @return \DateTime The creationDateTime
    */
    public function getCreationDateTime()
    {
        if (array_key_exists("creationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["creationDateTime"], "\DateTime")) {
                return $this->_propDict["creationDateTime"];
            } else {
                $this->_propDict["creationDateTime"] = new \DateTime($this->_propDict["creationDateTime"]);
                return $this->_propDict["creationDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the creationDateTime
    *
    * @param \DateTime $val The value to assign to the creationDateTime
    *
    * @return InformationProtectionContentLabel The InformationProtectionContentLabel
    */
    public function setCreationDateTime($val)
    {
        $this->_propDict["creationDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the label
    *
    * @return LabelDetails The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict)) {
            if (is_a($this->_propDict["label"], "Beta\Microsoft\Graph\Model\LabelDetails")) {
                return $this->_propDict["label"];
            } else {
                $this->_propDict["label"] = new LabelDetails($this->_propDict["label"]);
                return $this->_propDict["label"];
            }
        }
        return null;
    }

    /**
    * Sets the label
    *
    * @param LabelDetails $val The value to assign to the label
    *
    * @return InformationProtectionContentLabel The InformationProtectionContentLabel
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
         return $this;
    }
}
