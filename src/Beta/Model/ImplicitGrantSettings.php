<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ImplicitGrantSettings File
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
* ImplicitGrantSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ImplicitGrantSettings extends Entity
{
    /**
    * Gets the enableIdTokenIssuance
    *
    * @return bool The enableIdTokenIssuance
    */
    public function getEnableIdTokenIssuance()
    {
        if (array_key_exists("enableIdTokenIssuance", $this->_propDict)) {
            return $this->_propDict["enableIdTokenIssuance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableIdTokenIssuance
    *
    * @param bool $val The value of the enableIdTokenIssuance
    *
    * @return ImplicitGrantSettings
    */
    public function setEnableIdTokenIssuance($val)
    {
        $this->_propDict["enableIdTokenIssuance"] = $val;
        return $this;
    }
    /**
    * Gets the enableAccessTokenIssuance
    *
    * @return bool The enableAccessTokenIssuance
    */
    public function getEnableAccessTokenIssuance()
    {
        if (array_key_exists("enableAccessTokenIssuance", $this->_propDict)) {
            return $this->_propDict["enableAccessTokenIssuance"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableAccessTokenIssuance
    *
    * @param bool $val The value of the enableAccessTokenIssuance
    *
    * @return ImplicitGrantSettings
    */
    public function setEnableAccessTokenIssuance($val)
    {
        $this->_propDict["enableAccessTokenIssuance"] = $val;
        return $this;
    }
}
