<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Bundles\Item\Content;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The content stream, if the item represents a file.
*/
class ContentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24format")
     * @var string|null $format Format of the content
    */
    public ?string $format = null;
    
    /**
     * Instantiates a new ContentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $format Format of the content
    */
    public function __construct(?string $format = null) {
        $this->format = $format;
    }

}
