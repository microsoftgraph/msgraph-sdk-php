<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MdmAppConfigGroupAssignment File
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
* MdmAppConfigGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MdmAppConfigGroupAssignment extends Entity
{
    /**
    * Gets the appConfiguration
    *
    * @return string The appConfiguration
    */
    public function getAppConfiguration()
    {
        if (array_key_exists("appConfiguration", $this->_propDict)) {
            return $this->_propDict["appConfiguration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appConfiguration
    *
    * @param string $val The appConfiguration
    *
    * @return MdmAppConfigGroupAssignment
    */
    public function setAppConfiguration($val)
    {
        $this->_propDict["appConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetGroupId
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    *
    * @param string $val The targetGroupId
    *
    * @return MdmAppConfigGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
}