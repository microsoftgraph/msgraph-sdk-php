<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsCnameRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* DomainDnsCnameRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DomainDnsCnameRecord extends DomainDnsRecord
{
    /**
    * Gets the canonicalName
    *
    * @return string The canonicalName
    */
    public function getCanonicalName()
    {
        if (array_key_exists("canonicalName", $this->_propDict)) {
            return $this->_propDict["canonicalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the canonicalName
    *
    * @param string $val The canonicalName
    *
    * @return DomainDnsCnameRecord
    */
    public function setCanonicalName($val)
    {
        $this->_propDict["canonicalName"] = $val;
        return $this;
    }
    
}