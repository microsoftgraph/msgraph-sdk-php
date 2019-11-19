<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IPv6CidrRange File
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
* IPv6CidrRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IPv6CidrRange extends IpRange
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iPv6CidrRange");
    }

    /**
    * Gets the cidrAddress
    *
    * @return string The cidrAddress
    */
    public function getCidrAddress()
    {
        if (array_key_exists("cidrAddress", $this->_propDict)) {
            return $this->_propDict["cidrAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cidrAddress
    *
    * @param string $val The value of the cidrAddress
    *
    * @return IPv6CidrRange
    */
    public function setCidrAddress($val)
    {
        $this->_propDict["cidrAddress"] = $val;
        return $this;
    }
}
