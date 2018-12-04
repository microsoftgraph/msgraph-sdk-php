<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsTabConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* TeamsTabConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TeamsTabConfiguration extends Entity
{
    /**
    * Gets the entityId
    *
    * @return string The entityId
    */
    public function getEntityId()
    {
        if (array_key_exists("entityId", $this->_propDict)) {
            return $this->_propDict["entityId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the entityId
    *
    * @param string $val The value of the entityId
    *
    * @return TeamsTabConfiguration
    */
    public function setEntityId($val)
    {
        $this->_propDict["entityId"] = $val;
        return $this;
    }
    /**
    * Gets the contentUrl
    *
    * @return string The contentUrl
    */
    public function getContentUrl()
    {
        if (array_key_exists("contentUrl", $this->_propDict)) {
            return $this->_propDict["contentUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contentUrl
    *
    * @param string $val The value of the contentUrl
    *
    * @return TeamsTabConfiguration
    */
    public function setContentUrl($val)
    {
        $this->_propDict["contentUrl"] = $val;
        return $this;
    }
    /**
    * Gets the removeUrl
    *
    * @return string The removeUrl
    */
    public function getRemoveUrl()
    {
        if (array_key_exists("removeUrl", $this->_propDict)) {
            return $this->_propDict["removeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeUrl
    *
    * @param string $val The value of the removeUrl
    *
    * @return TeamsTabConfiguration
    */
    public function setRemoveUrl($val)
    {
        $this->_propDict["removeUrl"] = $val;
        return $this;
    }
    /**
    * Gets the websiteUrl
    *
    * @return string The websiteUrl
    */
    public function getWebsiteUrl()
    {
        if (array_key_exists("websiteUrl", $this->_propDict)) {
            return $this->_propDict["websiteUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the websiteUrl
    *
    * @param string $val The value of the websiteUrl
    *
    * @return TeamsTabConfiguration
    */
    public function setWebsiteUrl($val)
    {
        $this->_propDict["websiteUrl"] = $val;
        return $this;
    }
}
