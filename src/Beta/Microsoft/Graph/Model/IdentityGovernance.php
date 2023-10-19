<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityGovernance File
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
* IdentityGovernance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityGovernance implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new IdentityGovernance
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the IdentityGovernance
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the lifecycleWorkflows
    *
    * @return \Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleWorkflowsContainer|null The lifecycleWorkflows
    */
    public function getLifecycleWorkflows()
    {
        if (array_key_exists("lifecycleWorkflows", $this->_propDict)) {
            if (is_a($this->_propDict["lifecycleWorkflows"], "\Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleWorkflowsContainer") || is_null($this->_propDict["lifecycleWorkflows"])) {
                return $this->_propDict["lifecycleWorkflows"];
            } else {
                $this->_propDict["lifecycleWorkflows"] = new \Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleWorkflowsContainer($this->_propDict["lifecycleWorkflows"]);
                return $this->_propDict["lifecycleWorkflows"];
            }
        }
        return null;
    }

    /**
    * Sets the lifecycleWorkflows
    *
    * @param \Beta\Microsoft\Graph\IdentityGovernanceNamespace\Model\LifecycleWorkflowsContainer $val The lifecycleWorkflows
    *
    * @return IdentityGovernance
    */
    public function setLifecycleWorkflows($val)
    {
        $this->_propDict["lifecycleWorkflows"] = $val;
        return $this;
    }

    /**
    * Gets the accessReviews
    *
    * @return AccessReviewSet|null The accessReviews
    */
    public function getAccessReviews()
    {
        if (array_key_exists("accessReviews", $this->_propDict)) {
            if (is_a($this->_propDict["accessReviews"], "\Beta\Microsoft\Graph\Model\AccessReviewSet") || is_null($this->_propDict["accessReviews"])) {
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
    * Gets the appConsent
    *
    * @return AppConsentApprovalRoute|null The appConsent
    */
    public function getAppConsent()
    {
        if (array_key_exists("appConsent", $this->_propDict)) {
            if (is_a($this->_propDict["appConsent"], "\Beta\Microsoft\Graph\Model\AppConsentApprovalRoute") || is_null($this->_propDict["appConsent"])) {
                return $this->_propDict["appConsent"];
            } else {
                $this->_propDict["appConsent"] = new AppConsentApprovalRoute($this->_propDict["appConsent"]);
                return $this->_propDict["appConsent"];
            }
        }
        return null;
    }

    /**
    * Sets the appConsent
    *
    * @param AppConsentApprovalRoute $val The appConsent
    *
    * @return IdentityGovernance
    */
    public function setAppConsent($val)
    {
        $this->_propDict["appConsent"] = $val;
        return $this;
    }

    /**
    * Gets the termsOfUse
    *
    * @return TermsOfUseContainer|null The termsOfUse
    */
    public function getTermsOfUse()
    {
        if (array_key_exists("termsOfUse", $this->_propDict)) {
            if (is_a($this->_propDict["termsOfUse"], "\Beta\Microsoft\Graph\Model\TermsOfUseContainer") || is_null($this->_propDict["termsOfUse"])) {
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
    * @return EntitlementManagement|null The entitlementManagement
    */
    public function getEntitlementManagement()
    {
        if (array_key_exists("entitlementManagement", $this->_propDict)) {
            if (is_a($this->_propDict["entitlementManagement"], "\Beta\Microsoft\Graph\Model\EntitlementManagement") || is_null($this->_propDict["entitlementManagement"])) {
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

    /**
    * Gets the permissionsAnalytics
    *
    * @return PermissionsAnalyticsAggregation|null The permissionsAnalytics
    */
    public function getPermissionsAnalytics()
    {
        if (array_key_exists("permissionsAnalytics", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsAnalytics"], "\Beta\Microsoft\Graph\Model\PermissionsAnalyticsAggregation") || is_null($this->_propDict["permissionsAnalytics"])) {
                return $this->_propDict["permissionsAnalytics"];
            } else {
                $this->_propDict["permissionsAnalytics"] = new PermissionsAnalyticsAggregation($this->_propDict["permissionsAnalytics"]);
                return $this->_propDict["permissionsAnalytics"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsAnalytics
    *
    * @param PermissionsAnalyticsAggregation $val The permissionsAnalytics
    *
    * @return IdentityGovernance
    */
    public function setPermissionsAnalytics($val)
    {
        $this->_propDict["permissionsAnalytics"] = $val;
        return $this;
    }

    /**
    * Gets the permissionsManagement
    *
    * @return PermissionsManagement|null The permissionsManagement
    */
    public function getPermissionsManagement()
    {
        if (array_key_exists("permissionsManagement", $this->_propDict)) {
            if (is_a($this->_propDict["permissionsManagement"], "\Beta\Microsoft\Graph\Model\PermissionsManagement") || is_null($this->_propDict["permissionsManagement"])) {
                return $this->_propDict["permissionsManagement"];
            } else {
                $this->_propDict["permissionsManagement"] = new PermissionsManagement($this->_propDict["permissionsManagement"]);
                return $this->_propDict["permissionsManagement"];
            }
        }
        return null;
    }

    /**
    * Sets the permissionsManagement
    *
    * @param PermissionsManagement $val The permissionsManagement
    *
    * @return IdentityGovernance
    */
    public function setPermissionsManagement($val)
    {
        $this->_propDict["permissionsManagement"] = $val;
        return $this;
    }

    /**
    * Gets the privilegedAccess
    *
    * @return PrivilegedAccessRoot|null The privilegedAccess
    */
    public function getPrivilegedAccess()
    {
        if (array_key_exists("privilegedAccess", $this->_propDict)) {
            if (is_a($this->_propDict["privilegedAccess"], "\Beta\Microsoft\Graph\Model\PrivilegedAccessRoot") || is_null($this->_propDict["privilegedAccess"])) {
                return $this->_propDict["privilegedAccess"];
            } else {
                $this->_propDict["privilegedAccess"] = new PrivilegedAccessRoot($this->_propDict["privilegedAccess"]);
                return $this->_propDict["privilegedAccess"];
            }
        }
        return null;
    }

    /**
    * Sets the privilegedAccess
    *
    * @param PrivilegedAccessRoot $val The privilegedAccess
    *
    * @return IdentityGovernance
    */
    public function setPrivilegedAccess($val)
    {
        $this->_propDict["privilegedAccess"] = $val;
        return $this;
    }

    /**
    * Gets the roleManagementAlerts
    *
    * @return RoleManagementAlert|null The roleManagementAlerts
    */
    public function getRoleManagementAlerts()
    {
        if (array_key_exists("roleManagementAlerts", $this->_propDict)) {
            if (is_a($this->_propDict["roleManagementAlerts"], "\Beta\Microsoft\Graph\Model\RoleManagementAlert") || is_null($this->_propDict["roleManagementAlerts"])) {
                return $this->_propDict["roleManagementAlerts"];
            } else {
                $this->_propDict["roleManagementAlerts"] = new RoleManagementAlert($this->_propDict["roleManagementAlerts"]);
                return $this->_propDict["roleManagementAlerts"];
            }
        }
        return null;
    }

    /**
    * Sets the roleManagementAlerts
    *
    * @param RoleManagementAlert $val The roleManagementAlerts
    *
    * @return IdentityGovernance
    */
    public function setRoleManagementAlerts($val)
    {
        $this->_propDict["roleManagementAlerts"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return IdentityGovernance
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
