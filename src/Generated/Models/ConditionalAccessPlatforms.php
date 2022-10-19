<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessPlatforms implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ConditionalAccessDevicePlatform>|null $excludePlatforms Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
    */
    private ?array $excludePlatforms = null;
    
    /**
     * @var array<ConditionalAccessDevicePlatform>|null $includePlatforms Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
    */
    private ?array $includePlatforms = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessPlatforms and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessPlatforms');
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
     * Gets the excludePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @return array<ConditionalAccessDevicePlatform>|null
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
            'excludePlatforms' => fn(ParseNode $n) => $o->setExcludePlatforms($n->getCollectionOfEnumValues(ConditionalAccessDevicePlatform::class)),
            'includePlatforms' => fn(ParseNode $n) => $o->setIncludePlatforms($n->getCollectionOfEnumValues(ConditionalAccessDevicePlatform::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the includePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @return array<ConditionalAccessDevicePlatform>|null
    */
    public function getIncludePlatforms(): ?array {
        return $this->includePlatforms;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('excludePlatforms', $this->excludePlatforms);
        $writer->writeCollectionOfEnumValues('includePlatforms', $this->includePlatforms);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the excludePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     *  @param array<ConditionalAccessDevicePlatform>|null $value Value to set for the excludePlatforms property.
    */
    public function setExcludePlatforms(?array $value ): void {
        $this->excludePlatforms = $value;
    }

    /**
     * Sets the includePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     *  @param array<ConditionalAccessDevicePlatform>|null $value Value to set for the includePlatforms property.
    */
    public function setIncludePlatforms(?array $value ): void {
        $this->includePlatforms = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
