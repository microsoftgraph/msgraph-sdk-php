<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicErrorDetail File
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
* PublicErrorDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PublicErrorDetail extends Entity
{
    /**
    * Gets the code
    *
    * @return string The code
    */
    public function getCode()
    {
        if (array_key_exists("code", $this->_propDict)) {
            return $this->_propDict["code"];
        } else {
            return null;
        }
    }

    /**
    * Sets the code
    *
    * @param string $val The value of the code
    *
    * @return PublicErrorDetail
    */
    public function setCode($val)
    {
        $this->_propDict["code"] = $val;
        return $this;
    }
    /**
    * Gets the message
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    *
    * @param string $val The value of the message
    *
    * @return PublicErrorDetail
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
    /**
    * Gets the target
    *
    * @return string The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return PublicErrorDetail
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
}
