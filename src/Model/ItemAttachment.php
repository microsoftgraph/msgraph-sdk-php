<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemAttachment File
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
* ItemAttachment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ItemAttachment extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new ItemAttachment
    *
    * @param array $propDict A list of properties to set
    *
    * @return ItemAttachment
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the ItemAttachment
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the item
    *
    * @return OutlookItem The item
    */
    public function getItem()
    {
        if (array_key_exists("item", $this->_propDict)) {
            if (is_a($this->_propDict["item"], "OutlookItem")) {
                return $this->_propDict["item"];
            } else {
                $this->_propDict["item"] = new OutlookItem($this->_propDict["item"]);
                return $this->_propDict["item"];
            }
        }
        return null;
    }

    /**
    * Sets the item
    *
    * @param string $val The item
    *
    * @return ItemAttachment
    */
    public function setItem($val)
    {
        $this->_propDict["item"] = $val;
        return $this;
    }
}