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
namespace Beta\Microsoft\Graph\Model;
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
    * Gets the lastSignInDateTime
    *
    * @return \DateTime The lastSignInDateTime
    */
    public function getLastSignInDateTime()
    {
        if (array_key_exists("lastSignInDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSignInDateTime"], "\DateTime")) {
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
    * @return string The lastSignInRequestId
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
