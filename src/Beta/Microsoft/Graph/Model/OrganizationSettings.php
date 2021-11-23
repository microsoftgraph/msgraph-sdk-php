<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OrganizationSettings File
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
* OrganizationSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OrganizationSettings extends Entity
{
    /**
    * Gets the itemInsights
    * Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. Get itemInsightsSettings through this navigation property.
    *
    * @return InsightsSettings|null The itemInsights
    */
    public function getItemInsights()
    {
        if (array_key_exists("itemInsights", $this->_propDict)) {
            if (is_a($this->_propDict["itemInsights"], "\Beta\Microsoft\Graph\Model\InsightsSettings") || is_null($this->_propDict["itemInsights"])) {
                return $this->_propDict["itemInsights"];
            } else {
                $this->_propDict["itemInsights"] = new InsightsSettings($this->_propDict["itemInsights"]);
                return $this->_propDict["itemInsights"];
            }
        }
        return null;
    }

    /**
    * Sets the itemInsights
    * Contains the properties that are configured by an administrator for the visibility of Microsoft Graph-derived insights, between a user and other items in Microsoft 365, such as documents or sites. Get itemInsightsSettings through this navigation property.
    *
    * @param InsightsSettings $val The itemInsights
    *
    * @return OrganizationSettings
    */
    public function setItemInsights($val)
    {
        $this->_propDict["itemInsights"] = $val;
        return $this;
    }

    /**
    * Gets the peopleInsights
    *
    * @return InsightsSettings|null The peopleInsights
    */
    public function getPeopleInsights()
    {
        if (array_key_exists("peopleInsights", $this->_propDict)) {
            if (is_a($this->_propDict["peopleInsights"], "\Beta\Microsoft\Graph\Model\InsightsSettings") || is_null($this->_propDict["peopleInsights"])) {
                return $this->_propDict["peopleInsights"];
            } else {
                $this->_propDict["peopleInsights"] = new InsightsSettings($this->_propDict["peopleInsights"]);
                return $this->_propDict["peopleInsights"];
            }
        }
        return null;
    }

    /**
    * Sets the peopleInsights
    *
    * @param InsightsSettings $val The peopleInsights
    *
    * @return OrganizationSettings
    */
    public function setPeopleInsights($val)
    {
        $this->_propDict["peopleInsights"] = $val;
        return $this;
    }


     /**
     * Gets the profileCardProperties
    * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
     *
     * @return array|null The profileCardProperties
     */
    public function getProfileCardProperties()
    {
        if (array_key_exists("profileCardProperties", $this->_propDict)) {
           return $this->_propDict["profileCardProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileCardProperties
    * Contains a collection of the properties an administrator has defined as visible on the Microsoft 365 profile card. Get organization settings returns the properties configured for profile cards for the organization.
    *
    * @param ProfileCardProperty[] $val The profileCardProperties
    *
    * @return OrganizationSettings
    */
    public function setProfileCardProperties($val)
    {
        $this->_propDict["profileCardProperties"] = $val;
        return $this;
    }

}
