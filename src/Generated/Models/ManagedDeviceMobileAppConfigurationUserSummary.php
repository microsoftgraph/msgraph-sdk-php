<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties, inherited properties and actions for an MDM mobile app configuration user status summary.
*/
class ManagedDeviceMobileAppConfigurationUserSummary extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new managedDeviceMobileAppConfigurationUserSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceMobileAppConfigurationUserSummary {
        return new ManagedDeviceMobileAppConfigurationUserSummary();
    }

    /**
     * Gets the configurationVersion property value. Version of the policy for that overview
     * @return int|null
    */
    public function getConfigurationVersion(): ?int {
        $val = $this->getBackingStore()->get('configurationVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationVersion'");
    }

    /**
     * Gets the errorCount property value. Number of error Users
     * @return int|null
    */
    public function getErrorCount(): ?int {
        $val = $this->getBackingStore()->get('errorCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCount'");
    }

    /**
     * Gets the failedCount property value. Number of failed Users
     * @return int|null
    */
    public function getFailedCount(): ?int {
        $val = $this->getBackingStore()->get('failedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationVersion' => fn(ParseNode $n) => $o->setConfigurationVersion($n->getIntegerValue()),
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'notApplicableCount' => fn(ParseNode $n) => $o->setNotApplicableCount($n->getIntegerValue()),
            'pendingCount' => fn(ParseNode $n) => $o->setPendingCount($n->getIntegerValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastUpdateDateTime property value. Last update time
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdateDateTime'");
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable users
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableCount'");
    }

    /**
     * Gets the pendingCount property value. Number of pending Users
     * @return int|null
    */
    public function getPendingCount(): ?int {
        $val = $this->getBackingStore()->get('pendingCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingCount'");
    }

    /**
     * Gets the successCount property value. Number of succeeded Users
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        $val = $this->getBackingStore()->get('successCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('configurationVersion', $this->getConfigurationVersion());
        $writer->writeIntegerValue('errorCount', $this->getErrorCount());
        $writer->writeIntegerValue('failedCount', $this->getFailedCount());
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeIntegerValue('notApplicableCount', $this->getNotApplicableCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pendingCount', $this->getPendingCount());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
    }

    /**
     * Sets the configurationVersion property value. Version of the policy for that overview
     * @param int|null $value Value to set for the configurationVersion property.
    */
    public function setConfigurationVersion(?int $value): void {
        $this->getBackingStore()->set('configurationVersion', $value);
    }

    /**
     * Sets the errorCount property value. Number of error Users
     * @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the failedCount property value. Number of failed Users
     * @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->getBackingStore()->set('failedCount', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. Last update time
     * @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable users
     * @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableCount', $value);
    }

    /**
     * Sets the pendingCount property value. Number of pending Users
     * @param int|null $value Value to set for the pendingCount property.
    */
    public function setPendingCount(?int $value): void {
        $this->getBackingStore()->set('pendingCount', $value);
    }

    /**
     * Sets the successCount property value. Number of succeeded Users
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->getBackingStore()->set('successCount', $value);
    }

}
