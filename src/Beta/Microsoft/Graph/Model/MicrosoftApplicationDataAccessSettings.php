<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftApplicationDataAccessSettings File
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
* MicrosoftApplicationDataAccessSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftApplicationDataAccessSettings extends Entity
{
    /**
    * Gets the disabledForGroup
    *
    * @return string|null The disabledForGroup
    */
    public function getDisabledForGroup()
    {
        if (array_key_exists("disabledForGroup", $this->_propDict)) {
            return $this->_propDict["disabledForGroup"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disabledForGroup
    *
    * @param string $val The disabledForGroup
    *
    * @return MicrosoftApplicationDataAccessSettings
    */
    public function setDisabledForGroup($val)
    {
        $this->_propDict["disabledForGroup"] = $val;
        return $this;
    }

    /**
    * Gets the isEnabledForAllMicrosoftApplications
    *
    * @return bool|null The isEnabledForAllMicrosoftApplications
    */
    public function getIsEnabledForAllMicrosoftApplications()
    {
        if (array_key_exists("isEnabledForAllMicrosoftApplications", $this->_propDict)) {
            return $this->_propDict["isEnabledForAllMicrosoftApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabledForAllMicrosoftApplications
    *
    * @param bool $val The isEnabledForAllMicrosoftApplications
    *
    * @return MicrosoftApplicationDataAccessSettings
    */
    public function setIsEnabledForAllMicrosoftApplications($val)
    {
        $this->_propDict["isEnabledForAllMicrosoftApplications"] = boolval($val);
        return $this;
    }

}
