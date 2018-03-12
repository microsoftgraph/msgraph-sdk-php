<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobRestartCriteria File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* SynchronizationJobRestartCriteria class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
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
            if (is_a($this->_propDict["resetScope"], "Microsoft\Graph\Model\SynchronizationJobRestartScope")) {
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
