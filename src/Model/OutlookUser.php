<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookUser File
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
* OutlookUser class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookUser extends Entity
{

     /** 
     * Gets the masterCategories
    * A list of categories defined for the user.
     *
     * @return OutlookCategory[]|null The masterCategories
     */
    public function getMasterCategories()
    {
        if (array_key_exists('masterCategories', $this->_propDict) && !is_null($this->_propDict['masterCategories'])) {
            $masterCategories = [];
            if (count($this->_propDict['masterCategories']) > 0 && is_a($this->_propDict['masterCategories'][0], 'OutlookCategory')) {
                return $this->_propDict['masterCategories'];
            }
            foreach ($this->_propDict['masterCategories'] as $singleValue) {
                $masterCategories []= new OutlookCategory($singleValue);
            }
            $this->_propDict['masterCategories'] = $masterCategories;
            return $this->_propDict['masterCategories'];
        }
        return null;
    }
    
    /** 
    * Sets the masterCategories
    * A list of categories defined for the user.
    *
    * @param OutlookCategory[] $val The masterCategories
    *
    * @return OutlookUser
    */
    public function setMasterCategories($val)
    {
        $this->_propDict["masterCategories"] = $val;
        return $this;
    }
    
}
