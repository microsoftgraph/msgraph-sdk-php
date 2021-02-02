<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessReviewReviewerScope File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* AccessReviewReviewerScope class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessReviewReviewerScope extends AccessReviewScope
{
    /**
    * Gets the queryRoot
    *
    * @return string The queryRoot
    */
    public function getQueryRoot()
    {
        if (array_key_exists("queryRoot", $this->_propDict)) {
            return $this->_propDict["queryRoot"];
        } else {
            return null;
        }
    }

    /**
    * Sets the queryRoot
    *
    * @param string $val The value of the queryRoot
    *
    * @return AccessReviewReviewerScope
    */
    public function setQueryRoot($val)
    {
        $this->_propDict["queryRoot"] = $val;
        return $this;
    }
}
