<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PersonResponsibility File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* PersonResponsibility class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PersonResponsibility extends ItemFacet
{
    /**
    * Gets the collaborationTags
    *
    * @return string The collaborationTags
    */
    public function getCollaborationTags()
    {
        if (array_key_exists("collaborationTags", $this->_propDict)) {
            return $this->_propDict["collaborationTags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the collaborationTags
    *
    * @param string $val The collaborationTags
    *
    * @return PersonResponsibility
    */
    public function setCollaborationTags($val)
    {
        $this->_propDict["collaborationTags"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return PersonResponsibility
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    *
    * @param string $val The displayName
    *
    * @return PersonResponsibility
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the webUrl
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the webUrl
    *
    * @param string $val The webUrl
    *
    * @return PersonResponsibility
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
    
}