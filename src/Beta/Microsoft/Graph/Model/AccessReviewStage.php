<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewStage File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* AccessReviewStage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewStage extends Entity
{
    /**
    * Gets the endDateTime
    *
    * @return \DateTime|null The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime") || is_null($this->_propDict["endDateTime"])) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endDateTime
    *
    * @param \DateTime $val The endDateTime
    *
    * @return AccessReviewStage
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }


     /**
     * Gets the fallbackReviewers
     *
     * @return array|null The fallbackReviewers
     */
    public function getFallbackReviewers()
    {
        if (array_key_exists("fallbackReviewers", $this->_propDict)) {
           return $this->_propDict["fallbackReviewers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fallbackReviewers
    *
    * @param AccessReviewReviewerScope[] $val The fallbackReviewers
    *
    * @return AccessReviewStage
    */
    public function setFallbackReviewers($val)
    {
        $this->_propDict["fallbackReviewers"] = $val;
        return $this;
    }


     /**
     * Gets the reviewers
     *
     * @return array|null The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
           return $this->_propDict["reviewers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the reviewers
    *
    * @param AccessReviewReviewerScope[] $val The reviewers
    *
    * @return AccessReviewStage
    */
    public function setReviewers($val)
    {
        $this->_propDict["reviewers"] = $val;
        return $this;
    }

    /**
    * Gets the startDateTime
    *
    * @return \DateTime|null The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime") || is_null($this->_propDict["startDateTime"])) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    *
    * @param \DateTime $val The startDateTime
    *
    * @return AccessReviewStage
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the status
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    *
    * @param string $val The status
    *
    * @return AccessReviewStage
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }


     /**
     * Gets the decisions
     *
     * @return array|null The decisions
     */
    public function getDecisions()
    {
        if (array_key_exists("decisions", $this->_propDict)) {
           return $this->_propDict["decisions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decisions
    *
    * @param AccessReviewInstanceDecisionItem[] $val The decisions
    *
    * @return AccessReviewStage
    */
    public function setDecisions($val)
    {
        $this->_propDict["decisions"] = $val;
        return $this;
    }

}
