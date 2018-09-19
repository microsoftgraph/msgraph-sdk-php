<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetResourcePolicy File
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
* TargetResourcePolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TargetResourcePolicy extends TargetResource
{
    /**
    * Gets the policyType
    *
    * @return string The policyType
    */
    public function getPolicyType()
    {
        if (array_key_exists("policyType", $this->_propDict)) {
            return $this->_propDict["policyType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyType
    *
    * @param string $val The value of the policyType
    *
    * @return TargetResourcePolicy
    */
    public function setPolicyType($val)
    {
        $this->_propDict["policyType"] = $val;
        return $this;
    }
}
