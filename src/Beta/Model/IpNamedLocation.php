<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IpNamedLocation File
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
* IpNamedLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IpNamedLocation extends NamedLocation
{

     /** 
     * Gets the ipRanges
     *
     * @return array The ipRanges
     */
    public function getIpRanges()
    {
        if (array_key_exists("ipRanges", $this->_propDict)) {
           return $this->_propDict["ipRanges"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ipRanges
    *
    * @param IpRange $val The ipRanges
    *
    * @return IpNamedLocation
    */
    public function setIpRanges($val)
    {
		$this->_propDict["ipRanges"] = $val;
        return $this;
    }
    
    /**
    * Gets the isTrusted
    *
    * @return bool The isTrusted
    */
    public function getIsTrusted()
    {
        if (array_key_exists("isTrusted", $this->_propDict)) {
            return $this->_propDict["isTrusted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isTrusted
    *
    * @param bool $val The isTrusted
    *
    * @return IpNamedLocation
    */
    public function setIsTrusted($val)
    {
        $this->_propDict["isTrusted"] = boolval($val);
        return $this;
    }
    
}