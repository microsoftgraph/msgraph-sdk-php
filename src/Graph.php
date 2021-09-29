<?php
/**
 * Copyright (c) Microsoft Corporation.  All Rights Reserved.
 * Licensed under the MIT License.  See License in the project root
 * for license information.
 */


namespace Microsoft\Graph;

use Microsoft\Graph\Core\NationalCloud;
use Microsoft\Graph\Http\AbstractGraphClient;
use Microsoft\Graph\Http\HttpClientInterface;

/**
 * Class Graph
 * @package Microsoft\Graph
 * @copyright 2021 Microsoft Corporation
 * @license https://opensource.org/licenses/MIT MIT License
 * @link https://developer.microsoft.com/graph
 */
class Graph extends AbstractGraphClient
{

    /**
     * Graph client constructor.
     *
     * @param string|null $nationalCloud if null defaults to "https://graph.microsoft.com"
     * @param HttpClientInterface|null $httpClient if null creates default Guzzle client
     * @throws \InvalidArgumentException if an invalid national cloud endpoint is passed
     */
    public function __construct(?string $nationalCloud = NationalCloud::GLOBAL, ?HttpClientInterface $httpClient = null)
    {
        parent::__construct($nationalCloud, $httpClient);
    }

    /**
     * @inheritDoc
     */
    public function getSdkVersion(): string
    {
        return GraphConstants::SDK_VERSION;
    }

    /**
     * @inheritDoc
     */
    public function getApiVersion(): string
    {
        return GraphConstants::API_VERSION;
    }
}
