<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppRelationship File
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
* MobileAppRelationship class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class MobileAppRelationship extends Entity
{
    /**
    * Gets the targetId
    * The target child mobile app's app id.
    *
    * @return string The targetId
    */
    public function getTargetId()
    {
        if (array_key_exists("targetId", $this->_propDict)) {
            return $this->_propDict["targetId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetId
    * The target child mobile app's app id.
    *
    * @param string $val The targetId
    *
    * @return MobileAppRelationship
    */
    public function setTargetId($val)
    {
        $this->_propDict["targetId"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetDisplayName
    * The target child mobile app's display name.
    *
    * @return string The targetDisplayName
    */
    public function getTargetDisplayName()
    {
        if (array_key_exists("targetDisplayName", $this->_propDict)) {
            return $this->_propDict["targetDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetDisplayName
    * The target child mobile app's display name.
    *
    * @param string $val The targetDisplayName
    *
    * @return MobileAppRelationship
    */
    public function setTargetDisplayName($val)
    {
        $this->_propDict["targetDisplayName"] = $val;
        return $this;
    }
    
}