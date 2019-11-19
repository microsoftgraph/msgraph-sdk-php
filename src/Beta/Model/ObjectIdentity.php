<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObjectIdentity File
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
* ObjectIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ObjectIdentity extends Entity
{
    /**
    * Gets the signInType
    *
    * @return string The signInType
    */
    public function getSignInType()
    {
        if (array_key_exists("signInType", $this->_propDict)) {
            return $this->_propDict["signInType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the signInType
    *
    * @param string $val The value of the signInType
    *
    * @return ObjectIdentity
    */
    public function setSignInType($val)
    {
        $this->_propDict["signInType"] = $val;
        return $this;
    }
    /**
    * Gets the issuer
    *
    * @return string The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            return $this->_propDict["issuer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuer
    *
    * @param string $val The value of the issuer
    *
    * @return ObjectIdentity
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }
    /**
    * Gets the issuerAssignedId
    *
    * @return string The issuerAssignedId
    */
    public function getIssuerAssignedId()
    {
        if (array_key_exists("issuerAssignedId", $this->_propDict)) {
            return $this->_propDict["issuerAssignedId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the issuerAssignedId
    *
    * @param string $val The value of the issuerAssignedId
    *
    * @return ObjectIdentity
    */
    public function setIssuerAssignedId($val)
    {
        $this->_propDict["issuerAssignedId"] = $val;
        return $this;
    }
}
