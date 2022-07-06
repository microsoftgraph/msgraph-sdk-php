<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EdiscoveryEstimateOperation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\SecurityNamespace\Model;

/**
* EdiscoveryEstimateOperation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EdiscoveryEstimateOperation extends CaseOperation
{
    /**
    * Gets the indexedItemCount
    * The estimated count of items for the search that matched the content query.
    *
    * @return int|null The indexedItemCount
    */
    public function getIndexedItemCount()
    {
        if (array_key_exists("indexedItemCount", $this->_propDict)) {
            return $this->_propDict["indexedItemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the indexedItemCount
    * The estimated count of items for the search that matched the content query.
    *
    * @param int $val The indexedItemCount
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setIndexedItemCount($val)
    {
        $this->_propDict["indexedItemCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the indexedItemsSize
    * The estimated size of items for the search that matched the content query.
    *
    * @return int|null The indexedItemsSize
    */
    public function getIndexedItemsSize()
    {
        if (array_key_exists("indexedItemsSize", $this->_propDict)) {
            return $this->_propDict["indexedItemsSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the indexedItemsSize
    * The estimated size of items for the search that matched the content query.
    *
    * @param int $val The indexedItemsSize
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setIndexedItemsSize($val)
    {
        $this->_propDict["indexedItemsSize"] = intval($val);
        return $this;
    }

    /**
    * Gets the mailboxCount
    * The number of mailboxes that had search hits.
    *
    * @return int|null The mailboxCount
    */
    public function getMailboxCount()
    {
        if (array_key_exists("mailboxCount", $this->_propDict)) {
            return $this->_propDict["mailboxCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the mailboxCount
    * The number of mailboxes that had search hits.
    *
    * @param int $val The mailboxCount
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setMailboxCount($val)
    {
        $this->_propDict["mailboxCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the siteCount
    * The number of mailboxes that had search hits.
    *
    * @return int|null The siteCount
    */
    public function getSiteCount()
    {
        if (array_key_exists("siteCount", $this->_propDict)) {
            return $this->_propDict["siteCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the siteCount
    * The number of mailboxes that had search hits.
    *
    * @param int $val The siteCount
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setSiteCount($val)
    {
        $this->_propDict["siteCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the unindexedItemCount
    * The estimated count of unindexed items for the collection.
    *
    * @return int|null The unindexedItemCount
    */
    public function getUnindexedItemCount()
    {
        if (array_key_exists("unindexedItemCount", $this->_propDict)) {
            return $this->_propDict["unindexedItemCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unindexedItemCount
    * The estimated count of unindexed items for the collection.
    *
    * @param int $val The unindexedItemCount
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setUnindexedItemCount($val)
    {
        $this->_propDict["unindexedItemCount"] = intval($val);
        return $this;
    }

    /**
    * Gets the unindexedItemsSize
    * The estimated size of unindexed items for the collection.
    *
    * @return int|null The unindexedItemsSize
    */
    public function getUnindexedItemsSize()
    {
        if (array_key_exists("unindexedItemsSize", $this->_propDict)) {
            return $this->_propDict["unindexedItemsSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unindexedItemsSize
    * The estimated size of unindexed items for the collection.
    *
    * @param int $val The unindexedItemsSize
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setUnindexedItemsSize($val)
    {
        $this->_propDict["unindexedItemsSize"] = intval($val);
        return $this;
    }

    /**
    * Gets the search
    * eDiscovery search.
    *
    * @return EdiscoverySearch|null The search
    */
    public function getSearch()
    {
        if (array_key_exists("search", $this->_propDict)) {
            if (is_a($this->_propDict["search"], "\Microsoft\Graph\SecurityNamespace\Model\EdiscoverySearch") || is_null($this->_propDict["search"])) {
                return $this->_propDict["search"];
            } else {
                $this->_propDict["search"] = new EdiscoverySearch($this->_propDict["search"]);
                return $this->_propDict["search"];
            }
        }
        return null;
    }

    /**
    * Sets the search
    * eDiscovery search.
    *
    * @param EdiscoverySearch $val The search
    *
    * @return EdiscoveryEstimateOperation
    */
    public function setSearch($val)
    {
        $this->_propDict["search"] = $val;
        return $this;
    }

}
