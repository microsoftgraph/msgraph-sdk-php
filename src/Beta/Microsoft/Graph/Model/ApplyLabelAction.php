<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApplyLabelAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ApplyLabelAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApplyLabelAction extends InformationProtectionAction
{

    /**
    * Gets the actions
    *
    * @return InformationProtectionAction The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "Beta\Microsoft\Graph\Model\InformationProtectionAction")) {
                return $this->_propDict["actions"];
            } else {
                $this->_propDict["actions"] = new InformationProtectionAction($this->_propDict["actions"]);
                return $this->_propDict["actions"];
            }
        }
        return null;
    }

    /**
    * Sets the actions
    *
    * @param InformationProtectionAction $val The value to assign to the actions
    *
    * @return ApplyLabelAction The ApplyLabelAction
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
         return $this;
    }

    /**
    * Gets the actionSource
    *
    * @return ActionSource The actionSource
    */
    public function getActionSource()
    {
        if (array_key_exists("actionSource", $this->_propDict)) {
            if (is_a($this->_propDict["actionSource"], "Beta\Microsoft\Graph\Model\ActionSource")) {
                return $this->_propDict["actionSource"];
            } else {
                $this->_propDict["actionSource"] = new ActionSource($this->_propDict["actionSource"]);
                return $this->_propDict["actionSource"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSource
    *
    * @param ActionSource $val The value to assign to the actionSource
    *
    * @return ApplyLabelAction The ApplyLabelAction
    */
    public function setActionSource($val)
    {
        $this->_propDict["actionSource"] = $val;
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
    * @return ApplyLabelAction The ApplyLabelAction
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
         return $this;
    }
    /**
    * Gets the responsibleSensitiveTypeIds
    *
    * @return string The responsibleSensitiveTypeIds
    */
    public function getResponsibleSensitiveTypeIds()
    {
        if (array_key_exists("responsibleSensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["responsibleSensitiveTypeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the responsibleSensitiveTypeIds
    *
    * @param string $val The value of the responsibleSensitiveTypeIds
    *
    * @return ApplyLabelAction
    */
    public function setResponsibleSensitiveTypeIds($val)
    {
        $this->_propDict["responsibleSensitiveTypeIds"] = $val;
        return $this;
    }
}
