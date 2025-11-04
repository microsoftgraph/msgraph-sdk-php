<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RelyingPartyDetailedSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new RelyingPartyDetailedSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelyingPartyDetailedSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelyingPartyDetailedSummary {
        return new RelyingPartyDetailedSummary();
    }

    /**
     * Gets the failedSignInCount property value. Number of failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @return int|null
    */
    public function getFailedSignInCount(): ?int {
        $val = $this->getBackingStore()->get('failedSignInCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedSignInCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'failedSignInCount' => fn(ParseNode $n) => $o->setFailedSignInCount($n->getIntegerValue()),
            'migrationStatus' => fn(ParseNode $n) => $o->setMigrationStatus($n->getEnumValue(MigrationStatus::class)),
            'migrationValidationDetails' => fn(ParseNode $n) => $o->setMigrationValidationDetails($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'relyingPartyId' => fn(ParseNode $n) => $o->setRelyingPartyId($n->getStringValue()),
            'relyingPartyName' => fn(ParseNode $n) => $o->setRelyingPartyName($n->getStringValue()),
            'replyUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setReplyUrls($val);
            },
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'signInSuccessRate' => fn(ParseNode $n) => $o->setSignInSuccessRate($n->getFloatValue()),
            'successfulSignInCount' => fn(ParseNode $n) => $o->setSuccessfulSignInCount($n->getIntegerValue()),
            'totalSignInCount' => fn(ParseNode $n) => $o->setTotalSignInCount($n->getIntegerValue()),
            'uniqueUserCount' => fn(ParseNode $n) => $o->setUniqueUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the migrationStatus property value. The migrationStatus property
     * @return MigrationStatus|null
    */
    public function getMigrationStatus(): ?MigrationStatus {
        $val = $this->getBackingStore()->get('migrationStatus');
        if (is_null($val) || $val instanceof MigrationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrationStatus'");
    }

    /**
     * Gets the migrationValidationDetails property value. Specifies all the validations checks done on applications config details.
     * @return array<KeyValuePair>|null
    */
    public function getMigrationValidationDetails(): ?array {
        $val = $this->getBackingStore()->get('migrationValidationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrationValidationDetails'");
    }

    /**
     * Gets the relyingPartyId property value. Identifies the relying party to this federation service. It's used when issuing claims to the relying party. Supports $orderby, $filter (eq).
     * @return string|null
    */
    public function getRelyingPartyId(): ?string {
        $val = $this->getBackingStore()->get('relyingPartyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relyingPartyId'");
    }

    /**
     * Gets the relyingPartyName property value. Name of the relying party's website or other entity on the Internet that uses an identity provider to authenticate a user who wants to log in. Supports $orderby, $filter (eq).
     * @return string|null
    */
    public function getRelyingPartyName(): ?string {
        $val = $this->getBackingStore()->get('relyingPartyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relyingPartyName'");
    }

    /**
     * Gets the replyUrls property value. Specifies where the relying party expects to receive the token.
     * @return array<string>|null
    */
    public function getReplyUrls(): ?array {
        $val = $this->getBackingStore()->get('replyUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replyUrls'");
    }

    /**
     * Gets the serviceId property value. Uniquely identifies the Active Directory forest. Supports $orderby, $filter (eq).
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Gets the signInSuccessRate property value. Calculated as Number of successful / (Number of successful + Number of failed sign ins) or successfulSignInCount / totalSignInCount on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @return float|null
    */
    public function getSignInSuccessRate(): ?float {
        $val = $this->getBackingStore()->get('signInSuccessRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInSuccessRate'");
    }

    /**
     * Gets the successfulSignInCount property value. Number of successful sign ins on AD FS. Supports $orderby, $filter (eq).
     * @return int|null
    */
    public function getSuccessfulSignInCount(): ?int {
        $val = $this->getBackingStore()->get('successfulSignInCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulSignInCount'");
    }

    /**
     * Gets the totalSignInCount property value. Number of successful + failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @return int|null
    */
    public function getTotalSignInCount(): ?int {
        $val = $this->getBackingStore()->get('totalSignInCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalSignInCount'");
    }

    /**
     * Gets the uniqueUserCount property value. Number of unique users that signed into the application. Supports $orderby, $filter (eq).
     * @return int|null
    */
    public function getUniqueUserCount(): ?int {
        $val = $this->getBackingStore()->get('uniqueUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('failedSignInCount', $this->getFailedSignInCount());
        $writer->writeEnumValue('migrationStatus', $this->getMigrationStatus());
        $writer->writeCollectionOfObjectValues('migrationValidationDetails', $this->getMigrationValidationDetails());
        $writer->writeStringValue('relyingPartyId', $this->getRelyingPartyId());
        $writer->writeStringValue('relyingPartyName', $this->getRelyingPartyName());
        $writer->writeCollectionOfPrimitiveValues('replyUrls', $this->getReplyUrls());
        $writer->writeStringValue('serviceId', $this->getServiceId());
        $writer->writeFloatValue('signInSuccessRate', $this->getSignInSuccessRate());
        $writer->writeIntegerValue('successfulSignInCount', $this->getSuccessfulSignInCount());
        $writer->writeIntegerValue('totalSignInCount', $this->getTotalSignInCount());
        $writer->writeIntegerValue('uniqueUserCount', $this->getUniqueUserCount());
    }

    /**
     * Sets the failedSignInCount property value. Number of failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @param int|null $value Value to set for the failedSignInCount property.
    */
    public function setFailedSignInCount(?int $value): void {
        $this->getBackingStore()->set('failedSignInCount', $value);
    }

    /**
     * Sets the migrationStatus property value. The migrationStatus property
     * @param MigrationStatus|null $value Value to set for the migrationStatus property.
    */
    public function setMigrationStatus(?MigrationStatus $value): void {
        $this->getBackingStore()->set('migrationStatus', $value);
    }

    /**
     * Sets the migrationValidationDetails property value. Specifies all the validations checks done on applications config details.
     * @param array<KeyValuePair>|null $value Value to set for the migrationValidationDetails property.
    */
    public function setMigrationValidationDetails(?array $value): void {
        $this->getBackingStore()->set('migrationValidationDetails', $value);
    }

    /**
     * Sets the relyingPartyId property value. Identifies the relying party to this federation service. It's used when issuing claims to the relying party. Supports $orderby, $filter (eq).
     * @param string|null $value Value to set for the relyingPartyId property.
    */
    public function setRelyingPartyId(?string $value): void {
        $this->getBackingStore()->set('relyingPartyId', $value);
    }

    /**
     * Sets the relyingPartyName property value. Name of the relying party's website or other entity on the Internet that uses an identity provider to authenticate a user who wants to log in. Supports $orderby, $filter (eq).
     * @param string|null $value Value to set for the relyingPartyName property.
    */
    public function setRelyingPartyName(?string $value): void {
        $this->getBackingStore()->set('relyingPartyName', $value);
    }

    /**
     * Sets the replyUrls property value. Specifies where the relying party expects to receive the token.
     * @param array<string>|null $value Value to set for the replyUrls property.
    */
    public function setReplyUrls(?array $value): void {
        $this->getBackingStore()->set('replyUrls', $value);
    }

    /**
     * Sets the serviceId property value. Uniquely identifies the Active Directory forest. Supports $orderby, $filter (eq).
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the signInSuccessRate property value. Calculated as Number of successful / (Number of successful + Number of failed sign ins) or successfulSignInCount / totalSignInCount on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @param float|null $value Value to set for the signInSuccessRate property.
    */
    public function setSignInSuccessRate(?float $value): void {
        $this->getBackingStore()->set('signInSuccessRate', $value);
    }

    /**
     * Sets the successfulSignInCount property value. Number of successful sign ins on AD FS. Supports $orderby, $filter (eq).
     * @param int|null $value Value to set for the successfulSignInCount property.
    */
    public function setSuccessfulSignInCount(?int $value): void {
        $this->getBackingStore()->set('successfulSignInCount', $value);
    }

    /**
     * Sets the totalSignInCount property value. Number of successful + failed sign ins on AD FS in the period specified. Supports $orderby, $filter (eq).
     * @param int|null $value Value to set for the totalSignInCount property.
    */
    public function setTotalSignInCount(?int $value): void {
        $this->getBackingStore()->set('totalSignInCount', $value);
    }

    /**
     * Sets the uniqueUserCount property value. Number of unique users that signed into the application. Supports $orderby, $filter (eq).
     * @param int|null $value Value to set for the uniqueUserCount property.
    */
    public function setUniqueUserCount(?int $value): void {
        $this->getBackingStore()->set('uniqueUserCount', $value);
    }

}
