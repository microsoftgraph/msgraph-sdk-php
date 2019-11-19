<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpActionInfo File
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
* DlpActionInfo class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DlpActionInfo extends Entity
{

    /**
    * Gets the action
    *
    * @return DlpAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "Microsoft\Graph\Beta\Model\DlpAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new DlpAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }

    /**
    * Sets the action
    *
    * @param DlpAction $val The value to assign to the action
    *
    * @return DlpActionInfo The DlpActionInfo
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
         return $this;
    }
}
