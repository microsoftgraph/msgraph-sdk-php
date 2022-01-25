<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantAccessPolicyConfigurationDefault File
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
* CrossTenantAccessPolicyConfigurationDefault class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantAccessPolicyConfigurationDefault extends CrossTenantAccessPolicyConfigurationBase
{
    /**
    * Gets the isServiceDefault
    *
    * @return bool|null The isServiceDefault
    */
    public function getIsServiceDefault()
    {
        if (array_key_exists("isServiceDefault", $this->_propDict)) {
            return $this->_propDict["isServiceDefault"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isServiceDefault
    *
    * @param bool $val The isServiceDefault
    *
    * @return CrossTenantAccessPolicyConfigurationDefault
    */
    public function setIsServiceDefault($val)
    {
        $this->_propDict["isServiceDefault"] = boolval($val);
        return $this;
    }

}
