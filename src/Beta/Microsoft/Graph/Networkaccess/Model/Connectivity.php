<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Connectivity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Networkaccess\Model;

/**
* Connectivity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Connectivity extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the branches
    * Branches represent locations for connectivity.
     *
     * @return array|null The branches
     */
    public function getBranches()
    {
        if (array_key_exists("branches", $this->_propDict)) {
           return $this->_propDict["branches"];
        } else {
            return null;
        }
    }

    /**
    * Sets the branches
    * Branches represent locations for connectivity.
    *
    * @param BranchSite[] $val The branches
    *
    * @return Connectivity
    */
    public function setBranches($val)
    {
        $this->_propDict["branches"] = $val;
        return $this;
    }

}
