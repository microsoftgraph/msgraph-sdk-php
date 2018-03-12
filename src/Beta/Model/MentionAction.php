<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MentionAction File
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
* MentionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MentionAction extends Entity
{

    /**
    * Gets the mentionees
    *
    * @return IdentitySet The mentionees
    */
    public function getMentionees()
    {
        if (array_key_exists("mentionees", $this->_propDict)) {
            if (is_a($this->_propDict["mentionees"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["mentionees"];
            } else {
                $this->_propDict["mentionees"] = new IdentitySet($this->_propDict["mentionees"]);
                return $this->_propDict["mentionees"];
            }
        }
        return null;
    }

    /**
    * Sets the mentionees
    *
    * @param IdentitySet $val The value to assign to the mentionees
    *
    * @return MentionAction The MentionAction
    */
    public function setMentionees($val)
    {
        $this->_propDict["mentionees"] = $val;
         return $this;
    }
}
