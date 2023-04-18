<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationCombinationConfiguration File
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
* AuthenticationCombinationConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationCombinationConfiguration extends Entity
{

     /**
     * Gets the appliesToCombinations
     *
     * @return array|null The appliesToCombinations
     */
    public function getAppliesToCombinations()
    {
        if (array_key_exists("appliesToCombinations", $this->_propDict)) {
           return $this->_propDict["appliesToCombinations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliesToCombinations
    *
    * @param AuthenticationMethodModes[] $val The appliesToCombinations
    *
    * @return AuthenticationCombinationConfiguration
    */
    public function setAppliesToCombinations($val)
    {
        $this->_propDict["appliesToCombinations"] = $val;
        return $this;
    }

}
