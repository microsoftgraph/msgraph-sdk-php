<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the macOSGeneralDeviceConfiguration resource.
*/
class MacOSGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new macOSGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSGeneralDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSGeneralDeviceConfiguration {
        return new MacOSGeneralDeviceConfiguration();
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        $val = $this->getBackingStore()->get('compliantAppListType');
        if (is_null($val) || $val instanceof AppListType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppListType'");
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        $val = $this->getBackingStore()->get('compliantAppsList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppsList'");
    }

    /**
     * Gets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @return array<string>|null
    */
    public function getEmailInDomainSuffixes(): ?array {
        $val = $this->getBackingStore()->get('emailInDomainSuffixes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailInDomainSuffixes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantAppListType' => fn(ParseNode $n) => $o->setCompliantAppListType($n->getEnumValue(AppListType::class)),
            'compliantAppsList' => fn(ParseNode $n) => $o->setCompliantAppsList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'emailInDomainSuffixes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEmailInDomainSuffixes($val);
            },
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
        ]);
    }

    /**
     * Gets the passwordBlockSimple property value. Block simple passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockSimple');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockSimple'");
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain. Valid values 0 to 4
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumCharacterSetCount'");
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity required before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeLock');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeLock'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity required before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequired property value. Whether or not to require a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequired'");
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('compliantAppListType', $this->getCompliantAppListType());
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->getCompliantAppsList());
        $writer->writeCollectionOfPrimitiveValues('emailInDomainSuffixes', $this->getEmailInDomainSuffixes());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
     * @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value): void {
        $this->getBackingStore()->set('compliantAppListType', $value);
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value): void {
        $this->getBackingStore()->set('compliantAppsList', $value);
    }

    /**
     * Sets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @param array<string>|null $value Value to set for the emailInDomainSuffixes property.
    */
    public function setEmailInDomainSuffixes(?array $value): void {
        $this->getBackingStore()->set('emailInDomainSuffixes', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Block simple passwords.
     * @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain. Valid values 0 to 4
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords.
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity required before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity required before the screen times out.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block.
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Whether or not to require a password.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

}
