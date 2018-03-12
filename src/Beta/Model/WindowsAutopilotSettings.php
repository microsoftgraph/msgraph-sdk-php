<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotSettings File
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
* WindowsAutopilotSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsAutopilotSettings extends Entity
{
    /**
    * Gets the lastSyncDateTime
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return WindowsAutopilotSettings
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastManualSyncTriggerDateTime
    *
    * @return \DateTime The lastManualSyncTriggerDateTime
    */
    public function getLastManualSyncTriggerDateTime()
    {
        if (array_key_exists("lastManualSyncTriggerDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastManualSyncTriggerDateTime"], "\DateTime")) {
                return $this->_propDict["lastManualSyncTriggerDateTime"];
            } else {
                $this->_propDict["lastManualSyncTriggerDateTime"] = new \DateTime($this->_propDict["lastManualSyncTriggerDateTime"]);
                return $this->_propDict["lastManualSyncTriggerDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastManualSyncTriggerDateTime
    *
    * @param \DateTime $val The lastManualSyncTriggerDateTime
    *
    * @return WindowsAutopilotSettings
    */
    public function setLastManualSyncTriggerDateTime($val)
    {
        $this->_propDict["lastManualSyncTriggerDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the syncStatus
    *
    * @return WindowsAutopilotSyncStatus The syncStatus
    */
    public function getSyncStatus()
    {
        if (array_key_exists("syncStatus", $this->_propDict)) {
            if (is_a($this->_propDict["syncStatus"], "Microsoft\Graph\Model\WindowsAutopilotSyncStatus")) {
                return $this->_propDict["syncStatus"];
            } else {
                $this->_propDict["syncStatus"] = new WindowsAutopilotSyncStatus($this->_propDict["syncStatus"]);
                return $this->_propDict["syncStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the syncStatus
    *
    * @param WindowsAutopilotSyncStatus $val The syncStatus
    *
    * @return WindowsAutopilotSettings
    */
    public function setSyncStatus($val)
    {
        $this->_propDict["syncStatus"] = $val;
        return $this;
    }
    
}