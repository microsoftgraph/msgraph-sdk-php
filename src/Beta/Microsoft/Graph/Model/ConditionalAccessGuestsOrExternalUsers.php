<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessGuestsOrExternalUsers File
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
* ConditionalAccessGuestsOrExternalUsers class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessGuestsOrExternalUsers extends Entity
{

    /**
    * Gets the externalTenants
    * The tenant ids of the selected types of external users. It could be either all b2b tenant, or a collection of tenant ids. External tenants can be specified only when guestOrExternalUserTypes is not null or an empty string.
    *
    * @return ConditionalAccessExternalTenants|null The externalTenants
    */
    public function getExternalTenants()
    {
        if (array_key_exists("externalTenants", $this->_propDict)) {
            if (is_a($this->_propDict["externalTenants"], "\Beta\Microsoft\Graph\Model\ConditionalAccessExternalTenants") || is_null($this->_propDict["externalTenants"])) {
                return $this->_propDict["externalTenants"];
            } else {
                $this->_propDict["externalTenants"] = new ConditionalAccessExternalTenants($this->_propDict["externalTenants"]);
                return $this->_propDict["externalTenants"];
            }
        }
        return null;
    }

    /**
    * Sets the externalTenants
    * The tenant ids of the selected types of external users. It could be either all b2b tenant, or a collection of tenant ids. External tenants can be specified only when guestOrExternalUserTypes is not null or an empty string.
    *
    * @param ConditionalAccessExternalTenants $val The value to assign to the externalTenants
    *
    * @return ConditionalAccessGuestsOrExternalUsers The ConditionalAccessGuestsOrExternalUsers
    */
    public function setExternalTenants($val)
    {
        $this->_propDict["externalTenants"] = $val;
         return $this;
    }

    /**
    * Gets the guestOrExternalUserTypes
    * Represents internal guests or external user types. This is a multi-valued property. Supported values are: b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser, internalGuest, OtherExternalUser, serviceProvider and unknownFutureValue.
    *
    * @return ConditionalAccessGuestOrExternalUserTypes|null The guestOrExternalUserTypes
    */
    public function getGuestOrExternalUserTypes()
    {
        if (array_key_exists("guestOrExternalUserTypes", $this->_propDict)) {
            if (is_a($this->_propDict["guestOrExternalUserTypes"], "\Beta\Microsoft\Graph\Model\ConditionalAccessGuestOrExternalUserTypes") || is_null($this->_propDict["guestOrExternalUserTypes"])) {
                return $this->_propDict["guestOrExternalUserTypes"];
            } else {
                $this->_propDict["guestOrExternalUserTypes"] = new ConditionalAccessGuestOrExternalUserTypes($this->_propDict["guestOrExternalUserTypes"]);
                return $this->_propDict["guestOrExternalUserTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the guestOrExternalUserTypes
    * Represents internal guests or external user types. This is a multi-valued property. Supported values are: b2bCollaborationGuest, b2bCollaborationMember, b2bDirectConnectUser, internalGuest, OtherExternalUser, serviceProvider and unknownFutureValue.
    *
    * @param ConditionalAccessGuestOrExternalUserTypes $val The value to assign to the guestOrExternalUserTypes
    *
    * @return ConditionalAccessGuestsOrExternalUsers The ConditionalAccessGuestsOrExternalUsers
    */
    public function setGuestOrExternalUserTypes($val)
    {
        $this->_propDict["guestOrExternalUserTypes"] = $val;
         return $this;
    }
}
