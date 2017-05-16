<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemReference File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* ItemReference class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ItemReference extends Entity
{
    /**
    * Gets the driveId
    *
    * @return string The driveId
    */
    public function getDriveId()
    {
        if (array_key_exists("driveId", $this->_propDict)) {
            return $this->_propDict["driveId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the driveId
    *
    * @param string $val The value of the driveId
    *
    * @return ItemReference
    */
    public function setDriveId($val)
    {
        $this->_propDict["driveId"] = $val;
        return $this;
    }
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return ItemReference
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return ItemReference
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the path
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    *
    * @param string $val The value of the path
    *
    * @return ItemReference
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
    /**
    * Gets the shareId
    *
    * @return string The shareId
    */
    public function getShareId()
    {
        if (array_key_exists("shareId", $this->_propDict)) {
            return $this->_propDict["shareId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the shareId
    *
    * @param string $val The value of the shareId
    *
    * @return ItemReference
    */
    public function setShareId($val)
    {
        $this->_propDict["shareId"] = $val;
        return $this;
    }

    /**
    * Gets the sharepointIds
    *
    * @return SharepointIds The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharepointIds"], "Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharepointIds"];
            } else {
                $this->_propDict["sharepointIds"] = new SharepointIds($this->_propDict["sharepointIds"]);
                return $this->_propDict["sharepointIds"];
            }
        }
        return null;
    }

    /**
    * Sets the sharepointIds
    *
    * @param SharepointIds $val The value to assign to the sharepointIds
    *
    * @return ItemReference The ItemReference
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
         return $this;
    }
}
