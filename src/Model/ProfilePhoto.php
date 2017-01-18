<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ProfilePhoto File
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
* ProfilePhoto class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ProfilePhoto extends Entity
{
    /**
    * Gets the property dictionary of the ProfilePhoto
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the height
    *
    * @return int The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }

    /**
    * Sets the height
    *
    * @param int $val The height
    *
    * @return ProfilePhoto
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = intval($val);
        return $this;
    }

    /**
    * Gets the width
    *
    * @return int The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }

    /**
    * Sets the width
    *
    * @param int $val The width
    *
    * @return ProfilePhoto
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = intval($val);
        return $this;
    }
}