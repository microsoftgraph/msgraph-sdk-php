<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRuleActions File
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
* MessageRuleActions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MessageRuleActions extends Entity
{
    /**
    * Gets the moveToFolder
    *
    * @return string The moveToFolder
    */
    public function getMoveToFolder()
    {
        if (array_key_exists("moveToFolder", $this->_propDict)) {
            return $this->_propDict["moveToFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the moveToFolder
    *
    * @param string $val The value of the moveToFolder
    *
    * @return MessageRuleActions
    */
    public function setMoveToFolder($val)
    {
        $this->_propDict["moveToFolder"] = $val;
        return $this;
    }
    /**
    * Gets the copyToFolder
    *
    * @return string The copyToFolder
    */
    public function getCopyToFolder()
    {
        if (array_key_exists("copyToFolder", $this->_propDict)) {
            return $this->_propDict["copyToFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the copyToFolder
    *
    * @param string $val The value of the copyToFolder
    *
    * @return MessageRuleActions
    */
    public function setCopyToFolder($val)
    {
        $this->_propDict["copyToFolder"] = $val;
        return $this;
    }
    /**
    * Gets the delete
    *
    * @return bool The delete
    */
    public function getDelete()
    {
        if (array_key_exists("delete", $this->_propDict)) {
            return $this->_propDict["delete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the delete
    *
    * @param bool $val The value of the delete
    *
    * @return MessageRuleActions
    */
    public function setDelete($val)
    {
        $this->_propDict["delete"] = $val;
        return $this;
    }
    /**
    * Gets the permanentDelete
    *
    * @return bool The permanentDelete
    */
    public function getPermanentDelete()
    {
        if (array_key_exists("permanentDelete", $this->_propDict)) {
            return $this->_propDict["permanentDelete"];
        } else {
            return null;
        }
    }

    /**
    * Sets the permanentDelete
    *
    * @param bool $val The value of the permanentDelete
    *
    * @return MessageRuleActions
    */
    public function setPermanentDelete($val)
    {
        $this->_propDict["permanentDelete"] = $val;
        return $this;
    }
    /**
    * Gets the markAsRead
    *
    * @return bool The markAsRead
    */
    public function getMarkAsRead()
    {
        if (array_key_exists("markAsRead", $this->_propDict)) {
            return $this->_propDict["markAsRead"];
        } else {
            return null;
        }
    }

    /**
    * Sets the markAsRead
    *
    * @param bool $val The value of the markAsRead
    *
    * @return MessageRuleActions
    */
    public function setMarkAsRead($val)
    {
        $this->_propDict["markAsRead"] = $val;
        return $this;
    }

    /**
    * Gets the markImportance
    *
    * @return Importance The markImportance
    */
    public function getMarkImportance()
    {
        if (array_key_exists("markImportance", $this->_propDict)) {
            if (is_a($this->_propDict["markImportance"], "Microsoft\Graph\Model\Importance")) {
                return $this->_propDict["markImportance"];
            } else {
                $this->_propDict["markImportance"] = new Importance($this->_propDict["markImportance"]);
                return $this->_propDict["markImportance"];
            }
        }
        return null;
    }

    /**
    * Sets the markImportance
    *
    * @param Importance $val The value to assign to the markImportance
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setMarkImportance($val)
    {
        $this->_propDict["markImportance"] = $val;
         return $this;
    }

    /**
    * Gets the forwardTo
    *
    * @return Recipient The forwardTo
    */
    public function getForwardTo()
    {
        if (array_key_exists("forwardTo", $this->_propDict)) {
            if (is_a($this->_propDict["forwardTo"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["forwardTo"];
            } else {
                $this->_propDict["forwardTo"] = new Recipient($this->_propDict["forwardTo"]);
                return $this->_propDict["forwardTo"];
            }
        }
        return null;
    }

    /**
    * Sets the forwardTo
    *
    * @param Recipient $val The value to assign to the forwardTo
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setForwardTo($val)
    {
        $this->_propDict["forwardTo"] = $val;
         return $this;
    }

    /**
    * Gets the forwardAsAttachmentTo
    *
    * @return Recipient The forwardAsAttachmentTo
    */
    public function getForwardAsAttachmentTo()
    {
        if (array_key_exists("forwardAsAttachmentTo", $this->_propDict)) {
            if (is_a($this->_propDict["forwardAsAttachmentTo"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["forwardAsAttachmentTo"];
            } else {
                $this->_propDict["forwardAsAttachmentTo"] = new Recipient($this->_propDict["forwardAsAttachmentTo"]);
                return $this->_propDict["forwardAsAttachmentTo"];
            }
        }
        return null;
    }

    /**
    * Sets the forwardAsAttachmentTo
    *
    * @param Recipient $val The value to assign to the forwardAsAttachmentTo
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setForwardAsAttachmentTo($val)
    {
        $this->_propDict["forwardAsAttachmentTo"] = $val;
         return $this;
    }

    /**
    * Gets the redirectTo
    *
    * @return Recipient The redirectTo
    */
    public function getRedirectTo()
    {
        if (array_key_exists("redirectTo", $this->_propDict)) {
            if (is_a($this->_propDict["redirectTo"], "Microsoft\Graph\Model\Recipient")) {
                return $this->_propDict["redirectTo"];
            } else {
                $this->_propDict["redirectTo"] = new Recipient($this->_propDict["redirectTo"]);
                return $this->_propDict["redirectTo"];
            }
        }
        return null;
    }

    /**
    * Sets the redirectTo
    *
    * @param Recipient $val The value to assign to the redirectTo
    *
    * @return MessageRuleActions The MessageRuleActions
    */
    public function setRedirectTo($val)
    {
        $this->_propDict["redirectTo"] = $val;
         return $this;
    }
    /**
    * Gets the assignCategories
    *
    * @return string The assignCategories
    */
    public function getAssignCategories()
    {
        if (array_key_exists("assignCategories", $this->_propDict)) {
            return $this->_propDict["assignCategories"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignCategories
    *
    * @param string $val The value of the assignCategories
    *
    * @return MessageRuleActions
    */
    public function setAssignCategories($val)
    {
        $this->_propDict["assignCategories"] = $val;
        return $this;
    }
    /**
    * Gets the stopProcessingRules
    *
    * @return bool The stopProcessingRules
    */
    public function getStopProcessingRules()
    {
        if (array_key_exists("stopProcessingRules", $this->_propDict)) {
            return $this->_propDict["stopProcessingRules"];
        } else {
            return null;
        }
    }

    /**
    * Sets the stopProcessingRules
    *
    * @param bool $val The value of the stopProcessingRules
    *
    * @return MessageRuleActions
    */
    public function setStopProcessingRules($val)
    {
        $this->_propDict["stopProcessingRules"] = $val;
        return $this;
    }
}
