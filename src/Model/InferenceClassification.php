<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* InferenceClassification File
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
* InferenceClassification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class InferenceClassification extends Entity
{

     /**
     * Gets the overrides
    * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     *
     * @return InferenceClassificationOverride[]|null The overrides
     */
    public function getOverrides()
    {
        if (array_key_exists('overrides', $this->_propDict) && !is_null($this->_propDict['overrides'])) {
            $overrides = [];
            if (count($this->_propDict['overrides']) > 0 && is_a($this->_propDict['overrides'][0], 'InferenceClassificationOverride')) {
                return $this->_propDict['overrides'];
            }
            foreach ($this->_propDict['overrides'] as $singleValue) {
                $overrides []= new InferenceClassificationOverride($singleValue);
            }
            $this->_propDict['overrides'] = $overrides;
            return $this->_propDict['overrides'];
        }
        return null;
    }

    /**
    * Sets the overrides
    * A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
    *
    * @param InferenceClassificationOverride[] $val The overrides
    *
    * @return InferenceClassification
    */
    public function setOverrides($val)
    {
        $this->_propDict["overrides"] = $val;
        return $this;
    }

}
