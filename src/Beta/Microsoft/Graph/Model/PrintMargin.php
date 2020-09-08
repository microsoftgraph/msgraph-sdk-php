<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintMargin File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* PrintMargin class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintMargin extends Entity
{
    /**
    * Gets the bottom
    *
    * @return int The bottom
    */
    public function getBottom()
    {
        if (array_key_exists("bottom", $this->_propDict)) {
            return $this->_propDict["bottom"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bottom
    *
    * @param int $val The value of the bottom
    *
    * @return PrintMargin
    */
    public function setBottom($val)
    {
        $this->_propDict["bottom"] = $val;
        return $this;
    }
    /**
    * Gets the left
    *
    * @return int The left
    */
    public function getLeft()
    {
        if (array_key_exists("left", $this->_propDict)) {
            return $this->_propDict["left"];
        } else {
            return null;
        }
    }

    /**
    * Sets the left
    *
    * @param int $val The value of the left
    *
    * @return PrintMargin
    */
    public function setLeft($val)
    {
        $this->_propDict["left"] = $val;
        return $this;
    }
    /**
    * Gets the right
    *
    * @return int The right
    */
    public function getRight()
    {
        if (array_key_exists("right", $this->_propDict)) {
            return $this->_propDict["right"];
        } else {
            return null;
        }
    }

    /**
    * Sets the right
    *
    * @param int $val The value of the right
    *
    * @return PrintMargin
    */
    public function setRight($val)
    {
        $this->_propDict["right"] = $val;
        return $this;
    }
    /**
    * Gets the top
    *
    * @return int The top
    */
    public function getTop()
    {
        if (array_key_exists("top", $this->_propDict)) {
            return $this->_propDict["top"];
        } else {
            return null;
        }
    }

    /**
    * Sets the top
    *
    * @param int $val The value of the top
    *
    * @return PrintMargin
    */
    public function setTop($val)
    {
        $this->_propDict["top"] = $val;
        return $this;
    }
}
