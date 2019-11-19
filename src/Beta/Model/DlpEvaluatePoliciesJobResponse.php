<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DlpEvaluatePoliciesJobResponse File
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
* DlpEvaluatePoliciesJobResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class DlpEvaluatePoliciesJobResponse extends JobResponseBase
{
    /**
    * Gets the result
    *
    * @return DlpPoliciesJobResult The result
    */
    public function getResult()
    {
        if (array_key_exists("result", $this->_propDict)) {
            if (is_a($this->_propDict["result"], "Microsoft\Graph\Beta\Model\DlpPoliciesJobResult")) {
                return $this->_propDict["result"];
            } else {
                $this->_propDict["result"] = new DlpPoliciesJobResult($this->_propDict["result"]);
                return $this->_propDict["result"];
            }
        }
        return null;
    }
    
    /**
    * Sets the result
    *
    * @param DlpPoliciesJobResult $val The result
    *
    * @return DlpEvaluatePoliciesJobResponse
    */
    public function setResult($val)
    {
        $this->_propDict["result"] = $val;
        return $this;
    }
    
}