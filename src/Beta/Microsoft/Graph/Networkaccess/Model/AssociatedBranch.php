<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssociatedBranch File
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
* AssociatedBranch class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssociatedBranch extends Association
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.networkaccess.associatedBranch");
    }

    /**
    * Gets the branchId
    *
    * @return string|null The branchId
    */
    public function getBranchId()
    {
        if (array_key_exists("branchId", $this->_propDict)) {
            return $this->_propDict["branchId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the branchId
    *
    * @param string $val The value of the branchId
    *
    * @return AssociatedBranch
    */
    public function setBranchId($val)
    {
        $this->_propDict["branchId"] = $val;
        return $this;
    }
}
