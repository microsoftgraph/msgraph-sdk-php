<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsSource File
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
* AwsSource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsSource extends AuthorizationSystemIdentitySource
{
    /**
    * Gets the accountId
    *
    * @return string|null The accountId
    */
    public function getAccountId()
    {
        if (array_key_exists("accountId", $this->_propDict)) {
            return $this->_propDict["accountId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the accountId
    *
    * @param string $val The value of the accountId
    *
    * @return AwsSource
    */
    public function setAccountId($val)
    {
        $this->_propDict["accountId"] = $val;
        return $this;
    }
}
