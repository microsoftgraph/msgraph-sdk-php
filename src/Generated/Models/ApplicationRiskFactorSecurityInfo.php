<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplicationRiskFactorSecurityInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationRiskFactorSecurityInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationRiskFactorSecurityInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationRiskFactorSecurityInfo {
        return new ApplicationRiskFactorSecurityInfo();
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
     * Gets the certificate property value. The certificate property
     * @return ApplicationRiskFactorCertificateInfo|null
    */
    public function getCertificate(): ?ApplicationRiskFactorCertificateInfo {
        $val = $this->getBackingStore()->get('certificate');
        if (is_null($val) || $val instanceof ApplicationRiskFactorCertificateInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificate'");
    }

    /**
     * Gets the domainToCheck property value. Specifies the domain or hostname evaluated during the security assessment.
     * @return string|null
    */
    public function getDomainToCheck(): ?string {
        $val = $this->getBackingStore()->get('domainToCheck');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainToCheck'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificate' => fn(ParseNode $n) => $o->setCertificate($n->getObjectValue([ApplicationRiskFactorCertificateInfo::class, 'createFromDiscriminatorValue'])),
            'domainToCheck' => fn(ParseNode $n) => $o->setDomainToCheck($n->getStringValue()),
            'hasAdminAuditTrail' => fn(ParseNode $n) => $o->setHasAdminAuditTrail($n->getBooleanValue()),
            'hasAnonymousUsage' => fn(ParseNode $n) => $o->setHasAnonymousUsage($n->getBooleanValue()),
            'hasDataAuditTrail' => fn(ParseNode $n) => $o->setHasDataAuditTrail($n->getBooleanValue()),
            'hasDataClassification' => fn(ParseNode $n) => $o->setHasDataClassification($n->getBooleanValue()),
            'hasDataEncrypted' => fn(ParseNode $n) => $o->setHasDataEncrypted($n->getBooleanValue()),
            'hasEnforceTransportEnc' => fn(ParseNode $n) => $o->setHasEnforceTransportEnc($n->getBooleanValue()),
            'hasIpRestriction' => fn(ParseNode $n) => $o->setHasIpRestriction($n->getBooleanValue()),
            'hasMFA' => fn(ParseNode $n) => $o->setHasMFA($n->getBooleanValue()),
            'hasPenTest' => fn(ParseNode $n) => $o->setHasPenTest($n->getBooleanValue()),
            'hasRememberPassword' => fn(ParseNode $n) => $o->setHasRememberPassword($n->getBooleanValue()),
            'hasSamlSupport' => fn(ParseNode $n) => $o->setHasSamlSupport($n->getBooleanValue()),
            'hasUserAuditLogs' => fn(ParseNode $n) => $o->setHasUserAuditLogs($n->getBooleanValue()),
            'hasUserDataUpload' => fn(ParseNode $n) => $o->setHasUserDataUpload($n->getBooleanValue()),
            'hasUserRolesSupport' => fn(ParseNode $n) => $o->setHasUserRolesSupport($n->getBooleanValue()),
            'hasValidCertName' => fn(ParseNode $n) => $o->setHasValidCertName($n->getBooleanValue()),
            'httpsSecurityHeaders' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setHttpsSecurityHeaders($val);
            },
            'isCertTrusted' => fn(ParseNode $n) => $o->setIsCertTrusted($n->getBooleanValue()),
            'isDrownVulnerable' => fn(ParseNode $n) => $o->setIsDrownVulnerable($n->getBooleanValue()),
            'isHeartbleedProof' => fn(ParseNode $n) => $o->setIsHeartbleedProof($n->getBooleanValue()),
            'lastBreachDate' => fn(ParseNode $n) => $o->setLastBreachDate($n->getDateValue()),
            'latestValidSSL' => fn(ParseNode $n) => $o->setLatestValidSSL($n->getEnumValue(SslVersion::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'passwordPolicy' => fn(ParseNode $n) => $o->setPasswordPolicy($n->getEnumValue(PasswordPolicy::class)),
            'restEncryptionType' => fn(ParseNode $n) => $o->setRestEncryptionType($n->getEnumValue(RestEncryptionType::class)),
        ];
    }

    /**
     * Gets the hasAdminAuditTrail property value. Indicates whether the application maintains an audit trail for administrative actions.
     * @return bool|null
    */
    public function getHasAdminAuditTrail(): ?bool {
        $val = $this->getBackingStore()->get('hasAdminAuditTrail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAdminAuditTrail'");
    }

    /**
     * Gets the hasAnonymousUsage property value. Indicates whether the application allows anonymous or unauthenticated usage.
     * @return bool|null
    */
    public function getHasAnonymousUsage(): ?bool {
        $val = $this->getBackingStore()->get('hasAnonymousUsage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAnonymousUsage'");
    }

    /**
     * Gets the hasDataAuditTrail property value. Indicates whether the application logs access or modification of customer data for audit purposes.
     * @return bool|null
    */
    public function getHasDataAuditTrail(): ?bool {
        $val = $this->getBackingStore()->get('hasDataAuditTrail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasDataAuditTrail'");
    }

    /**
     * Gets the hasDataClassification property value. Indicates whether the application classifies and labels data based on sensitivity levels.
     * @return bool|null
    */
    public function getHasDataClassification(): ?bool {
        $val = $this->getBackingStore()->get('hasDataClassification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasDataClassification'");
    }

    /**
     * Gets the hasDataEncrypted property value. Indicates whether data at rest and in transit are encrypted using approved algorithms.
     * @return bool|null
    */
    public function getHasDataEncrypted(): ?bool {
        $val = $this->getBackingStore()->get('hasDataEncrypted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasDataEncrypted'");
    }

    /**
     * Gets the hasEnforceTransportEnc property value. Indicates whether HTTPS or equivalent secure transport is enforced for all communication channels.
     * @return bool|null
    */
    public function getHasEnforceTransportEnc(): ?bool {
        $val = $this->getBackingStore()->get('hasEnforceTransportEnc');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasEnforceTransportEnc'");
    }

    /**
     * Gets the hasIpRestriction property value. Indicates whether access to the application can be restricted based on IP address or network range.
     * @return bool|null
    */
    public function getHasIpRestriction(): ?bool {
        $val = $this->getBackingStore()->get('hasIpRestriction');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasIpRestriction'");
    }

    /**
     * Gets the hasMFA property value. Indicates whether the application supports or enforces multi-factor authentication (MFA).
     * @return bool|null
    */
    public function getHasMFA(): ?bool {
        $val = $this->getBackingStore()->get('hasMFA');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasMFA'");
    }

    /**
     * Gets the hasPenTest property value. Indicates whether the application undergoes periodic penetration testing or external security reviews.
     * @return bool|null
    */
    public function getHasPenTest(): ?bool {
        $val = $this->getBackingStore()->get('hasPenTest');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasPenTest'");
    }

    /**
     * Gets the hasRememberPassword property value. Indicates whether the application supports password-saving functionality, which may pose a security risk.
     * @return bool|null
    */
    public function getHasRememberPassword(): ?bool {
        $val = $this->getBackingStore()->get('hasRememberPassword');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasRememberPassword'");
    }

    /**
     * Gets the hasSamlSupport property value. Indicates whether the application supports SAML-based single sign-on (SSO).
     * @return bool|null
    */
    public function getHasSamlSupport(): ?bool {
        $val = $this->getBackingStore()->get('hasSamlSupport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasSamlSupport'");
    }

    /**
     * Gets the hasUserAuditLogs property value. Indicates whether user activity is logged for security or compliance monitoring.
     * @return bool|null
    */
    public function getHasUserAuditLogs(): ?bool {
        $val = $this->getBackingStore()->get('hasUserAuditLogs');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasUserAuditLogs'");
    }

    /**
     * Gets the hasUserDataUpload property value. Indicates whether users can upload or store personal or organizational data within the application.
     * @return bool|null
    */
    public function getHasUserDataUpload(): ?bool {
        $val = $this->getBackingStore()->get('hasUserDataUpload');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasUserDataUpload'");
    }

    /**
     * Gets the hasUserRolesSupport property value. Indicates whether the application supports role-based access control (RBAC).
     * @return bool|null
    */
    public function getHasUserRolesSupport(): ?bool {
        $val = $this->getBackingStore()->get('hasUserRolesSupport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasUserRolesSupport'");
    }

    /**
     * Gets the hasValidCertName property value. Indicates whether the certificate’s common name matches the application’s verified domain.
     * @return bool|null
    */
    public function getHasValidCertName(): ?bool {
        $val = $this->getBackingStore()->get('hasValidCertName');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasValidCertName'");
    }

    /**
     * Gets the httpsSecurityHeaders property value. Lists the HTTP security headers detected for the application (for example, HSTS, X-Frame-Options, or CSP).
     * @return array<string>|null
    */
    public function getHttpsSecurityHeaders(): ?array {
        $val = $this->getBackingStore()->get('httpsSecurityHeaders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'httpsSecurityHeaders'");
    }

    /**
     * Gets the isCertTrusted property value. Indicates whether the application’s certificate is signed by a trusted certificate authority (CA).
     * @return bool|null
    */
    public function getIsCertTrusted(): ?bool {
        $val = $this->getBackingStore()->get('isCertTrusted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCertTrusted'");
    }

    /**
     * Gets the isDrownVulnerable property value. Indicates whether the application is vulnerable to the DROWN (Decrypting RSA with Obsolete and Weakened eNcryption) attack.
     * @return bool|null
    */
    public function getIsDrownVulnerable(): ?bool {
        $val = $this->getBackingStore()->get('isDrownVulnerable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDrownVulnerable'");
    }

    /**
     * Gets the isHeartbleedProof property value. Indicates whether the application’s SSL implementation is protected from the Heartbleed vulnerability.
     * @return bool|null
    */
    public function getIsHeartbleedProof(): ?bool {
        $val = $this->getBackingStore()->get('isHeartbleedProof');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHeartbleedProof'");
    }

    /**
     * Gets the lastBreachDate property value. Specifies the date of the last publicly reported data breach or security incident related to the application, if known.
     * @return Date|null
    */
    public function getLastBreachDate(): ?Date {
        $val = $this->getBackingStore()->get('lastBreachDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastBreachDate'");
    }

    /**
     * Gets the latestValidSSL property value. The latestValidSSL property
     * @return SslVersion|null
    */
    public function getLatestValidSSL(): ?SslVersion {
        $val = $this->getBackingStore()->get('latestValidSSL');
        if (is_null($val) || $val instanceof SslVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'latestValidSSL'");
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
     * Gets the passwordPolicy property value. The passwordPolicy property
     * @return PasswordPolicy|null
    */
    public function getPasswordPolicy(): ?PasswordPolicy {
        $val = $this->getBackingStore()->get('passwordPolicy');
        if (is_null($val) || $val instanceof PasswordPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPolicy'");
    }

    /**
     * Gets the restEncryptionType property value. The restEncryptionType property
     * @return RestEncryptionType|null
    */
    public function getRestEncryptionType(): ?RestEncryptionType {
        $val = $this->getBackingStore()->get('restEncryptionType');
        if (is_null($val) || $val instanceof RestEncryptionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restEncryptionType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('certificate', $this->getCertificate());
        $writer->writeStringValue('domainToCheck', $this->getDomainToCheck());
        $writer->writeBooleanValue('hasAdminAuditTrail', $this->getHasAdminAuditTrail());
        $writer->writeBooleanValue('hasAnonymousUsage', $this->getHasAnonymousUsage());
        $writer->writeBooleanValue('hasDataAuditTrail', $this->getHasDataAuditTrail());
        $writer->writeBooleanValue('hasDataClassification', $this->getHasDataClassification());
        $writer->writeBooleanValue('hasDataEncrypted', $this->getHasDataEncrypted());
        $writer->writeBooleanValue('hasEnforceTransportEnc', $this->getHasEnforceTransportEnc());
        $writer->writeBooleanValue('hasIpRestriction', $this->getHasIpRestriction());
        $writer->writeBooleanValue('hasMFA', $this->getHasMFA());
        $writer->writeBooleanValue('hasPenTest', $this->getHasPenTest());
        $writer->writeBooleanValue('hasRememberPassword', $this->getHasRememberPassword());
        $writer->writeBooleanValue('hasSamlSupport', $this->getHasSamlSupport());
        $writer->writeBooleanValue('hasUserAuditLogs', $this->getHasUserAuditLogs());
        $writer->writeBooleanValue('hasUserDataUpload', $this->getHasUserDataUpload());
        $writer->writeBooleanValue('hasUserRolesSupport', $this->getHasUserRolesSupport());
        $writer->writeBooleanValue('hasValidCertName', $this->getHasValidCertName());
        $writer->writeCollectionOfPrimitiveValues('httpsSecurityHeaders', $this->getHttpsSecurityHeaders());
        $writer->writeBooleanValue('isCertTrusted', $this->getIsCertTrusted());
        $writer->writeBooleanValue('isDrownVulnerable', $this->getIsDrownVulnerable());
        $writer->writeBooleanValue('isHeartbleedProof', $this->getIsHeartbleedProof());
        $writer->writeDateValue('lastBreachDate', $this->getLastBreachDate());
        $writer->writeEnumValue('latestValidSSL', $this->getLatestValidSSL());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('passwordPolicy', $this->getPasswordPolicy());
        $writer->writeEnumValue('restEncryptionType', $this->getRestEncryptionType());
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
     * Sets the certificate property value. The certificate property
     * @param ApplicationRiskFactorCertificateInfo|null $value Value to set for the certificate property.
    */
    public function setCertificate(?ApplicationRiskFactorCertificateInfo $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the domainToCheck property value. Specifies the domain or hostname evaluated during the security assessment.
     * @param string|null $value Value to set for the domainToCheck property.
    */
    public function setDomainToCheck(?string $value): void {
        $this->getBackingStore()->set('domainToCheck', $value);
    }

    /**
     * Sets the hasAdminAuditTrail property value. Indicates whether the application maintains an audit trail for administrative actions.
     * @param bool|null $value Value to set for the hasAdminAuditTrail property.
    */
    public function setHasAdminAuditTrail(?bool $value): void {
        $this->getBackingStore()->set('hasAdminAuditTrail', $value);
    }

    /**
     * Sets the hasAnonymousUsage property value. Indicates whether the application allows anonymous or unauthenticated usage.
     * @param bool|null $value Value to set for the hasAnonymousUsage property.
    */
    public function setHasAnonymousUsage(?bool $value): void {
        $this->getBackingStore()->set('hasAnonymousUsage', $value);
    }

    /**
     * Sets the hasDataAuditTrail property value. Indicates whether the application logs access or modification of customer data for audit purposes.
     * @param bool|null $value Value to set for the hasDataAuditTrail property.
    */
    public function setHasDataAuditTrail(?bool $value): void {
        $this->getBackingStore()->set('hasDataAuditTrail', $value);
    }

    /**
     * Sets the hasDataClassification property value. Indicates whether the application classifies and labels data based on sensitivity levels.
     * @param bool|null $value Value to set for the hasDataClassification property.
    */
    public function setHasDataClassification(?bool $value): void {
        $this->getBackingStore()->set('hasDataClassification', $value);
    }

    /**
     * Sets the hasDataEncrypted property value. Indicates whether data at rest and in transit are encrypted using approved algorithms.
     * @param bool|null $value Value to set for the hasDataEncrypted property.
    */
    public function setHasDataEncrypted(?bool $value): void {
        $this->getBackingStore()->set('hasDataEncrypted', $value);
    }

    /**
     * Sets the hasEnforceTransportEnc property value. Indicates whether HTTPS or equivalent secure transport is enforced for all communication channels.
     * @param bool|null $value Value to set for the hasEnforceTransportEnc property.
    */
    public function setHasEnforceTransportEnc(?bool $value): void {
        $this->getBackingStore()->set('hasEnforceTransportEnc', $value);
    }

    /**
     * Sets the hasIpRestriction property value. Indicates whether access to the application can be restricted based on IP address or network range.
     * @param bool|null $value Value to set for the hasIpRestriction property.
    */
    public function setHasIpRestriction(?bool $value): void {
        $this->getBackingStore()->set('hasIpRestriction', $value);
    }

    /**
     * Sets the hasMFA property value. Indicates whether the application supports or enforces multi-factor authentication (MFA).
     * @param bool|null $value Value to set for the hasMFA property.
    */
    public function setHasMFA(?bool $value): void {
        $this->getBackingStore()->set('hasMFA', $value);
    }

    /**
     * Sets the hasPenTest property value. Indicates whether the application undergoes periodic penetration testing or external security reviews.
     * @param bool|null $value Value to set for the hasPenTest property.
    */
    public function setHasPenTest(?bool $value): void {
        $this->getBackingStore()->set('hasPenTest', $value);
    }

    /**
     * Sets the hasRememberPassword property value. Indicates whether the application supports password-saving functionality, which may pose a security risk.
     * @param bool|null $value Value to set for the hasRememberPassword property.
    */
    public function setHasRememberPassword(?bool $value): void {
        $this->getBackingStore()->set('hasRememberPassword', $value);
    }

    /**
     * Sets the hasSamlSupport property value. Indicates whether the application supports SAML-based single sign-on (SSO).
     * @param bool|null $value Value to set for the hasSamlSupport property.
    */
    public function setHasSamlSupport(?bool $value): void {
        $this->getBackingStore()->set('hasSamlSupport', $value);
    }

    /**
     * Sets the hasUserAuditLogs property value. Indicates whether user activity is logged for security or compliance monitoring.
     * @param bool|null $value Value to set for the hasUserAuditLogs property.
    */
    public function setHasUserAuditLogs(?bool $value): void {
        $this->getBackingStore()->set('hasUserAuditLogs', $value);
    }

    /**
     * Sets the hasUserDataUpload property value. Indicates whether users can upload or store personal or organizational data within the application.
     * @param bool|null $value Value to set for the hasUserDataUpload property.
    */
    public function setHasUserDataUpload(?bool $value): void {
        $this->getBackingStore()->set('hasUserDataUpload', $value);
    }

    /**
     * Sets the hasUserRolesSupport property value. Indicates whether the application supports role-based access control (RBAC).
     * @param bool|null $value Value to set for the hasUserRolesSupport property.
    */
    public function setHasUserRolesSupport(?bool $value): void {
        $this->getBackingStore()->set('hasUserRolesSupport', $value);
    }

    /**
     * Sets the hasValidCertName property value. Indicates whether the certificate’s common name matches the application’s verified domain.
     * @param bool|null $value Value to set for the hasValidCertName property.
    */
    public function setHasValidCertName(?bool $value): void {
        $this->getBackingStore()->set('hasValidCertName', $value);
    }

    /**
     * Sets the httpsSecurityHeaders property value. Lists the HTTP security headers detected for the application (for example, HSTS, X-Frame-Options, or CSP).
     * @param array<string>|null $value Value to set for the httpsSecurityHeaders property.
    */
    public function setHttpsSecurityHeaders(?array $value): void {
        $this->getBackingStore()->set('httpsSecurityHeaders', $value);
    }

    /**
     * Sets the isCertTrusted property value. Indicates whether the application’s certificate is signed by a trusted certificate authority (CA).
     * @param bool|null $value Value to set for the isCertTrusted property.
    */
    public function setIsCertTrusted(?bool $value): void {
        $this->getBackingStore()->set('isCertTrusted', $value);
    }

    /**
     * Sets the isDrownVulnerable property value. Indicates whether the application is vulnerable to the DROWN (Decrypting RSA with Obsolete and Weakened eNcryption) attack.
     * @param bool|null $value Value to set for the isDrownVulnerable property.
    */
    public function setIsDrownVulnerable(?bool $value): void {
        $this->getBackingStore()->set('isDrownVulnerable', $value);
    }

    /**
     * Sets the isHeartbleedProof property value. Indicates whether the application’s SSL implementation is protected from the Heartbleed vulnerability.
     * @param bool|null $value Value to set for the isHeartbleedProof property.
    */
    public function setIsHeartbleedProof(?bool $value): void {
        $this->getBackingStore()->set('isHeartbleedProof', $value);
    }

    /**
     * Sets the lastBreachDate property value. Specifies the date of the last publicly reported data breach or security incident related to the application, if known.
     * @param Date|null $value Value to set for the lastBreachDate property.
    */
    public function setLastBreachDate(?Date $value): void {
        $this->getBackingStore()->set('lastBreachDate', $value);
    }

    /**
     * Sets the latestValidSSL property value. The latestValidSSL property
     * @param SslVersion|null $value Value to set for the latestValidSSL property.
    */
    public function setLatestValidSSL(?SslVersion $value): void {
        $this->getBackingStore()->set('latestValidSSL', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the passwordPolicy property value. The passwordPolicy property
     * @param PasswordPolicy|null $value Value to set for the passwordPolicy property.
    */
    public function setPasswordPolicy(?PasswordPolicy $value): void {
        $this->getBackingStore()->set('passwordPolicy', $value);
    }

    /**
     * Sets the restEncryptionType property value. The restEncryptionType property
     * @param RestEncryptionType|null $value Value to set for the restEncryptionType property.
    */
    public function setRestEncryptionType(?RestEncryptionType $value): void {
        $this->getBackingStore()->set('restEncryptionType', $value);
    }

}
