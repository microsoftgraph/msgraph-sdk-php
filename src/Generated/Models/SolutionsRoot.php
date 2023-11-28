<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SolutionsRoot implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new solutionsRoot and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SolutionsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SolutionsRoot {
        return new SolutionsRoot();
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
     * Gets the bookingBusinesses property value. The bookingBusinesses property
     * @return array<BookingBusiness>|null
    */
    public function getBookingBusinesses(): ?array {
        $val = $this->getBackingStore()->get('bookingBusinesses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingBusiness::class);
            /** @var array<BookingBusiness>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bookingBusinesses'");
    }

    /**
     * Gets the bookingCurrencies property value. The bookingCurrencies property
     * @return array<BookingCurrency>|null
    */
    public function getBookingCurrencies(): ?array {
        $val = $this->getBackingStore()->get('bookingCurrencies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingCurrency::class);
            /** @var array<BookingCurrency>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bookingCurrencies'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bookingBusinesses' => fn(ParseNode $n) => $o->setBookingBusinesses($n->getCollectionOfObjectValues([BookingBusiness::class, 'createFromDiscriminatorValue'])),
            'bookingCurrencies' => fn(ParseNode $n) => $o->setBookingCurrencies($n->getCollectionOfObjectValues([BookingCurrency::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'virtualEvents' => fn(ParseNode $n) => $o->setVirtualEvents($n->getObjectValue([VirtualEventsRoot::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the virtualEvents property value. The virtualEvents property
     * @return VirtualEventsRoot|null
    */
    public function getVirtualEvents(): ?VirtualEventsRoot {
        $val = $this->getBackingStore()->get('virtualEvents');
        if (is_null($val) || $val instanceof VirtualEventsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualEvents'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('bookingBusinesses', $this->getBookingBusinesses());
        $writer->writeCollectionOfObjectValues('bookingCurrencies', $this->getBookingCurrencies());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('virtualEvents', $this->getVirtualEvents());
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
     * Sets the bookingBusinesses property value. The bookingBusinesses property
     * @param array<BookingBusiness>|null $value Value to set for the bookingBusinesses property.
    */
    public function setBookingBusinesses(?array $value): void {
        $this->getBackingStore()->set('bookingBusinesses', $value);
    }

    /**
     * Sets the bookingCurrencies property value. The bookingCurrencies property
     * @param array<BookingCurrency>|null $value Value to set for the bookingCurrencies property.
    */
    public function setBookingCurrencies(?array $value): void {
        $this->getBackingStore()->set('bookingCurrencies', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the virtualEvents property value. The virtualEvents property
     * @param VirtualEventsRoot|null $value Value to set for the virtualEvents property.
    */
    public function setVirtualEvents(?VirtualEventsRoot $value): void {
        $this->getBackingStore()->set('virtualEvents', $value);
    }

}
