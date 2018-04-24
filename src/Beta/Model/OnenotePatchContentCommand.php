<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OnenotePatchContentCommand File
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
* OnenotePatchContentCommand class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class OnenotePatchContentCommand extends Entity
{

    /**
    * Gets the action
    *
    * @return OnenotePatchActionType The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "Microsoft\Graph\Beta\Model\OnenotePatchActionType")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new OnenotePatchActionType($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    *
    * @param OnenotePatchActionType $val The value to assign to the action
    *
    * @return OnenotePatchContentCommand The OnenotePatchContentCommand
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
    /**
    * Gets the target
    *
    * @return string The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            return $this->_propDict["target"];
        } else {
            return null;
        }
    }

    /**
    * Sets the target
    *
    * @param string $val The value of the target
    *
    * @return OnenotePatchContentCommand
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    /**
    * Gets the content
    *
    * @return string The content
    */
    public function getContent()
    {
        if (array_key_exists("content", $this->_propDict)) {
            return $this->_propDict["content"];
        } else {
            return null;
        }
    }

    /**
    * Sets the content
    *
    * @param string $val The value of the content
    *
    * @return OnenotePatchContentCommand
    */
    public function setContent($val)
    {
        $this->_propDict["content"] = $val;
        return $this;
    }

    /**
    * Gets the position
    *
    * @return OnenotePatchInsertPosition The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            if (is_a($this->_propDict["position"], "Microsoft\Graph\Beta\Model\OnenotePatchInsertPosition")) {
                return $this->_propDict["position"];
            } else {
                $this->_propDict["position"] = new OnenotePatchInsertPosition($this->_propDict["position"]);
                return $this->_propDict["position"];
            }
        }
        return null;
    }

    /**
    * Sets the position
    *
    * @param OnenotePatchInsertPosition $val The value to assign to the position
    *
    * @return OnenotePatchContentCommand The OnenotePatchContentCommand
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
         return $this;
    }
}
