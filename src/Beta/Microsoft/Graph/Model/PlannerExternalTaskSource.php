<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerExternalTaskSource File
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
* PlannerExternalTaskSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerExternalTaskSource extends PlannerTaskCreation
{
    /**
    * Gets the contextScenarioId
    *
    * @return string|null The contextScenarioId
    */
    public function getContextScenarioId()
    {
        if (array_key_exists("contextScenarioId", $this->_propDict)) {
            return $this->_propDict["contextScenarioId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contextScenarioId
    *
    * @param string $val The value of the contextScenarioId
    *
    * @return PlannerExternalTaskSource
    */
    public function setContextScenarioId($val)
    {
        $this->_propDict["contextScenarioId"] = $val;
        return $this;
    }

    /**
    * Gets the displayLinkType
    *
    * @return PlannerExternalTaskSourceDisplayType|null The displayLinkType
    */
    public function getDisplayLinkType()
    {
        if (array_key_exists("displayLinkType", $this->_propDict)) {
            if (is_a($this->_propDict["displayLinkType"], "\Beta\Microsoft\Graph\Model\PlannerExternalTaskSourceDisplayType") || is_null($this->_propDict["displayLinkType"])) {
                return $this->_propDict["displayLinkType"];
            } else {
                $this->_propDict["displayLinkType"] = new PlannerExternalTaskSourceDisplayType($this->_propDict["displayLinkType"]);
                return $this->_propDict["displayLinkType"];
            }
        }
        return null;
    }

    /**
    * Sets the displayLinkType
    *
    * @param PlannerExternalTaskSourceDisplayType $val The value to assign to the displayLinkType
    *
    * @return PlannerExternalTaskSource The PlannerExternalTaskSource
    */
    public function setDisplayLinkType($val)
    {
        $this->_propDict["displayLinkType"] = $val;
         return $this;
    }
    /**
    * Gets the displayNameSegments
    *
    * @return string|null The displayNameSegments
    */
    public function getDisplayNameSegments()
    {
        if (array_key_exists("displayNameSegments", $this->_propDict)) {
            return $this->_propDict["displayNameSegments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayNameSegments
    *
    * @param string $val The value of the displayNameSegments
    *
    * @return PlannerExternalTaskSource
    */
    public function setDisplayNameSegments($val)
    {
        $this->_propDict["displayNameSegments"] = $val;
        return $this;
    }
    /**
    * Gets the externalContextId
    *
    * @return string|null The externalContextId
    */
    public function getExternalContextId()
    {
        if (array_key_exists("externalContextId", $this->_propDict)) {
            return $this->_propDict["externalContextId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalContextId
    *
    * @param string $val The value of the externalContextId
    *
    * @return PlannerExternalTaskSource
    */
    public function setExternalContextId($val)
    {
        $this->_propDict["externalContextId"] = $val;
        return $this;
    }
    /**
    * Gets the externalObjectId
    *
    * @return string|null The externalObjectId
    */
    public function getExternalObjectId()
    {
        if (array_key_exists("externalObjectId", $this->_propDict)) {
            return $this->_propDict["externalObjectId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalObjectId
    *
    * @param string $val The value of the externalObjectId
    *
    * @return PlannerExternalTaskSource
    */
    public function setExternalObjectId($val)
    {
        $this->_propDict["externalObjectId"] = $val;
        return $this;
    }
    /**
    * Gets the externalObjectVersion
    *
    * @return string|null The externalObjectVersion
    */
    public function getExternalObjectVersion()
    {
        if (array_key_exists("externalObjectVersion", $this->_propDict)) {
            return $this->_propDict["externalObjectVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalObjectVersion
    *
    * @param string $val The value of the externalObjectVersion
    *
    * @return PlannerExternalTaskSource
    */
    public function setExternalObjectVersion($val)
    {
        $this->_propDict["externalObjectVersion"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    *
    * @return string|null The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    *
    * @param string $val The value of the webUrl
    *
    * @return PlannerExternalTaskSource
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
