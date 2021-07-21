<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppManagementConfiguration File
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
* AppManagementConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppManagementConfiguration extends Entity
{

    /**
    * Gets the passwordCredentials
    *
    * @return PasswordCredentialConfiguration|null The passwordCredentials
    */
    public function getPasswordCredentials()
    {
        if (array_key_exists("passwordCredentials", $this->_propDict)) {
            if (is_a($this->_propDict["passwordCredentials"], "\Beta\Microsoft\Graph\Model\PasswordCredentialConfiguration") || is_null($this->_propDict["passwordCredentials"])) {
                return $this->_propDict["passwordCredentials"];
            } else {
                $this->_propDict["passwordCredentials"] = new PasswordCredentialConfiguration($this->_propDict["passwordCredentials"]);
                return $this->_propDict["passwordCredentials"];
            }
        }
        return null;
    }

    /**
    * Sets the passwordCredentials
    *
    * @param PasswordCredentialConfiguration $val The value to assign to the passwordCredentials
    *
    * @return AppManagementConfiguration The AppManagementConfiguration
    */
    public function setPasswordCredentials($val)
    {
        $this->_propDict["passwordCredentials"] = $val;
         return $this;
    }
}
