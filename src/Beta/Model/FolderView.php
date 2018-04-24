<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FolderView File
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
* FolderView class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class FolderView extends Entity
{
    /**
    * Gets the sortBy
    *
    * @return string The sortBy
    */
    public function getSortBy()
    {
        if (array_key_exists("sortBy", $this->_propDict)) {
            return $this->_propDict["sortBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sortBy
    *
    * @param string $val The value of the sortBy
    *
    * @return FolderView
    */
    public function setSortBy($val)
    {
        $this->_propDict["sortBy"] = $val;
        return $this;
    }
    /**
    * Gets the sortOrder
    *
    * @return string The sortOrder
    */
    public function getSortOrder()
    {
        if (array_key_exists("sortOrder", $this->_propDict)) {
            return $this->_propDict["sortOrder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sortOrder
    *
    * @param string $val The value of the sortOrder
    *
    * @return FolderView
    */
    public function setSortOrder($val)
    {
        $this->_propDict["sortOrder"] = $val;
        return $this;
    }
    /**
    * Gets the viewType
    *
    * @return string The viewType
    */
    public function getViewType()
    {
        if (array_key_exists("viewType", $this->_propDict)) {
            return $this->_propDict["viewType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the viewType
    *
    * @param string $val The value of the viewType
    *
    * @return FolderView
    */
    public function setViewType($val)
    {
        $this->_propDict["viewType"] = $val;
        return $this;
    }
}
