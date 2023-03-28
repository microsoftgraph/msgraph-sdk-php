<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInActivity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* SignInActivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInActivity extends Entity
{

    /**
    * Gets the lastNonInteractiveSignInDateTime
    *
    * @return \DateTime|null The lastNonInteractiveSignInDateTime
    */
    public function getLastNonInteractiveSignInDateTime()
    {
        if (array_key_exists("lastNonInteractiveSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastNonInteractiveSignInDateTime"], "\DateTime") || is_null($this->_propDict["lastNonInteractiveSignInDateTime"])) {
                return $this->_propDict["lastNonInteractiveSignInDateTime"];
            } else {
                $this->_propDict["lastNonInteractiveSignInDateTime"] = new \DateTime($this->_propDict["lastNonInteractiveSignInDateTime"]);
                return $this->_propDict["lastNonInteractiveSignInDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastNonInteractiveSignInDateTime
    *
    * @param \DateTime $val The value to assign to the lastNonInteractiveSignInDateTime
    *
    * @return SignInActivity The SignInActivity
    */
    public function setLastNonInteractiveSignInDateTime($val)
    {
        $this->_propDict["lastNonInteractiveSignInDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the lastNonInteractiveSignInRequestId
    *
    * @return string|null The lastNonInteractiveSignInRequestId
    */
    public function getLastNonInteractiveSignInRequestId()
    {
        if (array_key_exists("lastNonInteractiveSignInRequestId", $this->_propDict)) {
            return $this->_propDict["lastNonInteractiveSignInRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastNonInteractiveSignInRequestId
    *
    * @param string $val The value of the lastNonInteractiveSignInRequestId
    *
    * @return SignInActivity
    */
    public function setLastNonInteractiveSignInRequestId($val)
    {
        $this->_propDict["lastNonInteractiveSignInRequestId"] = $val;
        return $this;
    }

    /**
    * Gets the lastSignInDateTime
    *
    * @return \DateTime|null The lastSignInDateTime
    */
    public function getLastSignInDateTime()
    {
        if (array_key_exists("lastSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSignInDateTime"], "\DateTime") || is_null($this->_propDict["lastSignInDateTime"])) {
                return $this->_propDict["lastSignInDateTime"];
            } else {
                $this->_propDict["lastSignInDateTime"] = new \DateTime($this->_propDict["lastSignInDateTime"]);
                return $this->_propDict["lastSignInDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastSignInDateTime
    *
    * @param \DateTime $val The value to assign to the lastSignInDateTime
    *
    * @return SignInActivity The SignInActivity
    */
    public function setLastSignInDateTime($val)
    {
        $this->_propDict["lastSignInDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the lastSignInRequestId
    *
    * @return string|null The lastSignInRequestId
    */
    public function getLastSignInRequestId()
    {
        if (array_key_exists("lastSignInRequestId", $this->_propDict)) {
            return $this->_propDict["lastSignInRequestId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the lastSignInRequestId
    *
    * @param string $val The value of the lastSignInRequestId
    *
    * @return SignInActivity
    */
    public function setLastSignInRequestId($val)
    {
        $this->_propDict["lastSignInRequestId"] = $val;
        return $this;
    }
}
