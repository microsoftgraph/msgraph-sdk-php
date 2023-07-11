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
namespace Beta\Microsoft\Graph\Model;

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
    * Gets the pronouns
    * Represents administrator settings that manage the support of pronouns in an organization.
    *
    * @return PronounsSettings|null The pronouns
    */
    public function getPronouns()
    {
        if (array_key_exists("pronouns", $this->_propDict)) {
            if (is_a($this->_propDict["pronouns"], "\Beta\Microsoft\Graph\Model\PronounsSettings") || is_null($this->_propDict["pronouns"])) {
                return $this->_propDict["pronouns"];
            } else {
                $this->_propDict["pronouns"] = new PronounsSettings($this->_propDict["pronouns"]);
                return $this->_propDict["pronouns"];
            }
        }
        return null;
    }

    /**
    * Sets the pronouns
    * Represents administrator settings that manage the support of pronouns in an organization.
    *
    * @param PronounsSettings $val The pronouns
    *
    * @return PeopleAdminSettings
    */
    public function setPronouns($val)
    {
        $this->_propDict["pronouns"] = $val;
        return $this;
    }

}
