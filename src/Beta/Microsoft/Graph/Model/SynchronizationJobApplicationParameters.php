<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SynchronizationJobApplicationParameters File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* SynchronizationJobApplicationParameters class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SynchronizationJobApplicationParameters extends Entity
{
    /**
    * Gets the ruleId
    *
    * @return string The ruleId
    */
    public function getRuleId()
    {
        if (array_key_exists("ruleId", $this->_propDict)) {
            return $this->_propDict["ruleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleId
    *
    * @param string $val The value of the ruleId
    *
    * @return SynchronizationJobApplicationParameters
    */
    public function setRuleId($val)
    {
        $this->_propDict["ruleId"] = $val;
        return $this;
    }

    /**
    * Gets the subjects
    *
    * @return SynchronizationJobSubject The subjects
    */
    public function getSubjects()
    {
        if (array_key_exists("subjects", $this->_propDict)) {
            if (is_a($this->_propDict["subjects"], "Beta\Microsoft\Graph\Model\SynchronizationJobSubject")) {
                return $this->_propDict["subjects"];
            } else {
                $this->_propDict["subjects"] = new SynchronizationJobSubject($this->_propDict["subjects"]);
                return $this->_propDict["subjects"];
            }
        }
        return null;
    }

    /**
    * Sets the subjects
    *
    * @param SynchronizationJobSubject $val The value to assign to the subjects
    *
    * @return SynchronizationJobApplicationParameters The SynchronizationJobApplicationParameters
    */
    public function setSubjects($val)
    {
        $this->_propDict["subjects"] = $val;
         return $this;
    }
}
