<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationalMessageTenantConsent File
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
* OrganizationalMessageTenantConsent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationalMessageTenantConsent extends Entity
{
    /**
    * Gets the firstPartyMessageAllowed
    * Indicates if first party message is allowed
    *
    * @return bool|null The firstPartyMessageAllowed
    */
    public function getFirstPartyMessageAllowed()
    {
        if (array_key_exists("firstPartyMessageAllowed", $this->_propDict)) {
            return $this->_propDict["firstPartyMessageAllowed"];
        } else {
            return null;
        }
    }

    /**
    * Sets the firstPartyMessageAllowed
    * Indicates if first party message is allowed
    *
    * @param bool $val The value of the firstPartyMessageAllowed
    *
    * @return OrganizationalMessageTenantConsent
    */
    public function setFirstPartyMessageAllowed($val)
    {
        $this->_propDict["firstPartyMessageAllowed"] = $val;
        return $this;
    }
}
