<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsUser File
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
* AwsUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsUser extends AwsIdentity
{

     /**
     * Gets the assumableRoles
     *
     * @return array|null The assumableRoles
     */
    public function getAssumableRoles()
    {
        if (array_key_exists("assumableRoles", $this->_propDict)) {
           return $this->_propDict["assumableRoles"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assumableRoles
    *
    * @param AwsRole[] $val The assumableRoles
    *
    * @return AwsUser
    */
    public function setAssumableRoles($val)
    {
        $this->_propDict["assumableRoles"] = $val;
        return $this;
    }

}
