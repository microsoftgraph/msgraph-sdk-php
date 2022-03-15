<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentApprovalSettings File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* AccessPackageAssignmentApprovalSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentApprovalSettings extends Entity
{
    /**
    * Gets the isApprovalRequiredForAdd
    *
    * @return bool|null The isApprovalRequiredForAdd
    */
    public function getIsApprovalRequiredForAdd()
    {
        if (array_key_exists("isApprovalRequiredForAdd", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForAdd"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForAdd
    *
    * @param bool $val The value of the isApprovalRequiredForAdd
    *
    * @return AccessPackageAssignmentApprovalSettings
    */
    public function setIsApprovalRequiredForAdd($val)
    {
        $this->_propDict["isApprovalRequiredForAdd"] = $val;
        return $this;
    }
    /**
    * Gets the isApprovalRequiredForUpdate
    *
    * @return bool|null The isApprovalRequiredForUpdate
    */
    public function getIsApprovalRequiredForUpdate()
    {
        if (array_key_exists("isApprovalRequiredForUpdate", $this->_propDict)) {
            return $this->_propDict["isApprovalRequiredForUpdate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isApprovalRequiredForUpdate
    *
    * @param bool $val The value of the isApprovalRequiredForUpdate
    *
    * @return AccessPackageAssignmentApprovalSettings
    */
    public function setIsApprovalRequiredForUpdate($val)
    {
        $this->_propDict["isApprovalRequiredForUpdate"] = $val;
        return $this;
    }

    /**
    * Gets the stages
    *
    * @return AccessPackageApprovalStage|null The stages
    */
    public function getStages()
    {
        if (array_key_exists("stages", $this->_propDict)) {
            if (is_a($this->_propDict["stages"], "\Microsoft\Graph\Model\AccessPackageApprovalStage") || is_null($this->_propDict["stages"])) {
                return $this->_propDict["stages"];
            } else {
                $this->_propDict["stages"] = new AccessPackageApprovalStage($this->_propDict["stages"]);
                return $this->_propDict["stages"];
            }
        }
        return null;
    }

    /**
    * Sets the stages
    *
    * @param AccessPackageApprovalStage $val The value to assign to the stages
    *
    * @return AccessPackageAssignmentApprovalSettings The AccessPackageAssignmentApprovalSettings
    */
    public function setStages($val)
    {
        $this->_propDict["stages"] = $val;
         return $this;
    }
}
