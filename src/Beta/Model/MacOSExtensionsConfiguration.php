<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSExtensionsConfiguration File
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
* MacOSExtensionsConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MacOSExtensionsConfiguration extends DeviceConfiguration
{
    /**
    * Gets the kernelExtensionOverridesAllowed
    * If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
    *
    * @return bool The kernelExtensionOverridesAllowed
    */
    public function getKernelExtensionOverridesAllowed()
    {
        if (array_key_exists("kernelExtensionOverridesAllowed", $this->_propDict)) {
            return $this->_propDict["kernelExtensionOverridesAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kernelExtensionOverridesAllowed
    * If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
    *
    * @param bool $val The kernelExtensionOverridesAllowed
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setKernelExtensionOverridesAllowed($val)
    {
        $this->_propDict["kernelExtensionOverridesAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the kernelExtensionAllowedTeamIdentifiers
    * All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
    *
    * @return string The kernelExtensionAllowedTeamIdentifiers
    */
    public function getKernelExtensionAllowedTeamIdentifiers()
    {
        if (array_key_exists("kernelExtensionAllowedTeamIdentifiers", $this->_propDict)) {
            return $this->_propDict["kernelExtensionAllowedTeamIdentifiers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the kernelExtensionAllowedTeamIdentifiers
    * All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
    *
    * @param string $val The kernelExtensionAllowedTeamIdentifiers
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setKernelExtensionAllowedTeamIdentifiers($val)
    {
        $this->_propDict["kernelExtensionAllowedTeamIdentifiers"] = $val;
        return $this;
    }
    

     /** 
     * Gets the kernelExtensionsAllowed
    * A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
     *
     * @return array The kernelExtensionsAllowed
     */
    public function getKernelExtensionsAllowed()
    {
        if (array_key_exists("kernelExtensionsAllowed", $this->_propDict)) {
           return $this->_propDict["kernelExtensionsAllowed"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the kernelExtensionsAllowed
    * A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
    *
    * @param MacOSKernelExtension $val The kernelExtensionsAllowed
    *
    * @return MacOSExtensionsConfiguration
    */
    public function setKernelExtensionsAllowed($val)
    {
		$this->_propDict["kernelExtensionsAllowed"] = $val;
        return $this;
    }
    
}