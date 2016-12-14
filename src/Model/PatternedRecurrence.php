<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PatternedRecurrence File
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
* PatternedRecurrence class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class PatternedRecurrence extends Entity
{
    /**
    * The array of properties available 
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    /**
    * PatternedRecurrence constructor
    *
    * @param array $propDict List of properties to set
    * Defaults to an empty array
    *
    * @return PatternedRecurrence
    */
    public function __construct($propDict=array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

	/**
    * Gets the property dictionary of the PatternedRecurrence
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the pattern
    *
    * @return RecurrencePattern The pattern
    */
    public function getPattern()
    {
        if (array_key_exists("pattern", $this->_propDict)) {
            if (is_a($this->_propDict["pattern"], "RecurrencePattern")) {
                return $this->_propDict["pattern"];
            } else {
                $this->_propDict["pattern"] = new RecurrencePattern($this->_propDict["pattern"]);
                return $this->_propDict["pattern"];
            }
        }
        return null;
    }

    /**
    * Sets the pattern
    *
    * @param RecurrencePattern $val The value to assign to the pattern
    *
    * @return PatternedRecurrence The PatternedRecurrence
    */
    public function setPattern($val)
    {
        $this->_propDict["pattern"] = $val;
         return $this;
    }

    /**
    * Gets the range
    *
    * @return RecurrenceRange The range
    */
    public function getRange()
    {
        if (array_key_exists("range", $this->_propDict)) {
            if (is_a($this->_propDict["range"], "RecurrenceRange")) {
                return $this->_propDict["range"];
            } else {
                $this->_propDict["range"] = new RecurrenceRange($this->_propDict["range"]);
                return $this->_propDict["range"];
            }
        }
        return null;
    }

    /**
    * Sets the range
    *
    * @param RecurrenceRange $val The value to assign to the range
    *
    * @return PatternedRecurrence The PatternedRecurrence
    */
    public function setRange($val)
    {
        $this->_propDict["range"] = $val;
         return $this;
    }
}
