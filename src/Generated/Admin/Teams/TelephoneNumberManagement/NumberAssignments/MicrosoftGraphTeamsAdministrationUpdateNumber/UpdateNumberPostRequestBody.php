<?php

namespace Microsoft\Graph\Generated\Admin\Teams\TelephoneNumberManagement\NumberAssignments\MicrosoftGraphTeamsAdministrationUpdateNumber;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UpdateNumberPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateNumberPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateNumberPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateNumberPostRequestBody {
        return new UpdateNumberPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
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
            'locationId' => fn(ParseNode $n) => $o->setLocationId($n->getStringValue()),
            'networkSiteId' => fn(ParseNode $n) => $o->setNetworkSiteId($n->getStringValue()),
            'reverseNumberLookupOptions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReverseNumberLookupOptions($val);
            },
            'telephoneNumber' => fn(ParseNode $n) => $o->setTelephoneNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the locationId property value. The locationId property
     * @return string|null
    */
    public function getLocationId(): ?string {
        $val = $this->getBackingStore()->get('locationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationId'");
    }

    /**
     * Gets the networkSiteId property value. The networkSiteId property
     * @return string|null
    */
    public function getNetworkSiteId(): ?string {
        $val = $this->getBackingStore()->get('networkSiteId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkSiteId'");
    }

    /**
     * Gets the reverseNumberLookupOptions property value. The reverseNumberLookupOptions property
     * @return array<string>|null
    */
    public function getReverseNumberLookupOptions(): ?array {
        $val = $this->getBackingStore()->get('reverseNumberLookupOptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reverseNumberLookupOptions'");
    }

    /**
     * Gets the telephoneNumber property value. The telephoneNumber property
     * @return string|null
    */
    public function getTelephoneNumber(): ?string {
        $val = $this->getBackingStore()->get('telephoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telephoneNumber'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('locationId', $this->getLocationId());
        $writer->writeStringValue('networkSiteId', $this->getNetworkSiteId());
        $writer->writeCollectionOfPrimitiveValues('reverseNumberLookupOptions', $this->getReverseNumberLookupOptions());
        $writer->writeStringValue('telephoneNumber', $this->getTelephoneNumber());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the locationId property value. The locationId property
     * @param string|null $value Value to set for the locationId property.
    */
    public function setLocationId(?string $value): void {
        $this->getBackingStore()->set('locationId', $value);
    }

    /**
     * Sets the networkSiteId property value. The networkSiteId property
     * @param string|null $value Value to set for the networkSiteId property.
    */
    public function setNetworkSiteId(?string $value): void {
        $this->getBackingStore()->set('networkSiteId', $value);
    }

    /**
     * Sets the reverseNumberLookupOptions property value. The reverseNumberLookupOptions property
     * @param array<string>|null $value Value to set for the reverseNumberLookupOptions property.
    */
    public function setReverseNumberLookupOptions(?array $value): void {
        $this->getBackingStore()->set('reverseNumberLookupOptions', $value);
    }

    /**
     * Sets the telephoneNumber property value. The telephoneNumber property
     * @param string|null $value Value to set for the telephoneNumber property.
    */
    public function setTelephoneNumber(?string $value): void {
        $this->getBackingStore()->set('telephoneNumber', $value);
    }

}
