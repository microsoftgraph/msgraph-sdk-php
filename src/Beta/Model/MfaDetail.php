<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MfaDetail File
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
* MfaDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MfaDetail extends Entity
{
    /**
    * Gets the authMethod
    *
    * @return string The authMethod
    */
    public function getAuthMethod()
    {
        if (array_key_exists("authMethod", $this->_propDict)) {
            return $this->_propDict["authMethod"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authMethod
    *
    * @param string $val The value of the authMethod
    *
    * @return MfaDetail
    */
    public function setAuthMethod($val)
    {
        $this->_propDict["authMethod"] = $val;
        return $this;
    }
    /**
    * Gets the authDetail
    *
    * @return string The authDetail
    */
    public function getAuthDetail()
    {
        if (array_key_exists("authDetail", $this->_propDict)) {
            return $this->_propDict["authDetail"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authDetail
    *
    * @param string $val The value of the authDetail
    *
    * @return MfaDetail
    */
    public function setAuthDetail($val)
    {
        $this->_propDict["authDetail"] = $val;
        return $this;
    }
}
