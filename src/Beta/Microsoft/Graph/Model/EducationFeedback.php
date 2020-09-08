<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFeedback File
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
* EducationFeedback class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationFeedback extends Entity
{

    /**
    * Gets the feedbackBy
    *
    * @return IdentitySet The feedbackBy
    */
    public function getFeedbackBy()
    {
        if (array_key_exists("feedbackBy", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackBy"], "Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["feedbackBy"];
            } else {
                $this->_propDict["feedbackBy"] = new IdentitySet($this->_propDict["feedbackBy"]);
                return $this->_propDict["feedbackBy"];
            }
        }
        return null;
    }

    /**
    * Sets the feedbackBy
    *
    * @param IdentitySet $val The value to assign to the feedbackBy
    *
    * @return EducationFeedback The EducationFeedback
    */
    public function setFeedbackBy($val)
    {
        $this->_propDict["feedbackBy"] = $val;
         return $this;
    }

    /**
    * Gets the feedbackDateTime
    *
    * @return \DateTime The feedbackDateTime
    */
    public function getFeedbackDateTime()
    {
        if (array_key_exists("feedbackDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackDateTime"], "\DateTime")) {
                return $this->_propDict["feedbackDateTime"];
            } else {
                $this->_propDict["feedbackDateTime"] = new \DateTime($this->_propDict["feedbackDateTime"]);
                return $this->_propDict["feedbackDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the feedbackDateTime
    *
    * @param \DateTime $val The value to assign to the feedbackDateTime
    *
    * @return EducationFeedback The EducationFeedback
    */
    public function setFeedbackDateTime($val)
    {
        $this->_propDict["feedbackDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the text
    *
    * @return EducationItemBody The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "Beta\Microsoft\Graph\Model\EducationItemBody")) {
                return $this->_propDict["text"];
            } else {
                $this->_propDict["text"] = new EducationItemBody($this->_propDict["text"]);
                return $this->_propDict["text"];
            }
        }
        return null;
    }

    /**
    * Sets the text
    *
    * @param EducationItemBody $val The value to assign to the text
    *
    * @return EducationFeedback The EducationFeedback
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
         return $this;
    }
}
