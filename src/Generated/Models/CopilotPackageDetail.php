<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CopilotPackageDetail extends CopilotPackage implements Parsable 
{
    /**
     * Instantiates a new CopilotPackageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPackageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPackageDetail {
        return new CopilotPackageDetail();
    }

    /**
     * Gets the acquireUsersAndGroups property value. The acquireUsersAndGroups property
     * @return array<PackageAccessEntity>|null
    */
    public function getAcquireUsersAndGroups(): ?array {
        $val = $this->getBackingStore()->get('acquireUsersAndGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PackageAccessEntity::class);
            /** @var array<PackageAccessEntity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acquireUsersAndGroups'");
    }

    /**
     * Gets the activeUsers property value. The number of distinct users who actively used the package during the reporting period.
     * @return int|null
    */
    public function getActiveUsers(): ?int {
        $val = $this->getBackingStore()->get('activeUsers');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeUsers'");
    }

    /**
     * Gets the allowedUsersAndGroups property value. The allowedUsersAndGroups property
     * @return array<PackageAccessEntity>|null
    */
    public function getAllowedUsersAndGroups(): ?array {
        $val = $this->getBackingStore()->get('allowedUsersAndGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PackageAccessEntity::class);
            /** @var array<PackageAccessEntity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedUsersAndGroups'");
    }

    /**
     * Gets the categories property value. The categories property
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the elementDetails property value. The elementDetails property
     * @return array<PackageElementDetail>|null
    */
    public function getElementDetails(): ?array {
        $val = $this->getBackingStore()->get('elementDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PackageElementDetail::class);
            /** @var array<PackageElementDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'elementDetails'");
    }

    /**
     * Gets the exceptionRate property value. The fraction of sessions that resulted in an exception, expressed as a value between 0 and 1.
     * @return float|null
    */
    public function getExceptionRate(): ?float {
        $val = $this->getBackingStore()->get('exceptionRate');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exceptionRate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acquireUsersAndGroups' => fn(ParseNode $n) => $o->setAcquireUsersAndGroups($n->getCollectionOfObjectValues([PackageAccessEntity::class, 'createFromDiscriminatorValue'])),
            'activeUsers' => fn(ParseNode $n) => $o->setActiveUsers($n->getIntegerValue()),
            'allowedUsersAndGroups' => fn(ParseNode $n) => $o->setAllowedUsersAndGroups($n->getCollectionOfObjectValues([PackageAccessEntity::class, 'createFromDiscriminatorValue'])),
            'categories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategories($val);
            },
            'elementDetails' => fn(ParseNode $n) => $o->setElementDetails($n->getCollectionOfObjectValues([PackageElementDetail::class, 'createFromDiscriminatorValue'])),
            'exceptionRate' => fn(ParseNode $n) => $o->setExceptionRate($n->getFloatValue()),
            'lastUsedDateTime' => fn(ParseNode $n) => $o->setLastUsedDateTime($n->getDateTimeValue()),
            'longDescription' => fn(ParseNode $n) => $o->setLongDescription($n->getStringValue()),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getStringValue()),
            'sharedWithUsersAndGroups' => fn(ParseNode $n) => $o->setSharedWithUsersAndGroups($n->getCollectionOfObjectValues([PackageAccessEntity::class, 'createFromDiscriminatorValue'])),
            'totalRunTimeInHours' => fn(ParseNode $n) => $o->setTotalRunTimeInHours($n->getFloatValue()),
            'totalSessions' => fn(ParseNode $n) => $o->setTotalSessions($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastUsedDateTime property value. The date and time when the package was last used, in ISO 8601 format and UTC.
     * @return DateTime|null
    */
    public function getLastUsedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUsedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUsedDateTime'");
    }

    /**
     * Gets the longDescription property value. The longDescription property
     * @return string|null
    */
    public function getLongDescription(): ?string {
        $val = $this->getBackingStore()->get('longDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'longDescription'");
    }

    /**
     * Gets the sensitivity property value. The sensitivity property
     * @return string|null
    */
    public function getSensitivity(): ?string {
        $val = $this->getBackingStore()->get('sensitivity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivity'");
    }

    /**
     * Gets the sharedWithUsersAndGroups property value. The sharedWithUsersAndGroups property
     * @return array<PackageAccessEntity>|null
    */
    public function getSharedWithUsersAndGroups(): ?array {
        $val = $this->getBackingStore()->get('sharedWithUsersAndGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PackageAccessEntity::class);
            /** @var array<PackageAccessEntity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedWithUsersAndGroups'");
    }

    /**
     * Gets the totalRunTimeInHours property value. Total hours worked by the agent.
     * @return float|null
    */
    public function getTotalRunTimeInHours(): ?float {
        $val = $this->getBackingStore()->get('totalRunTimeInHours');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRunTimeInHours'");
    }

    /**
     * Gets the totalSessions property value. The total number of sessions served by the package during the reporting period.
     * @return int|null
    */
    public function getTotalSessions(): ?int {
        $val = $this->getBackingStore()->get('totalSessions');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalSessions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acquireUsersAndGroups', $this->getAcquireUsersAndGroups());
        $writer->writeIntegerValue('activeUsers', $this->getActiveUsers());
        $writer->writeCollectionOfObjectValues('allowedUsersAndGroups', $this->getAllowedUsersAndGroups());
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('elementDetails', $this->getElementDetails());
        $writer->writeFloatValue('exceptionRate', $this->getExceptionRate());
        $writer->writeDateTimeValue('lastUsedDateTime', $this->getLastUsedDateTime());
        $writer->writeStringValue('longDescription', $this->getLongDescription());
        $writer->writeStringValue('sensitivity', $this->getSensitivity());
        $writer->writeCollectionOfObjectValues('sharedWithUsersAndGroups', $this->getSharedWithUsersAndGroups());
        $writer->writeFloatValue('totalRunTimeInHours', $this->getTotalRunTimeInHours());
        $writer->writeIntegerValue('totalSessions', $this->getTotalSessions());
    }

    /**
     * Sets the acquireUsersAndGroups property value. The acquireUsersAndGroups property
     * @param array<PackageAccessEntity>|null $value Value to set for the acquireUsersAndGroups property.
    */
    public function setAcquireUsersAndGroups(?array $value): void {
        $this->getBackingStore()->set('acquireUsersAndGroups', $value);
    }

    /**
     * Sets the activeUsers property value. The number of distinct users who actively used the package during the reporting period.
     * @param int|null $value Value to set for the activeUsers property.
    */
    public function setActiveUsers(?int $value): void {
        $this->getBackingStore()->set('activeUsers', $value);
    }

    /**
     * Sets the allowedUsersAndGroups property value. The allowedUsersAndGroups property
     * @param array<PackageAccessEntity>|null $value Value to set for the allowedUsersAndGroups property.
    */
    public function setAllowedUsersAndGroups(?array $value): void {
        $this->getBackingStore()->set('allowedUsersAndGroups', $value);
    }

    /**
     * Sets the categories property value. The categories property
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the elementDetails property value. The elementDetails property
     * @param array<PackageElementDetail>|null $value Value to set for the elementDetails property.
    */
    public function setElementDetails(?array $value): void {
        $this->getBackingStore()->set('elementDetails', $value);
    }

    /**
     * Sets the exceptionRate property value. The fraction of sessions that resulted in an exception, expressed as a value between 0 and 1.
     * @param float|null $value Value to set for the exceptionRate property.
    */
    public function setExceptionRate(?float $value): void {
        $this->getBackingStore()->set('exceptionRate', $value);
    }

    /**
     * Sets the lastUsedDateTime property value. The date and time when the package was last used, in ISO 8601 format and UTC.
     * @param DateTime|null $value Value to set for the lastUsedDateTime property.
    */
    public function setLastUsedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUsedDateTime', $value);
    }

    /**
     * Sets the longDescription property value. The longDescription property
     * @param string|null $value Value to set for the longDescription property.
    */
    public function setLongDescription(?string $value): void {
        $this->getBackingStore()->set('longDescription', $value);
    }

    /**
     * Sets the sensitivity property value. The sensitivity property
     * @param string|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?string $value): void {
        $this->getBackingStore()->set('sensitivity', $value);
    }

    /**
     * Sets the sharedWithUsersAndGroups property value. The sharedWithUsersAndGroups property
     * @param array<PackageAccessEntity>|null $value Value to set for the sharedWithUsersAndGroups property.
    */
    public function setSharedWithUsersAndGroups(?array $value): void {
        $this->getBackingStore()->set('sharedWithUsersAndGroups', $value);
    }

    /**
     * Sets the totalRunTimeInHours property value. Total hours worked by the agent.
     * @param float|null $value Value to set for the totalRunTimeInHours property.
    */
    public function setTotalRunTimeInHours(?float $value): void {
        $this->getBackingStore()->set('totalRunTimeInHours', $value);
    }

    /**
     * Sets the totalSessions property value. The total number of sessions served by the package during the reporting period.
     * @param int|null $value Value to set for the totalSessions property.
    */
    public function setTotalSessions(?int $value): void {
        $this->getBackingStore()->set('totalSessions', $value);
    }

}
