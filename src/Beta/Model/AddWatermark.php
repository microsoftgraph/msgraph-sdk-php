<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddWatermark File
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
* AddWatermark class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AddWatermark extends MarkContent
{

    /**
    * Gets the orientation
    *
    * @return PageOrientation The orientation
    */
    public function getOrientation()
    {
        if (array_key_exists("orientation", $this->_propDict)) {
            if (is_a($this->_propDict["orientation"], "Microsoft\Graph\Beta\Model\PageOrientation")) {
                return $this->_propDict["orientation"];
            } else {
                $this->_propDict["orientation"] = new PageOrientation($this->_propDict["orientation"]);
                return $this->_propDict["orientation"];
            }
        }
        return null;
    }

    /**
    * Sets the orientation
    *
    * @param PageOrientation $val The value to assign to the orientation
    *
    * @return AddWatermark The AddWatermark
    */
    public function setOrientation($val)
    {
        $this->_propDict["orientation"] = $val;
         return $this;
    }
}
