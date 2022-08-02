<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SolutionsRoot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<BookingBusiness>|null $bookingBusinesses The bookingBusinesses property
    */
    private ?array $bookingBusinesses = null;
    
    /**
     * @var array<BookingCurrency>|null $bookingCurrencies The bookingCurrencies property
    */
    private ?array $bookingCurrencies = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new SolutionsRoot and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bookingBusinesses property value. The bookingBusinesses property
     * @return array<BookingBusiness>|null
    */
    public function getBookingBusinesses(): ?array {
        return $this->bookingBusinesses;
    }

    /**
     * Gets the bookingCurrencies property value. The bookingCurrencies property
     * @return array<BookingCurrency>|null
    */
    public function getBookingCurrencies(): ?array {
        return $this->bookingCurrencies;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bookingBusinesses' => function (ParseNode $n) use ($o) { $o->setBookingBusinesses($n->getCollectionOfObjectValues(array(BookingBusiness::class, 'createFromDiscriminatorValue'))); },
            'bookingCurrencies' => function (ParseNode $n) use ($o) { $o->setBookingCurrencies($n->getCollectionOfObjectValues(array(BookingCurrency::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
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
        $writer->writeCollectionOfObjectValues('bookingBusinesses', $this->bookingBusinesses);
        $writer->writeCollectionOfObjectValues('bookingCurrencies', $this->bookingCurrencies);
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
     * Sets the bookingBusinesses property value. The bookingBusinesses property
     *  @param array<BookingBusiness>|null $value Value to set for the bookingBusinesses property.
    */
    public function setBookingBusinesses(?array $value ): void {
        $this->bookingBusinesses = $value;
    }

    /**
     * Sets the bookingCurrencies property value. The bookingCurrencies property
     *  @param array<BookingCurrency>|null $value Value to set for the bookingCurrencies property.
    */
    public function setBookingCurrencies(?array $value ): void {
        $this->bookingCurrencies = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
