<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConnectionQuota File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ExternalConnectors\Model;

/**
* ConnectionQuota class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConnectionQuota extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the itemsRemaining
    *
    * @return int|null The itemsRemaining
    */
    public function getItemsRemaining()
    {
        if (array_key_exists("itemsRemaining", $this->_propDict)) {
            return $this->_propDict["itemsRemaining"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemsRemaining
    *
    * @param int $val The itemsRemaining
    *
    * @return ConnectionQuota
    */
    public function setItemsRemaining($val)
    {
        $this->_propDict["itemsRemaining"] = intval($val);
        return $this;
    }

}
