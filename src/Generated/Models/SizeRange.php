<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SizeRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $maximumSize The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    */
    private ?int $maximumSize = null;
    
    /**
     * @var int|null $minimumSize The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    */
    private ?int $minimumSize = null;
    
    /**
     * Instantiates a new sizeRange and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SizeRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SizeRange {
        return new SizeRange();
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
            'maximumSize' => function (ParseNode $n) use ($o) { $o->setMaximumSize($n->getIntegerValue()); },
            'minimumSize' => function (ParseNode $n) use ($o) { $o->setMinimumSize($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the maximumSize property value. The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
     * @return int|null
    */
    public function getMaximumSize(): ?int {
        return $this->maximumSize;
    }

    /**
     * Gets the minimumSize property value. The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
     * @return int|null
    */
    public function getMinimumSize(): ?int {
        return $this->minimumSize;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('maximumSize', $this->maximumSize);
        $writer->writeIntegerValue('minimumSize', $this->minimumSize);
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
     * Sets the maximumSize property value. The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
     *  @param int|null $value Value to set for the maximumSize property.
    */
    public function setMaximumSize(?int $value ): void {
        $this->maximumSize = $value;
    }

    /**
     * Sets the minimumSize property value. The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
     *  @param int|null $value Value to set for the minimumSize property.
    */
    public function setMinimumSize(?int $value ): void {
        $this->minimumSize = $value;
    }

}
