<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsOverview File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* UserExperienceAnalyticsOverview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class UserExperienceAnalyticsOverview extends Entity
{

     /** 
     * Gets the insights
    * The user experience analytics insights.
     *
     * @return array The insights
     */
    public function getInsights()
    {
        if (array_key_exists("insights", $this->_propDict)) {
           return $this->_propDict["insights"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the insights
    * The user experience analytics insights.
    *
    * @param UserExperienceAnalyticsInsight $val The insights
    *
    * @return UserExperienceAnalyticsOverview
    */
    public function setInsights($val)
    {
		$this->_propDict["insights"] = $val;
        return $this;
    }
    
}