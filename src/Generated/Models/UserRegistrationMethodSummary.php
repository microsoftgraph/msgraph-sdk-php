<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserRegistrationMethodSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userRegistrationMethodSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRegistrationMethodSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRegistrationMethodSummary {
        return new UserRegistrationMethodSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalUserCount' => fn(ParseNode $n) => $o->setTotalUserCount($n->getIntegerValue()),
            'userRegistrationMethodCounts' => fn(ParseNode $n) => $o->setUserRegistrationMethodCounts($n->getCollectionOfObjectValues([UserRegistrationMethodCount::class, 'createFromDiscriminatorValue'])),
            'userRoles' => fn(ParseNode $n) => $o->setUserRoles($n->getEnumValue(UserRegistrationMethodSummary_userRoles::class)),
            'userTypes' => fn(ParseNode $n) => $o->setUserTypes($n->getEnumValue(UserRegistrationMethodSummary_userTypes::class)),
        ];
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
     * Gets the totalUserCount property value. Total number of users in the tenant.
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        $val = $this->getBackingStore()->get('totalUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUserCount'");
    }

    /**
     * Gets the userRegistrationMethodCounts property value. Number of users registered for each authentication method.
     * @return array<UserRegistrationMethodCount>|null
    */
    public function getUserRegistrationMethodCounts(): ?array {
        $val = $this->getBackingStore()->get('userRegistrationMethodCounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserRegistrationMethodCount::class);
            /** @var array<UserRegistrationMethodCount>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRegistrationMethodCounts'");
    }

    /**
     * Gets the userRoles property value. The role type of the user. Possible values are: all, privilegedAdmin, admin, user, unknownFutureValue.
     * @return UserRegistrationMethodSummary_userRoles|null
    */
    public function getUserRoles(): ?UserRegistrationMethodSummary_userRoles {
        $val = $this->getBackingStore()->get('userRoles');
        if (is_null($val) || $val instanceof UserRegistrationMethodSummary_userRoles) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRoles'");
    }

    /**
     * Gets the userTypes property value. User type. Possible values are: all, member, guest, unknownFutureValue.
     * @return UserRegistrationMethodSummary_userTypes|null
    */
    public function getUserTypes(): ?UserRegistrationMethodSummary_userTypes {
        $val = $this->getBackingStore()->get('userTypes');
        if (is_null($val) || $val instanceof UserRegistrationMethodSummary_userTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalUserCount', $this->getTotalUserCount());
        $writer->writeCollectionOfObjectValues('userRegistrationMethodCounts', $this->getUserRegistrationMethodCounts());
        $writer->writeEnumValue('userRoles', $this->getUserRoles());
        $writer->writeEnumValue('userTypes', $this->getUserTypes());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalUserCount property value. Total number of users in the tenant.
     * @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value): void {
        $this->getBackingStore()->set('totalUserCount', $value);
    }

    /**
     * Sets the userRegistrationMethodCounts property value. Number of users registered for each authentication method.
     * @param array<UserRegistrationMethodCount>|null $value Value to set for the userRegistrationMethodCounts property.
    */
    public function setUserRegistrationMethodCounts(?array $value): void {
        $this->getBackingStore()->set('userRegistrationMethodCounts', $value);
    }

    /**
     * Sets the userRoles property value. The role type of the user. Possible values are: all, privilegedAdmin, admin, user, unknownFutureValue.
     * @param UserRegistrationMethodSummary_userRoles|null $value Value to set for the userRoles property.
    */
    public function setUserRoles(?UserRegistrationMethodSummary_userRoles $value): void {
        $this->getBackingStore()->set('userRoles', $value);
    }

    /**
     * Sets the userTypes property value. User type. Possible values are: all, member, guest, unknownFutureValue.
     * @param UserRegistrationMethodSummary_userTypes|null $value Value to set for the userTypes property.
    */
    public function setUserTypes(?UserRegistrationMethodSummary_userTypes $value): void {
        $this->getBackingStore()->set('userTypes', $value);
    }

}
