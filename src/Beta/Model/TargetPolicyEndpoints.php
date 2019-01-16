<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetPolicyEndpoints File
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
* TargetPolicyEndpoints class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TargetPolicyEndpoints extends Entity
{
    /**
    * Gets the platformTypes
    *
    * @return string The platformTypes
    */
    public function getPlatformTypes()
    {
        if (array_key_exists("platformTypes", $this->_propDict)) {
            return $this->_propDict["platformTypes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platformTypes
    *
    * @param string $val The value of the platformTypes
    *
    * @return TargetPolicyEndpoints
    */
    public function setPlatformTypes($val)
    {
        $this->_propDict["platformTypes"] = $val;
        return $this;
    }
}
