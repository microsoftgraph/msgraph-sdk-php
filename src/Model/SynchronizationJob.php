<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJob File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* SynchronizationJob class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJob extends Entity
{
    /**
    * Gets the schedule
    *
    * @return SynchronizationSchedule|null The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Microsoft\Graph\Model\SynchronizationSchedule") || is_null($this->_propDict["schedule"])) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new SynchronizationSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }

    /**
    * Sets the schedule
    *
    * @param SynchronizationSchedule $val The schedule
    *
    * @return SynchronizationJob
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return SynchronizationStatus|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\SynchronizationStatus") || is_null($this->_propDict["status"])) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new SynchronizationStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    *
    * @param SynchronizationStatus $val The status
    *
    * @return SynchronizationJob
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the synchronizationJobSettings
     *
     * @return array|null The synchronizationJobSettings
     */
    public function getSynchronizationJobSettings()
    {
        if (array_key_exists("synchronizationJobSettings", $this->_propDict)) {
           return $this->_propDict["synchronizationJobSettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the synchronizationJobSettings
    *
    * @param KeyValuePair[] $val The synchronizationJobSettings
    *
    * @return SynchronizationJob
    */
    public function setSynchronizationJobSettings($val)
    {
        $this->_propDict["synchronizationJobSettings"] = $val;
        return $this;
    }

    /**
    * Gets the templateId
    *
    * @return string|null The templateId
    */
    public function getTemplateId()
    {
        if (array_key_exists("templateId", $this->_propDict)) {
            return $this->_propDict["templateId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the templateId
    *
    * @param string $val The templateId
    *
    * @return SynchronizationJob
    */
    public function setTemplateId($val)
    {
        $this->_propDict["templateId"] = $val;
        return $this;
    }

    /**
    * Gets the schema
    *
    * @return SynchronizationSchema|null The schema
    */
    public function getSchema()
    {
        if (array_key_exists("schema", $this->_propDict)) {
            if (is_a($this->_propDict["schema"], "\Microsoft\Graph\Model\SynchronizationSchema") || is_null($this->_propDict["schema"])) {
                return $this->_propDict["schema"];
            } else {
                $this->_propDict["schema"] = new SynchronizationSchema($this->_propDict["schema"]);
                return $this->_propDict["schema"];
            }
        }
        return null;
    }

    /**
    * Sets the schema
    *
    * @param SynchronizationSchema $val The schema
    *
    * @return SynchronizationJob
    */
    public function setSchema($val)
    {
        $this->_propDict["schema"] = $val;
        return $this;
    }

}
