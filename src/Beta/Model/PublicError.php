<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PublicError File
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
* PublicError class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PublicError extends Entity
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
    * @return PublicError
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
    * @return PublicError
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
    * @return PublicError
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }

    /**
    * Gets the details
    *
    * @return PublicErrorDetail The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "Microsoft\Graph\Beta\Model\PublicErrorDetail")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PublicErrorDetail($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    *
    * @param PublicErrorDetail $val The value to assign to the details
    *
    * @return PublicError The PublicError
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }

    /**
    * Gets the innerError
    *
    * @return PublicInnerError The innerError
    */
    public function getInnerError()
    {
        if (array_key_exists("innerError", $this->_propDict)) {
            if (is_a($this->_propDict["innerError"], "Microsoft\Graph\Beta\Model\PublicInnerError")) {
                return $this->_propDict["innerError"];
            } else {
                $this->_propDict["innerError"] = new PublicInnerError($this->_propDict["innerError"]);
                return $this->_propDict["innerError"];
            }
        }
        return null;
    }

    /**
    * Sets the innerError
    *
    * @param PublicInnerError $val The value to assign to the innerError
    *
    * @return PublicError The PublicError
    */
    public function setInnerError($val)
    {
        $this->_propDict["innerError"] = $val;
         return $this;
    }
}
