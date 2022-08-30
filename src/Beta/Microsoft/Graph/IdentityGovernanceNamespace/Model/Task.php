<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Task File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\IdentityGovernance\Model;

/**
* Task class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Task extends \Beta\Microsoft\Graph\Model\Entity
{

     /**
     * Gets the arguments
     *
     * @return array|null The arguments
     */
    public function getArguments()
    {
        if (array_key_exists("arguments", $this->_propDict)) {
           return $this->_propDict["arguments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the arguments
    *
    * @param \Beta\Microsoft\Graph\Model\KeyValuePair[] $val The arguments
    *
    * @return Task
    */
    public function setArguments($val)
    {
        $this->_propDict["arguments"] = $val;
        return $this;
    }

    /**
    * Gets the category
    *
    * @return LifecycleTaskCategory|null The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\IdentityGovernance\Model\LifecycleTaskCategory") || is_null($this->_propDict["category"])) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new LifecycleTaskCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }

    /**
    * Sets the category
    *
    * @param LifecycleTaskCategory $val The category
    *
    * @return Task
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }

    /**
    * Gets the continueOnError
    *
    * @return bool|null The continueOnError
    */
    public function getContinueOnError()
    {
        if (array_key_exists("continueOnError", $this->_propDict)) {
            return $this->_propDict["continueOnError"];
        } else {
            return null;
        }
    }

    /**
    * Sets the continueOnError
    *
    * @param bool $val The continueOnError
    *
    * @return Task
    */
    public function setContinueOnError($val)
    {
        $this->_propDict["continueOnError"] = boolval($val);
        return $this;
    }

    /**
    * Gets the description
    *
    * @return string|null The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    *
    * @param string $val The description
    *
    * @return Task
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }

    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return Task
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the executionSequence
    *
    * @return int|null The executionSequence
    */
    public function getExecutionSequence()
    {
        if (array_key_exists("executionSequence", $this->_propDict)) {
            return $this->_propDict["executionSequence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the executionSequence
    *
    * @param int $val The executionSequence
    *
    * @return Task
    */
    public function setExecutionSequence($val)
    {
        $this->_propDict["executionSequence"] = intval($val);
        return $this;
    }

    /**
    * Gets the isEnabled
    *
    * @return bool|null The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isEnabled
    *
    * @param bool $val The isEnabled
    *
    * @return Task
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the taskDefinitionId
    *
    * @return string|null The taskDefinitionId
    */
    public function getTaskDefinitionId()
    {
        if (array_key_exists("taskDefinitionId", $this->_propDict)) {
            return $this->_propDict["taskDefinitionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taskDefinitionId
    *
    * @param string $val The taskDefinitionId
    *
    * @return Task
    */
    public function setTaskDefinitionId($val)
    {
        $this->_propDict["taskDefinitionId"] = $val;
        return $this;
    }


     /**
     * Gets the taskProcessingResults
     *
     * @return array|null The taskProcessingResults
     */
    public function getTaskProcessingResults()
    {
        if (array_key_exists("taskProcessingResults", $this->_propDict)) {
           return $this->_propDict["taskProcessingResults"];
        } else {
            return null;
        }
    }

    /**
    * Sets the taskProcessingResults
    *
    * @param TaskProcessingResult[] $val The taskProcessingResults
    *
    * @return Task
    */
    public function setTaskProcessingResults($val)
    {
        $this->_propDict["taskProcessingResults"] = $val;
        return $this;
    }

}
