<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CrossTenantUserSyncInbound File
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
* CrossTenantUserSyncInbound class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CrossTenantUserSyncInbound extends Entity
{
    /**
    * Gets the isSyncAllowed
    *
    * @return bool|null The isSyncAllowed
    */
    public function getIsSyncAllowed()
    {
        if (array_key_exists("isSyncAllowed", $this->_propDict)) {
            return $this->_propDict["isSyncAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isSyncAllowed
    *
    * @param bool $val The value of the isSyncAllowed
    *
    * @return CrossTenantUserSyncInbound
    */
    public function setIsSyncAllowed($val)
    {
        $this->_propDict["isSyncAllowed"] = $val;
        return $this;
    }
}
