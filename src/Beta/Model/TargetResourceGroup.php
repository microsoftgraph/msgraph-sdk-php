<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetResourceGroup File
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
* TargetResourceGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TargetResourceGroup extends TargetResource
{

    /**
    * Gets the groupType
    *
    * @return GroupType The groupType
    */
    public function getGroupType()
    {
        if (array_key_exists("groupType", $this->_propDict)) {
            if (is_a($this->_propDict["groupType"], "Microsoft\Graph\Beta\Model\GroupType")) {
                return $this->_propDict["groupType"];
            } else {
                $this->_propDict["groupType"] = new GroupType($this->_propDict["groupType"]);
                return $this->_propDict["groupType"];
            }
        }
        return null;
    }

    /**
    * Sets the groupType
    *
    * @param GroupType $val The value to assign to the groupType
    *
    * @return TargetResourceGroup The TargetResourceGroup
    */
    public function setGroupType($val)
    {
        $this->_propDict["groupType"] = $val;
         return $this;
    }
}
