<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10NetworkBoundaryConfiguration File
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
* Windows10NetworkBoundaryConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Windows10NetworkBoundaryConfiguration extends DeviceConfiguration
{
    /**
    * Gets the windowsNetworkIsolationPolicy
    * Windows Network Isolation Policy
    *
    * @return WindowsNetworkIsolationPolicy The windowsNetworkIsolationPolicy
    */
    public function getWindowsNetworkIsolationPolicy()
    {
        if (array_key_exists("windowsNetworkIsolationPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["windowsNetworkIsolationPolicy"], "Microsoft\Graph\Beta\Model\WindowsNetworkIsolationPolicy")) {
                return $this->_propDict["windowsNetworkIsolationPolicy"];
            } else {
                $this->_propDict["windowsNetworkIsolationPolicy"] = new WindowsNetworkIsolationPolicy($this->_propDict["windowsNetworkIsolationPolicy"]);
                return $this->_propDict["windowsNetworkIsolationPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsNetworkIsolationPolicy
    * Windows Network Isolation Policy
    *
    * @param WindowsNetworkIsolationPolicy $val The windowsNetworkIsolationPolicy
    *
    * @return Windows10NetworkBoundaryConfiguration
    */
    public function setWindowsNetworkIsolationPolicy($val)
    {
        $this->_propDict["windowsNetworkIsolationPolicy"] = $val;
        return $this;
    }
    
}