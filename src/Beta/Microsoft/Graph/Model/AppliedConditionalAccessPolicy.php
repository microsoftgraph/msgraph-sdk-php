<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppliedConditionalAccessPolicy File
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
* AppliedConditionalAccessPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppliedConditionalAccessPolicy extends Entity
{

    /**
    * Gets the conditionsNotSatisfied
    * Refers to the conditional access policy conditions that are not satisfied. Possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client.
    *
    * @return ConditionalAccessConditions|null The conditionsNotSatisfied
    */
    public function getConditionsNotSatisfied()
    {
        if (array_key_exists("conditionsNotSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["conditionsNotSatisfied"], "\Beta\Microsoft\Graph\Model\ConditionalAccessConditions") || is_null($this->_propDict["conditionsNotSatisfied"])) {
                return $this->_propDict["conditionsNotSatisfied"];
            } else {
                $this->_propDict["conditionsNotSatisfied"] = new ConditionalAccessConditions($this->_propDict["conditionsNotSatisfied"]);
                return $this->_propDict["conditionsNotSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionsNotSatisfied
    * Refers to the conditional access policy conditions that are not satisfied. Possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client.
    *
    * @param ConditionalAccessConditions $val The value to assign to the conditionsNotSatisfied
    *
    * @return AppliedConditionalAccessPolicy The AppliedConditionalAccessPolicy
    */
    public function setConditionsNotSatisfied($val)
    {
        $this->_propDict["conditionsNotSatisfied"] = $val;
         return $this;
    }

    /**
    * Gets the conditionsSatisfied
    * Refers to the conditional access policy conditions that are satisfied. Possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client.
    *
    * @return ConditionalAccessConditions|null The conditionsSatisfied
    */
    public function getConditionsSatisfied()
    {
        if (array_key_exists("conditionsSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["conditionsSatisfied"], "\Beta\Microsoft\Graph\Model\ConditionalAccessConditions") || is_null($this->_propDict["conditionsSatisfied"])) {
                return $this->_propDict["conditionsSatisfied"];
            } else {
                $this->_propDict["conditionsSatisfied"] = new ConditionalAccessConditions($this->_propDict["conditionsSatisfied"]);
                return $this->_propDict["conditionsSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the conditionsSatisfied
    * Refers to the conditional access policy conditions that are satisfied. Possible values are: none, application, users, devicePlatform, location, clientType, signInRisk, userRisk, time, deviceState, client.
    *
    * @param ConditionalAccessConditions $val The value to assign to the conditionsSatisfied
    *
    * @return AppliedConditionalAccessPolicy The AppliedConditionalAccessPolicy
    */
    public function setConditionsSatisfied($val)
    {
        $this->_propDict["conditionsSatisfied"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * Refers to the Name of the conditional access policy (example: 'Require MFA for Salesforce').
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * Refers to the Name of the conditional access policy (example: 'Require MFA for Salesforce').
    *
    * @param string $val The value of the displayName
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the enforcedGrantControls
    * Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
    *
    * @return string|null The enforcedGrantControls
    */
    public function getEnforcedGrantControls()
    {
        if (array_key_exists("enforcedGrantControls", $this->_propDict)) {
            return $this->_propDict["enforcedGrantControls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforcedGrantControls
    * Refers to the grant controls enforced by the conditional access policy (example: 'Require multi-factor authentication').
    *
    * @param string $val The value of the enforcedGrantControls
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setEnforcedGrantControls($val)
    {
        $this->_propDict["enforcedGrantControls"] = $val;
        return $this;
    }
    /**
    * Gets the enforcedSessionControls
    * Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
    *
    * @return string|null The enforcedSessionControls
    */
    public function getEnforcedSessionControls()
    {
        if (array_key_exists("enforcedSessionControls", $this->_propDict)) {
            return $this->_propDict["enforcedSessionControls"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforcedSessionControls
    * Refers to the session controls enforced by the conditional access policy (example: 'Require app enforced controls').
    *
    * @param string $val The value of the enforcedSessionControls
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setEnforcedSessionControls($val)
    {
        $this->_propDict["enforcedSessionControls"] = $val;
        return $this;
    }

    /**
    * Gets the excludeRulesSatisfied
    *
    * @return ConditionalAccessRuleSatisfied|null The excludeRulesSatisfied
    */
    public function getExcludeRulesSatisfied()
    {
        if (array_key_exists("excludeRulesSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["excludeRulesSatisfied"], "\Beta\Microsoft\Graph\Model\ConditionalAccessRuleSatisfied") || is_null($this->_propDict["excludeRulesSatisfied"])) {
                return $this->_propDict["excludeRulesSatisfied"];
            } else {
                $this->_propDict["excludeRulesSatisfied"] = new ConditionalAccessRuleSatisfied($this->_propDict["excludeRulesSatisfied"]);
                return $this->_propDict["excludeRulesSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the excludeRulesSatisfied
    *
    * @param ConditionalAccessRuleSatisfied $val The value to assign to the excludeRulesSatisfied
    *
    * @return AppliedConditionalAccessPolicy The AppliedConditionalAccessPolicy
    */
    public function setExcludeRulesSatisfied($val)
    {
        $this->_propDict["excludeRulesSatisfied"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * An identifier of the conditional access policy.
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * An identifier of the conditional access policy.
    *
    * @param string $val The value of the id
    *
    * @return AppliedConditionalAccessPolicy
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the includeRulesSatisfied
    *
    * @return ConditionalAccessRuleSatisfied|null The includeRulesSatisfied
    */
    public function getIncludeRulesSatisfied()
    {
        if (array_key_exists("includeRulesSatisfied", $this->_propDict)) {
            if (is_a($this->_propDict["includeRulesSatisfied"], "\Beta\Microsoft\Graph\Model\ConditionalAccessRuleSatisfied") || is_null($this->_propDict["includeRulesSatisfied"])) {
                return $this->_propDict["includeRulesSatisfied"];
            } else {
                $this->_propDict["includeRulesSatisfied"] = new ConditionalAccessRuleSatisfied($this->_propDict["includeRulesSatisfied"]);
                return $this->_propDict["includeRulesSatisfied"];
            }
        }
        return null;
    }

    /**
    * Sets the includeRulesSatisfied
    *
    * @param ConditionalAccessRuleSatisfied $val The value to assign to the includeRulesSatisfied
    *
    * @return AppliedConditionalAccessPolicy The AppliedConditionalAccessPolicy
    */
    public function setIncludeRulesSatisfied($val)
    {
        $this->_propDict["includeRulesSatisfied"] = $val;
         return $this;
    }

    /**
    * Gets the result
    * Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue.
    *
    * @return AppliedConditionalAccessPolicyResult|null The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "\Beta\Microsoft\Graph\Model\AppliedConditionalAccessPolicyResult") || is_null($this->_propDict["result"])) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new AppliedConditionalAccessPolicyResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }

    /**
    * Sets the result
    * Indicates the result of the CA policy that was triggered. Possible values are: success, failure, notApplied (Policy isn't applied because policy conditions were not met),notEnabled (This is due to the policy in disabled state), unknown, unknownFutureValue.
    *
    * @param AppliedConditionalAccessPolicyResult $val The value to assign to the result
    *
    * @return AppliedConditionalAccessPolicy The AppliedConditionalAccessPolicy
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
         return $this;
    }
}
