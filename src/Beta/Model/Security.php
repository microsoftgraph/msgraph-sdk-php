<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Security File
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
* Security class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Security extends Entity
{

     /** 
     * Gets the alerts
     *
     * @return array The alerts
     */
    public function getAlerts()
    {
        if (array_key_exists("alerts", $this->_propDict)) {
           return $this->_propDict["alerts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the alerts
    *
    * @param Alert $val The alerts
    *
    * @return Security
    */
    public function setAlerts($val)
    {
		$this->_propDict["alerts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the applicationSecurityProfiles
     *
     * @return array The applicationSecurityProfiles
     */
    public function getApplicationSecurityProfiles()
    {
        if (array_key_exists("applicationSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["applicationSecurityProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the applicationSecurityProfiles
    *
    * @param ApplicationSecurityProfile $val The applicationSecurityProfiles
    *
    * @return Security
    */
    public function setApplicationSecurityProfiles($val)
    {
		$this->_propDict["applicationSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the fileSecurityProfiles
     *
     * @return array The fileSecurityProfiles
     */
    public function getFileSecurityProfiles()
    {
        if (array_key_exists("fileSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["fileSecurityProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the fileSecurityProfiles
    *
    * @param FileSecurityProfile $val The fileSecurityProfiles
    *
    * @return Security
    */
    public function setFileSecurityProfiles($val)
    {
		$this->_propDict["fileSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the hostSecurityProfiles
     *
     * @return array The hostSecurityProfiles
     */
    public function getHostSecurityProfiles()
    {
        if (array_key_exists("hostSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["hostSecurityProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the hostSecurityProfiles
    *
    * @param HostSecurityProfile $val The hostSecurityProfiles
    *
    * @return Security
    */
    public function setHostSecurityProfiles($val)
    {
		$this->_propDict["hostSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ipSecurityProfiles
     *
     * @return array The ipSecurityProfiles
     */
    public function getIpSecurityProfiles()
    {
        if (array_key_exists("ipSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["ipSecurityProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ipSecurityProfiles
    *
    * @param IpSecurityProfile $val The ipSecurityProfiles
    *
    * @return Security
    */
    public function setIpSecurityProfiles($val)
    {
		$this->_propDict["ipSecurityProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the userSecurityProfiles
     *
     * @return array The userSecurityProfiles
     */
    public function getUserSecurityProfiles()
    {
        if (array_key_exists("userSecurityProfiles", $this->_propDict)) {
           return $this->_propDict["userSecurityProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the userSecurityProfiles
    *
    * @param UserSecurityProfile $val The userSecurityProfiles
    *
    * @return Security
    */
    public function setUserSecurityProfiles($val)
    {
		$this->_propDict["userSecurityProfiles"] = $val;
        return $this;
    }
    
}