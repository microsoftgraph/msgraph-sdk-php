<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\ContentTypes\AddCopyFromContentTypeHub;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AddCopyFromContentTypeHubPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $contentTypeId The contentTypeId property
    */
    private ?string $contentTypeId = null;
    
    /**
     * Instantiates a new addCopyFromContentTypeHubPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddCopyFromContentTypeHubPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddCopyFromContentTypeHubPostRequestBody {
        return new AddCopyFromContentTypeHubPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentTypeId property value. The contentTypeId property
     * @return string|null
    */
    public function getContentTypeId(): ?string {
        return $this->contentTypeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentTypeId' => function (ParseNode $n) use ($o) { $o->setContentTypeId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contentTypeId', $this->contentTypeId);
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
     * Sets the contentTypeId property value. The contentTypeId property
     *  @param string|null $value Value to set for the contentTypeId property.
    */
    public function setContentTypeId(?string $value ): void {
        $this->contentTypeId = $value;
    }

}
