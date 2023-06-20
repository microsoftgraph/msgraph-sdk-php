<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInCounts File
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
* SignInCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInCounts extends Entity
{
    /**
    * Gets the noSignIn
    *
    * @return int|null The noSignIn
    */
    public function getNoSignIn()
    {
        if (array_key_exists("noSignIn", $this->_propDict)) {
            return $this->_propDict["noSignIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the noSignIn
    *
    * @param int $val The value of the noSignIn
    *
    * @return SignInCounts
    */
    public function setNoSignIn($val)
    {
        $this->_propDict["noSignIn"] = $val;
        return $this;
    }
    /**
    * Gets the withSignIn
    *
    * @return int|null The withSignIn
    */
    public function getWithSignIn()
    {
        if (array_key_exists("withSignIn", $this->_propDict)) {
            return $this->_propDict["withSignIn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the withSignIn
    *
    * @param int $val The value of the withSignIn
    *
    * @return SignInCounts
    */
    public function setWithSignIn($val)
    {
        $this->_propDict["withSignIn"] = $val;
        return $this;
    }
}
