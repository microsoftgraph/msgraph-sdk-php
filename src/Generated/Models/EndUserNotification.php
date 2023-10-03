<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EndUserNotification extends Entity implements Parsable 
{
    /**
     * Instantiates a new endUserNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EndUserNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EndUserNotification {
        return new EndUserNotification();
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return EmailIdentity|null
    */
    public function getCreatedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the details property value. The details property
     * @return array<EndUserNotificationDetail>|null
    */
    public function getDetails(): ?array {
        $val = $this->getBackingStore()->get('details');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EndUserNotificationDetail::class);
            /** @var array<EndUserNotificationDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([EndUserNotificationDetail::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([EmailIdentity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'notificationType' => fn(ParseNode $n) => $o->setNotificationType($n->getEnumValue(EndUserNotificationType::class)),
            'source' => fn(ParseNode $n) => $o->setSource($n->getEnumValue(SimulationContentSource::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(SimulationContentStatus::class)),
            'supportedLocales' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSupportedLocales($val);
            },
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return EmailIdentity|null
    */
    public function getLastModifiedBy(): ?EmailIdentity {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof EmailIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the notificationType property value. The notificationType property
     * @return EndUserNotificationType|null
    */
    public function getNotificationType(): ?EndUserNotificationType {
        $val = $this->getBackingStore()->get('notificationType');
        if (is_null($val) || $val instanceof EndUserNotificationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationType'");
    }

    /**
     * Gets the source property value. The source property
     * @return SimulationContentSource|null
    */
    public function getSource(): ?SimulationContentSource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof SimulationContentSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the status property value. The status property
     * @return SimulationContentStatus|null
    */
    public function getStatus(): ?SimulationContentStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SimulationContentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the supportedLocales property value. The supportedLocales property
     * @return array<string>|null
    */
    public function getSupportedLocales(): ?array {
        $val = $this->getBackingStore()->get('supportedLocales');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedLocales'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('notificationType', $this->getNotificationType());
        $writer->writeEnumValue('source', $this->getSource());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfPrimitiveValues('supportedLocales', $this->getSupportedLocales());
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param EmailIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the details property value. The details property
     * @param array<EndUserNotificationDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     * @param EmailIdentity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?EmailIdentity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the notificationType property value. The notificationType property
     * @param EndUserNotificationType|null $value Value to set for the notificationType property.
    */
    public function setNotificationType(?EndUserNotificationType $value): void {
        $this->getBackingStore()->set('notificationType', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param SimulationContentSource|null $value Value to set for the source property.
    */
    public function setSource(?SimulationContentSource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param SimulationContentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SimulationContentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the supportedLocales property value. The supportedLocales property
     * @param array<string>|null $value Value to set for the supportedLocales property.
    */
    public function setSupportedLocales(?array $value): void {
        $this->getBackingStore()->set('supportedLocales', $value);
    }

}
