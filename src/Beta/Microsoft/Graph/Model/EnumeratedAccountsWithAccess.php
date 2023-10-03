<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EnumeratedAccountsWithAccess File
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
* EnumeratedAccountsWithAccess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EnumeratedAccountsWithAccess extends AccountsWithAccess
{

    /**
    * Gets the accounts
    *
    * @return AuthorizationSystem|null The accounts
    */
    public function getAccounts()
    {
        if (array_key_exists("accounts", $this->_propDict)) {
            if (is_a($this->_propDict["accounts"], "\Beta\Microsoft\Graph\Model\AuthorizationSystem") || is_null($this->_propDict["accounts"])) {
                return $this->_propDict["accounts"];
            } else {
                $this->_propDict["accounts"] = new AuthorizationSystem($this->_propDict["accounts"]);
                return $this->_propDict["accounts"];
            }
        }
        return null;
    }

    /**
    * Sets the accounts
    *
    * @param AuthorizationSystem $val The value to assign to the accounts
    *
    * @return EnumeratedAccountsWithAccess The EnumeratedAccountsWithAccess
    */
    public function setAccounts($val)
    {
        $this->_propDict["accounts"] = $val;
         return $this;
    }
}
