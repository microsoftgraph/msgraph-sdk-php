<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AutoReviewSettings File
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
* AutoReviewSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AutoReviewSettings extends Entity
{
    /**
    * Gets the notReviewedResult
    *
    * @return string The notReviewedResult
    */
    public function getNotReviewedResult()
    {
        if (array_key_exists("notReviewedResult", $this->_propDict)) {
            return $this->_propDict["notReviewedResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notReviewedResult
    *
    * @param string $val The value of the notReviewedResult
    *
    * @return AutoReviewSettings
    */
    public function setNotReviewedResult($val)
    {
        $this->_propDict["notReviewedResult"] = $val;
        return $this;
    }
}
