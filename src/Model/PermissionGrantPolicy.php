<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionGrantPolicy File
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
* PermissionGrantPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionGrantPolicy extends PolicyBase
{

     /**
     * Gets the excludes
    * Condition sets which are excluded in this permission grant policy. Automatically expanded on GET.
     *
     * @return PermissionGrantConditionSet[]|null The excludes
     */
    public function getExcludes()
    {
        if (array_key_exists('excludes', $this->_propDict) && !is_null($this->_propDict['excludes'])) {
            $excludes = [];
            if (count($this->_propDict['excludes']) > 0 && is_a($this->_propDict['excludes'][0], 'PermissionGrantConditionSet')) {
                return $this->_propDict['excludes'];
            }
            foreach ($this->_propDict['excludes'] as $singleValue) {
                $excludes []= new PermissionGrantConditionSet($singleValue);
            }
            $this->_propDict['excludes'] = $excludes;
            return $this->_propDict['excludes'];
        }
        return null;
    }

    /**
    * Sets the excludes
    * Condition sets which are excluded in this permission grant policy. Automatically expanded on GET.
    *
    * @param PermissionGrantConditionSet[] $val The excludes
    *
    * @return PermissionGrantPolicy
    */
    public function setExcludes($val)
    {
        $this->_propDict["excludes"] = $val;
        return $this;
    }


     /**
     * Gets the includes
    * Condition sets which are included in this permission grant policy. Automatically expanded on GET.
     *
     * @return PermissionGrantConditionSet[]|null The includes
     */
    public function getIncludes()
    {
        if (array_key_exists('includes', $this->_propDict) && !is_null($this->_propDict['includes'])) {
            $includes = [];
            if (count($this->_propDict['includes']) > 0 && is_a($this->_propDict['includes'][0], 'PermissionGrantConditionSet')) {
                return $this->_propDict['includes'];
            }
            foreach ($this->_propDict['includes'] as $singleValue) {
                $includes []= new PermissionGrantConditionSet($singleValue);
            }
            $this->_propDict['includes'] = $includes;
            return $this->_propDict['includes'];
        }
        return null;
    }

    /**
    * Sets the includes
    * Condition sets which are included in this permission grant policy. Automatically expanded on GET.
    *
    * @param PermissionGrantConditionSet[] $val The includes
    *
    * @return PermissionGrantPolicy
    */
    public function setIncludes($val)
    {
        $this->_propDict["includes"] = $val;
        return $this;
    }

}
