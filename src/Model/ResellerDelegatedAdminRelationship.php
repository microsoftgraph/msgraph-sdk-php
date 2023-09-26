<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResellerDelegatedAdminRelationship File
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
* ResellerDelegatedAdminRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResellerDelegatedAdminRelationship extends DelegatedAdminRelationship
{
    /**
    * Gets the indirectProviderTenantId
    * The tenant ID of the indirect provider partner who created the relationship for the indirect reseller partner.
    *
    * @return string|null The indirectProviderTenantId
    */
    public function getIndirectProviderTenantId()
    {
        if (array_key_exists("indirectProviderTenantId", $this->_propDict)) {
            return $this->_propDict["indirectProviderTenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the indirectProviderTenantId
    * The tenant ID of the indirect provider partner who created the relationship for the indirect reseller partner.
    *
    * @param string $val The indirectProviderTenantId
    *
    * @return ResellerDelegatedAdminRelationship
    */
    public function setIndirectProviderTenantId($val)
    {
        $this->_propDict["indirectProviderTenantId"] = $val;
        return $this;
    }

    /**
    * Gets the isPartnerConsentPending
    * Indicates the indirect reseller partner consent status. true indicates that the partner has yet to review the relationship; false indicates that the partner has already provided consent by approving or rejecting the relationship.
    *
    * @return bool|null The isPartnerConsentPending
    */
    public function getIsPartnerConsentPending()
    {
        if (array_key_exists("isPartnerConsentPending", $this->_propDict)) {
            return $this->_propDict["isPartnerConsentPending"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPartnerConsentPending
    * Indicates the indirect reseller partner consent status. true indicates that the partner has yet to review the relationship; false indicates that the partner has already provided consent by approving or rejecting the relationship.
    *
    * @param bool $val The isPartnerConsentPending
    *
    * @return ResellerDelegatedAdminRelationship
    */
    public function setIsPartnerConsentPending($val)
    {
        $this->_propDict["isPartnerConsentPending"] = boolval($val);
        return $this;
    }

}
