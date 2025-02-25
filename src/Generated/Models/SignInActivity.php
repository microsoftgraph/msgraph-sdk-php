<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SignInActivity implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SignInActivity and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInActivity {
        return new SignInActivity();
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
            'lastNonInteractiveSignInDateTime' => fn(ParseNode $n) => $o->setLastNonInteractiveSignInDateTime($n->getDateTimeValue()),
            'lastNonInteractiveSignInRequestId' => fn(ParseNode $n) => $o->setLastNonInteractiveSignInRequestId($n->getStringValue()),
            'lastSignInDateTime' => fn(ParseNode $n) => $o->setLastSignInDateTime($n->getDateTimeValue()),
            'lastSignInRequestId' => fn(ParseNode $n) => $o->setLastSignInRequestId($n->getStringValue()),
            'lastSuccessfulSignInDateTime' => fn(ParseNode $n) => $o->setLastSuccessfulSignInDateTime($n->getDateTimeValue()),
            'lastSuccessfulSignInRequestId' => fn(ParseNode $n) => $o->setLastSuccessfulSignInRequestId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastNonInteractiveSignInDateTime property value. The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client attempted (either successfully or unsuccessfully) to sign in to the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Microsoft Entra ID maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Microsoft Entra ID.
     * @return DateTime|null
    */
    public function getLastNonInteractiveSignInDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastNonInteractiveSignInDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastNonInteractiveSignInDateTime'");
    }

    /**
     * Gets the lastNonInteractiveSignInRequestId property value. Request identifier of the last non-interactive sign-in performed by this user.
     * @return string|null
    */
    public function getLastNonInteractiveSignInRequestId(): ?string {
        $val = $this->getBackingStore()->get('lastNonInteractiveSignInRequestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastNonInteractiveSignInRequestId'");
    }

    /**
     * Gets the lastSignInDateTime property value. The last interactive sign-in date and time for a specific user. This property records the last time a user attempted an interactive sign-in to the directory—whether the attempt was successful or not. Note: Since unsuccessful attempts are also logged, this value might not accurately reflect actual system usage. For tracking actual account access, please use the lastSuccessfulSignInDateTime property. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastSignInDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSignInDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSignInDateTime'");
    }

    /**
     * Gets the lastSignInRequestId property value. Request identifier of the last interactive sign-in performed by this user.
     * @return string|null
    */
    public function getLastSignInRequestId(): ?string {
        $val = $this->getBackingStore()->get('lastSignInRequestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSignInRequestId'");
    }

    /**
     * Gets the lastSuccessfulSignInDateTime property value. The date and time of the user's most recent successful interactive sign-in. Use this property if you need to determine when the account was truly accessed. This field can be used to build reports, such as inactive users. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Microsoft Entra ID maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Microsoft Entra ID.
     * @return DateTime|null
    */
    public function getLastSuccessfulSignInDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSuccessfulSignInDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulSignInDateTime'");
    }

    /**
     * Gets the lastSuccessfulSignInRequestId property value. The request ID of the last successful sign-in.
     * @return string|null
    */
    public function getLastSuccessfulSignInRequestId(): ?string {
        $val = $this->getBackingStore()->get('lastSuccessfulSignInRequestId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulSignInRequestId'");
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
        $writer->writeDateTimeValue('lastNonInteractiveSignInDateTime', $this->getLastNonInteractiveSignInDateTime());
        $writer->writeStringValue('lastNonInteractiveSignInRequestId', $this->getLastNonInteractiveSignInRequestId());
        $writer->writeDateTimeValue('lastSignInDateTime', $this->getLastSignInDateTime());
        $writer->writeStringValue('lastSignInRequestId', $this->getLastSignInRequestId());
        $writer->writeDateTimeValue('lastSuccessfulSignInDateTime', $this->getLastSuccessfulSignInDateTime());
        $writer->writeStringValue('lastSuccessfulSignInRequestId', $this->getLastSuccessfulSignInRequestId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the lastNonInteractiveSignInDateTime property value. The last non-interactive sign-in date for a specific user. You can use this field to calculate the last time a client attempted (either successfully or unsuccessfully) to sign in to the directory on behalf of a user. Because some users may use clients to access tenant resources rather than signing into your tenant directly, you can use the non-interactive sign-in date to along with lastSignInDateTime to identify inactive users. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Microsoft Entra ID maintains non-interactive sign-ins going back to May 2020. For more information about using the value of this property, see Manage inactive user accounts in Microsoft Entra ID.
     * @param DateTime|null $value Value to set for the lastNonInteractiveSignInDateTime property.
    */
    public function setLastNonInteractiveSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastNonInteractiveSignInDateTime', $value);
    }

    /**
     * Sets the lastNonInteractiveSignInRequestId property value. Request identifier of the last non-interactive sign-in performed by this user.
     * @param string|null $value Value to set for the lastNonInteractiveSignInRequestId property.
    */
    public function setLastNonInteractiveSignInRequestId(?string $value): void {
        $this->getBackingStore()->set('lastNonInteractiveSignInRequestId', $value);
    }

    /**
     * Sets the lastSignInDateTime property value. The last interactive sign-in date and time for a specific user. This property records the last time a user attempted an interactive sign-in to the directory—whether the attempt was successful or not. Note: Since unsuccessful attempts are also logged, this value might not accurately reflect actual system usage. For tracking actual account access, please use the lastSuccessfulSignInDateTime property. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSignInDateTime property.
    */
    public function setLastSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSignInDateTime', $value);
    }

    /**
     * Sets the lastSignInRequestId property value. Request identifier of the last interactive sign-in performed by this user.
     * @param string|null $value Value to set for the lastSignInRequestId property.
    */
    public function setLastSignInRequestId(?string $value): void {
        $this->getBackingStore()->set('lastSignInRequestId', $value);
    }

    /**
     * Sets the lastSuccessfulSignInDateTime property value. The date and time of the user's most recent successful interactive sign-in. Use this property if you need to determine when the account was truly accessed. This field can be used to build reports, such as inactive users. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Microsoft Entra ID maintains interactive sign-ins going back to April 2020. For more information about using the value of this property, see Manage inactive user accounts in Microsoft Entra ID.
     * @param DateTime|null $value Value to set for the lastSuccessfulSignInDateTime property.
    */
    public function setLastSuccessfulSignInDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSuccessfulSignInDateTime', $value);
    }

    /**
     * Sets the lastSuccessfulSignInRequestId property value. The request ID of the last successful sign-in.
     * @param string|null $value Value to set for the lastSuccessfulSignInRequestId property.
    */
    public function setLastSuccessfulSignInRequestId(?string $value): void {
        $this->getBackingStore()->set('lastSuccessfulSignInRequestId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
