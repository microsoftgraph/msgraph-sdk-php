<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SolutionsRoot implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SolutionsRoot and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.solutionsRoot');
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
     * Gets the bookingBusinesses property value. The bookingBusinesses property
     * @return array<BookingBusiness>|null
    */
    public function getBookingBusinesses(): ?array {
        return $this->getBackingStore()->get('bookingBusinesses');
    }

    /**
     * Gets the bookingCurrencies property value. The bookingCurrencies property
     * @return array<BookingCurrency>|null
    */
    public function getBookingCurrencies(): ?array {
        return $this->getBackingStore()->get('bookingCurrencies');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bookingBusinesses' => fn(ParseNode $n) => $o->setBookingBusinesses($n->getCollectionOfObjectValues([BookingBusiness::class, 'createFromDiscriminatorValue'])),
            'bookingCurrencies' => fn(ParseNode $n) => $o->setBookingCurrencies($n->getCollectionOfObjectValues([BookingCurrency::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
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
        $writer->writeCollectionOfObjectValues('bookingBusinesses', $this->getBookingBusinesses());
        $writer->writeCollectionOfObjectValues('bookingCurrencies', $this->getBookingCurrencies());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the bookingBusinesses property value. The bookingBusinesses property
     *  @param array<BookingBusiness>|null $value Value to set for the bookingBusinesses property.
    */
    public function setBookingBusinesses(?array $value): void {
        $this->getBackingStore()->set('bookingBusinesses', $value);
    }

    /**
     * Sets the bookingCurrencies property value. The bookingCurrencies property
     *  @param array<BookingCurrency>|null $value Value to set for the bookingCurrencies property.
    */
    public function setBookingCurrencies(?array $value): void {
        $this->getBackingStore()->set('bookingCurrencies', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
