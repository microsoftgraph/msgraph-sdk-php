<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShareAction File
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
* ShareAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class ShareAction extends Entity
{

    /**
    * Gets the recipients
    *
    * @return IdentitySet The recipients
    */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict)) {
            if (is_a($this->_propDict["recipients"], "Microsoft\Graph\Beta\Model\IdentitySet")) {
                return $this->_propDict["recipients"];
            } else {
                $this->_propDict["recipients"] = new IdentitySet($this->_propDict["recipients"]);
                return $this->_propDict["recipients"];
            }
        }
        return null;
    }

    /**
    * Sets the recipients
    *
    * @param IdentitySet $val The value to assign to the recipients
    *
    * @return ShareAction The ShareAction
    */
    public function setRecipients($val)
    {
        $this->_propDict["recipients"] = $val;
         return $this;
    }
}
