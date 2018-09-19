<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobRestartCriteria File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SynchronizationJobRestartCriteria class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class SynchronizationJobRestartCriteria extends Entity
{

    /**
    * Gets the resetScope
    *
    * @return SynchronizationJobRestartScope The resetScope
    */
    public function getResetScope()
    {
        if (array_key_exists("resetScope", $this->_propDict)) {
            if (is_a($this->_propDict["resetScope"], "Microsoft\Graph\Beta\Model\SynchronizationJobRestartScope")) {
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
