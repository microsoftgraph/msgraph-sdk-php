<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ContentMarkingAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ContentMarkingAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ContentMarkingAction extends LabelActionBase
{
    /**
    * Gets the placement
    *
    * @return string The placement
    */
    public function getPlacement()
    {
        if (array_key_exists("placement", $this->_propDict)) {
            return $this->_propDict["placement"];
        } else {
            return null;
        }
    }

    /**
    * Sets the placement
    *
    * @param string $val The value of the placement
    *
    * @return ContentMarkingAction
    */
    public function setPlacement($val)
    {
        $this->_propDict["placement"] = $val;
        return $this;
    }
    /**
    * Gets the fontSize
    *
    * @return int The fontSize
    */
    public function getFontSize()
    {
        if (array_key_exists("fontSize", $this->_propDict)) {
            return $this->_propDict["fontSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontSize
    *
    * @param int $val The value of the fontSize
    *
    * @return ContentMarkingAction
    */
    public function setFontSize($val)
    {
        $this->_propDict["fontSize"] = $val;
        return $this;
    }
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    *
    * @param string $val The value of the text
    *
    * @return ContentMarkingAction
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    /**
    * Gets the fontColor
    *
    * @return string The fontColor
    */
    public function getFontColor()
    {
        if (array_key_exists("fontColor", $this->_propDict)) {
            return $this->_propDict["fontColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontColor
    *
    * @param string $val The value of the fontColor
    *
    * @return ContentMarkingAction
    */
    public function setFontColor($val)
    {
        $this->_propDict["fontColor"] = $val;
        return $this;
    }
    /**
    * Gets the margin
    *
    * @return int The margin
    */
    public function getMargin()
    {
        if (array_key_exists("margin", $this->_propDict)) {
            return $this->_propDict["margin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the margin
    *
    * @param int $val The value of the margin
    *
    * @return ContentMarkingAction
    */
    public function setMargin($val)
    {
        $this->_propDict["margin"] = $val;
        return $this;
    }
    /**
    * Gets the alignment
    *
    * @return string The alignment
    */
    public function getAlignment()
    {
        if (array_key_exists("alignment", $this->_propDict)) {
            return $this->_propDict["alignment"];
        } else {
            return null;
        }
    }

    /**
    * Sets the alignment
    *
    * @param string $val The value of the alignment
    *
    * @return ContentMarkingAction
    */
    public function setAlignment($val)
    {
        $this->_propDict["alignment"] = $val;
        return $this;
    }
}
