<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Item File
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
* Item class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Item implements \JsonSerializable
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array $_propDict
    */
    protected $_propDict;

    /**
    * Construct a new Item
    *
    * @param array $propDict A list of properties to set
    */
    function __construct($propDict = array())
    {
        if (!is_array($propDict)) {
           $propDict = array();
        }
        $this->_propDict = $propDict;
    }

    /**
    * Gets the property dictionary of the Item
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the baseUnitOfMeasureId
    *
    * @return string|null The baseUnitOfMeasureId
    */
    public function getBaseUnitOfMeasureId()
    {
        if (array_key_exists("baseUnitOfMeasureId", $this->_propDict)) {
            return $this->_propDict["baseUnitOfMeasureId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the baseUnitOfMeasureId
    *
    * @param string $val The baseUnitOfMeasureId
    *
    * @return Item
    */
    public function setBaseUnitOfMeasureId($val)
    {
        $this->_propDict["baseUnitOfMeasureId"] = $val;
        return $this;
    }

    /**
    * Gets the blocked
    *
    * @return bool|null The blocked
    */
    public function getBlocked()
    {
        if (array_key_exists("blocked", $this->_propDict)) {
            return $this->_propDict["blocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the blocked
    *
    * @param bool $val The blocked
    *
    * @return Item
    */
    public function setBlocked($val)
    {
        $this->_propDict["blocked"] = boolval($val);
        return $this;
    }

    /**
    * Gets the displayName
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
    *
    * @param string $val The displayName
    *
    * @return Item
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the gtin
    *
    * @return string|null The gtin
    */
    public function getGtin()
    {
        if (array_key_exists("gtin", $this->_propDict)) {
            return $this->_propDict["gtin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the gtin
    *
    * @param string $val The gtin
    *
    * @return Item
    */
    public function setGtin($val)
    {
        $this->_propDict["gtin"] = $val;
        return $this;
    }

    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The id
    *
    * @return Item
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the inventory
    *
    * @return Decimal|null The inventory
    */
    public function getInventory()
    {
        if (array_key_exists("inventory", $this->_propDict)) {
            if (is_a($this->_propDict["inventory"], "\Beta\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["inventory"])) {
                return $this->_propDict["inventory"];
            } else {
                $this->_propDict["inventory"] = new Decimal($this->_propDict["inventory"]);
                return $this->_propDict["inventory"];
            }
        }
        return null;
    }

    /**
    * Sets the inventory
    *
    * @param Decimal $val The inventory
    *
    * @return Item
    */
    public function setInventory($val)
    {
        $this->_propDict["inventory"] = $val;
        return $this;
    }

    /**
    * Gets the itemCategoryCode
    *
    * @return string|null The itemCategoryCode
    */
    public function getItemCategoryCode()
    {
        if (array_key_exists("itemCategoryCode", $this->_propDict)) {
            return $this->_propDict["itemCategoryCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemCategoryCode
    *
    * @param string $val The itemCategoryCode
    *
    * @return Item
    */
    public function setItemCategoryCode($val)
    {
        $this->_propDict["itemCategoryCode"] = $val;
        return $this;
    }

    /**
    * Gets the itemCategoryId
    *
    * @return string|null The itemCategoryId
    */
    public function getItemCategoryId()
    {
        if (array_key_exists("itemCategoryId", $this->_propDict)) {
            return $this->_propDict["itemCategoryId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the itemCategoryId
    *
    * @param string $val The itemCategoryId
    *
    * @return Item
    */
    public function setItemCategoryId($val)
    {
        $this->_propDict["itemCategoryId"] = $val;
        return $this;
    }

    /**
    * Gets the lastModifiedDateTime
    *
    * @return \DateTime|null The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime") || is_null($this->_propDict["lastModifiedDateTime"])) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastModifiedDateTime
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return Item
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the number
    *
    * @return string|null The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            return $this->_propDict["number"];
        } else {
            return null;
        }
    }

    /**
    * Sets the number
    *
    * @param string $val The number
    *
    * @return Item
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }

    /**
    * Gets the priceIncludesTax
    *
    * @return bool|null The priceIncludesTax
    */
    public function getPriceIncludesTax()
    {
        if (array_key_exists("priceIncludesTax", $this->_propDict)) {
            return $this->_propDict["priceIncludesTax"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priceIncludesTax
    *
    * @param bool $val The priceIncludesTax
    *
    * @return Item
    */
    public function setPriceIncludesTax($val)
    {
        $this->_propDict["priceIncludesTax"] = boolval($val);
        return $this;
    }

    /**
    * Gets the taxGroupCode
    *
    * @return string|null The taxGroupCode
    */
    public function getTaxGroupCode()
    {
        if (array_key_exists("taxGroupCode", $this->_propDict)) {
            return $this->_propDict["taxGroupCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taxGroupCode
    *
    * @param string $val The taxGroupCode
    *
    * @return Item
    */
    public function setTaxGroupCode($val)
    {
        $this->_propDict["taxGroupCode"] = $val;
        return $this;
    }

    /**
    * Gets the taxGroupId
    *
    * @return string|null The taxGroupId
    */
    public function getTaxGroupId()
    {
        if (array_key_exists("taxGroupId", $this->_propDict)) {
            return $this->_propDict["taxGroupId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taxGroupId
    *
    * @param string $val The taxGroupId
    *
    * @return Item
    */
    public function setTaxGroupId($val)
    {
        $this->_propDict["taxGroupId"] = $val;
        return $this;
    }

    /**
    * Gets the type
    *
    * @return string|null The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    *
    * @param string $val The type
    *
    * @return Item
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }

    /**
    * Gets the unitCost
    *
    * @return Decimal|null The unitCost
    */
    public function getUnitCost()
    {
        if (array_key_exists("unitCost", $this->_propDict)) {
            if (is_a($this->_propDict["unitCost"], "\Beta\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["unitCost"])) {
                return $this->_propDict["unitCost"];
            } else {
                $this->_propDict["unitCost"] = new Decimal($this->_propDict["unitCost"]);
                return $this->_propDict["unitCost"];
            }
        }
        return null;
    }

    /**
    * Sets the unitCost
    *
    * @param Decimal $val The unitCost
    *
    * @return Item
    */
    public function setUnitCost($val)
    {
        $this->_propDict["unitCost"] = $val;
        return $this;
    }

    /**
    * Gets the unitPrice
    *
    * @return Decimal|null The unitPrice
    */
    public function getUnitPrice()
    {
        if (array_key_exists("unitPrice", $this->_propDict)) {
            if (is_a($this->_propDict["unitPrice"], "\Beta\Microsoft\Graph\Model\Decimal") || is_null($this->_propDict["unitPrice"])) {
                return $this->_propDict["unitPrice"];
            } else {
                $this->_propDict["unitPrice"] = new Decimal($this->_propDict["unitPrice"]);
                return $this->_propDict["unitPrice"];
            }
        }
        return null;
    }

    /**
    * Sets the unitPrice
    *
    * @param Decimal $val The unitPrice
    *
    * @return Item
    */
    public function setUnitPrice($val)
    {
        $this->_propDict["unitPrice"] = $val;
        return $this;
    }

    /**
    * Gets the itemCategory
    *
    * @return ItemCategory|null The itemCategory
    */
    public function getItemCategory()
    {
        if (array_key_exists("itemCategory", $this->_propDict)) {
            if (is_a($this->_propDict["itemCategory"], "\Beta\Microsoft\Graph\Model\ItemCategory") || is_null($this->_propDict["itemCategory"])) {
                return $this->_propDict["itemCategory"];
            } else {
                $this->_propDict["itemCategory"] = new ItemCategory($this->_propDict["itemCategory"]);
                return $this->_propDict["itemCategory"];
            }
        }
        return null;
    }

    /**
    * Sets the itemCategory
    *
    * @param ItemCategory $val The itemCategory
    *
    * @return Item
    */
    public function setItemCategory($val)
    {
        $this->_propDict["itemCategory"] = $val;
        return $this;
    }


     /**
     * Gets the picture
     *
     * @return array|null The picture
     */
    public function getPicture()
    {
        if (array_key_exists("picture", $this->_propDict)) {
           return $this->_propDict["picture"];
        } else {
            return null;
        }
    }

    /**
    * Sets the picture
    *
    * @param Picture[] $val The picture
    *
    * @return Item
    */
    public function setPicture($val)
    {
        $this->_propDict["picture"] = $val;
        return $this;
    }

    /**
    * Gets the ODataType
    *
    * @return string|null The ODataType
    */
    public function getODataType()
    {
        if (array_key_exists('@odata.type', $this->_propDict)) {
            return $this->_propDict["@odata.type"];
        }
        return null;
    }

    /**
    * Sets the ODataType
    *
    * @param string $val The ODataType
    *
    * @return Item
    */
    public function setODataType($val)
    {
        $this->_propDict["@odata.type"] = $val;
        return $this;
    }

    /**
    * Serializes the object by property array
    * Manually serialize DateTime into RFC3339 format
    *
    * @return array The list of properties
    */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $serializableProperties = $this->getProperties();
        foreach ($serializableProperties as $property => $val) {
            if (is_a($val, "\DateTime")) {
                $serializableProperties[$property] = $val->format(\DateTime::RFC3339);
            } else if (is_a($val, "\Microsoft\Graph\Core\Enum")) {
                $serializableProperties[$property] = $val->value();
            } else if (is_a($val, "\Entity")) {
                $serializableProperties[$property] = $val->jsonSerialize();
            } else if (is_a($val, "\GuzzleHttp\Psr7\Stream")) {
                $serializableProperties[$property] = (string) $val;
            }
        }
        return $serializableProperties;
    }
}
