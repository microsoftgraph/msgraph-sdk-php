<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ServiceHealthIssuePost File
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
* ServiceHealthIssuePost class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ServiceHealthIssuePost extends Entity
{

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
    * @param \DateTime $val The value to assign to the createdDateTime
    *
    * @return ServiceHealthIssuePost The ServiceHealthIssuePost
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the description
    *
    * @return ItemBody|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            if (is_a($this->_propDict["description"], "\Beta\Microsoft\Graph\Model\ItemBody") || is_null($this->_propDict["description"])) {
                return $this->_propDict["description"];
            } else {
                $this->_propDict["description"] = new ItemBody($this->_propDict["description"]);
                return $this->_propDict["description"];
            }
        }
        return null;
    }

    /**
    * Sets the description
    *
    * @param ItemBody $val The value to assign to the description
    *
    * @return ServiceHealthIssuePost The ServiceHealthIssuePost
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
         return $this;
    }

    /**
    * Gets the postType
    *
    * @return PostType|null The postType
    */
    public function getPostType()
    {
        if (array_key_exists("postType", $this->_propDict)) {
            if (is_a($this->_propDict["postType"], "\Beta\Microsoft\Graph\Model\PostType") || is_null($this->_propDict["postType"])) {
                return $this->_propDict["postType"];
            } else {
                $this->_propDict["postType"] = new PostType($this->_propDict["postType"]);
                return $this->_propDict["postType"];
            }
        }
        return null;
    }

    /**
    * Sets the postType
    *
    * @param PostType $val The value to assign to the postType
    *
    * @return ServiceHealthIssuePost The ServiceHealthIssuePost
    */
    public function setPostType($val)
    {
        $this->_propDict["postType"] = $val;
         return $this;
    }
}
