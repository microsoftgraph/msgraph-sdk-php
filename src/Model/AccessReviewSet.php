<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewSet File
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
* AccessReviewSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewSet extends Entity
{

     /**
     * Gets the definitions
    * Represents the template and scheduling for an access review.
     *
     * @return AccessReviewScheduleDefinition[]|null The definitions
     */
    public function getDefinitions()
    {
        if (array_key_exists('definitions', $this->_propDict) && !is_null($this->_propDict['definitions'])) {
            $definitions = [];
            if (count($this->_propDict['definitions']) > 0 && is_a($this->_propDict['definitions'][0], 'AccessReviewScheduleDefinition')) {
                return $this->_propDict['definitions'];
            }
            foreach ($this->_propDict['definitions'] as $singleValue) {
                $definitions []= new AccessReviewScheduleDefinition($singleValue);
            }
            $this->_propDict['definitions'] = $definitions;
            return $this->_propDict['definitions'];
        }
        return null;
    }

    /**
    * Sets the definitions
    * Represents the template and scheduling for an access review.
    *
    * @param AccessReviewScheduleDefinition[] $val The definitions
    *
    * @return AccessReviewSet
    */
    public function setDefinitions($val)
    {
        $this->_propDict["definitions"] = $val;
        return $this;
    }

}
