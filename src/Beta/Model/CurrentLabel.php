<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CurrentLabel File
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
* CurrentLabel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class CurrentLabel extends Entity
{
    /**
    * Gets the id
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return CurrentLabel
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the applicationMode
    *
    * @return ApplicationMode The applicationMode
    */
    public function getApplicationMode()
    {
        if (array_key_exists("applicationMode", $this->_propDict)) {
            if (is_a($this->_propDict["applicationMode"], "Microsoft\Graph\Beta\Model\ApplicationMode")) {
                return $this->_propDict["applicationMode"];
            } else {
                $this->_propDict["applicationMode"] = new ApplicationMode($this->_propDict["applicationMode"]);
                return $this->_propDict["applicationMode"];
            }
        }
        return null;
    }

    /**
    * Sets the applicationMode
    *
    * @param ApplicationMode $val The value to assign to the applicationMode
    *
    * @return CurrentLabel The CurrentLabel
    */
    public function setApplicationMode($val)
    {
        $this->_propDict["applicationMode"] = $val;
         return $this;
    }
}
