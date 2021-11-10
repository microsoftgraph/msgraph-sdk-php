<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GraphList File
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
* GraphList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GraphList extends BaseItem
{
    /**
    * Gets the displayName
    * The displayable title of the list.
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
    * The displayable title of the list.
    *
    * @param string $val The displayName
    *
    * @return GraphList
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the list
    * Provides additional details about the list.
    *
    * @return ListInfo|null The list
    */
    public function getList()
    {
        if (array_key_exists("list", $this->_propDict) && !is_null($this->_propDict["list"])) {
            if (is_a($this->_propDict["list"], "\Microsoft\Graph\Model\ListInfo")) {
                return $this->_propDict["list"];
            } else {
                $this->_propDict["list"] = new ListInfo($this->_propDict["list"]);
                return $this->_propDict["list"];
            }
        }
        return null;
    }

    /**
    * Sets the list
    * Provides additional details about the list.
    *
    * @param ListInfo $val The list
    *
    * @return GraphList
    */
    public function setList($val)
    {
        $this->_propDict["list"] = $val;
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
    * @return GraphList
    */
    public function setSharepointIds($val)
    {
        $this->_propDict["sharepointIds"] = $val;
        return $this;
    }

    /**
    * Gets the system
    * If present, indicates that this is a system-managed list. Read-only.
    *
    * @return SystemFacet|null The system
    */
    public function getSystem()
    {
        if (array_key_exists("system", $this->_propDict) && !is_null($this->_propDict["system"])) {
            if (is_a($this->_propDict["system"], "\Microsoft\Graph\Model\SystemFacet")) {
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
    * If present, indicates that this is a system-managed list. Read-only.
    *
    * @param SystemFacet $val The system
    *
    * @return GraphList
    */
    public function setSystem($val)
    {
        $this->_propDict["system"] = $val;
        return $this;
    }


     /**
     * Gets the columns
    * The collection of field definitions for this list.
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
    * The collection of field definitions for this list.
    *
    * @param ColumnDefinition[] $val The columns
    *
    * @return GraphList
    */
    public function setColumns($val)
    {
        $this->_propDict["columns"] = $val;
        return $this;
    }


     /**
     * Gets the contentTypes
    * The collection of content types present in this list.
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
    * The collection of content types present in this list.
    *
    * @param ContentType[] $val The contentTypes
    *
    * @return GraphList
    */
    public function setContentTypes($val)
    {
        $this->_propDict["contentTypes"] = $val;
        return $this;
    }

    /**
    * Gets the drive
    * Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
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
    * Only present on document libraries. Allows access to the list as a [drive][] resource with [driveItems][driveItem].
    *
    * @param Drive $val The drive
    *
    * @return GraphList
    */
    public function setDrive($val)
    {
        $this->_propDict["drive"] = $val;
        return $this;
    }


     /**
     * Gets the items
    * All items contained in the list.
     *
     * @return ListItem[]|null The items
     */
    public function getItems()
    {
        if (array_key_exists('items', $this->_propDict) && !is_null($this->_propDict['items'])) {
            $items = [];
            if (count($this->_propDict['items']) > 0 && is_a($this->_propDict['items'][0], 'ListItem')) {
                return $this->_propDict['items'];
            }
            foreach ($this->_propDict['items'] as $singleValue) {
                $items []= new ListItem($singleValue);
            }
            $this->_propDict['items'] = $items;
            return $this->_propDict['items'];
        }
        return null;
    }

    /**
    * Sets the items
    * All items contained in the list.
    *
    * @param ListItem[] $val The items
    *
    * @return GraphList
    */
    public function setItems($val)
    {
        $this->_propDict["items"] = $val;
        return $this;
    }


     /**
     * Gets the subscriptions
    * The set of subscriptions on the list.
     *
     * @return Subscription[]|null The subscriptions
     */
    public function getSubscriptions()
    {
        if (array_key_exists('subscriptions', $this->_propDict) && !is_null($this->_propDict['subscriptions'])) {
            $subscriptions = [];
            if (count($this->_propDict['subscriptions']) > 0 && is_a($this->_propDict['subscriptions'][0], 'Subscription')) {
                return $this->_propDict['subscriptions'];
            }
            foreach ($this->_propDict['subscriptions'] as $singleValue) {
                $subscriptions []= new Subscription($singleValue);
            }
            $this->_propDict['subscriptions'] = $subscriptions;
            return $this->_propDict['subscriptions'];
        }
        return null;
    }

    /**
    * Sets the subscriptions
    * The set of subscriptions on the list.
    *
    * @param Subscription[] $val The subscriptions
    *
    * @return GraphList
    */
    public function setSubscriptions($val)
    {
        $this->_propDict["subscriptions"] = $val;
        return $this;
    }

}
