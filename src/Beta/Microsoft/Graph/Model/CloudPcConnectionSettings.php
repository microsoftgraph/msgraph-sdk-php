<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CloudPcConnectionSettings File
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
* CloudPcConnectionSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CloudPcConnectionSettings extends Entity
{
    /**
    * Gets the enableSingleSignOn
    *
    * @return bool|null The enableSingleSignOn
    */
    public function getEnableSingleSignOn()
    {
        if (array_key_exists("enableSingleSignOn", $this->_propDict)) {
            return $this->_propDict["enableSingleSignOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableSingleSignOn
    *
    * @param bool $val The value of the enableSingleSignOn
    *
    * @return CloudPcConnectionSettings
    */
    public function setEnableSingleSignOn($val)
    {
        $this->_propDict["enableSingleSignOn"] = $val;
        return $this;
    }
}
