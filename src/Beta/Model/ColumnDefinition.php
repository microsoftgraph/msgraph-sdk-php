<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ColumnDefinition File
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
* ColumnDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ColumnDefinition extends Entity
{
    /**
    * Gets the boolean
    *
    * @return BooleanColumn The boolean
    */
    public function getBoolean()
    {
        if (array_key_exists("boolean", $this->_propDict)) {
            if (is_a($this->_propDict["boolean"], "Microsoft\Graph\Beta\Model\BooleanColumn")) {
                return $this->_propDict["boolean"];
            } else {
                $this->_propDict["boolean"] = new BooleanColumn($this->_propDict["boolean"]);
                return $this->_propDict["boolean"];
            }
        }
        return null;
    }
    
    /**
    * Sets the boolean
    *
    * @param BooleanColumn $val The boolean
    *
    * @return ColumnDefinition
    */
    public function setBoolean($val)
    {
        $this->_propDict["boolean"] = $val;
        return $this;
    }
    
    /**
    * Gets the calculated
    *
    * @return CalculatedColumn The calculated
    */
    public function getCalculated()
    {
        if (array_key_exists("calculated", $this->_propDict)) {
            if (is_a($this->_propDict["calculated"], "Microsoft\Graph\Beta\Model\CalculatedColumn")) {
                return $this->_propDict["calculated"];
            } else {
                $this->_propDict["calculated"] = new CalculatedColumn($this->_propDict["calculated"]);
                return $this->_propDict["calculated"];
            }
        }
        return null;
    }
    
    /**
    * Sets the calculated
    *
    * @param CalculatedColumn $val The calculated
    *
    * @return ColumnDefinition
    */
    public function setCalculated($val)
    {
        $this->_propDict["calculated"] = $val;
        return $this;
    }
    
    /**
    * Gets the choice
    *
    * @return ChoiceColumn The choice
    */
    public function getChoice()
    {
        if (array_key_exists("choice", $this->_propDict)) {
            if (is_a($this->_propDict["choice"], "Microsoft\Graph\Beta\Model\ChoiceColumn")) {
                return $this->_propDict["choice"];
            } else {
                $this->_propDict["choice"] = new ChoiceColumn($this->_propDict["choice"]);
                return $this->_propDict["choice"];
            }
        }
        return null;
    }
    
    /**
    * Sets the choice
    *
    * @param ChoiceColumn $val The choice
    *
    * @return ColumnDefinition
    */
    public function setChoice($val)
    {
        $this->_propDict["choice"] = $val;
        return $this;
    }
    
    /**
    * Gets the columnGroup
    *
    * @return string The columnGroup
    */
    public function getColumnGroup()
    {
        if (array_key_exists("columnGroup", $this->_propDict)) {
            return $this->_propDict["columnGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnGroup
    *
    * @param string $val The columnGroup
    *
    * @return ColumnDefinition
    */
    public function setColumnGroup($val)
    {
        $this->_propDict["columnGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the currency
    *
    * @return CurrencyColumn The currency
    */
    public function getCurrency()
    {
        if (array_key_exists("currency", $this->_propDict)) {
            if (is_a($this->_propDict["currency"], "Microsoft\Graph\Beta\Model\CurrencyColumn")) {
                return $this->_propDict["currency"];
            } else {
                $this->_propDict["currency"] = new CurrencyColumn($this->_propDict["currency"]);
                return $this->_propDict["currency"];
            }
        }
        return null;
    }
    
    /**
    * Sets the currency
    *
    * @param CurrencyColumn $val The currency
    *
    * @return ColumnDefinition
    */
    public function setCurrency($val)
    {
        $this->_propDict["currency"] = $val;
        return $this;
    }
    
    /**
    * Gets the dateTime
    *
    * @return DateTimeColumn The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "Microsoft\Graph\Beta\Model\DateTimeColumn")) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new DateTimeColumn($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dateTime
    *
    * @param DateTimeColumn $val The dateTime
    *
    * @return ColumnDefinition
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultValue
    *
    * @return DefaultColumnValue The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            if (is_a($this->_propDict["defaultValue"], "Microsoft\Graph\Beta\Model\DefaultColumnValue")) {
                return $this->_propDict["defaultValue"];
            } else {
                $this->_propDict["defaultValue"] = new DefaultColumnValue($this->_propDict["defaultValue"]);
                return $this->_propDict["defaultValue"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultValue
    *
    * @param DefaultColumnValue $val The defaultValue
    *
    * @return ColumnDefinition
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return ColumnDefinition
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string The displayName
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
    * @return ColumnDefinition
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the enforceUniqueValues
    *
    * @return bool The enforceUniqueValues
    */
    public function getEnforceUniqueValues()
    {
        if (array_key_exists("enforceUniqueValues", $this->_propDict)) {
            return $this->_propDict["enforceUniqueValues"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enforceUniqueValues
    *
    * @param bool $val The enforceUniqueValues
    *
    * @return ColumnDefinition
    */
    public function setEnforceUniqueValues($val)
    {
        $this->_propDict["enforceUniqueValues"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the hidden
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hidden
    *
    * @param bool $val The hidden
    *
    * @return ColumnDefinition
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the indexed
    *
    * @return bool The indexed
    */
    public function getIndexed()
    {
        if (array_key_exists("indexed", $this->_propDict)) {
            return $this->_propDict["indexed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the indexed
    *
    * @param bool $val The indexed
    *
    * @return ColumnDefinition
    */
    public function setIndexed($val)
    {
        $this->_propDict["indexed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lookup
    *
    * @return LookupColumn The lookup
    */
    public function getLookup()
    {
        if (array_key_exists("lookup", $this->_propDict)) {
            if (is_a($this->_propDict["lookup"], "Microsoft\Graph\Beta\Model\LookupColumn")) {
                return $this->_propDict["lookup"];
            } else {
                $this->_propDict["lookup"] = new LookupColumn($this->_propDict["lookup"]);
                return $this->_propDict["lookup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lookup
    *
    * @param LookupColumn $val The lookup
    *
    * @return ColumnDefinition
    */
    public function setLookup($val)
    {
        $this->_propDict["lookup"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    *
    * @param string $val The name
    *
    * @return ColumnDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the number
    *
    * @return NumberColumn The number
    */
    public function getNumber()
    {
        if (array_key_exists("number", $this->_propDict)) {
            if (is_a($this->_propDict["number"], "Microsoft\Graph\Beta\Model\NumberColumn")) {
                return $this->_propDict["number"];
            } else {
                $this->_propDict["number"] = new NumberColumn($this->_propDict["number"]);
                return $this->_propDict["number"];
            }
        }
        return null;
    }
    
    /**
    * Sets the number
    *
    * @param NumberColumn $val The number
    *
    * @return ColumnDefinition
    */
    public function setNumber($val)
    {
        $this->_propDict["number"] = $val;
        return $this;
    }
    
    /**
    * Gets the personOrGroup
    *
    * @return PersonOrGroupColumn The personOrGroup
    */
    public function getPersonOrGroup()
    {
        if (array_key_exists("personOrGroup", $this->_propDict)) {
            if (is_a($this->_propDict["personOrGroup"], "Microsoft\Graph\Beta\Model\PersonOrGroupColumn")) {
                return $this->_propDict["personOrGroup"];
            } else {
                $this->_propDict["personOrGroup"] = new PersonOrGroupColumn($this->_propDict["personOrGroup"]);
                return $this->_propDict["personOrGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the personOrGroup
    *
    * @param PersonOrGroupColumn $val The personOrGroup
    *
    * @return ColumnDefinition
    */
    public function setPersonOrGroup($val)
    {
        $this->_propDict["personOrGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the readOnly
    *
    * @return bool The readOnly
    */
    public function getReadOnly()
    {
        if (array_key_exists("readOnly", $this->_propDict)) {
            return $this->_propDict["readOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the readOnly
    *
    * @param bool $val The readOnly
    *
    * @return ColumnDefinition
    */
    public function setReadOnly($val)
    {
        $this->_propDict["readOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the required
    *
    * @return bool The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the required
    *
    * @param bool $val The required
    *
    * @return ColumnDefinition
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the text
    *
    * @return TextColumn The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "Microsoft\Graph\Beta\Model\TextColumn")) {
                return $this->_propDict["text"];
            } else {
                $this->_propDict["text"] = new TextColumn($this->_propDict["text"]);
                return $this->_propDict["text"];
            }
        }
        return null;
    }
    
    /**
    * Sets the text
    *
    * @param TextColumn $val The text
    *
    * @return ColumnDefinition
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
}