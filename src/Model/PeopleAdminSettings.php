<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PeopleAdminSettings File
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
* PeopleAdminSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PeopleAdminSettings extends Entity
{

     /**
     * Gets the profileCardProperties
     *
     * @return array|null The profileCardProperties
     */
    public function getProfileCardProperties()
    {
        if (array_key_exists("profileCardProperties", $this->_propDict)) {
           return $this->_propDict["profileCardProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileCardProperties
    *
    * @param ProfileCardProperty[] $val The profileCardProperties
    *
    * @return PeopleAdminSettings
    */
    public function setProfileCardProperties($val)
    {
        $this->_propDict["profileCardProperties"] = $val;
        return $this;
    }

}
