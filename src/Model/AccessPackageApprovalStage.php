<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageApprovalStage File
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
* AccessPackageApprovalStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageApprovalStage extends Entity
{

    /**
    * Gets the durationBeforeAutomaticDenial
    *
    * @return \DateInterval|null The durationBeforeAutomaticDenial
    */
    public function getDurationBeforeAutomaticDenial()
    {
        if (array_key_exists("durationBeforeAutomaticDenial", $this->_propDict)) {
            if (is_a($this->_propDict["durationBeforeAutomaticDenial"], "\DateInterval") || is_null($this->_propDict["durationBeforeAutomaticDenial"])) {
                return $this->_propDict["durationBeforeAutomaticDenial"];
            } else {
                $this->_propDict["durationBeforeAutomaticDenial"] = new \DateInterval($this->_propDict["durationBeforeAutomaticDenial"]);
                return $this->_propDict["durationBeforeAutomaticDenial"];
            }
        }
        return null;
    }

    /**
    * Sets the durationBeforeAutomaticDenial
    *
    * @param \DateInterval $val The value to assign to the durationBeforeAutomaticDenial
    *
    * @return AccessPackageApprovalStage The AccessPackageApprovalStage
    */
    public function setDurationBeforeAutomaticDenial($val)
    {
        $this->_propDict["durationBeforeAutomaticDenial"] = $val;
         return $this;
    }

    /**
    * Gets the durationBeforeEscalation
    *
    * @return \DateInterval|null The durationBeforeEscalation
    */
    public function getDurationBeforeEscalation()
    {
        if (array_key_exists("durationBeforeEscalation", $this->_propDict)) {
            if (is_a($this->_propDict["durationBeforeEscalation"], "\DateInterval") || is_null($this->_propDict["durationBeforeEscalation"])) {
                return $this->_propDict["durationBeforeEscalation"];
            } else {
                $this->_propDict["durationBeforeEscalation"] = new \DateInterval($this->_propDict["durationBeforeEscalation"]);
                return $this->_propDict["durationBeforeEscalation"];
            }
        }
        return null;
    }

    /**
    * Sets the durationBeforeEscalation
    *
    * @param \DateInterval $val The value to assign to the durationBeforeEscalation
    *
    * @return AccessPackageApprovalStage The AccessPackageApprovalStage
    */
    public function setDurationBeforeEscalation($val)
    {
        $this->_propDict["durationBeforeEscalation"] = $val;
         return $this;
    }

    /**
    * Gets the escalationApprovers
    *
    * @return SubjectSet|null The escalationApprovers
    */
    public function getEscalationApprovers()
    {
        if (array_key_exists("escalationApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["escalationApprovers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["escalationApprovers"])) {
                return $this->_propDict["escalationApprovers"];
            } else {
                $this->_propDict["escalationApprovers"] = new SubjectSet($this->_propDict["escalationApprovers"]);
                return $this->_propDict["escalationApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the escalationApprovers
    *
    * @param SubjectSet $val The value to assign to the escalationApprovers
    *
    * @return AccessPackageApprovalStage The AccessPackageApprovalStage
    */
    public function setEscalationApprovers($val)
    {
        $this->_propDict["escalationApprovers"] = $val;
         return $this;
    }

    /**
    * Gets the fallbackEscalationApprovers
    *
    * @return SubjectSet|null The fallbackEscalationApprovers
    */
    public function getFallbackEscalationApprovers()
    {
        if (array_key_exists("fallbackEscalationApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackEscalationApprovers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["fallbackEscalationApprovers"])) {
                return $this->_propDict["fallbackEscalationApprovers"];
            } else {
                $this->_propDict["fallbackEscalationApprovers"] = new SubjectSet($this->_propDict["fallbackEscalationApprovers"]);
                return $this->_propDict["fallbackEscalationApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the fallbackEscalationApprovers
    *
    * @param SubjectSet $val The value to assign to the fallbackEscalationApprovers
    *
    * @return AccessPackageApprovalStage The AccessPackageApprovalStage
    */
    public function setFallbackEscalationApprovers($val)
    {
        $this->_propDict["fallbackEscalationApprovers"] = $val;
         return $this;
    }

    /**
    * Gets the fallbackPrimaryApprovers
    *
    * @return SubjectSet|null The fallbackPrimaryApprovers
    */
    public function getFallbackPrimaryApprovers()
    {
        if (array_key_exists("fallbackPrimaryApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackPrimaryApprovers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["fallbackPrimaryApprovers"])) {
                return $this->_propDict["fallbackPrimaryApprovers"];
            } else {
                $this->_propDict["fallbackPrimaryApprovers"] = new SubjectSet($this->_propDict["fallbackPrimaryApprovers"]);
                return $this->_propDict["fallbackPrimaryApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the fallbackPrimaryApprovers
    *
    * @param SubjectSet $val The value to assign to the fallbackPrimaryApprovers
    *
    * @return AccessPackageApprovalStage The AccessPackageApprovalStage
    */
    public function setFallbackPrimaryApprovers($val)
    {
        $this->_propDict["fallbackPrimaryApprovers"] = $val;
         return $this;
    }
    /**
    * Gets the isApproverJustificationRequired
    *
    * @return bool|null The isApproverJustificationRequired
    */
    public function getIsApproverJustificationRequired()
    {
        if (array_key_exists("isApproverJustificationRequired", $this->_propDict)) {
            return $this->_propDict["isApproverJustificationRequired"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApproverJustificationRequired
    *
    * @param bool $val The value of the isApproverJustificationRequired
    *
    * @return AccessPackageApprovalStage
    */
    public function setIsApproverJustificationRequired($val)
    {
        $this->_propDict["isApproverJustificationRequired"] = $val;
        return $this;
    }
    /**
    * Gets the isEscalationEnabled
    *
    * @return bool|null The isEscalationEnabled
    */
    public function getIsEscalationEnabled()
    {
        if (array_key_exists("isEscalationEnabled", $this->_propDict)) {
            return $this->_propDict["isEscalationEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEscalationEnabled
    *
    * @param bool $val The value of the isEscalationEnabled
    *
    * @return AccessPackageApprovalStage
    */
    public function setIsEscalationEnabled($val)
    {
        $this->_propDict["isEscalationEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the primaryApprovers
    *
    * @return SubjectSet|null The primaryApprovers
    */
    public function getPrimaryApprovers()
    {
        if (array_key_exists("primaryApprovers", $this->_propDict)) {
            if (is_a($this->_propDict["primaryApprovers"], "\Microsoft\Graph\Model\SubjectSet") || is_null($this->_propDict["primaryApprovers"])) {
                return $this->_propDict["primaryApprovers"];
            } else {
                $this->_propDict["primaryApprovers"] = new SubjectSet($this->_propDict["primaryApprovers"]);
                return $this->_propDict["primaryApprovers"];
            }
        }
        return null;
    }

    /**
    * Sets the primaryApprovers
    *
    * @param SubjectSet $val The value to assign to the primaryApprovers
    *
    * @return AccessPackageApprovalStage The AccessPackageApprovalStage
    */
    public function setPrimaryApprovers($val)
    {
        $this->_propDict["primaryApprovers"] = $val;
         return $this;
    }
}
