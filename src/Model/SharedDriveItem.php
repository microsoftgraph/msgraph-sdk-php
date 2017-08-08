<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedDriveItem File
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
* SharedDriveItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class SharedDriveItem extends BaseItem
{
    /**
    * Gets the owner
    * Information about the owner of the shared item being referenced.
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
    * Information about the owner of the shared item being referenced.
    *
    * @param IdentitySet $val The owner
    *
    * @return SharedDriveItem
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the driveItem
    * A driveItem for the resource that was shared.  This is identical to the root property.
    *
    * @return DriveItem The driveItem
    */
    public function getDriveItem()
    {
        if (array_key_exists("driveItem", $this->_propDict)) {
            if (is_a($this->_propDict["driveItem"], "Microsoft\Graph\Model\DriveItem")) {
                return $this->_propDict["driveItem"];
            } else {
                $this->_propDict["driveItem"] = new DriveItem($this->_propDict["driveItem"]);
                return $this->_propDict["driveItem"];
            }
        }
        return null;
    }
    
    /**
    * Sets the driveItem
    * A driveItem for the resource that was shared.  This is identical to the root property.
    *
    * @param DriveItem $val The driveItem
    *
    * @return SharedDriveItem
    */
    public function setDriveItem($val)
    {
        $this->_propDict["driveItem"] = $val;
        return $this;
    }
    

     /** 
     * Gets the items
    * A collection of shared driveItem resources. This collection cannot be enumerated, but items can be accessed by their unique ID.
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
    * A collection of shared driveItem resources. This collection cannot be enumerated, but items can be accessed by their unique ID.
    *
    * @param DriveItem $val The items
    *
    * @return SharedDriveItem
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    
    /**
    * Gets the root
    * The top level shared driveItem. If a single file is shared, this item is the file. If a folder is shared, this item will be the folder. You can use the item's facets to determine which case applies.
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
    * The top level shared driveItem. If a single file is shared, this item is the file. If a folder is shared, this item will be the folder. You can use the item's facets to determine which case applies.
    *
    * @param DriveItem $val The root
    *
    * @return SharedDriveItem
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
        return $this;
    }
    
    /**
    * Gets the site
    * A site resource that contains the item that was shared.
    *
    * @return Site The site
    */
    public function getSite()
    {
        if (array_key_exists("site", $this->_propDict)) {
            if (is_a($this->_propDict["site"], "Microsoft\Graph\Model\Site")) {
                return $this->_propDict["site"];
            } else {
                $this->_propDict["site"] = new Site($this->_propDict["site"]);
                return $this->_propDict["site"];
            }
        }
        return null;
    }
    
    /**
    * Sets the site
    * A site resource that contains the item that was shared.
    *
    * @param Site $val The site
    *
    * @return SharedDriveItem
    */
    public function setSite($val)
    {
        $this->_propDict["site"] = $val;
        return $this;
    }
    
}