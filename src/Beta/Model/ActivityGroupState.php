<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ActivityGroupState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* ActivityGroupState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ActivityGroupState extends Entity
{
    /**
    * Gets the aliases
    *
    * @return string The aliases
    */
    public function getAliases()
    {
        if (array_key_exists("aliases", $this->_propDict)) {
            return $this->_propDict["aliases"];
        } else {
            return null;
        }
    }

    /**
    * Sets the aliases
    *
    * @param string $val The value of the aliases
    *
    * @return ActivityGroupState
    */
    public function setAliases($val)
    {
        $this->_propDict["aliases"] = $val;
        return $this;
    }
    /**
    * Gets the name
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    *
    * @param string $val The value of the name
    *
    * @return ActivityGroupState
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
}
