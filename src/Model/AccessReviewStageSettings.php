<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewStageSettings File
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
* AccessReviewStageSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewStageSettings extends Entity
{
    /**
    * Gets the decisionsThatWillMoveToNextStage
    * Indicate which decisions will go to the next stage. Can be a subset of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
    *
    * @return string|null The decisionsThatWillMoveToNextStage
    */
    public function getDecisionsThatWillMoveToNextStage()
    {
        if (array_key_exists("decisionsThatWillMoveToNextStage", $this->_propDict)) {
            return $this->_propDict["decisionsThatWillMoveToNextStage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decisionsThatWillMoveToNextStage
    * Indicate which decisions will go to the next stage. Can be a subset of Approve, Deny, Recommendation, or NotReviewed. If not provided, all decisions will go to the next stage. Optional.
    *
    * @param string $val The value of the decisionsThatWillMoveToNextStage
    *
    * @return AccessReviewStageSettings
    */
    public function setDecisionsThatWillMoveToNextStage($val)
    {
        $this->_propDict["decisionsThatWillMoveToNextStage"] = $val;
        return $this;
    }
    /**
    * Gets the dependsOn
    * Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, don't specify dependsOn. Required if stageId isn't 1.
    *
    * @return string|null The dependsOn
    */
    public function getDependsOn()
    {
        if (array_key_exists("dependsOn", $this->_propDict)) {
            return $this->_propDict["dependsOn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the dependsOn
    * Defines the sequential or parallel order of the stages and depends on the stageId. Only sequential stages are currently supported. For example, if stageId is 2, then dependsOn must be 1. If stageId is 1, don't specify dependsOn. Required if stageId isn't 1.
    *
    * @param string $val The value of the dependsOn
    *
    * @return AccessReviewStageSettings
    */
    public function setDependsOn($val)
    {
        $this->_propDict["dependsOn"] = $val;
        return $this;
    }
    /**
    * Gets the durationInDays
    * The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Can't exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays can't exceed 7.
    *
    * @return int|null The durationInDays
    */
    public function getDurationInDays()
    {
        if (array_key_exists("durationInDays", $this->_propDict)) {
            return $this->_propDict["durationInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the durationInDays
    * The duration of the stage. Required.  NOTE: The cumulative value of this property across all stages  1. Will override the instanceDurationInDays setting on the accessReviewScheduleDefinition object. 2. Can't exceed the length of one recurrence. That is, if the review recurs weekly, the cumulative durationInDays can't exceed 7.
    *
    * @param int $val The value of the durationInDays
    *
    * @return AccessReviewStageSettings
    */
    public function setDurationInDays($val)
    {
        $this->_propDict["durationInDays"] = $val;
        return $this;
    }

    /**
    * Gets the fallbackReviewers
    * If provided, the fallback reviewers are asked to complete a review if the primary reviewers don't exist. For example, if managers are selected as reviewers and a principal under review doesn't have a manager in Microsoft Entra ID, the fallback reviewers are asked to review that principal. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition object.
    *
    * @return AccessReviewReviewerScope|null The fallbackReviewers
    */
    public function getFallbackReviewers()
    {
        if (array_key_exists("fallbackReviewers", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackReviewers"], "\Microsoft\Graph\Model\AccessReviewReviewerScope") || is_null($this->_propDict["fallbackReviewers"])) {
                return $this->_propDict["fallbackReviewers"];
            } else {
                $this->_propDict["fallbackReviewers"] = new AccessReviewReviewerScope($this->_propDict["fallbackReviewers"]);
                return $this->_propDict["fallbackReviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the fallbackReviewers
    * If provided, the fallback reviewers are asked to complete a review if the primary reviewers don't exist. For example, if managers are selected as reviewers and a principal under review doesn't have a manager in Microsoft Entra ID, the fallback reviewers are asked to review that principal. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition object.
    *
    * @param AccessReviewReviewerScope $val The value to assign to the fallbackReviewers
    *
    * @return AccessReviewStageSettings The AccessReviewStageSettings
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
         return $this;
    }

    /**
    * Gets the recommendationInsightSettings
    *
    * @return AccessReviewRecommendationInsightSetting|null The recommendationInsightSettings
    */
    public function getRecommendationInsightSettings()
    {
        if (array_key_exists("recommendationInsightSettings", $this->_propDict)) {
            if (is_a($this->_propDict["recommendationInsightSettings"], "\Microsoft\Graph\Model\AccessReviewRecommendationInsightSetting") || is_null($this->_propDict["recommendationInsightSettings"])) {
                return $this->_propDict["recommendationInsightSettings"];
            } else {
                $this->_propDict["recommendationInsightSettings"] = new AccessReviewRecommendationInsightSetting($this->_propDict["recommendationInsightSettings"]);
                return $this->_propDict["recommendationInsightSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendationInsightSettings
    *
    * @param AccessReviewRecommendationInsightSetting $val The value to assign to the recommendationInsightSettings
    *
    * @return AccessReviewStageSettings The AccessReviewStageSettings
    */
    public function setRecommendationInsightSettings($val)
    {
        $this->_propDict["recommendationInsightSettings"] = $val;
         return $this;
    }
    /**
    * Gets the recommendationsEnabled
    * Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property overrides override the corresponding setting on the accessReviewScheduleDefinition object.
    *
    * @return bool|null The recommendationsEnabled
    */
    public function getRecommendationsEnabled()
    {
        if (array_key_exists("recommendationsEnabled", $this->_propDict)) {
            return $this->_propDict["recommendationsEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the recommendationsEnabled
    * Indicates whether showing recommendations to reviewers is enabled. Required. NOTE: The value of this property overrides override the corresponding setting on the accessReviewScheduleDefinition object.
    *
    * @param bool $val The value of the recommendationsEnabled
    *
    * @return AccessReviewStageSettings
    */
    public function setRecommendationsEnabled($val)
    {
        $this->_propDict["recommendationsEnabled"] = $val;
        return $this;
    }

    /**
    * Gets the reviewers
    * Defines who the reviewers are. If none is specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition.
    *
    * @return AccessReviewReviewerScope|null The reviewers
    */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
            if (is_a($this->_propDict["reviewers"], "\Microsoft\Graph\Model\AccessReviewReviewerScope") || is_null($this->_propDict["reviewers"])) {
                return $this->_propDict["reviewers"];
            } else {
                $this->_propDict["reviewers"] = new AccessReviewReviewerScope($this->_propDict["reviewers"]);
                return $this->_propDict["reviewers"];
            }
        }
        return null;
    }

    /**
    * Sets the reviewers
    * Defines who the reviewers are. If none is specified, the review is a self-review (users review their own access).  For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property overrides the corresponding setting on the accessReviewScheduleDefinition.
    *
    * @param AccessReviewReviewerScope $val The value to assign to the reviewers
    *
    * @return AccessReviewStageSettings The AccessReviewStageSettings
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
         return $this;
    }
    /**
    * Gets the stageId
    * Unique identifier of the accessReviewStageSettings object. The stageId is used by the dependsOn property to indicate the order of the stages. Required.
    *
    * @return string|null The stageId
    */
    public function getStageId()
    {
        if (array_key_exists("stageId", $this->_propDict)) {
            return $this->_propDict["stageId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stageId
    * Unique identifier of the accessReviewStageSettings object. The stageId is used by the dependsOn property to indicate the order of the stages. Required.
    *
    * @param string $val The value of the stageId
    *
    * @return AccessReviewStageSettings
    */
    public function setStageId($val)
    {
        $this->_propDict["stageId"] = $val;
        return $this;
    }
}
