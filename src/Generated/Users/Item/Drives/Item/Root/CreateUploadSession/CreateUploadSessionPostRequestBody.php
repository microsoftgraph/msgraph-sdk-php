<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\Root\CreateUploadSession;

use Microsoft\Graph\Generated\Models\DriveItemUploadableProperties;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateUploadSessionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DriveItemUploadableProperties|null $item The item property
    */
    private ?DriveItemUploadableProperties $item = null;
    
    /**
     * Instantiates a new createUploadSessionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateUploadSessionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateUploadSessionPostRequestBody {
        return new CreateUploadSessionPostRequestBody();
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
            'item' => fn(ParseNode $n) => $o->setItem($n->getObjectValue([DriveItemUploadableProperties::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the item property value. The item property
     * @return DriveItemUploadableProperties|null
    */
    public function getItem(): ?DriveItemUploadableProperties {
        return $this->item;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('item', $this->item);
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
     * Sets the item property value. The item property
     *  @param DriveItemUploadableProperties|null $value Value to set for the item property.
    */
    public function setItem(?DriveItemUploadableProperties $value ): void {
        $this->item = $value;
    }

}
