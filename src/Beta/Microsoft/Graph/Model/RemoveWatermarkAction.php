<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoveWatermarkAction File
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
* RemoveWatermarkAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoveWatermarkAction extends InformationProtectionAction
{
    /**
    * Gets the uiElementNames
    *
    * @return string The uiElementNames
    */
    public function getUiElementNames()
    {
        if (array_key_exists("uiElementNames", $this->_propDict)) {
            return $this->_propDict["uiElementNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uiElementNames
    *
    * @param string $val The value of the uiElementNames
    *
    * @return RemoveWatermarkAction
    */
    public function setUiElementNames($val)
    {
        $this->_propDict["uiElementNames"] = $val;
        return $this;
    }
}
