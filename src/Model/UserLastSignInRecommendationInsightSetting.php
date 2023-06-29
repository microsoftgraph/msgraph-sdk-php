<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserLastSignInRecommendationInsightSetting File
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
* UserLastSignInRecommendationInsightSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserLastSignInRecommendationInsightSetting extends AccessReviewRecommendationInsightSetting
{

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
    * @return UserLastSignInRecommendationInsightSetting The UserLastSignInRecommendationInsightSetting
    */
    public function setRecommendationLookBackDuration($val)
    {
        $this->_propDict["recommendationLookBackDuration"] = $val;
         return $this;
    }

    /**
    * Gets the signInScope
    *
    * @return UserSignInRecommendationScope|null The signInScope
    */
    public function getSignInScope()
    {
        if (array_key_exists("signInScope", $this->_propDict)) {
            if (is_a($this->_propDict["signInScope"], "\Microsoft\Graph\Model\UserSignInRecommendationScope") || is_null($this->_propDict["signInScope"])) {
                return $this->_propDict["signInScope"];
            } else {
                $this->_propDict["signInScope"] = new UserSignInRecommendationScope($this->_propDict["signInScope"]);
                return $this->_propDict["signInScope"];
            }
        }
        return null;
    }

    /**
    * Sets the signInScope
    *
    * @param UserSignInRecommendationScope $val The value to assign to the signInScope
    *
    * @return UserLastSignInRecommendationInsightSetting The UserLastSignInRecommendationInsightSetting
    */
    public function setSignInScope($val)
    {
        $this->_propDict["signInScope"] = $val;
         return $this;
    }
}
