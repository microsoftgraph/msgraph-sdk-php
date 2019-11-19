<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpEvaluationWindowsDevicesInput File
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
* DlpEvaluationWindowsDevicesInput class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DlpEvaluationWindowsDevicesInput extends DlpEvaluationInput
{

    /**
    * Gets the contentProperties
    *
    * @return ContentProperties The contentProperties
    */
    public function getContentProperties()
    {
        if (array_key_exists("contentProperties", $this->_propDict)) {
            if (is_a($this->_propDict["contentProperties"], "Microsoft\Graph\Beta\Model\ContentProperties")) {
                return $this->_propDict["contentProperties"];
            } else {
                $this->_propDict["contentProperties"] = new ContentProperties($this->_propDict["contentProperties"]);
                return $this->_propDict["contentProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the contentProperties
    *
    * @param ContentProperties $val The value to assign to the contentProperties
    *
    * @return DlpEvaluationWindowsDevicesInput The DlpEvaluationWindowsDevicesInput
    */
    public function setContentProperties($val)
    {
        $this->_propDict["contentProperties"] = $val;
         return $this;
    }
    /**
    * Gets the sharedBy
    *
    * @return string The sharedBy
    */
    public function getSharedBy()
    {
        if (array_key_exists("sharedBy", $this->_propDict)) {
            return $this->_propDict["sharedBy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sharedBy
    *
    * @param string $val The value of the sharedBy
    *
    * @return DlpEvaluationWindowsDevicesInput
    */
    public function setSharedBy($val)
    {
        $this->_propDict["sharedBy"] = $val;
        return $this;
    }
}
