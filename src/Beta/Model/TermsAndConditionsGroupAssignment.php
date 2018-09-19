<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TermsAndConditionsGroupAssignment File
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
* TermsAndConditionsGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class TermsAndConditionsGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    *
    * @param string $val The targetGroupId
    *
    * @return TermsAndConditionsGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the termsAndConditions
    *
    * @return TermsAndConditions The termsAndConditions
    */
    public function getTermsAndConditions()
    {
        if (array_key_exists("termsAndConditions", $this->_propDict)) {
            if (is_a($this->_propDict["termsAndConditions"], "Microsoft\Graph\Beta\Model\TermsAndConditions")) {
                return $this->_propDict["termsAndConditions"];
            } else {
                $this->_propDict["termsAndConditions"] = new TermsAndConditions($this->_propDict["termsAndConditions"]);
                return $this->_propDict["termsAndConditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the termsAndConditions
    *
    * @param TermsAndConditions $val The termsAndConditions
    *
    * @return TermsAndConditionsGroupAssignment
    */
    public function setTermsAndConditions($val)
    {
        $this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
}