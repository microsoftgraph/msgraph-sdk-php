<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Drive File
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
* Drive class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Drive extends BaseItem
{
    /**
    * Gets the driveType
    *
    * @return string The driveType
    */
    public function getDriveType()
    {
        if (array_key_exists("driveType", $this->_propDict)) {
            return $this->_propDict["driveType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the driveType
    *
    * @param string $val The driveType
    *
    * @return Drive
    */
    public function setDriveType($val)
    {
        $this->_propDict["driveType"] = $val;
        return $this;
    }
    
    /**
    * Gets the owner
    *
    * @return IdentitySet The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new IdentitySet($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }
    
    /**
    * Sets the owner
    *
    * @param IdentitySet $val The owner
    *
    * @return Drive
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the quota
    *
    * @return Quota The quota
    */
    public function getQuota()
    {
        if (array_key_exists("quota", $this->_propDict)) {
            if (is_a($this->_propDict["quota"], "Microsoft\Graph\Model\Quota")) {
                return $this->_propDict["quota"];
            } else {
                $this->_propDict["quota"] = new Quota($this->_propDict["quota"]);
                return $this->_propDict["quota"];
            }
        }
        return null;
    }
    
    /**
    * Sets the quota
    *
    * @param Quota $val The quota
    *
    * @return Drive
    */
    public function setQuota($val)
    {
        $this->_propDict["quota"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharePointIds
    *
    * @return SharepointIds The sharePointIds
    */
    public function getSharePointIds()
    {
        if (array_key_exists("sharePointIds", $this->_propDict)) {
            if (is_a($this->_propDict["sharePointIds"], "Microsoft\Graph\Model\SharepointIds")) {
                return $this->_propDict["sharePointIds"];
            } else {
                $this->_propDict["sharePointIds"] = new SharepointIds($this->_propDict["sharePointIds"]);
                return $this->_propDict["sharePointIds"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharePointIds
    *
    * @param SharepointIds $val The sharePointIds
    *
    * @return Drive
    */
    public function setSharePointIds($val)
    {
        $this->_propDict["sharePointIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the system
    *
    * @return SystemFacet The system
    */
    public function getSystem()
    {
        if (array_key_exists("system", $this->_propDict)) {
            if (is_a($this->_propDict["system"], "Microsoft\Graph\Model\SystemFacet")) {
                return $this->_propDict["system"];
            } else {
                $this->_propDict["system"] = new SystemFacet($this->_propDict["system"]);
                return $this->_propDict["system"];
            }
        }
        return null;
    }
    
    /**
    * Sets the system
    *
    * @param SystemFacet $val The system
    *
    * @return Drive
    */
    public function setSystem($val)
    {
        $this->_propDict["system"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
     *
     * @return array The items
     */
    public function getItems()
    {
        if (array_key_exists("items", $this->_propDict)) {
           return $this->_propDict["items"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the items
    *
    * @param DriveItem $val The items
    *
    * @return Drive
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    
    /**
    * Gets the list
    *
    * @return GraphList The list
    */
    public function getList()
    {
        if (array_key_exists("list", $this->_propDict)) {
            if (is_a($this->_propDict["list"], "Microsoft\Graph\Model\List")) {
                return $this->_propDict["list"];
            } else {
                $this->_propDict["list"] = new GraphList($this->_propDict["list"]);
                return $this->_propDict["list"];
            }
        }
        return null;
    }
    
    /**
    * Sets the list
    *
    * @param GraphList $val The list
    *
    * @return Drive
    */
    public function setList($val)
    {
        $this->_propDict["list"] = $val;
        return $this;
    }
    
    /**
    * Gets the root
    *
    * @return DriveItem The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new DriveItem($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }
    
    /**
    * Sets the root
    *
    * @param DriveItem $val The root
    *
    * @return Drive
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
        return $this;
    }
    

     /** 
     * Gets the special
     *
     * @return array The special
     */
    public function getSpecial()
    {
        if (array_key_exists("special", $this->_propDict)) {
           return $this->_propDict["special"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the special
    *
    * @param DriveItem $val The special
    *
    * @return Drive
    */
    public function setSpecial($val)
    {
		$this->_propDict["special"] = $val;
        return $this;
    }
    
}