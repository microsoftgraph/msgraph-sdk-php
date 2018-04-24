<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Site File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* Site class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Site extends BaseItem
{
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
    * @return Site
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the root
    *
    * @return Root The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict)) {
            if (is_a($this->_propDict["root"], "Microsoft\Graph\Beta\Model\Root")) {
                return $this->_propDict["root"];
            } else {
                $this->_propDict["root"] = new Root($this->_propDict["root"]);
                return $this->_propDict["root"];
            }
        }
        return null;
    }
    
    /**
    * Sets the root
    *
    * @param Root $val The root
    *
    * @return Site
    */
    public function setRoot($val)
    {
        $this->_propDict["root"] = $val;
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
            if (is_a($this->_propDict["sharepointIds"], "Microsoft\Graph\Beta\Model\SharepointIds")) {
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
    * @param SharepointIds $val The sharepointIds
    *
    * @return Site
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the siteCollection
    *
    * @return SiteCollection The siteCollection
    */
    public function getSiteCollection()
    {
        if (array_key_exists("siteCollection", $this->_propDict)) {
            if (is_a($this->_propDict["siteCollection"], "Microsoft\Graph\Beta\Model\SiteCollection")) {
                return $this->_propDict["siteCollection"];
            } else {
                $this->_propDict["siteCollection"] = new SiteCollection($this->_propDict["siteCollection"]);
                return $this->_propDict["siteCollection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the siteCollection
    *
    * @param SiteCollection $val The siteCollection
    *
    * @return Site
    */
    public function setSiteCollection($val)
    {
        $this->_propDict["siteCollection"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columns
    * The collection of column definitions reusable across lists under this site.
     *
     * @return array The columns
     */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columns
    * The collection of column definitions reusable across lists under this site.
    *
    * @param ColumnDefinition $val The columns
    *
    * @return Site
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }
    

     /** 
     * Gets the contentTypes
    * The collection of content types defined for this site.
     *
     * @return array The contentTypes
     */
    public function getContentTypes()
    {
        if (array_key_exists("contentTypes", $this->_propDict)) {
           return $this->_propDict["contentTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the contentTypes
    * The collection of content types defined for this site.
    *
    * @param ContentType $val The contentTypes
    *
    * @return Site
    */
    public function setContentTypes($val)
    {
		$this->_propDict["contentTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the drive
    *
    * @return Drive The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict)) {
            if (is_a($this->_propDict["drive"], "Microsoft\Graph\Beta\Model\Drive")) {
                return $this->_propDict["drive"];
            } else {
                $this->_propDict["drive"] = new Drive($this->_propDict["drive"]);
                return $this->_propDict["drive"];
            }
        }
        return null;
    }
    
    /**
    * Sets the drive
    *
    * @param Drive $val The drive
    *
    * @return Site
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }
    

     /** 
     * Gets the drives
     *
     * @return array The drives
     */
    public function getDrives()
    {
        if (array_key_exists("drives", $this->_propDict)) {
           return $this->_propDict["drives"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the drives
    *
    * @param Drive $val The drives
    *
    * @return Site
    */
    public function setDrives($val)
    {
		$this->_propDict["drives"] = $val;
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
    * @param BaseItem $val The items
    *
    * @return Site
    */
    public function setItems($val)
    {
		$this->_propDict["items"] = $val;
        return $this;
    }
    

     /** 
     * Gets the lists
    * The collection of lists under this site.
     *
     * @return array The lists
     */
    public function getLists()
    {
        if (array_key_exists("lists", $this->_propDict)) {
           return $this->_propDict["lists"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the lists
    * The collection of lists under this site.
    *
    * @param GraphList $val The lists
    *
    * @return Site
    */
    public function setLists($val)
    {
		$this->_propDict["lists"] = $val;
        return $this;
    }
    

     /** 
     * Gets the sites
     *
     * @return array The sites
     */
    public function getSites()
    {
        if (array_key_exists("sites", $this->_propDict)) {
           return $this->_propDict["sites"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sites
    *
    * @param Site $val The sites
    *
    * @return Site
    */
    public function setSites($val)
    {
		$this->_propDict["sites"] = $val;
        return $this;
    }
    
    /**
    * Gets the onenote
    *
    * @return Onenote The onenote
    */
    public function getOnenote()
    {
        if (array_key_exists("onenote", $this->_propDict)) {
            if (is_a($this->_propDict["onenote"], "Microsoft\Graph\Beta\Model\Onenote")) {
                return $this->_propDict["onenote"];
            } else {
                $this->_propDict["onenote"] = new Onenote($this->_propDict["onenote"]);
                return $this->_propDict["onenote"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onenote
    *
    * @param Onenote $val The onenote
    *
    * @return Site
    */
    public function setOnenote($val)
    {
        $this->_propDict["onenote"] = $val;
        return $this;
    }
    
}