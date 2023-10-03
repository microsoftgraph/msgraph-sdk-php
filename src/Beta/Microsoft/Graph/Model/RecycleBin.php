<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecycleBin File
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
* RecycleBin class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecycleBin extends BaseItem
{

     /**
     * Gets the items
     *
     * @return array|null The items
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
    * @param RecycleBinItem[] $val The items
    *
    * @return RecycleBin
    */
    public function setItems($val)
    {
        $this->_propDict["items"] = $val;
        return $this;
    }

}
