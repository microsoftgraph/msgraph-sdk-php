<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MentionsPreview File
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
* MentionsPreview class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MentionsPreview extends Entity
{
    /**
    * Gets the isMentioned
    *
    * @return bool The isMentioned
    */
    public function getIsMentioned()
    {
        if (array_key_exists("isMentioned", $this->_propDict)) {
            return $this->_propDict["isMentioned"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMentioned
    *
    * @param bool $val The value of the isMentioned
    *
    * @return MentionsPreview
    */
    public function setIsMentioned($val)
    {
        $this->_propDict["isMentioned"] = $val;
        return $this;
    }
}
