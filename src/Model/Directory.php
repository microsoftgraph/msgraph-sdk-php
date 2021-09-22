<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Directory File
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
* Directory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Directory extends Entity
{

     /** 
     * Gets the administrativeUnits
    * Conceptual container for user and group directory objects.
     *
     * @return AdministrativeUnit[]|null The administrativeUnits
     */
    public function getAdministrativeUnits()
    {
        if (array_key_exists('administrativeUnits', $this->_propDict) && !is_null($this->_propDict['administrativeUnits'])) {
            $administrativeUnits = [];
            if (count($this->_propDict['administrativeUnits']) > 0 && is_a($this->_propDict['administrativeUnits'][0], 'AdministrativeUnit')) {
                return $this->_propDict['administrativeUnits'];
            }
            foreach ($this->_propDict['administrativeUnits'] as $singleValue) {
                $administrativeUnits []= new AdministrativeUnit($singleValue);
            }
            $this->_propDict['administrativeUnits'] = $administrativeUnits;
            return $this->_propDict['administrativeUnits'];
        }
        return null;
    }
    
    /** 
    * Sets the administrativeUnits
    * Conceptual container for user and group directory objects.
    *
    * @param AdministrativeUnit[] $val The administrativeUnits
    *
    * @return Directory
    */
    public function setAdministrativeUnits($val)
    {
        $this->_propDict["administrativeUnits"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deletedItems
    * Recently deleted items. Read-only. Nullable.
     *
     * @return DirectoryObject[]|null The deletedItems
     */
    public function getDeletedItems()
    {
        if (array_key_exists('deletedItems', $this->_propDict) && !is_null($this->_propDict['deletedItems'])) {
            $deletedItems = [];
            if (count($this->_propDict['deletedItems']) > 0 && is_a($this->_propDict['deletedItems'][0], 'DirectoryObject')) {
                return $this->_propDict['deletedItems'];
            }
            foreach ($this->_propDict['deletedItems'] as $singleValue) {
                $deletedItems []= new DirectoryObject($singleValue);
            }
            $this->_propDict['deletedItems'] = $deletedItems;
            return $this->_propDict['deletedItems'];
        }
        return null;
    }
    
    /** 
    * Sets the deletedItems
    * Recently deleted items. Read-only. Nullable.
    *
    * @param DirectoryObject[] $val The deletedItems
    *
    * @return Directory
    */
    public function setDeletedItems($val)
    {
        $this->_propDict["deletedItems"] = $val;
        return $this;
    }
    
}
