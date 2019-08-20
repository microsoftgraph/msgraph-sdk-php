<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendLabelAction File
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
* RecommendLabelAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RecommendLabelAction extends InformationProtectionAction
{
    /**
    * Gets the labelId
    *
    * @return string The labelId
    */
    public function getLabelId()
    {
        if (array_key_exists("labelId", $this->_propDict)) {
            return $this->_propDict["labelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the labelId
    *
    * @param string $val The value of the labelId
    *
    * @return RecommendLabelAction
    */
    public function setLabelId($val)
    {
        $this->_propDict["labelId"] = $val;
        return $this;
    }
    /**
    * Gets the classificationIds
    *
    * @return string The classificationIds
    */
    public function getClassificationIds()
    {
        if (array_key_exists("classificationIds", $this->_propDict)) {
            return $this->_propDict["classificationIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the classificationIds
    *
    * @param string $val The value of the classificationIds
    *
    * @return RecommendLabelAction
    */
    public function setClassificationIds($val)
    {
        $this->_propDict["classificationIds"] = $val;
        return $this;
    }

    /**
    * Gets the actions
    *
    * @return InformationProtectionAction The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "Microsoft\Graph\Beta\Model\InformationProtectionAction")) {
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
    * @return RecommendLabelAction The RecommendLabelAction
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
         return $this;
    }
}
