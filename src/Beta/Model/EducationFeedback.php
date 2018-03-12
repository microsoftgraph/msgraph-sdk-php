<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFeedback File
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
* EducationFeedback class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationFeedback extends Entity
{

    /**
    * Gets the text
    *
    * @return EducationItemBody The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            if (is_a($this->_propDict["text"], "Microsoft\Graph\Model\EducationItemBody")) {
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

    /**
    * Gets the feedbackDateTime
    *
    * @return \DateTime The feedbackDateTime
    */
    public function getFeedbackDateTime()
    {
        if (array_key_exists("feedbackDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackDateTime"], "Microsoft\Graph\Model\\DateTime")) {
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
    * Gets the feedbackBy
    *
    * @return IdentitySet The feedbackBy
    */
    public function getFeedbackBy()
    {
        if (array_key_exists("feedbackBy", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackBy"], "Microsoft\Graph\Model\IdentitySet")) {
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
}
