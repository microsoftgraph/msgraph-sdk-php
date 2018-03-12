<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlanContext File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* PlannerPlanContext class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PlannerPlanContext extends Entity
{
    /**
    * Gets the associationType
    *
    * @return string The associationType
    */
    public function getAssociationType()
    {
        if (array_key_exists("associationType", $this->_propDict)) {
            return $this->_propDict["associationType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the associationType
    *
    * @param string $val The value of the associationType
    *
    * @return PlannerPlanContext
    */
    public function setAssociationType($val)
    {
        $this->_propDict["associationType"] = $val;
        return $this;
    }

    /**
    * Gets the createdDateTime
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "Microsoft\Graph\Model\\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return PlannerPlanContext The PlannerPlanContext
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the displayNameSegments
    *
    * @return string The displayNameSegments
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
    * @return PlannerPlanContext
    */
    public function setDisplayNameSegments($val)
    {
        $this->_propDict["displayNameSegments"] = $val;
        return $this;
    }
    /**
    * Gets the ownerAppId
    *
    * @return string The ownerAppId
    */
    public function getOwnerAppId()
    {
        if (array_key_exists("ownerAppId", $this->_propDict)) {
            return $this->_propDict["ownerAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ownerAppId
    *
    * @param string $val The value of the ownerAppId
    *
    * @return PlannerPlanContext
    */
    public function setOwnerAppId($val)
    {
        $this->_propDict["ownerAppId"] = $val;
        return $this;
    }
}
