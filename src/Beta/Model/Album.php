<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Album File
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
* Album class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class Album extends Entity
{
    /**
    * Gets the coverImageItemId
    *
    * @return string The coverImageItemId
    */
    public function getCoverImageItemId()
    {
        if (array_key_exists("coverImageItemId", $this->_propDict)) {
            return $this->_propDict["coverImageItemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the coverImageItemId
    *
    * @param string $val The value of the coverImageItemId
    *
    * @return Album
    */
    public function setCoverImageItemId($val)
    {
        $this->_propDict["coverImageItemId"] = $val;
        return $this;
    }
}
