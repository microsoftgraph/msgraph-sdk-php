<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationCustomization File
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
* EducationSynchronizationCustomization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationCustomization extends Entity
{
    /**
    * Gets the allowDisplayNameUpdate
    *
    * @return bool The allowDisplayNameUpdate
    */
    public function getAllowDisplayNameUpdate()
    {
        if (array_key_exists("allowDisplayNameUpdate", $this->_propDict)) {
            return $this->_propDict["allowDisplayNameUpdate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDisplayNameUpdate
    *
    * @param bool $val The value of the allowDisplayNameUpdate
    *
    * @return EducationSynchronizationCustomization
    */
    public function setAllowDisplayNameUpdate($val)
    {
        $this->_propDict["allowDisplayNameUpdate"] = $val;
        return $this;
    }
    /**
    * Gets the isSyncDeferred
    *
    * @return bool The isSyncDeferred
    */
    public function getIsSyncDeferred()
    {
        if (array_key_exists("isSyncDeferred", $this->_propDict)) {
            return $this->_propDict["isSyncDeferred"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSyncDeferred
    *
    * @param bool $val The value of the isSyncDeferred
    *
    * @return EducationSynchronizationCustomization
    */
    public function setIsSyncDeferred($val)
    {
        $this->_propDict["isSyncDeferred"] = $val;
        return $this;
    }
    /**
    * Gets the optionalPropertiesToSync
    *
    * @return string The optionalPropertiesToSync
    */
    public function getOptionalPropertiesToSync()
    {
        if (array_key_exists("optionalPropertiesToSync", $this->_propDict)) {
            return $this->_propDict["optionalPropertiesToSync"];
        } else {
            return null;
        }
    }

    /**
    * Sets the optionalPropertiesToSync
    *
    * @param string $val The value of the optionalPropertiesToSync
    *
    * @return EducationSynchronizationCustomization
    */
    public function setOptionalPropertiesToSync($val)
    {
        $this->_propDict["optionalPropertiesToSync"] = $val;
        return $this;
    }

    /**
    * Gets the synchronizationStartDate
    *
    * @return \DateTime The synchronizationStartDate
    */
    public function getSynchronizationStartDate()
    {
        if (array_key_exists("synchronizationStartDate", $this->_propDict)) {
            if (is_a($this->_propDict["synchronizationStartDate"], "\DateTime")) {
                return $this->_propDict["synchronizationStartDate"];
            } else {
                $this->_propDict["synchronizationStartDate"] = new \DateTime($this->_propDict["synchronizationStartDate"]);
                return $this->_propDict["synchronizationStartDate"];
            }
        }
        return null;
    }

    /**
    * Sets the synchronizationStartDate
    *
    * @param \DateTime $val The value to assign to the synchronizationStartDate
    *
    * @return EducationSynchronizationCustomization The EducationSynchronizationCustomization
    */
    public function setSynchronizationStartDate($val)
    {
        $this->_propDict["synchronizationStartDate"] = $val;
         return $this;
    }
}
