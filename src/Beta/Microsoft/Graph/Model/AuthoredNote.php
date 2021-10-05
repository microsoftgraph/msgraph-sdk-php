<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthoredNote File
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
* AuthoredNote class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthoredNote extends Entity
{
    /**
    * Gets the author
    *
    * @return Identity|null The author
    */
    public function getAuthor()
    {
        if (array_key_exists("author", $this->_propDict)) {
            if (is_a($this->_propDict["author"], "\Beta\Microsoft\Graph\Model\Identity") || is_null($this->_propDict["author"])) {
                return $this->_propDict["author"];
            } else {
                $this->_propDict["author"] = new Identity($this->_propDict["author"]);
                return $this->_propDict["author"];
            }
        }
        return null;
    }
    
    /**
    * Sets the author
    *
    * @param Identity $val The author
    *
    * @return AuthoredNote
    */
    public function setAuthor($val)
    {
        $this->_propDict["author"] = $val;
        return $this;
    }
    
    /**
    * Gets the content
    *
    * @return ItemBody|null The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            if (is_a($this->_propDict["content"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["content"])) {
                return $this->_propDict["content"];
            } else {
                $this->_propDict["content"] = new ItemBody($this->_propDict["content"]);
                return $this->_propDict["content"];
            }
        }
        return null;
    }
    
    /**
    * Sets the content
    *
    * @param ItemBody $val The content
    *
    * @return AuthoredNote
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    *
    * @return \DateTime|null The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime") || is_null($this->_propDict["createdDateTime"])) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AuthoredNote
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
}
