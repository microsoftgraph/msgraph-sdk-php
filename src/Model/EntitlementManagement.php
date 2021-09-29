<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EntitlementManagement File
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
* EntitlementManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EntitlementManagement extends Entity
{

     /** 
     * Gets the accessPackageAssignmentApprovals
     *
     * @return Approval[]|null The accessPackageAssignmentApprovals
     */
    public function getAccessPackageAssignmentApprovals()
    {
        if (array_key_exists('accessPackageAssignmentApprovals', $this->_propDict) && !is_null($this->_propDict['accessPackageAssignmentApprovals'])) {
            $accessPackageAssignmentApprovals = [];
            if (count($this->_propDict['accessPackageAssignmentApprovals']) > 0 && is_a($this->_propDict['accessPackageAssignmentApprovals'][0], 'Approval')) {
                return $this->_propDict['accessPackageAssignmentApprovals'];
            }
            foreach ($this->_propDict['accessPackageAssignmentApprovals'] as $singleValue) {
                $accessPackageAssignmentApprovals []= new Approval($singleValue);
            }
            $this->_propDict['accessPackageAssignmentApprovals'] = $accessPackageAssignmentApprovals;
            return $this->_propDict['accessPackageAssignmentApprovals'];
        }
        return null;
    }
    
    /** 
    * Sets the accessPackageAssignmentApprovals
    *
    * @param Approval[] $val The accessPackageAssignmentApprovals
    *
    * @return EntitlementManagement
    */
    public function setAccessPackageAssignmentApprovals($val)
    {
        $this->_propDict["accessPackageAssignmentApprovals"] = $val;
        return $this;
    }
    
}
