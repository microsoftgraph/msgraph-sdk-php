<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Site File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* Site class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Site extends BaseItem
{
    /**
    * Gets the displayName
    * The full title for the site. Read-only.
    *
    * @return string|null The displayName
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
    * The full title for the site. Read-only.
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
    * Gets the error
    *
    * @return PublicError|null The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict) && !is_null($this->_propDict["error"])) {
            if (is_a($this->_propDict["error"], "\Microsoft\Graph\Model\PublicError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param PublicError $val The error
    *
    * @return Site
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
        return $this;
    }

    /**
    * Gets the root
    * If present, indicates that this is the root site in the site collection. Read-only.
    *
    * @return Root|null The root
    */
    public function getRoot()
    {
        if (array_key_exists("root", $this->_propDict) && !is_null($this->_propDict["root"])) {
            if (is_a($this->_propDict["root"], "\Microsoft\Graph\Model\Root")) {
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
    * If present, indicates that this is the root site in the site collection. Read-only.
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
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
    *
    * @return SharepointIds|null The sharepointIds
    */
    public function getSharepointIds()
    {
        if (array_key_exists("sharepointIds", $this->_propDict) && !is_null($this->_propDict["sharepointIds"])) {
            if (is_a($this->_propDict["sharepointIds"], "\Microsoft\Graph\Model\SharepointIds")) {
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
    * Returns identifiers useful for SharePoint REST compatibility. Read-only.
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
    * Provides details about the site's site collection. Available only on the root site. Read-only.
    *
    * @return SiteCollection|null The siteCollection
    */
    public function getSiteCollection()
    {
        if (array_key_exists("siteCollection", $this->_propDict) && !is_null($this->_propDict["siteCollection"])) {
            if (is_a($this->_propDict["siteCollection"], "\Microsoft\Graph\Model\SiteCollection")) {
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
    * Provides details about the site's site collection. Available only on the root site. Read-only.
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
    * Gets the analytics
    * Analytics about the view activities that took place in this site.
    *
    * @return ItemAnalytics|null The analytics
    */
    public function getAnalytics()
    {
        if (array_key_exists("analytics", $this->_propDict) && !is_null($this->_propDict["analytics"])) {
            if (is_a($this->_propDict["analytics"], "\Microsoft\Graph\Model\ItemAnalytics")) {
                return $this->_propDict["analytics"];
            } else {
                $this->_propDict["analytics"] = new ItemAnalytics($this->_propDict["analytics"]);
                return $this->_propDict["analytics"];
            }
        }
        return null;
    }

    /**
    * Sets the analytics
    * Analytics about the view activities that took place in this site.
    *
    * @param ItemAnalytics $val The analytics
    *
    * @return Site
    */
    public function setAnalytics($val)
    {
        $this->_propDict["analytics"] = $val;
        return $this;
    }


     /**
     * Gets the columns
    * The collection of column definitions reusable across lists under this site.
     *
     * @return ColumnDefinition[]|null The columns
     */
    public function getColumns()
    {
        if (array_key_exists('columns', $this->_propDict) && !is_null($this->_propDict['columns'])) {
            $columns = [];
            if (count($this->_propDict['columns']) > 0 && is_a($this->_propDict['columns'][0], 'ColumnDefinition')) {
                return $this->_propDict['columns'];
            }
            foreach ($this->_propDict['columns'] as $singleValue) {
                $columns []= new ColumnDefinition($singleValue);
            }
            $this->_propDict['columns'] = $columns;
            return $this->_propDict['columns'];
        }
        return null;
    }

    /**
    * Sets the columns
    * The collection of column definitions reusable across lists under this site.
    *
    * @param ColumnDefinition[] $val The columns
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
     * @return ContentType[]|null The contentTypes
     */
    public function getContentTypes()
    {
        if (array_key_exists('contentTypes', $this->_propDict) && !is_null($this->_propDict['contentTypes'])) {
            $contentTypes = [];
            if (count($this->_propDict['contentTypes']) > 0 && is_a($this->_propDict['contentTypes'][0], 'ContentType')) {
                return $this->_propDict['contentTypes'];
            }
            foreach ($this->_propDict['contentTypes'] as $singleValue) {
                $contentTypes []= new ContentType($singleValue);
            }
            $this->_propDict['contentTypes'] = $contentTypes;
            return $this->_propDict['contentTypes'];
        }
        return null;
    }

    /**
    * Sets the contentTypes
    * The collection of content types defined for this site.
    *
    * @param ContentType[] $val The contentTypes
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
    * The default drive (document library) for this site.
    *
    * @return Drive|null The drive
    */
    public function getDrive()
    {
        if (array_key_exists("drive", $this->_propDict) && !is_null($this->_propDict["drive"])) {
            if (is_a($this->_propDict["drive"], "\Microsoft\Graph\Model\Drive")) {
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
    * The default drive (document library) for this site.
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
    * The collection of drives (document libraries) under this site.
     *
     * @return Drive[]|null The drives
     */
    public function getDrives()
    {
        if (array_key_exists('drives', $this->_propDict) && !is_null($this->_propDict['drives'])) {
            $drives = [];
            if (count($this->_propDict['drives']) > 0 && is_a($this->_propDict['drives'][0], 'Drive')) {
                return $this->_propDict['drives'];
            }
            foreach ($this->_propDict['drives'] as $singleValue) {
                $drives []= new Drive($singleValue);
            }
            $this->_propDict['drives'] = $drives;
            return $this->_propDict['drives'];
        }
        return null;
    }

    /**
    * Sets the drives
    * The collection of drives (document libraries) under this site.
    *
    * @param Drive[] $val The drives
    *
    * @return Site
    */
    public function setDrives($val)
    {
        $this->_propDict["drives"] = $val;
        return $this;
    }


     /**
     * Gets the externalColumns
    * The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
     *
     * @return ColumnDefinition[]|null The externalColumns
     */
    public function getExternalColumns()
    {
        if (array_key_exists('externalColumns', $this->_propDict) && !is_null($this->_propDict['externalColumns'])) {
            $externalColumns = [];
            if (count($this->_propDict['externalColumns']) > 0 && is_a($this->_propDict['externalColumns'][0], 'ColumnDefinition')) {
                return $this->_propDict['externalColumns'];
            }
            foreach ($this->_propDict['externalColumns'] as $singleValue) {
                $externalColumns []= new ColumnDefinition($singleValue);
            }
            $this->_propDict['externalColumns'] = $externalColumns;
            return $this->_propDict['externalColumns'];
        }
        return null;
    }

    /**
    * Sets the externalColumns
    * The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
    *
    * @param ColumnDefinition[] $val The externalColumns
    *
    * @return Site
    */
    public function setExternalColumns($val)
    {
        $this->_propDict["externalColumns"] = $val;
        return $this;
    }


     /**
     * Gets the items
    * Used to address any item contained in this site. This collection cannot be enumerated.
     *
     * @return BaseItem[]|null The items
     */
    public function getItems()
    {
        if (array_key_exists('items', $this->_propDict) && !is_null($this->_propDict['items'])) {
            $items = [];
            if (count($this->_propDict['items']) > 0 && is_a($this->_propDict['items'][0], 'BaseItem')) {
                return $this->_propDict['items'];
            }
            foreach ($this->_propDict['items'] as $singleValue) {
                $items []= new BaseItem($singleValue);
            }
            $this->_propDict['items'] = $items;
            return $this->_propDict['items'];
        }
        return null;
    }

    /**
    * Sets the items
    * Used to address any item contained in this site. This collection cannot be enumerated.
    *
    * @param BaseItem[] $val The items
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
     * @return GraphList[]|null The lists
     */
    public function getLists()
    {
        if (array_key_exists('lists', $this->_propDict) && !is_null($this->_propDict['lists'])) {
            $lists = [];
            if (count($this->_propDict['lists']) > 0 && is_a($this->_propDict['lists'][0], 'GraphList')) {
                return $this->_propDict['lists'];
            }
            foreach ($this->_propDict['lists'] as $singleValue) {
                $lists []= new GraphList($singleValue);
            }
            $this->_propDict['lists'] = $lists;
            return $this->_propDict['lists'];
        }
        return null;
    }

    /**
    * Sets the lists
    * The collection of lists under this site.
    *
    * @param GraphList[] $val The lists
    *
    * @return Site
    */
    public function setLists($val)
    {
        $this->_propDict["lists"] = $val;
        return $this;
    }


     /**
     * Gets the permissions
    * The permissions associated with the site. Nullable.
     *
     * @return Permission[]|null The permissions
     */
    public function getPermissions()
    {
        if (array_key_exists('permissions', $this->_propDict) && !is_null($this->_propDict['permissions'])) {
            $permissions = [];
            if (count($this->_propDict['permissions']) > 0 && is_a($this->_propDict['permissions'][0], 'Permission')) {
                return $this->_propDict['permissions'];
            }
            foreach ($this->_propDict['permissions'] as $singleValue) {
                $permissions []= new Permission($singleValue);
            }
            $this->_propDict['permissions'] = $permissions;
            return $this->_propDict['permissions'];
        }
        return null;
    }

    /**
    * Sets the permissions
    * The permissions associated with the site. Nullable.
    *
    * @param Permission[] $val The permissions
    *
    * @return Site
    */
    public function setPermissions($val)
    {
        $this->_propDict["permissions"] = $val;
        return $this;
    }


     /**
     * Gets the sites
    * The collection of the sub-sites under this site.
     *
     * @return Site[]|null The sites
     */
    public function getSites()
    {
        if (array_key_exists('sites', $this->_propDict) && !is_null($this->_propDict['sites'])) {
            $sites = [];
            if (count($this->_propDict['sites']) > 0 && is_a($this->_propDict['sites'][0], 'Site')) {
                return $this->_propDict['sites'];
            }
            foreach ($this->_propDict['sites'] as $singleValue) {
                $sites []= new Site($singleValue);
            }
            $this->_propDict['sites'] = $sites;
            return $this->_propDict['sites'];
        }
        return null;
    }

    /**
    * Sets the sites
    * The collection of the sub-sites under this site.
    *
    * @param Site[] $val The sites
    *
    * @return Site
    */
    public function setSites($val)
    {
        $this->_propDict["sites"] = $val;
        return $this;
    }

    /**
    * Gets the termStore
    * The termStore under this site.
    *
    * @return \Microsoft\Graph\TermStore\Model\Store|null The termStore
    */
    public function getTermStore()
    {
        if (array_key_exists("termStore", $this->_propDict) && !is_null($this->_propDict["termStore"])) {
            if (is_a($this->_propDict["termStore"], "\Microsoft\Graph\TermStore\Model\Store")) {
                return $this->_propDict["termStore"];
            } else {
                $this->_propDict["termStore"] = new \Microsoft\Graph\TermStore\Model\Store($this->_propDict["termStore"]);
                return $this->_propDict["termStore"];
            }
        }
        return null;
    }

    /**
    * Sets the termStore
    * The termStore under this site.
    *
    * @param \Microsoft\Graph\TermStore\Model\Store $val The termStore
    *
    * @return Site
    */
    public function setTermStore($val)
    {
        $this->_propDict["termStore"] = $val;
        return $this;
    }


     /**
     * Gets the termStores
    * The collection of termStores under this site.
     *
     * @return \Microsoft\Graph\TermStore\Model\Store[]|null The termStores
     */
    public function getTermStores()
    {
        if (array_key_exists('termStores', $this->_propDict) && !is_null($this->_propDict['termStores'])) {
            $termStores = [];
            if (count($this->_propDict['termStores']) > 0 && is_a($this->_propDict['termStores'][0], '\Microsoft\Graph\TermStore\Model\Store')) {
                return $this->_propDict['termStores'];
            }
            foreach ($this->_propDict['termStores'] as $singleValue) {
                $termStores []= new \Microsoft\Graph\TermStore\Model\Store($singleValue);
            }
            $this->_propDict['termStores'] = $termStores;
            return $this->_propDict['termStores'];
        }
        return null;
    }

    /**
    * Sets the termStores
    * The collection of termStores under this site.
    *
    * @param \Microsoft\Graph\TermStore\Model\Store[] $val The termStores
    *
    * @return Site
    */
    public function setTermStores($val)
    {
        $this->_propDict["termStores"] = $val;
        return $this;
    }

    /**
    * Gets the onenote
    * Calls the OneNote service for notebook related operations.
    *
    * @return Onenote|null The onenote
    */
    public function getOnenote()
    {
        if (array_key_exists("onenote", $this->_propDict) && !is_null($this->_propDict["onenote"])) {
            if (is_a($this->_propDict["onenote"], "\Microsoft\Graph\Model\Onenote")) {
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
    * Calls the OneNote service for notebook related operations.
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
