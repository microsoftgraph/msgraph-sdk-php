<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentCustomization File
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
* ContentCustomization class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ContentCustomization extends Entity
{

    /**
    * Gets the attributeCollection
    *
    * @return KeyValue|null The attributeCollection
    */
    public function getAttributeCollection()
    {
        if (array_key_exists("attributeCollection", $this->_propDict)) {
            if (is_a($this->_propDict["attributeCollection"], "\Beta\Microsoft\Graph\Model\KeyValue") || is_null($this->_propDict["attributeCollection"])) {
                return $this->_propDict["attributeCollection"];
            } else {
                $this->_propDict["attributeCollection"] = new KeyValue($this->_propDict["attributeCollection"]);
                return $this->_propDict["attributeCollection"];
            }
        }
        return null;
    }

    /**
    * Sets the attributeCollection
    *
    * @param KeyValue $val The value to assign to the attributeCollection
    *
    * @return ContentCustomization The ContentCustomization
    */
    public function setAttributeCollection($val)
    {
        $this->_propDict["attributeCollection"] = $val;
         return $this;
    }
    /**
    * Gets the attributeCollectionRelativeUrl
    *
    * @return string|null The attributeCollectionRelativeUrl
    */
    public function getAttributeCollectionRelativeUrl()
    {
        if (array_key_exists("attributeCollectionRelativeUrl", $this->_propDict)) {
            return $this->_propDict["attributeCollectionRelativeUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the attributeCollectionRelativeUrl
    *
    * @param string $val The value of the attributeCollectionRelativeUrl
    *
    * @return ContentCustomization
    */
    public function setAttributeCollectionRelativeUrl($val)
    {
        $this->_propDict["attributeCollectionRelativeUrl"] = $val;
        return $this;
    }
}
