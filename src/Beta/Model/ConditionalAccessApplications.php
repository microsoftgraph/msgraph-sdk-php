<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessApplications File
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
* ConditionalAccessApplications class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ConditionalAccessApplications extends Entity
{
    /**
    * Gets the includeApplications
    *
    * @return string The includeApplications
    */
    public function getIncludeApplications()
    {
        if (array_key_exists("includeApplications", $this->_propDict)) {
            return $this->_propDict["includeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeApplications
    *
    * @param string $val The value of the includeApplications
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeApplications($val)
    {
        $this->_propDict["includeApplications"] = $val;
        return $this;
    }
    /**
    * Gets the excludeApplications
    *
    * @return string The excludeApplications
    */
    public function getExcludeApplications()
    {
        if (array_key_exists("excludeApplications", $this->_propDict)) {
            return $this->_propDict["excludeApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludeApplications
    *
    * @param string $val The value of the excludeApplications
    *
    * @return ConditionalAccessApplications
    */
    public function setExcludeApplications($val)
    {
        $this->_propDict["excludeApplications"] = $val;
        return $this;
    }
    /**
    * Gets the includeUserActions
    *
    * @return string The includeUserActions
    */
    public function getIncludeUserActions()
    {
        if (array_key_exists("includeUserActions", $this->_propDict)) {
            return $this->_propDict["includeUserActions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the includeUserActions
    *
    * @param string $val The value of the includeUserActions
    *
    * @return ConditionalAccessApplications
    */
    public function setIncludeUserActions($val)
    {
        $this->_propDict["includeUserActions"] = $val;
        return $this;
    }
}
