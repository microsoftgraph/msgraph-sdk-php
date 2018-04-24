<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DomainDnsCnameRecord File
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
* DomainDnsCnameRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
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