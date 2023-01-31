<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConditionalAccessPlatforms implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new conditionalAccessPlatforms and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the excludePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @return array<ConditionalAccessDevicePlatform>|null
    */
    public function getExcludePlatforms(): ?array {
        return $this->getBackingStore()->get('excludePlatforms');
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
        return $this->getBackingStore()->get('includePlatforms');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('excludePlatforms', $this->getExcludePlatforms());
        $writer->writeCollectionOfEnumValues('includePlatforms', $this->getIncludePlatforms());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the excludePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @param array<ConditionalAccessDevicePlatform>|null $value Value to set for the excludePlatforms property.
    */
    public function setExcludePlatforms(?array $value): void {
        $this->getBackingStore()->set('excludePlatforms', $value);
    }

    /**
     * Sets the includePlatforms property value. Possible values are: android, iOS, windows, windowsPhone, macOS, linux, all, unknownFutureValue.
     * @param array<ConditionalAccessDevicePlatform>|null $value Value to set for the includePlatforms property.
    */
    public function setIncludePlatforms(?array $value): void {
        $this->getBackingStore()->set('includePlatforms', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
