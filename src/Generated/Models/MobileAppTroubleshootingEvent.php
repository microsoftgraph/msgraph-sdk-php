<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MobileAppTroubleshootingEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new mobileAppTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingEvent {
        return new MobileAppTroubleshootingEvent();
    }

    /**
     * Gets the appLogCollectionRequests property value. Indicates collection of App Log Upload Request.
     * @return array<AppLogCollectionRequest>|null
    */
    public function getAppLogCollectionRequests(): ?array {
        $val = $this->getBackingStore()->get('appLogCollectionRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppLogCollectionRequest::class);
            /** @var array<AppLogCollectionRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appLogCollectionRequests'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appLogCollectionRequests' => fn(ParseNode $n) => $o->setAppLogCollectionRequests($n->getCollectionOfObjectValues([AppLogCollectionRequest::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeCollectionOfObjectValues('appLogCollectionRequests', $this->getAppLogCollectionRequests());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the appLogCollectionRequests property value. Indicates collection of App Log Upload Request.
     * @param array<AppLogCollectionRequest>|null $value Value to set for the appLogCollectionRequests property.
    */
    public function setAppLogCollectionRequests(?array $value): void {
        $this->getBackingStore()->set('appLogCollectionRequests', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
