<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeFont File
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
* WorkbookRangeFont class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WorkbookRangeFont extends Entity
{
    /**
    * The array of properties available
    * to the model
    *
    * @var array(string => string)
    */
    private $_propDict;
    
    /**
    * Construct a new WorkbookRangeFont
    *
    * @param array $propDict A list of properties to set
    *
    * @return WorkbookRangeFont
    */
    function __construct($propDict = array())
    {
        parent::__construct();
        $this->_propDict = $propDict;
        return $this;
    }

    /**
    * Gets the property dictionary of the WorkbookRangeFont
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the bold
    *
    * @return bool The bold
    */
    public function getBold()
    {
        if (array_key_exists("bold", $this->_propDict)) {
            return $this->_propDict["bold"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bold
    *
    * @param bool $val The bold
    *
    * @return WorkbookRangeFont
    */
    public function setBold($val)
    {
        $this->_propDict["bold"] = boolval($val);
        return $this;
    }

    /**
    * Gets the color
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }

    /**
    * Sets the color
    *
    * @param string $val The color
    *
    * @return WorkbookRangeFont
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }

    /**
    * Gets the italic
    *
    * @return bool The italic
    */
    public function getItalic()
    {
        if (array_key_exists("italic", $this->_propDict)) {
            return $this->_propDict["italic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the italic
    *
    * @param bool $val The italic
    *
    * @return WorkbookRangeFont
    */
    public function setItalic($val)
    {
        $this->_propDict["italic"] = boolval($val);
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
    * @return WorkbookRangeFont
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the size
    *
    * @return float The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }

    /**
    * Sets the size
    *
    * @param float $val The size
    *
    * @return WorkbookRangeFont
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }

    /**
    * Gets the underline
    *
    * @return string The underline
    */
    public function getUnderline()
    {
        if (array_key_exists("underline", $this->_propDict)) {
            return $this->_propDict["underline"];
        } else {
            return null;
        }
    }

    /**
    * Sets the underline
    *
    * @param string $val The underline
    *
    * @return WorkbookRangeFont
    */
    public function setUnderline($val)
    {
        $this->_propDict["underline"] = $val;
        return $this;
    }
}