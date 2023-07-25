<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectionAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\SecurityNamespace\Model;
/**
* DetectionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectionAction extends \Beta\Microsoft\Graph\Model\Entity
{

    /**
    * Gets the alertTemplate
    *
    * @return AlertTemplate|null The alertTemplate
    */
    public function getAlertTemplate()
    {
        if (array_key_exists("alertTemplate", $this->_propDict)) {
            if (is_a($this->_propDict["alertTemplate"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\AlertTemplate") || is_null($this->_propDict["alertTemplate"])) {
                return $this->_propDict["alertTemplate"];
            } else {
                $this->_propDict["alertTemplate"] = new AlertTemplate($this->_propDict["alertTemplate"]);
                return $this->_propDict["alertTemplate"];
            }
        }
        return null;
    }

    /**
    * Sets the alertTemplate
    *
    * @param AlertTemplate $val The value to assign to the alertTemplate
    *
    * @return DetectionAction The DetectionAction
    */
    public function setAlertTemplate($val)
    {
        $this->_propDict["alertTemplate"] = $val;
         return $this;
    }

    /**
    * Gets the organizationalScope
    *
    * @return OrganizationalScope|null The organizationalScope
    */
    public function getOrganizationalScope()
    {
        if (array_key_exists("organizationalScope", $this->_propDict)) {
            if (is_a($this->_propDict["organizationalScope"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\OrganizationalScope") || is_null($this->_propDict["organizationalScope"])) {
                return $this->_propDict["organizationalScope"];
            } else {
                $this->_propDict["organizationalScope"] = new OrganizationalScope($this->_propDict["organizationalScope"]);
                return $this->_propDict["organizationalScope"];
            }
        }
        return null;
    }

    /**
    * Sets the organizationalScope
    *
    * @param OrganizationalScope $val The value to assign to the organizationalScope
    *
    * @return DetectionAction The DetectionAction
    */
    public function setOrganizationalScope($val)
    {
        $this->_propDict["organizationalScope"] = $val;
         return $this;
    }

    /**
    * Gets the responseActions
    *
    * @return ResponseAction|null The responseActions
    */
    public function getResponseActions()
    {
        if (array_key_exists("responseActions", $this->_propDict)) {
            if (is_a($this->_propDict["responseActions"], "\Beta\Microsoft\Graph\SecurityNamespace\Model\ResponseAction") || is_null($this->_propDict["responseActions"])) {
                return $this->_propDict["responseActions"];
            } else {
                $this->_propDict["responseActions"] = new ResponseAction($this->_propDict["responseActions"]);
                return $this->_propDict["responseActions"];
            }
        }
        return null;
    }

    /**
    * Sets the responseActions
    *
    * @param ResponseAction $val The value to assign to the responseActions
    *
    * @return DetectionAction The DetectionAction
    */
    public function setResponseActions($val)
    {
        $this->_propDict["responseActions"] = $val;
         return $this;
    }
}
