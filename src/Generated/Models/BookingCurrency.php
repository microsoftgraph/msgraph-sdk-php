<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingCurrency extends Entity implements Parsable 
{
    /**
     * @var string|null $symbol The currency symbol. For example, the currency symbol for the US dollar and for the Australian dollar is $.
    */
    private ?string $symbol = null;
    
    /**
     * Instantiates a new bookingCurrency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingCurrency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingCurrency {
        return new BookingCurrency();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'symbol' => function (ParseNode $n) use ($o) { $o->setSymbol($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the symbol property value. The currency symbol. For example, the currency symbol for the US dollar and for the Australian dollar is $.
     * @return string|null
    */
    public function getSymbol(): ?string {
        return $this->symbol;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('symbol', $this->symbol);
    }

    /**
     * Sets the symbol property value. The currency symbol. For example, the currency symbol for the US dollar and for the Australian dollar is $.
     *  @param string|null $value Value to set for the symbol property.
    */
    public function setSymbol(?string $value ): void {
        $this->symbol = $value;
    }

}
