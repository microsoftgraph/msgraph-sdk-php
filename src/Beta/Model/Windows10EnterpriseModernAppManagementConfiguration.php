<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EnterpriseModernAppManagementConfiguration File
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
* Windows10EnterpriseModernAppManagementConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10EnterpriseModernAppManagementConfiguration extends DeviceConfiguration
{
    /**
    * Gets the uninstallBuiltInApps
    *
    * @return bool The uninstallBuiltInApps
    */
    public function getUninstallBuiltInApps()
    {
        if (array_key_exists("uninstallBuiltInApps", $this->_propDict)) {
            return $this->_propDict["uninstallBuiltInApps"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uninstallBuiltInApps
    *
    * @param bool $val The uninstallBuiltInApps
    *
    * @return Windows10EnterpriseModernAppManagementConfiguration
    */
    public function setUninstallBuiltInApps($val)
    {
        $this->_propDict["uninstallBuiltInApps"] = boolval($val);
        return $this;
    }
    
}