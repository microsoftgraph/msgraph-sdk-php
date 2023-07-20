<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\MicrosoftGraphSecurityPurgeData;

use Microsoft\Graph\Generated\Models\Security\PurgeAreas;
use Microsoft\Graph\Generated\Models\Security\PurgeType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PurgeDataPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new purgeDataPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PurgeDataPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PurgeDataPostRequestBody {
        return new PurgeDataPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'purgeAreas' => fn(ParseNode $n) => $o->setPurgeAreas($n->getEnumValue(PurgeAreas::class)),
            'purgeType' => fn(ParseNode $n) => $o->setPurgeType($n->getEnumValue(PurgeType::class)),
        ];
    }

    /**
     * Gets the purgeAreas property value. The purgeAreas property
     * @return PurgeAreas|null
    */
    public function getPurgeAreas(): ?PurgeAreas {
        $val = $this->getBackingStore()->get('purgeAreas');
        if (is_null($val) || $val instanceof PurgeAreas) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purgeAreas'");
    }

    /**
     * Gets the purgeType property value. The purgeType property
     * @return PurgeType|null
    */
    public function getPurgeType(): ?PurgeType {
        $val = $this->getBackingStore()->get('purgeType');
        if (is_null($val) || $val instanceof PurgeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'purgeType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('purgeAreas', $this->getPurgeAreas());
        $writer->writeEnumValue('purgeType', $this->getPurgeType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the purgeAreas property value. The purgeAreas property
     * @param PurgeAreas|null $value Value to set for the purgeAreas property.
    */
    public function setPurgeAreas(?PurgeAreas $value): void {
        $this->getBackingStore()->set('purgeAreas', $value);
    }

    /**
     * Sets the purgeType property value. The purgeType property
     * @param PurgeType|null $value Value to set for the purgeType property.
    */
    public function setPurgeType(?PurgeType $value): void {
        $this->getBackingStore()->set('purgeType', $value);
    }

}
