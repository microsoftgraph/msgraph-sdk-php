<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcUserSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcUserSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserSetting {
        return new CloudPcUserSetting();
    }

    /**
     * Gets the assignments property value. The assignments property
     * @return array<CloudPcUserSettingAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPcUserSettingAssignment::class);
            /** @var array<CloudPcUserSettingAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([CloudPcUserSettingAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'localAdminEnabled' => fn(ParseNode $n) => $o->setLocalAdminEnabled($n->getBooleanValue()),
            'resetEnabled' => fn(ParseNode $n) => $o->setResetEnabled($n->getBooleanValue()),
            'restorePointSetting' => fn(ParseNode $n) => $o->setRestorePointSetting($n->getObjectValue([CloudPcRestorePointSetting::class, 'createFromDiscriminatorValue'])),
        ]);
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
     * Gets the localAdminEnabled property value. The localAdminEnabled property
     * @return bool|null
    */
    public function getLocalAdminEnabled(): ?bool {
        $val = $this->getBackingStore()->get('localAdminEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAdminEnabled'");
    }

    /**
     * Gets the resetEnabled property value. The resetEnabled property
     * @return bool|null
    */
    public function getResetEnabled(): ?bool {
        $val = $this->getBackingStore()->get('resetEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resetEnabled'");
    }

    /**
     * Gets the restorePointSetting property value. The restorePointSetting property
     * @return CloudPcRestorePointSetting|null
    */
    public function getRestorePointSetting(): ?CloudPcRestorePointSetting {
        $val = $this->getBackingStore()->get('restorePointSetting');
        if (is_null($val) || $val instanceof CloudPcRestorePointSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointSetting'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeBooleanValue('localAdminEnabled', $this->getLocalAdminEnabled());
        $writer->writeBooleanValue('resetEnabled', $this->getResetEnabled());
        $writer->writeObjectValue('restorePointSetting', $this->getRestorePointSetting());
    }

    /**
     * Sets the assignments property value. The assignments property
     * @param array<CloudPcUserSettingAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the localAdminEnabled property value. The localAdminEnabled property
     * @param bool|null $value Value to set for the localAdminEnabled property.
    */
    public function setLocalAdminEnabled(?bool $value): void {
        $this->getBackingStore()->set('localAdminEnabled', $value);
    }

    /**
     * Sets the resetEnabled property value. The resetEnabled property
     * @param bool|null $value Value to set for the resetEnabled property.
    */
    public function setResetEnabled(?bool $value): void {
        $this->getBackingStore()->set('resetEnabled', $value);
    }

    /**
     * Sets the restorePointSetting property value. The restorePointSetting property
     * @param CloudPcRestorePointSetting|null $value Value to set for the restorePointSetting property.
    */
    public function setRestorePointSetting(?CloudPcRestorePointSetting $value): void {
        $this->getBackingStore()->set('restorePointSetting', $value);
    }

}
