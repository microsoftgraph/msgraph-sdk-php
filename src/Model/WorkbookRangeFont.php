<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeFont File
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
* WorkbookRangeFont class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookRangeFont extends Entity
{
    /**
    * Gets the bold
    * Represents the bold status of font.
    *
    * @return bool|null The bold
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
    * Represents the bold status of font.
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
    * HTML color code representation of the text color. E.g. #FF0000 represents Red.
    *
    * @return string|null The color
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
    * HTML color code representation of the text color. E.g. #FF0000 represents Red.
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
    * Represents the italic status of the font.
    *
    * @return bool|null The italic
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
    * Represents the italic status of the font.
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
    * Font name (e.g. 'Calibri')
    *
    * @return string|null The name
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
    * Font name (e.g. 'Calibri')
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
    * Font size.
    *
    * @return float|null The size
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
    * Font size.
    *
    * @param float $val The size
    *
    * @return WorkbookRangeFont
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = floatval($val);
        return $this;
    }

    /**
    * Gets the underline
    * Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
    *
    * @return string|null The underline
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
    * Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
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
