<?php

namespace Microsoft\Graph\Search\Query;

use Microsoft\Graph\Models\SearchRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QueryPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SearchRequest>|null $requests The requests property
    */
    private ?array $requests = null;
    
    /**
     * Instantiates a new queryPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QueryPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QueryPostRequestBody {
        return new QueryPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'requests' => function (ParseNode $n) use ($o) { $o->setRequests($n->getCollectionOfObjectValues(array(SearchRequest::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the requests property value. The requests property
     * @return array<SearchRequest>|null
    */
    public function getRequests(): ?array {
        return $this->requests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('requests', $this->requests);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the requests property value. The requests property
     *  @param array<SearchRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value ): void {
        $this->requests = $value;
    }

}
