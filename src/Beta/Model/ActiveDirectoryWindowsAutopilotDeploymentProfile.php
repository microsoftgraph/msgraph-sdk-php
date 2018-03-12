<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActiveDirectoryWindowsAutopilotDeploymentProfile File
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
* ActiveDirectoryWindowsAutopilotDeploymentProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ActiveDirectoryWindowsAutopilotDeploymentProfile extends WindowsAutopilotDeploymentProfile
{
    /**
    * Gets the domainJoinConfiguration
    *
    * @return WindowsDomainJoinConfiguration The domainJoinConfiguration
    */
    public function getDomainJoinConfiguration()
    {
        if (array_key_exists("domainJoinConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["domainJoinConfiguration"], "Microsoft\Graph\Model\WindowsDomainJoinConfiguration")) {
                return $this->_propDict["domainJoinConfiguration"];
            } else {
                $this->_propDict["domainJoinConfiguration"] = new WindowsDomainJoinConfiguration($this->_propDict["domainJoinConfiguration"]);
                return $this->_propDict["domainJoinConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the domainJoinConfiguration
    *
    * @param WindowsDomainJoinConfiguration $val The domainJoinConfiguration
    *
    * @return ActiveDirectoryWindowsAutopilotDeploymentProfile
    */
    public function setDomainJoinConfiguration($val)
    {
        $this->_propDict["domainJoinConfiguration"] = $val;
        return $this;
    }
    
}