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
use Psr\Http\Message\StreamInterface;

class KeyCredential implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new keyCredential and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeyCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeyCredential {
        return new KeyCredential();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the customKeyIdentifier property value. Custom key identifier
     * @return StreamInterface|null
    */
    public function getCustomKeyIdentifier(): ?StreamInterface {
        return $this->getBackingStore()->get('customKeyIdentifier');
    }

    /**
     * Gets the displayName property value. Friendly name for the key. Optional.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDateTime property value. The date and time at which the credential expires. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customKeyIdentifier' => fn(ParseNode $n) => $o->setCustomKeyIdentifier($n->getBinaryContent()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getBinaryContent()),
            'keyId' => fn(ParseNode $n) => $o->setKeyId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The certificate's raw data in byte array converted to Base64 string. Returned only on $select for a single object, that is, GET applications/{applicationId}?$select=keyCredentials or GET servicePrincipals/{servicePrincipalId}?$select=keyCredentials; otherwise, it is always null.
     * @return StreamInterface|null
    */
    public function getKey(): ?StreamInterface {
        return $this->getBackingStore()->get('key');
    }

    /**
     * Gets the keyId property value. The unique identifier (GUID) for the key.
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->getBackingStore()->get('keyId');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the startDateTime property value. The date and time at which the credential becomes valid.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the type property value. The type of key credential; for example, Symmetric, AsymmetricX509Cert.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the usage property value. A string that describes the purpose for which the key can be used; for example, Verify.
     * @return string|null
    */
    public function getUsage(): ?string {
        return $this->getBackingStore()->get('usage');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('customKeyIdentifier', $this->getCustomKeyIdentifier());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeBinaryContent('key', $this->getKey());
        $writer->writeStringValue('keyId', $this->getKeyId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('usage', $this->getUsage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the customKeyIdentifier property value. Custom key identifier
     *  @param StreamInterface|null $value Value to set for the customKeyIdentifier property.
    */
    public function setCustomKeyIdentifier(?StreamInterface $value): void {
        $this->getBackingStore()->set('customKeyIdentifier', $value);
    }

    /**
     * Sets the displayName property value. Friendly name for the key. Optional.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The date and time at which the credential expires. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the key property value. The certificate's raw data in byte array converted to Base64 string. Returned only on $select for a single object, that is, GET applications/{applicationId}?$select=keyCredentials or GET servicePrincipals/{servicePrincipalId}?$select=keyCredentials; otherwise, it is always null.
     *  @param StreamInterface|null $value Value to set for the key property.
    */
    public function setKey(?StreamInterface $value): void {
        $this->getBackingStore()->set('key', $value);
    }

    /**
     * Sets the keyId property value. The unique identifier (GUID) for the key.
     *  @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value): void {
        $this->getBackingStore()->set('keyId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time at which the credential becomes valid.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the type property value. The type of key credential; for example, Symmetric, AsymmetricX509Cert.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the usage property value. A string that describes the purpose for which the key can be used; for example, Verify.
     *  @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->getBackingStore()->set('usage', $value);
    }

}
