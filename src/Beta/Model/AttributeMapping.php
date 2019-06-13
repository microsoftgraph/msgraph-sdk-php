<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMapping File
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
* AttributeMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AttributeMapping extends Entity
{
    /**
    * Gets the defaultValue
    *
    * @return string The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    *
    * @param string $val The value of the defaultValue
    *
    * @return AttributeMapping
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    /**
    * Gets the exportMissingReferences
    *
    * @return bool The exportMissingReferences
    */
    public function getExportMissingReferences()
    {
        if (array_key_exists("exportMissingReferences", $this->_propDict)) {
            return $this->_propDict["exportMissingReferences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exportMissingReferences
    *
    * @param bool $val The value of the exportMissingReferences
    *
    * @return AttributeMapping
    */
    public function setExportMissingReferences($val)
    {
        $this->_propDict["exportMissingReferences"] = $val;
        return $this;
    }

    /**
    * Gets the flowBehavior
    *
    * @return AttributeFlowBehavior The flowBehavior
    */
    public function getFlowBehavior()
    {
        if (array_key_exists("flowBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["flowBehavior"], "Microsoft\Graph\Beta\Model\AttributeFlowBehavior")) {
                return $this->_propDict["flowBehavior"];
            } else {
                $this->_propDict["flowBehavior"] = new AttributeFlowBehavior($this->_propDict["flowBehavior"]);
                return $this->_propDict["flowBehavior"];
            }
        }
        return null;
    }

    /**
    * Sets the flowBehavior
    *
    * @param AttributeFlowBehavior $val The value to assign to the flowBehavior
    *
    * @return AttributeMapping The AttributeMapping
    */
    public function setFlowBehavior($val)
    {
        $this->_propDict["flowBehavior"] = $val;
         return $this;
    }

    /**
    * Gets the flowType
    *
    * @return AttributeFlowType The flowType
    */
    public function getFlowType()
    {
        if (array_key_exists("flowType", $this->_propDict)) {
            if (is_a($this->_propDict["flowType"], "Microsoft\Graph\Beta\Model\AttributeFlowType")) {
                return $this->_propDict["flowType"];
            } else {
                $this->_propDict["flowType"] = new AttributeFlowType($this->_propDict["flowType"]);
                return $this->_propDict["flowType"];
            }
        }
        return null;
    }

    /**
    * Sets the flowType
    *
    * @param AttributeFlowType $val The value to assign to the flowType
    *
    * @return AttributeMapping The AttributeMapping
    */
    public function setFlowType($val)
    {
        $this->_propDict["flowType"] = $val;
         return $this;
    }
    /**
    * Gets the matchingPriority
    *
    * @return int The matchingPriority
    */
    public function getMatchingPriority()
    {
        if (array_key_exists("matchingPriority", $this->_propDict)) {
            return $this->_propDict["matchingPriority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the matchingPriority
    *
    * @param int $val The value of the matchingPriority
    *
    * @return AttributeMapping
    */
    public function setMatchingPriority($val)
    {
        $this->_propDict["matchingPriority"] = $val;
        return $this;
    }

    /**
    * Gets the source
    *
    * @return AttributeMappingSource The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "Microsoft\Graph\Beta\Model\AttributeMappingSource")) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new AttributeMappingSource($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    *
    * @param AttributeMappingSource $val The value to assign to the source
    *
    * @return AttributeMapping The AttributeMapping
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
         return $this;
    }
    /**
    * Gets the targetAttributeName
    *
    * @return string The targetAttributeName
    */
    public function getTargetAttributeName()
    {
        if (array_key_exists("targetAttributeName", $this->_propDict)) {
            return $this->_propDict["targetAttributeName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetAttributeName
    *
    * @param string $val The value of the targetAttributeName
    *
    * @return AttributeMapping
    */
    public function setTargetAttributeName($val)
    {
        $this->_propDict["targetAttributeName"] = $val;
        return $this;
    }
}
