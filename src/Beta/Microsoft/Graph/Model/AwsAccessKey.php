<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AwsAccessKey File
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
* AwsAccessKey class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AwsAccessKey extends AwsIdentity
{
    /**
    * Gets the owner
    *
    * @return AwsUser|null The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            if (is_a($this->_propDict["owner"], "\Beta\Microsoft\Graph\Model\AwsUser") || is_null($this->_propDict["owner"])) {
                return $this->_propDict["owner"];
            } else {
                $this->_propDict["owner"] = new AwsUser($this->_propDict["owner"]);
                return $this->_propDict["owner"];
            }
        }
        return null;
    }

    /**
    * Sets the owner
    *
    * @param AwsUser $val The owner
    *
    * @return AwsAccessKey
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }

}
