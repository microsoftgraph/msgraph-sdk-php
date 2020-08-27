<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EvaluateLabelsAndPoliciesJobResponse File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* EvaluateLabelsAndPoliciesJobResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EvaluateLabelsAndPoliciesJobResponse extends JobResponseBase
{
    /**
    * Gets the result
    *
    * @return EvaluateLabelsAndPoliciesResult The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "Beta\Microsoft\Graph\Model\EvaluateLabelsAndPoliciesResult")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new EvaluateLabelsAndPoliciesResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }
    
    /**
    * Sets the result
    *
    * @param EvaluateLabelsAndPoliciesResult $val The result
    *
    * @return EvaluateLabelsAndPoliciesJobResponse
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }
    
}