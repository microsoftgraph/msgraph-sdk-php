<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuditLogRoot File
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
* AuditLogRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuditLogRoot extends Entity
{

     /** 
     * Gets the directoryAudits
    * Read-only. Nullable.
     *
     * @return DirectoryAudit[]|null The directoryAudits
     */
    public function getDirectoryAudits()
    {
        if (array_key_exists('directoryAudits', $this->_propDict) && !is_null($this->_propDict['directoryAudits'])) {
            $directoryAudits = [];
            if (count($this->_propDict['directoryAudits']) > 0 && is_a($this->_propDict['directoryAudits'][0], 'DirectoryAudit')) {
                return $this->_propDict['directoryAudits'];
            }
            foreach ($this->_propDict['directoryAudits'] as $singleValue) {
                $directoryAudits []= new DirectoryAudit($singleValue);
            }
            $this->_propDict['directoryAudits'] = $directoryAudits;
            return $this->_propDict['directoryAudits'];
        }
        return null;
    }
    
    /** 
    * Sets the directoryAudits
    * Read-only. Nullable.
    *
    * @param DirectoryAudit[] $val The directoryAudits
    *
    * @return AuditLogRoot
    */
    public function setDirectoryAudits($val)
    {
        $this->_propDict["directoryAudits"] = $val;
        return $this;
    }
    

     /** 
     * Gets the provisioning
     *
     * @return ProvisioningObjectSummary[]|null The provisioning
     */
    public function getProvisioning()
    {
        if (array_key_exists('provisioning', $this->_propDict) && !is_null($this->_propDict['provisioning'])) {
            $provisioning = [];
            if (count($this->_propDict['provisioning']) > 0 && is_a($this->_propDict['provisioning'][0], 'ProvisioningObjectSummary')) {
                return $this->_propDict['provisioning'];
            }
            foreach ($this->_propDict['provisioning'] as $singleValue) {
                $provisioning []= new ProvisioningObjectSummary($singleValue);
            }
            $this->_propDict['provisioning'] = $provisioning;
            return $this->_propDict['provisioning'];
        }
        return null;
    }
    
    /** 
    * Sets the provisioning
    *
    * @param ProvisioningObjectSummary[] $val The provisioning
    *
    * @return AuditLogRoot
    */
    public function setProvisioning($val)
    {
        $this->_propDict["provisioning"] = $val;
        return $this;
    }
    

     /** 
     * Gets the restrictedSignIns
     *
     * @return RestrictedSignIn[]|null The restrictedSignIns
     */
    public function getRestrictedSignIns()
    {
        if (array_key_exists('restrictedSignIns', $this->_propDict) && !is_null($this->_propDict['restrictedSignIns'])) {
            $restrictedSignIns = [];
            if (count($this->_propDict['restrictedSignIns']) > 0 && is_a($this->_propDict['restrictedSignIns'][0], 'RestrictedSignIn')) {
                return $this->_propDict['restrictedSignIns'];
            }
            foreach ($this->_propDict['restrictedSignIns'] as $singleValue) {
                $restrictedSignIns []= new RestrictedSignIn($singleValue);
            }
            $this->_propDict['restrictedSignIns'] = $restrictedSignIns;
            return $this->_propDict['restrictedSignIns'];
        }
        return null;
    }
    
    /** 
    * Sets the restrictedSignIns
    *
    * @param RestrictedSignIn[] $val The restrictedSignIns
    *
    * @return AuditLogRoot
    */
    public function setRestrictedSignIns($val)
    {
        $this->_propDict["restrictedSignIns"] = $val;
        return $this;
    }
    

     /** 
     * Gets the signIns
    * Read-only. Nullable.
     *
     * @return SignIn[]|null The signIns
     */
    public function getSignIns()
    {
        if (array_key_exists('signIns', $this->_propDict) && !is_null($this->_propDict['signIns'])) {
            $signIns = [];
            if (count($this->_propDict['signIns']) > 0 && is_a($this->_propDict['signIns'][0], 'SignIn')) {
                return $this->_propDict['signIns'];
            }
            foreach ($this->_propDict['signIns'] as $singleValue) {
                $signIns []= new SignIn($singleValue);
            }
            $this->_propDict['signIns'] = $signIns;
            return $this->_propDict['signIns'];
        }
        return null;
    }
    
    /** 
    * Sets the signIns
    * Read-only. Nullable.
    *
    * @param SignIn[] $val The signIns
    *
    * @return AuditLogRoot
    */
    public function setSignIns($val)
    {
        $this->_propDict["signIns"] = $val;
        return $this;
    }
    
}
