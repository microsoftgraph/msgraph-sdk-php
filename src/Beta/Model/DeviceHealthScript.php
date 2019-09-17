<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScript File
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
* DeviceHealthScript class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DeviceHealthScript extends DeviceManagementScript
{
    /**
    * Gets the complianceRule
    *
    * @return DeviceHealthScriptComplianceRule The complianceRule
    */
    public function getComplianceRule()
    {
        if (array_key_exists("complianceRule", $this->_propDict)) {
            if (is_a($this->_propDict["complianceRule"], "Microsoft\Graph\Beta\Model\DeviceHealthScriptComplianceRule")) {
                return $this->_propDict["complianceRule"];
            } else {
                $this->_propDict["complianceRule"] = new DeviceHealthScriptComplianceRule($this->_propDict["complianceRule"]);
                return $this->_propDict["complianceRule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceRule
    *
    * @param DeviceHealthScriptComplianceRule $val The complianceRule
    *
    * @return DeviceHealthScript
    */
    public function setComplianceRule($val)
    {
        $this->_propDict["complianceRule"] = $val;
        return $this;
    }
    
    /**
    * Gets the remediationScriptContent
    *
    * @return \GuzzleHttp\Psr7\Stream The remediationScriptContent
    */
    public function getRemediationScriptContent()
    {
        if (array_key_exists("remediationScriptContent", $this->_propDict)) {
            if (is_a($this->_propDict["remediationScriptContent"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["remediationScriptContent"];
            } else {
                $this->_propDict["remediationScriptContent"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["remediationScriptContent"]);
                return $this->_propDict["remediationScriptContent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the remediationScriptContent
    *
    * @param \GuzzleHttp\Psr7\Stream $val The remediationScriptContent
    *
    * @return DeviceHealthScript
    */
    public function setRemediationScriptContent($val)
    {
        $this->_propDict["remediationScriptContent"] = $val;
        return $this;
    }
    
    /**
    * Gets the runRemediationScript
    *
    * @return bool The runRemediationScript
    */
    public function getRunRemediationScript()
    {
        if (array_key_exists("runRemediationScript", $this->_propDict)) {
            return $this->_propDict["runRemediationScript"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the runRemediationScript
    *
    * @param bool $val The runRemediationScript
    *
    * @return DeviceHealthScript
    */
    public function setRunRemediationScript($val)
    {
        $this->_propDict["runRemediationScript"] = boolval($val);
        return $this;
    }
    
}