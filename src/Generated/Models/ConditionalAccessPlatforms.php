<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPlatforms implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $excludePlatforms Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux.
    */
    private ?array $excludePlatforms = null;
    
    /**
     * @var array<string>|null $includePlatforms Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue,linux``.
    */
    private ?array $includePlatforms = null;
    
    /**
     * Instantiates a new conditionalAccessPlatforms and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessPlatforms
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessPlatforms {
        return new ConditionalAccessPlatforms();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux.
     * @return array<string>|null
    */
    public function getExcludePlatforms(): ?array {
        return $this->excludePlatforms;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludePlatforms' => function (ParseNode $n) use ($o) { $o->setExcludePlatforms($n->getCollectionOfPrimitiveValues()); },
            'includePlatforms' => function (ParseNode $n) use ($o) { $o->setIncludePlatforms($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the includePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue,linux``.
     * @return array<string>|null
    */
    public function getIncludePlatforms(): ?array {
        return $this->includePlatforms;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludePlatforms', $this->excludePlatforms);
        $writer->writeCollectionOfPrimitiveValues('includePlatforms', $this->includePlatforms);
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
     * Sets the excludePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux.
     *  @param array<string>|null $value Value to set for the excludePlatforms property.
    */
    public function setExcludePlatforms(?array $value ): void {
        $this->excludePlatforms = $value;
    }

    /**
     * Sets the includePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue,linux``.
     *  @param array<string>|null $value Value to set for the includePlatforms property.
    */
    public function setIncludePlatforms(?array $value ): void {
        $this->includePlatforms = $value;
    }

}
