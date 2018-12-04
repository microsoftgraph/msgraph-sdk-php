<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocationConstraintItem File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* LocationConstraintItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LocationConstraintItem extends Location
{
    /**
    * Gets the resolveAvailability
    *
    * @return bool The resolveAvailability
    */
    public function getResolveAvailability()
    {
        if (array_key_exists("resolveAvailability", $this->_propDict)) {
            return $this->_propDict["resolveAvailability"];
        } else {
            return null;
        }
    }

    /**
    * Sets the resolveAvailability
    *
    * @param bool $val The value of the resolveAvailability
    *
    * @return LocationConstraintItem
    */
    public function setResolveAvailability($val)
    {
        $this->_propDict["resolveAvailability"] = $val;
        return $this;
    }
}
