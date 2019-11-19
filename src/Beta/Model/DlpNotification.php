<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpNotification File
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
* DlpNotification class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DlpNotification extends Entity
{
    /**
    * Gets the author
    *
    * @return string The author
    */
    public function getAuthor()
    {
        if (array_key_exists("author", $this->_propDict)) {
            return $this->_propDict["author"];
        } else {
            return null;
        }
    }

    /**
    * Sets the author
    *
    * @param string $val The value of the author
    *
    * @return DlpNotification
    */
    public function setAuthor($val)
    {
        $this->_propDict["author"] = $val;
        return $this;
    }
}
