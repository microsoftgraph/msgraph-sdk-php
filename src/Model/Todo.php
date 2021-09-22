<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Todo File
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
* Todo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Todo extends Entity
{

     /** 
     * Gets the lists
    * The task lists in the users mailbox.
     *
     * @return TodoTaskList[]|null The lists
     */
    public function getLists()
    {
        if (array_key_exists('lists', $this->_propDict) && !is_null($this->_propDict['lists'])) {
            $lists = [];
            if (count($this->_propDict['lists']) > 0 && is_a($this->_propDict['lists'][0], 'TodoTaskList')) {
                return $this->_propDict['lists'];
            }
            foreach ($this->_propDict['lists'] as $singleValue) {
                $lists []= new TodoTaskList($singleValue);
            }
            $this->_propDict['lists'] = $lists;
            return $this->_propDict['lists'];
        }
        return null;
    }
    
    /** 
    * Sets the lists
    * The task lists in the users mailbox.
    *
    * @param TodoTaskList[] $val The lists
    *
    * @return Todo
    */
    public function setLists($val)
    {
        $this->_propDict["lists"] = $val;
        return $this;
    }
    
}
