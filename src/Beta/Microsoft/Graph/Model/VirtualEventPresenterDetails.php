<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VirtualEventPresenterDetails File
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
* VirtualEventPresenterDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VirtualEventPresenterDetails extends Entity
{

    /**
    * Gets the bio
    * Bio of the presenter.
    *
    * @return ItemBody|null The bio
    */
    public function getBio()
    {
        if (array_key_exists("bio", $this->_propDict)) {
            if (is_a($this->_propDict["bio"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["bio"])) {
                return $this->_propDict["bio"];
            } else {
                $this->_propDict["bio"] = new ItemBody($this->_propDict["bio"]);
                return $this->_propDict["bio"];
            }
        }
        return null;
    }

    /**
    * Sets the bio
    * Bio of the presenter.
    *
    * @param ItemBody $val The value to assign to the bio
    *
    * @return VirtualEventPresenterDetails The VirtualEventPresenterDetails
    */
    public function setBio($val)
    {
        $this->_propDict["bio"] = $val;
         return $this;
    }
    /**
    * Gets the company
    * The presenter's company name.
    *
    * @return string|null The company
    */
    public function getCompany()
    {
        if (array_key_exists("company", $this->_propDict)) {
            return $this->_propDict["company"];
        } else {
            return null;
        }
    }

    /**
    * Sets the company
    * The presenter's company name.
    *
    * @param string $val The value of the company
    *
    * @return VirtualEventPresenterDetails
    */
    public function setCompany($val)
    {
        $this->_propDict["company"] = $val;
        return $this;
    }
    /**
    * Gets the jobTitle
    * The presenter's job title.
    *
    * @return string|null The jobTitle
    */
    public function getJobTitle()
    {
        if (array_key_exists("jobTitle", $this->_propDict)) {
            return $this->_propDict["jobTitle"];
        } else {
            return null;
        }
    }

    /**
    * Sets the jobTitle
    * The presenter's job title.
    *
    * @param string $val The value of the jobTitle
    *
    * @return VirtualEventPresenterDetails
    */
    public function setJobTitle($val)
    {
        $this->_propDict["jobTitle"] = $val;
        return $this;
    }
    /**
    * Gets the linkedInProfileWebUrl
    * The presenter's LinkedIn profile URL.
    *
    * @return string|null The linkedInProfileWebUrl
    */
    public function getLinkedInProfileWebUrl()
    {
        if (array_key_exists("linkedInProfileWebUrl", $this->_propDict)) {
            return $this->_propDict["linkedInProfileWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the linkedInProfileWebUrl
    * The presenter's LinkedIn profile URL.
    *
    * @param string $val The value of the linkedInProfileWebUrl
    *
    * @return VirtualEventPresenterDetails
    */
    public function setLinkedInProfileWebUrl($val)
    {
        $this->_propDict["linkedInProfileWebUrl"] = $val;
        return $this;
    }
    /**
    * Gets the personalSiteWebUrl
    * The presenter's personal website URL.
    *
    * @return string|null The personalSiteWebUrl
    */
    public function getPersonalSiteWebUrl()
    {
        if (array_key_exists("personalSiteWebUrl", $this->_propDict)) {
            return $this->_propDict["personalSiteWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalSiteWebUrl
    * The presenter's personal website URL.
    *
    * @param string $val The value of the personalSiteWebUrl
    *
    * @return VirtualEventPresenterDetails
    */
    public function setPersonalSiteWebUrl($val)
    {
        $this->_propDict["personalSiteWebUrl"] = $val;
        return $this;
    }
    /**
    * Gets the twitterProfileWebUrl
    * The presenter's Twitter profile URL.
    *
    * @return string|null The twitterProfileWebUrl
    */
    public function getTwitterProfileWebUrl()
    {
        if (array_key_exists("twitterProfileWebUrl", $this->_propDict)) {
            return $this->_propDict["twitterProfileWebUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the twitterProfileWebUrl
    * The presenter's Twitter profile URL.
    *
    * @param string $val The value of the twitterProfileWebUrl
    *
    * @return VirtualEventPresenterDetails
    */
    public function setTwitterProfileWebUrl($val)
    {
        $this->_propDict["twitterProfileWebUrl"] = $val;
        return $this;
    }
}
