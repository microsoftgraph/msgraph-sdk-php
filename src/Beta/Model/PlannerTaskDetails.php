<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTaskDetails File
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
* PlannerTaskDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class PlannerTaskDetails extends Entity
{
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return PlannerTaskDetails
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the previewType
    *
    * @return PlannerPreviewType The previewType
    */
    public function getPreviewType()
    {
        if (array_key_exists("previewType", $this->_propDict)) {
            if (is_a($this->_propDict["previewType"], "Microsoft\Graph\Beta\Model\PlannerPreviewType")) {
                return $this->_propDict["previewType"];
            } else {
                $this->_propDict["previewType"] = new PlannerPreviewType($this->_propDict["previewType"]);
                return $this->_propDict["previewType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previewType
    *
    * @param PlannerPreviewType $val The previewType
    *
    * @return PlannerTaskDetails
    */
    public function setPreviewType($val)
    {
        $this->_propDict["previewType"] = $val;
        return $this;
    }
    
    /**
    * Gets the references
    *
    * @return PlannerExternalReferences The references
    */
    public function getReferences()
    {
        if (array_key_exists("references", $this->_propDict)) {
            if (is_a($this->_propDict["references"], "Microsoft\Graph\Beta\Model\PlannerExternalReferences")) {
                return $this->_propDict["references"];
            } else {
                $this->_propDict["references"] = new PlannerExternalReferences($this->_propDict["references"]);
                return $this->_propDict["references"];
            }
        }
        return null;
    }
    
    /**
    * Sets the references
    *
    * @param PlannerExternalReferences $val The references
    *
    * @return PlannerTaskDetails
    */
    public function setReferences($val)
    {
        $this->_propDict["references"] = $val;
        return $this;
    }
    
    /**
    * Gets the checklist
    *
    * @return PlannerChecklistItems The checklist
    */
    public function getChecklist()
    {
        if (array_key_exists("checklist", $this->_propDict)) {
            if (is_a($this->_propDict["checklist"], "Microsoft\Graph\Beta\Model\PlannerChecklistItems")) {
                return $this->_propDict["checklist"];
            } else {
                $this->_propDict["checklist"] = new PlannerChecklistItems($this->_propDict["checklist"]);
                return $this->_propDict["checklist"];
            }
        }
        return null;
    }
    
    /**
    * Sets the checklist
    *
    * @param PlannerChecklistItems $val The checklist
    *
    * @return PlannerTaskDetails
    */
    public function setChecklist($val)
    {
        $this->_propDict["checklist"] = $val;
        return $this;
    }
    
}