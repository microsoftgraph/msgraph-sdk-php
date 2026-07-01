<?php

namespace Microsoft\Graph\Generated\Models;

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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acquireUsersAndGroups' => fn(ParseNode $n) => $o->setAcquireUsersAndGroups($n->getCollectionOfObjectValues([PackageAccessEntity::class, 'createFromDiscriminatorValue'])),
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
            'longDescription' => fn(ParseNode $n) => $o->setLongDescription($n->getStringValue()),
            'sensitivity' => fn(ParseNode $n) => $o->setSensitivity($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('acquireUsersAndGroups', $this->getAcquireUsersAndGroups());
        $writer->writeCollectionOfObjectValues('allowedUsersAndGroups', $this->getAllowedUsersAndGroups());
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('elementDetails', $this->getElementDetails());
        $writer->writeStringValue('longDescription', $this->getLongDescription());
        $writer->writeStringValue('sensitivity', $this->getSensitivity());
    }

    /**
     * Sets the acquireUsersAndGroups property value. The acquireUsersAndGroups property
     * @param array<PackageAccessEntity>|null $value Value to set for the acquireUsersAndGroups property.
    */
    public function setAcquireUsersAndGroups(?array $value): void {
        $this->getBackingStore()->set('acquireUsersAndGroups', $value);
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

}
