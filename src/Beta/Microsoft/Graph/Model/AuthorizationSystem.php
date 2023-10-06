<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthorizationSystem File
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
* AuthorizationSystem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthorizationSystem extends Entity
{
    /**
    * Gets the authorizationSystemId
    *
    * @return string|null The authorizationSystemId
    */
    public function getAuthorizationSystemId()
    {
        if (array_key_exists("authorizationSystemId", $this->_propDict)) {
            return $this->_propDict["authorizationSystemId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizationSystemId
    *
    * @param string $val The authorizationSystemId
    *
    * @return AuthorizationSystem
    */
    public function setAuthorizationSystemId($val)
    {
        $this->_propDict["authorizationSystemId"] = $val;
        return $this;
    }

    /**
    * Gets the authorizationSystemName
    *
    * @return string|null The authorizationSystemName
    */
    public function getAuthorizationSystemName()
    {
        if (array_key_exists("authorizationSystemName", $this->_propDict)) {
            return $this->_propDict["authorizationSystemName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizationSystemName
    *
    * @param string $val The authorizationSystemName
    *
    * @return AuthorizationSystem
    */
    public function setAuthorizationSystemName($val)
    {
        $this->_propDict["authorizationSystemName"] = $val;
        return $this;
    }

    /**
    * Gets the authorizationSystemType
    *
    * @return string|null The authorizationSystemType
    */
    public function getAuthorizationSystemType()
    {
        if (array_key_exists("authorizationSystemType", $this->_propDict)) {
            return $this->_propDict["authorizationSystemType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the authorizationSystemType
    *
    * @param string $val The authorizationSystemType
    *
    * @return AuthorizationSystem
    */
    public function setAuthorizationSystemType($val)
    {
        $this->_propDict["authorizationSystemType"] = $val;
        return $this;
    }

    /**
    * Gets the dataCollectionInfo
    *
    * @return DataCollectionInfo|null The dataCollectionInfo
    */
    public function getDataCollectionInfo()
    {
        if (array_key_exists("dataCollectionInfo", $this->_propDict)) {
            if (is_a($this->_propDict["dataCollectionInfo"], "\Beta\Microsoft\Graph\Model\DataCollectionInfo") || is_null($this->_propDict["dataCollectionInfo"])) {
                return $this->_propDict["dataCollectionInfo"];
            } else {
                $this->_propDict["dataCollectionInfo"] = new DataCollectionInfo($this->_propDict["dataCollectionInfo"]);
                return $this->_propDict["dataCollectionInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the dataCollectionInfo
    *
    * @param DataCollectionInfo $val The dataCollectionInfo
    *
    * @return AuthorizationSystem
    */
    public function setDataCollectionInfo($val)
    {
        $this->_propDict["dataCollectionInfo"] = $val;
        return $this;
    }

}
