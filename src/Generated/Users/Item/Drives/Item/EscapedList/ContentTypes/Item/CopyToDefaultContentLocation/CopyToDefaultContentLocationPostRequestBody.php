<?php

namespace Microsoft\Graph\Generated\Users\Item\Drives\Item\EscapedList\ContentTypes\Item\CopyToDefaultContentLocation;

use Microsoft\Graph\Generated\Models\ItemReference;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopyToDefaultContentLocationPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $destinationFileName The destinationFileName property
    */
    private ?string $destinationFileName = null;
    
    /**
     * @var ItemReference|null $sourceFile The sourceFile property
    */
    private ?ItemReference $sourceFile = null;
    
    /**
     * Instantiates a new copyToDefaultContentLocationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopyToDefaultContentLocationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopyToDefaultContentLocationPostRequestBody {
        return new CopyToDefaultContentLocationPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the destinationFileName property value. The destinationFileName property
     * @return string|null
    */
    public function getDestinationFileName(): ?string {
        return $this->destinationFileName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinationFileName' => function (ParseNode $n) use ($o) { $o->setDestinationFileName($n->getStringValue()); },
            'sourceFile' => function (ParseNode $n) use ($o) { $o->setSourceFile($n->getObjectValue(array(ItemReference::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the sourceFile property value. The sourceFile property
     * @return ItemReference|null
    */
    public function getSourceFile(): ?ItemReference {
        return $this->sourceFile;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationFileName', $this->destinationFileName);
        $writer->writeObjectValue('sourceFile', $this->sourceFile);
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
     * Sets the destinationFileName property value. The destinationFileName property
     *  @param string|null $value Value to set for the destinationFileName property.
    */
    public function setDestinationFileName(?string $value ): void {
        $this->destinationFileName = $value;
    }

    /**
     * Sets the sourceFile property value. The sourceFile property
     *  @param ItemReference|null $value Value to set for the sourceFile property.
    */
    public function setSourceFile(?ItemReference $value ): void {
        $this->sourceFile = $value;
    }

}
