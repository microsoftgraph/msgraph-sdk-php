<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ChatMessagePolicyViolation File
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
* ChatMessagePolicyViolation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class ChatMessagePolicyViolation extends Entity
{

    /**
    * Gets the dlpAction
    *
    * @return ChatMessagePolicyViolationDlpActionTypes The dlpAction
    */
    public function getDlpAction()
    {
        if (array_key_exists("dlpAction", $this->_propDict)) {
            if (is_a($this->_propDict["dlpAction"], "Microsoft\Graph\Beta\Model\ChatMessagePolicyViolationDlpActionTypes")) {
                return $this->_propDict["dlpAction"];
            } else {
                $this->_propDict["dlpAction"] = new ChatMessagePolicyViolationDlpActionTypes($this->_propDict["dlpAction"]);
                return $this->_propDict["dlpAction"];
            }
        }
        return null;
    }

    /**
    * Sets the dlpAction
    *
    * @param ChatMessagePolicyViolationDlpActionTypes $val The value to assign to the dlpAction
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setDlpAction($val)
    {
        $this->_propDict["dlpAction"] = $val;
         return $this;
    }
    /**
    * Gets the justificationText
    *
    * @return string The justificationText
    */
    public function getJustificationText()
    {
        if (array_key_exists("justificationText", $this->_propDict)) {
            return $this->_propDict["justificationText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the justificationText
    *
    * @param string $val The value of the justificationText
    *
    * @return ChatMessagePolicyViolation
    */
    public function setJustificationText($val)
    {
        $this->_propDict["justificationText"] = $val;
        return $this;
    }

    /**
    * Gets the policyTip
    *
    * @return ChatMessagePolicyViolationPolicyTip The policyTip
    */
    public function getPolicyTip()
    {
        if (array_key_exists("policyTip", $this->_propDict)) {
            if (is_a($this->_propDict["policyTip"], "Microsoft\Graph\Beta\Model\ChatMessagePolicyViolationPolicyTip")) {
                return $this->_propDict["policyTip"];
            } else {
                $this->_propDict["policyTip"] = new ChatMessagePolicyViolationPolicyTip($this->_propDict["policyTip"]);
                return $this->_propDict["policyTip"];
            }
        }
        return null;
    }

    /**
    * Sets the policyTip
    *
    * @param ChatMessagePolicyViolationPolicyTip $val The value to assign to the policyTip
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setPolicyTip($val)
    {
        $this->_propDict["policyTip"] = $val;
         return $this;
    }

    /**
    * Gets the userAction
    *
    * @return ChatMessagePolicyViolationUserActionTypes The userAction
    */
    public function getUserAction()
    {
        if (array_key_exists("userAction", $this->_propDict)) {
            if (is_a($this->_propDict["userAction"], "Microsoft\Graph\Beta\Model\ChatMessagePolicyViolationUserActionTypes")) {
                return $this->_propDict["userAction"];
            } else {
                $this->_propDict["userAction"] = new ChatMessagePolicyViolationUserActionTypes($this->_propDict["userAction"]);
                return $this->_propDict["userAction"];
            }
        }
        return null;
    }

    /**
    * Sets the userAction
    *
    * @param ChatMessagePolicyViolationUserActionTypes $val The value to assign to the userAction
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setUserAction($val)
    {
        $this->_propDict["userAction"] = $val;
         return $this;
    }

    /**
    * Gets the verdictDetails
    *
    * @return ChatMessagePolicyViolationVerdictDetailsTypes The verdictDetails
    */
    public function getVerdictDetails()
    {
        if (array_key_exists("verdictDetails", $this->_propDict)) {
            if (is_a($this->_propDict["verdictDetails"], "Microsoft\Graph\Beta\Model\ChatMessagePolicyViolationVerdictDetailsTypes")) {
                return $this->_propDict["verdictDetails"];
            } else {
                $this->_propDict["verdictDetails"] = new ChatMessagePolicyViolationVerdictDetailsTypes($this->_propDict["verdictDetails"]);
                return $this->_propDict["verdictDetails"];
            }
        }
        return null;
    }

    /**
    * Sets the verdictDetails
    *
    * @param ChatMessagePolicyViolationVerdictDetailsTypes $val The value to assign to the verdictDetails
    *
    * @return ChatMessagePolicyViolation The ChatMessagePolicyViolation
    */
    public function setVerdictDetails($val)
    {
        $this->_propDict["verdictDetails"] = $val;
         return $this;
    }
}
