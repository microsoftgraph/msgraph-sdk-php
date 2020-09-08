<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ParseExpressionResponse File
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
* ParseExpressionResponse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ParseExpressionResponse extends Entity
{

    /**
    * Gets the error
    *
    * @return PublicError The error
    */
    public function getError()
    {
        if (array_key_exists("error", $this->_propDict)) {
            if (is_a($this->_propDict["error"], "Beta\Microsoft\Graph\Model\PublicError")) {
                return $this->_propDict["error"];
            } else {
                $this->_propDict["error"] = new PublicError($this->_propDict["error"]);
                return $this->_propDict["error"];
            }
        }
        return null;
    }

    /**
    * Sets the error
    *
    * @param PublicError $val The value to assign to the error
    *
    * @return ParseExpressionResponse The ParseExpressionResponse
    */
    public function setError($val)
    {
        $this->_propDict["error"] = $val;
         return $this;
    }
    /**
    * Gets the evaluationResult
    *
    * @return string The evaluationResult
    */
    public function getEvaluationResult()
    {
        if (array_key_exists("evaluationResult", $this->_propDict)) {
            return $this->_propDict["evaluationResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the evaluationResult
    *
    * @param string $val The value of the evaluationResult
    *
    * @return ParseExpressionResponse
    */
    public function setEvaluationResult($val)
    {
        $this->_propDict["evaluationResult"] = $val;
        return $this;
    }
    /**
    * Gets the evaluationSucceeded
    *
    * @return bool The evaluationSucceeded
    */
    public function getEvaluationSucceeded()
    {
        if (array_key_exists("evaluationSucceeded", $this->_propDict)) {
            return $this->_propDict["evaluationSucceeded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the evaluationSucceeded
    *
    * @param bool $val The value of the evaluationSucceeded
    *
    * @return ParseExpressionResponse
    */
    public function setEvaluationSucceeded($val)
    {
        $this->_propDict["evaluationSucceeded"] = $val;
        return $this;
    }

    /**
    * Gets the parsedExpression
    *
    * @return AttributeMappingSource The parsedExpression
    */
    public function getParsedExpression()
    {
        if (array_key_exists("parsedExpression", $this->_propDict)) {
            if (is_a($this->_propDict["parsedExpression"], "Beta\Microsoft\Graph\Model\AttributeMappingSource")) {
                return $this->_propDict["parsedExpression"];
            } else {
                $this->_propDict["parsedExpression"] = new AttributeMappingSource($this->_propDict["parsedExpression"]);
                return $this->_propDict["parsedExpression"];
            }
        }
        return null;
    }

    /**
    * Sets the parsedExpression
    *
    * @param AttributeMappingSource $val The value to assign to the parsedExpression
    *
    * @return ParseExpressionResponse The ParseExpressionResponse
    */
    public function setParsedExpression($val)
    {
        $this->_propDict["parsedExpression"] = $val;
         return $this;
    }
    /**
    * Gets the parsingSucceeded
    *
    * @return bool The parsingSucceeded
    */
    public function getParsingSucceeded()
    {
        if (array_key_exists("parsingSucceeded", $this->_propDict)) {
            return $this->_propDict["parsingSucceeded"];
        } else {
            return null;
        }
    }

    /**
    * Sets the parsingSucceeded
    *
    * @param bool $val The value of the parsingSucceeded
    *
    * @return ParseExpressionResponse
    */
    public function setParsingSucceeded($val)
    {
        $this->_propDict["parsingSucceeded"] = $val;
        return $this;
    }
}
