<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobRestartCriteria File
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
* SynchronizationJobRestartCriteria class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJobRestartCriteria extends Entity
{

    /**
    * Gets the resetScope
    *
    * @return SynchronizationJobRestartScope|null The resetScope
    */
    public function getResetScope()
    {
        if (array_key_exists("resetScope", $this->_propDict)) {
            if (is_a($this->_propDict["resetScope"], "\Microsoft\Graph\Model\SynchronizationJobRestartScope") || is_null($this->_propDict["resetScope"])) {
                return $this->_propDict["resetScope"];
            } else {
                $this->_propDict["resetScope"] = new SynchronizationJobRestartScope($this->_propDict["resetScope"]);
                return $this->_propDict["resetScope"];
            }
        }
        return null;
    }

    /**
    * Sets the resetScope
    *
    * @param SynchronizationJobRestartScope $val The value to assign to the resetScope
    *
    * @return SynchronizationJobRestartCriteria The SynchronizationJobRestartCriteria
    */
    public function setResetScope($val)
    {
        $this->_propDict["resetScope"] = $val;
         return $this;
    }
}
