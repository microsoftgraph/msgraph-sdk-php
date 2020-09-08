<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityGovernance File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* IdentityGovernance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityGovernance extends Entity
{
    /**
    * Gets the accessReviews
    *
    * @return AccessReviewSet The accessReviews
    */
    public function getAccessReviews()
    {
        if (array_key_exists("accessReviews", $this->_propDict)) {
            if (is_a($this->_propDict["accessReviews"], "Beta\Microsoft\Graph\Model\AccessReviewSet")) {
                return $this->_propDict["accessReviews"];
            } else {
                $this->_propDict["accessReviews"] = new AccessReviewSet($this->_propDict["accessReviews"]);
                return $this->_propDict["accessReviews"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessReviews
    *
    * @param AccessReviewSet $val The accessReviews
    *
    * @return IdentityGovernance
    */
    public function setAccessReviews($val)
    {
        $this->_propDict["accessReviews"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsOfUse
    *
    * @return TermsOfUseContainer The termsOfUse
    */
    public function getTermsOfUse()
    {
        if (array_key_exists("termsOfUse", $this->_propDict)) {
            if (is_a($this->_propDict["termsOfUse"], "Beta\Microsoft\Graph\Model\TermsOfUseContainer")) {
                return $this->_propDict["termsOfUse"];
            } else {
                $this->_propDict["termsOfUse"] = new TermsOfUseContainer($this->_propDict["termsOfUse"]);
                return $this->_propDict["termsOfUse"];
            }
        }
        return null;
    }
    
    /**
    * Sets the termsOfUse
    *
    * @param TermsOfUseContainer $val The termsOfUse
    *
    * @return IdentityGovernance
    */
    public function setTermsOfUse($val)
    {
        $this->_propDict["termsOfUse"] = $val;
        return $this;
    }
    
    /**
    * Gets the entitlementManagement
    *
    * @return EntitlementManagement The entitlementManagement
    */
    public function getEntitlementManagement()
    {
        if (array_key_exists("entitlementManagement", $this->_propDict)) {
            if (is_a($this->_propDict["entitlementManagement"], "Beta\Microsoft\Graph\Model\EntitlementManagement")) {
                return $this->_propDict["entitlementManagement"];
            } else {
                $this->_propDict["entitlementManagement"] = new EntitlementManagement($this->_propDict["entitlementManagement"]);
                return $this->_propDict["entitlementManagement"];
            }
        }
        return null;
    }
    
    /**
    * Sets the entitlementManagement
    *
    * @param EntitlementManagement $val The entitlementManagement
    *
    * @return IdentityGovernance
    */
    public function setEntitlementManagement($val)
    {
        $this->_propDict["entitlementManagement"] = $val;
        return $this;
    }
    
}