<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrintService extends Entity implements Parsable 
{
    /**
     * Instantiates a new printService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintService
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintService {
        return new PrintService();
    }

    /**
     * Gets the endpoints property value. Endpoints that can be used to access the service. Read-only. Nullable.
     * @return array<PrintServiceEndpoint>|null
    */
    public function getEndpoints(): ?array {
        $val = $this->getBackingStore()->get('endpoints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintServiceEndpoint::class);
            /** @var array<PrintServiceEndpoint>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpoints'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endpoints' => fn(ParseNode $n) => $o->setEndpoints($n->getCollectionOfObjectValues([PrintServiceEndpoint::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('endpoints', $this->getEndpoints());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the endpoints property value. Endpoints that can be used to access the service. Read-only. Nullable.
     * @param array<PrintServiceEndpoint>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value): void {
        $this->getBackingStore()->set('endpoints', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
