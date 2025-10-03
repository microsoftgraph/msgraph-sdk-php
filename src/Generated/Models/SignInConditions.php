<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SignInConditions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SignInConditions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SignInConditions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SignInConditions {
        return new SignInConditions();
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
     * Gets the authenticationFlow property value. Type of authentication flow. The possible value is: deviceCodeFlow or authenticationTransfer. Default value is none.
     * @return AuthenticationFlow|null
    */
    public function getAuthenticationFlow(): ?AuthenticationFlow {
        $val = $this->getBackingStore()->get('authenticationFlow');
        if (is_null($val) || $val instanceof AuthenticationFlow) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationFlow'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the clientAppType property value. Client application type. The possible value is: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other, unknownFutureValue. Default value is all.
     * @return ConditionalAccessClientApp|null
    */
    public function getClientAppType(): ?ConditionalAccessClientApp {
        $val = $this->getBackingStore()->get('clientAppType');
        if (is_null($val) || $val instanceof ConditionalAccessClientApp) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAppType'");
    }

    /**
     * Gets the country property value. Country from where the identity is authenticating.
     * @return string|null
    */
    public function getCountry(): ?string {
        $val = $this->getBackingStore()->get('country');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'country'");
    }

    /**
     * Gets the deviceInfo property value. Information about the device used for the sign-in.
     * @return DeviceInfo|null
    */
    public function getDeviceInfo(): ?DeviceInfo {
        $val = $this->getBackingStore()->get('deviceInfo');
        if (is_null($val) || $val instanceof DeviceInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceInfo'");
    }

    /**
     * Gets the devicePlatform property value. Device platform. The possible value is: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux. Default value is all.
     * @return ConditionalAccessDevicePlatform|null
    */
    public function getDevicePlatform(): ?ConditionalAccessDevicePlatform {
        $val = $this->getBackingStore()->get('devicePlatform');
        if (is_null($val) || $val instanceof ConditionalAccessDevicePlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicePlatform'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationFlow' => fn(ParseNode $n) => $o->setAuthenticationFlow($n->getObjectValue([AuthenticationFlow::class, 'createFromDiscriminatorValue'])),
            'clientAppType' => fn(ParseNode $n) => $o->setClientAppType($n->getEnumValue(ConditionalAccessClientApp::class)),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'deviceInfo' => fn(ParseNode $n) => $o->setDeviceInfo($n->getObjectValue([DeviceInfo::class, 'createFromDiscriminatorValue'])),
            'devicePlatform' => fn(ParseNode $n) => $o->setDevicePlatform($n->getEnumValue(ConditionalAccessDevicePlatform::class)),
            'insiderRiskLevel' => fn(ParseNode $n) => $o->setInsiderRiskLevel($n->getEnumValue(InsiderRiskLevel::class)),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'servicePrincipalRiskLevel' => fn(ParseNode $n) => $o->setServicePrincipalRiskLevel($n->getEnumValue(RiskLevel::class)),
            'signInRiskLevel' => fn(ParseNode $n) => $o->setSignInRiskLevel($n->getEnumValue(RiskLevel::class)),
            'userRiskLevel' => fn(ParseNode $n) => $o->setUserRiskLevel($n->getEnumValue(RiskLevel::class)),
        ];
    }

    /**
     * Gets the insiderRiskLevel property value. Insider risk associated with the authenticating user. The possible value is: none, minor, moderate, elevated, unknownFutureValue. Default value is none.
     * @return InsiderRiskLevel|null
    */
    public function getInsiderRiskLevel(): ?InsiderRiskLevel {
        $val = $this->getBackingStore()->get('insiderRiskLevel');
        if (is_null($val) || $val instanceof InsiderRiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insiderRiskLevel'");
    }

    /**
     * Gets the ipAddress property value. Ip address of the authenticating identity.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
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
     * Gets the servicePrincipalRiskLevel property value. Risk associated with the service principal. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @return RiskLevel|null
    */
    public function getServicePrincipalRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('servicePrincipalRiskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalRiskLevel'");
    }

    /**
     * Gets the signInRiskLevel property value. Sign-in risk associated with the user. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @return RiskLevel|null
    */
    public function getSignInRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('signInRiskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInRiskLevel'");
    }

    /**
     * Gets the userRiskLevel property value. The authenticating user's risk level. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @return RiskLevel|null
    */
    public function getUserRiskLevel(): ?RiskLevel {
        $val = $this->getBackingStore()->get('userRiskLevel');
        if (is_null($val) || $val instanceof RiskLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRiskLevel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticationFlow', $this->getAuthenticationFlow());
        $writer->writeEnumValue('clientAppType', $this->getClientAppType());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeObjectValue('deviceInfo', $this->getDeviceInfo());
        $writer->writeEnumValue('devicePlatform', $this->getDevicePlatform());
        $writer->writeEnumValue('insiderRiskLevel', $this->getInsiderRiskLevel());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('servicePrincipalRiskLevel', $this->getServicePrincipalRiskLevel());
        $writer->writeEnumValue('signInRiskLevel', $this->getSignInRiskLevel());
        $writer->writeEnumValue('userRiskLevel', $this->getUserRiskLevel());
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
     * Sets the authenticationFlow property value. Type of authentication flow. The possible value is: deviceCodeFlow or authenticationTransfer. Default value is none.
     * @param AuthenticationFlow|null $value Value to set for the authenticationFlow property.
    */
    public function setAuthenticationFlow(?AuthenticationFlow $value): void {
        $this->getBackingStore()->set('authenticationFlow', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the clientAppType property value. Client application type. The possible value is: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other, unknownFutureValue. Default value is all.
     * @param ConditionalAccessClientApp|null $value Value to set for the clientAppType property.
    */
    public function setClientAppType(?ConditionalAccessClientApp $value): void {
        $this->getBackingStore()->set('clientAppType', $value);
    }

    /**
     * Sets the country property value. Country from where the identity is authenticating.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the deviceInfo property value. Information about the device used for the sign-in.
     * @param DeviceInfo|null $value Value to set for the deviceInfo property.
    */
    public function setDeviceInfo(?DeviceInfo $value): void {
        $this->getBackingStore()->set('deviceInfo', $value);
    }

    /**
     * Sets the devicePlatform property value. Device platform. The possible value is: android, iOS, windows, windowsPhone, macOS, all, unknownFutureValue, linux. Default value is all.
     * @param ConditionalAccessDevicePlatform|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?ConditionalAccessDevicePlatform $value): void {
        $this->getBackingStore()->set('devicePlatform', $value);
    }

    /**
     * Sets the insiderRiskLevel property value. Insider risk associated with the authenticating user. The possible value is: none, minor, moderate, elevated, unknownFutureValue. Default value is none.
     * @param InsiderRiskLevel|null $value Value to set for the insiderRiskLevel property.
    */
    public function setInsiderRiskLevel(?InsiderRiskLevel $value): void {
        $this->getBackingStore()->set('insiderRiskLevel', $value);
    }

    /**
     * Sets the ipAddress property value. Ip address of the authenticating identity.
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the servicePrincipalRiskLevel property value. Risk associated with the service principal. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @param RiskLevel|null $value Value to set for the servicePrincipalRiskLevel property.
    */
    public function setServicePrincipalRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('servicePrincipalRiskLevel', $value);
    }

    /**
     * Sets the signInRiskLevel property value. Sign-in risk associated with the user. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @param RiskLevel|null $value Value to set for the signInRiskLevel property.
    */
    public function setSignInRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('signInRiskLevel', $value);
    }

    /**
     * Sets the userRiskLevel property value. The authenticating user's risk level. The possible value is: low, medium, high, hidden, none, unknownFutureValue. Default value is none.
     * @param RiskLevel|null $value Value to set for the userRiskLevel property.
    */
    public function setUserRiskLevel(?RiskLevel $value): void {
        $this->getBackingStore()->set('userRiskLevel', $value);
    }

}
