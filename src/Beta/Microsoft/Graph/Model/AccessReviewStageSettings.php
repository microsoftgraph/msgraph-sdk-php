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
namespace Beta\Microsoft\Graph\Model;
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
    *
    * @return AccessReviewReviewerScope|null The fallbackReviewers
    */
    public function getFallbackReviewers()
    {
        if (array_key_exists("fallbackReviewers", $this->_propDict)) {
            if (is_a($this->_propDict["fallbackReviewers"], "\Beta\Microsoft\Graph\Model\AccessReviewReviewerScope") || is_null($this->_propDict["fallbackReviewers"])) {
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
            if (is_a($this->_propDict["recommendationInsightSettings"], "\Beta\Microsoft\Graph\Model\AccessReviewRecommendationInsightSetting") || is_null($this->_propDict["recommendationInsightSettings"])) {
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
    * Gets the recommendationLookBackDuration
    *
    * @return \DateInterval|null The recommendationLookBackDuration
    */
    public function getRecommendationLookBackDuration()
    {
        if (array_key_exists("recommendationLookBackDuration", $this->_propDict)) {
            if (is_a($this->_propDict["recommendationLookBackDuration"], "\DateInterval") || is_null($this->_propDict["recommendationLookBackDuration"])) {
                return $this->_propDict["recommendationLookBackDuration"];
            } else {
                $this->_propDict["recommendationLookBackDuration"] = new \DateInterval($this->_propDict["recommendationLookBackDuration"]);
                return $this->_propDict["recommendationLookBackDuration"];
            }
        }
        return null;
    }

    /**
    * Sets the recommendationLookBackDuration
    *
    * @param \DateInterval $val The value to assign to the recommendationLookBackDuration
    *
    * @return AccessReviewStageSettings The AccessReviewStageSettings
    */
    public function setRecommendationLookBackDuration($val)
    {
        $this->_propDict["recommendationLookBackDuration"] = $val;
         return $this;
    }
    /**
    * Gets the recommendationsEnabled
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
    *
    * @return AccessReviewReviewerScope|null The reviewers
    */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
            if (is_a($this->_propDict["reviewers"], "\Beta\Microsoft\Graph\Model\AccessReviewReviewerScope") || is_null($this->_propDict["reviewers"])) {
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
