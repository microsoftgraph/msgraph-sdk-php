<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ErrorDetail File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ErrorDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ErrorDetail extends Entity
{

    /**
    * Gets the details
    *
    * @return InnerErrorDetail The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "Beta\Microsoft\Graph\Model\InnerErrorDetail")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new InnerErrorDetail($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }

    /**
    * Sets the details
    *
    * @param InnerErrorDetail $val The value to assign to the details
    *
    * @return ErrorDetail The ErrorDetail
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
         return $this;
    }
    /**
    * Gets the errorCode
    *
    * @return string The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    *
    * @param string $val The value of the errorCode
    *
    * @return ErrorDetail
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
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
    * @return ErrorDetail
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }
}
